<?php
/**
 * Organizer Model class
 *
 * @package \WPGraphQL\TEC\Events\Model
 * @since   0.0.1
 */

namespace WPGraphQL\TEC\Events\Model;

use GraphQLRelay\Relay;
use WPGraphQL\Model\Post;
/**
 * Class - Organizer
 */
class Organizer extends Post {
	/**
	 * {@inheritDoc}
	 */
	public function setup() {
		remove_action( 'the_post', [ tribe( \Tribe\Events\Views\V2\Hooks::class ), 'manage_sensitive_info' ] );

		parent::setup();
	}

	/**
	 * Initializes the Event object.
	 */
	protected function init() {
		if ( empty( $this->fields ) ) {
			parent::init();

			$fields = [
				'email'      => function() : ?string {
					return tribe_get_organizer_email( $this->data->ID ) ?: null;
				},
				'id'         => function() : ?string {
					return ! empty( $this->data->ID ) ? Relay::toGlobalId( 'tribe_organizer', (string) $this->data->ID ) : null;
				},
				'linkedData' => function() {
					// TEC delivers this as an array with the eventId as the key.
					$value = tribe( 'tec.json-ld.organizer' )->get_data( $this->data->ID )[ $this->data->ID ];
					return $value ?: null;
				},
				'phone'      => function() : ?string {
					return tribe_get_organizer_phone( $this->data->ID ) ?: null;
				},
				'website'    => function() : ?string {
					return tribe_get_organizer_website_url( $this->data->ID ) ?: null;
				},
			];

			$this->fields = array_merge( $this->fields, $fields );
		}
	}
}