<?php

namespace DotAim\ModelsAgencyAI;

final class ModelsAgencyAI extends \DotAim\Base\Singleton
{

	public $meta_prefix;
	public $post_types = [];



	public function init()
	{

		$this->meta_prefix = $this->prefix; // dotaim_modelsagencyai_

		// -------------------------------------------------------------------------

		$this->post_types = [
			'model' => new Post_Type_Model( $this, $this->core ),
		];

		// -------------------------------------------------------------------------

		// common with all model categories
		new Taxonomy_Model_Category( $this->core );
		new Taxonomy_Model_Part( $this->core );
		new Taxonomy_Model_Use_Case( $this->core );
		new Taxonomy_Model_Tag( $this->core );

		// mainly used for human + fictional humanoid characters
		// but could also be applied to animals
		new Taxonomy_Model_Gender( $this->core );
		new Taxonomy_Model_Age_Range( $this->core );
		new Taxonomy_Model_Body_Type( $this->core );
		new Taxonomy_Model_Hair_Color( $this->core );
		new Taxonomy_Model_Hair_Style( $this->core );
		new Taxonomy_Model_Role( $this->core );
		new Taxonomy_Model_Clothing( $this->core );
		new Taxonomy_Model_Expression( $this->core );
		new Taxonomy_Model_Pose( $this->core );

		// -------------------------------------------------------------------------

		$this->Admin();

	}
	// init()



	public function Admin()
	{

		static $instance;

		if ( ! isset( $instance ) )
		{
			$instance = new Admin\Admin( $this->core );
		}

		// -------------------------------------------------------------------------

		return $instance;

	}
	// Admin()

}
// class ModelsAgencyAI
