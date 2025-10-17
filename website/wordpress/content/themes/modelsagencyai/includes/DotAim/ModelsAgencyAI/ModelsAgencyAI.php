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

		new Taxonomy_Model_Category( $this->core );
		new Taxonomy_Model_Part( $this->core );

	}
	// init()

}
// class ModelsAgencyAI
