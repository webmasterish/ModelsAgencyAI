<?php

namespace DotAim\ModelsAgencyAI;

final class Taxonomy_Model_Use_Case extends Base\Taxonomy
{

	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [

			'name_singular'	=> $this->__('Model Use Case'),
			'name_plural'		=> $this->__('Model Use Cases'),

			// -----------------------------------------------------------------------

			'register' => [
				'name'	=> 'model_use_case',
				'types'	=> ['model'],
				'args'	=> [
					'public'						=> true,
					'show_ui'						=> true,
					'show_in_nav_menus'	=> true,
					'show_tagcloud'			=> true,
					'show_admin_column'	=> true,
					'hierarchical'			=> false,
					'labels'						=> ['menu_name' => $this->__('Use Cases')],
				],
			],

		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

}
// class Taxonomy_Model_Use_Case
