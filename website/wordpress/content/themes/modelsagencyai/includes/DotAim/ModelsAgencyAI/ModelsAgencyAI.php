<?php

namespace DotAim\ModelsAgencyAI;

final class ModelsAgencyAI extends \DotAim\Base\Singleton
{

	public $meta_prefix;
	public $post_types = [];



	public function init()
	{

		$this->meta_prefix = $this->prefix; // dotaim_modelsagencyai_

	}
	// init()

}
// class ModelsAgencyAI
