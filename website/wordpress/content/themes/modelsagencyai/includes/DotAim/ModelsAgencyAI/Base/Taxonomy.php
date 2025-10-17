<?php

namespace DotAim\ModelsAgencyAI\Base;

abstract class Taxonomy extends \DotAim\Base\Custom_Taxonomy
{

	protected $post_types;


	public function __construct( $core, $post_types = [] )
	{

		$this->post_types = $post_types;

		// -------------------------------------------------------------------------

		parent::__construct( $core );

	}
	// __construct()

}
// class Taxonomy
