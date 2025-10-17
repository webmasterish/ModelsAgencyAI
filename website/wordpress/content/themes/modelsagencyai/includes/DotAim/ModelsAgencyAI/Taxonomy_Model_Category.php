<?php

namespace DotAim\ModelsAgencyAI;

final class Taxonomy_Model_Category extends Base\Taxonomy
{

	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [

			'name_singular'	=> $this->__('Model Category'),
			'name_plural'		=> $this->__('Model Categories'),

			// -----------------------------------------------------------------------

			'register' => [
				'name'	=> 'model_category',
				'types'	=> ['model'],
				'args'	=> [
					'public'						=> true,
					'show_ui'						=> true,
					'show_in_nav_menus'	=> true,
					'show_tagcloud'			=> true,
					'show_admin_column'	=> true,
					'hierarchical'			=> true,
					'labels'						=> ['menu_name' => $this->__('Categories')],
				],
			],

		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

}
// class Taxonomy_Model_Category
