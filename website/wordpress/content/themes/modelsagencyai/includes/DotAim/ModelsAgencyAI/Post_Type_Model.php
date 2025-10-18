<?php

namespace DotAim\ModelsAgencyAI;

final class Post_Type_Model extends Base\Post_Type
{

	public $archive_slug = 'models';



	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$supports = [
			'title',
			'editor',
			//'author',
			'thumbnail',
			//'excerpt',
			//'trackbacks',
			//'custom-fields',
			//'comments',
			//'revisions',
			//'page-attributes',
			//'post-formats',
			//'sticky',
			//'publicize',
		];

		if ( current_user_can('edit_others_posts') )
		{
			$supports[] = 'author';
			$supports[] = 'page-attributes';
		}

		// -------------------------------------------------------------------------

		$register_args = [
			'public'				=> true,
			'menu_icon'			=> 'dashicons-groups',
			'menu_position'	=> 3,
			'hierarchical'	=> true,
			'has_archive'		=> $this->archive_slug,
			'can_export'		=> true,
			'supports'			=> $supports,
			'show_ui'				=> $this->admin_area_capability
											 ? current_user_can( $this->admin_area_capability )
											 : true,

			// @notes: not needed here, they are added in taxonomy classes
			//'taxonomies'	=> $this->taxonomies,
		];

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [

			'name_singular'	=> $this->__('Model'),
			'name_plural'		=> $this->__('Models'),

			// -----------------------------------------------------------------------

			'register' => [
				'name'	=> 'model',
				'args'	=> $register_args,
			],

			// -----------------------------------------------------------------------

			'title_column_text' => $this->__('Name'),

			// -----------------------------------------------------------------------

			'thumbnail_column' => in_array( 'thumbnail', $supports ),

			// -----------------------------------------------------------------------

			'enter_title_here' => $this->__('Model name'),

		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

}
// class Post_Type_Model
