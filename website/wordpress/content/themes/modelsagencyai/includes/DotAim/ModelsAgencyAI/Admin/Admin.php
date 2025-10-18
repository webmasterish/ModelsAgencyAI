<?php

namespace DotAim\ModelsAgencyAI\Admin;

final class Admin extends \DotAim\Base\Singleton
{

	public function init()
	{

		new Meta_Boxes\Model_Related_Posts( $this->core );

	}
	// init()

}
// class Admin
