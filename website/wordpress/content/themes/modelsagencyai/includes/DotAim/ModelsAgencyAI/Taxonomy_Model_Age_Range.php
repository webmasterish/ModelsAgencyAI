<?php

namespace DotAim\ModelsAgencyAI;

final class Taxonomy_Model_Age_Range extends Base\Taxonomy
{

	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [

			'name_singular'	=> $this->__('Model Age Range'),
			'name_plural'		=> $this->__('Model Age Ranges'),

			// -----------------------------------------------------------------------

			'register' => [
				'name'	=> 'model_age_range',
				'types'	=> ['model'],
				'args'	=> [
					'public'						=> true,
					'show_ui'						=> true,
					'show_in_nav_menus'	=> true,
					'show_tagcloud'			=> true,
					'show_admin_column'	=> true,
					'hierarchical'			=> false,
					'labels'						=> ['menu_name' => $this->__('Age Ranges')],
				],
			],

		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

}
// class Taxonomy_Model_Age_Range
