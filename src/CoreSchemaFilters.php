<?php
/**
 * Adds filters that modify core schema.
 *
 * @package \WPGraphQL\TEC
 * @since   0.0.1
 */

namespace WPGraphQL\TEC;

use Tribe__Events__Main as Main;
use WPGraphQL\AppContext;
use WPGraphQL\TEC\Data\Factory;
use WPGraphQL\TEC\Data\Loader\EventLoader;
use WPGraphQL\TEC\Data\Loader\OrganizerLoader;
use WPGraphQL\TEC\Data\Loader\VenueLoader;
use WPGraphQL\TEC\Interfaces\Hookable;

/**
 * Class - CoreSchemaFilters
 */
class CoreSchemaFilters implements Hookable {
	/**
	 * {@inheritdoc}
	 */
	public static function register_hooks() : void {
		// Registers post types.
		add_action( 'register_post_type_args', [ __CLASS__, 'register_post_types' ], 10, 2 );

		// Registers taxonomies.
		add_action( 'register_taxonomy_args', [ __CLASS__, 'register_taxonomies' ], 10, 2 );

		// Add data-loaders to AppContext.
		add_filter( 'graphql_data_loaders', [ __CLASS__, 'register_data_loaders' ], 10, 2 );

		add_filter( 'graphql_dataloader_pre_get_model', [ 'WPGraphQL\TEC\Data\Factory', 'set_models_for_dataloaders' ], 10, 2 );

		// Add node resolvers.
		add_filter( 'graphql_resolve_node_type', [ 'WPGraphQL\TEC\Data\Factory', 'resolve_node_type' ], 10, 4 );

		add_filter( 'graphql_wp_object_type_config', [ 'WPGraphQL\TEC\Data\Factory', 'register_post_resolvers' ], );
		add_filter( 'graphql_wp_connection_type_config', [ 'WPGraphQL\TEC\Data\Factory', 'register_connection_resolvers' ], );
	}

	/**
	 * Register TEC post types to GraphQL schema
	 *
	 * @param array  $args      - post-type args.
	 * @param string $post_type - post-type slug.
	 */
	public static function register_post_types( array $args, string $post_type ): array {
		switch ( $post_type ) {
			case Main::POSTTYPE:
				$args['show_in_graphql']     = true;
				$args['graphql_single_name'] = 'Event';
				$args['graphql_plural_name'] = 'Events';
				break;
			case Main::ORGANIZER_POST_TYPE:
				$args['show_in_graphql']     = true;
				$args['graphql_single_name'] = 'Organizer';
				$args['graphql_plural_name'] = 'Organizers';

				break;
			case Main::VENUE_POST_TYPE:
				$args['show_in_graphql']     = true;
				$args['graphql_single_name'] = 'Venue';
				$args['graphql_plural_name'] = 'Venues';
		}

		return $args;
	}

	/**
	 * Register TEC taxonomies to GraphQL schema
	 *
	 * @param array  $args     - taxonomy args.
	 * @param string $taxonomy - taxonomy slug.
	 */
	public static function register_taxonomies( array $args, string $taxonomy ) : array {
		if ( Main::TAXONOMY === $taxonomy ) {
			$args['show_in_graphql']     = true;
			$args['graphql_single_name'] = 'EventCategory';
			$args['graphql_plural_name'] = 'EventCategories';
		}

		return $args;
	}

	/**
	 * Registers data-loaders to be used when resolving TEC-related GraphQL types.
	 *
	 * @param array      $loaders - assigned loaders.
	 * @param AppContext $context - AppContext instance.
	 */
	public static function register_data_loaders( array $loaders, AppContext $context ) : array {
		$event_loader            = new EventLoader( $context );
		$loaders['tribe_events'] = &$event_loader;

		return $loaders;
	}
}
