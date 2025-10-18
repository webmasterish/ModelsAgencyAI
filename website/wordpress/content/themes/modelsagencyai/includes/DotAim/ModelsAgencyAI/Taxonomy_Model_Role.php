<?php

namespace DotAim\ModelsAgencyAI;

final class Taxonomy_Model_Role extends Base\Taxonomy
{

	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [

			'name_singular'	=> $this->__('Model Role'),
			'name_plural'		=> $this->__('Model Roles'),

			// -----------------------------------------------------------------------

			'register' => [
				'name'	=> 'model_role',
				'types'	=> ['model'],
				'args'	=> [
					'public'						=> true,
					'show_ui'						=> true,
					'show_in_nav_menus'	=> true,
					'show_tagcloud'			=> true,
					'show_admin_column'	=> true,
					'hierarchical'			=> false,
					'labels'						=> ['menu_name' => $this->__('Roles')],
				],
			],

		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

}
// class Taxonomy_Model_Role
