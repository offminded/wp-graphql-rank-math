<?php
/**
 * The Schema.org WebSite object
 *
 * @package WPGraphQL\RankMath\Type\WPObject
 */

namespace WPGraphQL\RankMath\Type\WPObject\JsonLd;

use WPGraphQL\RankMath\Vendor\AxeWP\GraphQL\Abstracts\ObjectType;
use WPGraphQL\RankMath\Type\WPInterface\JsonLd\CreativeWork;

/**
 * Class - WebSite
 */
class WebSite extends ObjectType {

	/**
	 * {@inheritDoc}
	 */
	protected static function type_name() : string {
		return 'JsonLdWebSite';
	}

	/**
	 * {@inheritDoc}
	 */
	protected static function get_type_config() : array {
		$config = parent::get_type_config();

		$config['eagerlyLoadType'] = true;

		return $config;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_description() : string {
		return __( 'The Schema.org WebSite .', 'wp-graphql-rank-math' );
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_interfaces() : array {
		return [
			CreativeWork::get_type_name(),
		];
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		// This type doesnt have its own fields, it inherits from the CreativeWork type.
		return CreativeWork::get_fields();
	}
}
