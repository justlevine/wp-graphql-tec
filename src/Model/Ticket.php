<?php
/**
 * Ticket Model class
 *
 * @package \WPGraphQL\TEC\Models
 * @since   0.0.1
 */

namespace WPGraphQL\TEC\Model;

use Exception;
use GraphQLRelay\Relay;
use Tribe__Tickets__Tickets;
use Tribe__Tickets__Ticket_Object;
use WP_Post;
use WPGraphQL\Model\Post;
use WPGraphQL\TEC\Utils\Utils;

/**
 * Class - Ticket
 */
class Ticket extends Post {
	/**
	 * The Ticker provider to use.
	 *
	 * @var Tribe__Tickets__Tickets|false $provider the ORM provider.
	 */
	public $provider;

	/**
	 * The Ticket Data object.
	 *
	 * @var Tribe__Tickets__Ticket_Object
	 */
	public $ticket_data;

	/**
	 * The attached event id.
	 *
	 * @var int
	 */
	public int $event_id;

	/**
	 * Ticket constructor.
	 *
	 * @param WP_Post $post the post object.
	 *
	 * @throws Exception .
	 */
	public function __construct( WP_Post $post ) {
		parent::__construct( $post );

		if ( ! isset( $this->data->post_type ) || ! isset( $this->data->ID ) || ! in_array( $this->data->post_type, array_keys( Utils::get_et_types() ), true ) ) {
			throw new Exception( __( 'The object returned is not a Ticket.', 'wp-graphql-tec' ) );
		}

		// Restore the excerpt.
		$this->data->post_excerpt = $post->post_excerpt ?? '';

		$this->provider = tribe_tickets_get_ticket_provider( $this->data->ID );

		$this->event_id = (int) tribe_tickets_get_event_ids( $this->data->ID )[0];

		$ticket_data = false !== $this->provider ? $this->provider->get_ticket( $this->event_id, $this->data->ID ) : null;

		if ( empty( $ticket_data ) ) {
			throw new Exception( __( 'The object returned does not have any valid ticket data associated with it', 'wp-graphql-tec' ) );
		} else {
			$this->ticket_data = $ticket_data;
		}
	}

	/**
	 * Initializes the Ticket object.
	 */
	protected function init() {
		if ( empty( $this->fields ) ) {
			// Grab exceprt for future use.
			parent::init();
			$fields = [
				'capacity'        => fn() : ?int => $this->ticket_data->capacity ?: null,
				'description'     => fn() : ?string => $this->ticket_data->description ?: null,
				'endDate'         => fn() : ?string => $this->ticket_data->end_date ?: null,
				'endTime'         => fn() : ?string => $this->ticket_data->end_time ?: null,
				'eventId'         => fn() : ?int => $this->ticket_data->get_event_id(),
				'iac'             => fn() : ?string => $this->ticket_data->iac ?: null,
				'id'              => fn() : ?string => ! empty( $this->data->ID ) ? Relay::toGlobalId( $this->data->post_type, (string) $this->data->ID ) : null,
				'isManagingStock' => fn() : bool => $this->ticket_data->manage_stock(),
				'price'           => fn() : ?float => $this->ticket_data->price ?? null,
				'provider'        => fn() => $this->provider,
				'providerClass'   => fn() : ?string => $this->ticket_data->provider_class ?? null,
				'showDescription' => fn() : bool => (bool) $this->ticket_data->show_description,
				'quantitySold'    => fn() : int => $this->ticket_data->qty_sold(),
				'startDate'       => fn() : ?string => $this->ticket_data->start_date ?: null,
				'startTime'       => fn() : ?string => $this->ticket_data->start_time ?: null,
				'stock'           => function() : ?int {
					$value = $this->ticket_data->stock();
					// Unlimited/unmanaged stock is an empty string.
					return '' !== $value ? (int) $value : null;
				},
				'stockMode'       => fn() : ?string => $this->ticket_data->global_stock_mode() ?: null,
				'type'            => fn() : string => $this->data->post_type,
			];

			$this->fields = array_merge( $this->fields, $fields );
		}
	}
}
