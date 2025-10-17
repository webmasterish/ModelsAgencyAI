<?php

namespace DotAim\ModelsAgencyAI\Base;

use DotAim\F;

abstract class Post_Type extends \DotAim\Base\Custom_Post_Type
{

	protected $ModelsAgencyAI;
	protected $admin_area_capability = 'edit_others_posts';
	protected $meta_box_prefix;
	protected $ajax_prefix;


	public function __construct( $ModelsAgencyAI, $core, $related_post_types = [] )
	{

		$this->ModelsAgencyAI	= $ModelsAgencyAI;

		// -------------------------------------------------------------------------

		parent::__construct( $core, $related_post_types );

	}
	// __construct()


	public function init_action()
	{

		if ( false === parent::init_action() )
		{
			return false;
		}

		// -------------------------------------------------------------------------

		$this->meta_box_prefix = "{$this->ModelsAgencyAI->meta_prefix}{$this->name}_meta_box_";

		// -------------------------------------------------------------------------

		if ( ! isset( $this->ajax_prefix ) )
		{
			$this->ajax_prefix = "{$this->ModelsAgencyAI->prefix}{$this->name}_ajax_";
		}

	}
	// init_action()


	public function meta_value( $key, $post_id = null, $single = true, $args = [] )
	{

		if ( ! F::starts_with( $key, $this->meta_box_prefix ) )
		{
			$key = "{$this->meta_box_prefix}{$key}";
		}

		// -------------------------------------------------------------------------

		return $this->Post()->meta_value( $key, $args, $post_id, $single );

	}
	// meta_value()


	public function manage_edit_columns( $columns )
	{

		if ( $title_column_text = $this->setting('title_column_text') )
		{
			$columns['title'] = $title_column_text;
		}

		// -------------------------------------------------------------------------

		if ( $position = $this->setting('thumbnail_column') )
		{
			$new_columns = [
				"{$this->core->prefix}post_thumbnail" => sprintf(
					'<span class="dotaim_column_icon dashicons-before dashicons-format-image" title="%1$s"><span class="screen-reader-text">%1$s</span></span>',
					$this->__('Thumbnail')
				),
			];

			$columns = F::array_insert_at_position( $columns, $new_columns, absint( $position ) );
		}

		// -------------------------------------------------------------------------

		$new_columns = [];

		// -------------------------------------------------------------------------

		if ( $taxonomies = get_object_taxonomies( $this->name, 'objects' ) )
		{
			foreach ( $taxonomies as $taxonomy => $taxonomy_obj )
			{
				if ( ! empty( $taxonomy_obj->show_admin_column ) )
				{
					$new_columns["taxonomy-{$taxonomy}"] = $taxonomy_obj->labels->menu_name;
				}
			}
		}

		// -------------------------------------------------------------------------

		if ( ! empty( $this->related_post_types ) )
		{
			foreach ( $this->related_post_types as $related_post_type )
			{
				if ( $label_name = $this->get_post_type_label( $related_post_type, 'name' ) )
				{
					$col_key = "{$this->core->prefix}{$this->name}_related_{$related_post_type}";

					$new_columns[ $col_key ] = $label_name;
				}
			}
		}

		// -------------------------------------------------------------------------

		if ( empty( $new_columns ) )
		{
			return $columns;
		}

		// -------------------------------------------------------------------------

		$position = $this->setting('thumbnail_column') ? 3 : 2;

		// -------------------------------------------------------------------------

		return F::array_insert_at_position( $columns, $new_columns, $position );

	}
	// manage_edit_columns()

}
// class Post_Type
