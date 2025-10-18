<?php

namespace DotAim\ModelsAgencyAI\Admin\Meta_Boxes;

final class Model_Related_Posts extends \DotAim\Base\RW_Meta_Box
{

	/* ===========================================================================
	 * ---------------------------------------------------------------------------
	 * SETTINGS - START
	 * ---------------------------------------------------------------------------
	 * ======================================================================== */

	/**
	 * @internal
	 */
	public function settings()
	{

		if ( isset( $this->{__FUNCTION__} ) )
		{
			return $this->{__FUNCTION__};
		}

		// -------------------------------------------------------------------------

		$related_post_types = [
			'model' => $this->__('Models'),
		];

		$related_post_types_count = count( $related_post_types );

		// -------------------------------------------------------------------------

		$fields = [];
		$count	= 0;

		foreach ( $related_post_types as $post_type => $label )
		{
			/*
			$fields[] = [
				'type'	=> 'heading',
				'name'	=> sprintf( $this->__('Related %s'), $label ),
				//'desc'	=> $this->__('...'),
			];
			*/

			// -----------------------------------------------------------------------

			$fields[ $post_type ] = [
				'type'				=> 'post',
				'post_type'		=> $post_type,
				'field_type'	=> 'select_advanced',
				'multiple'		=> true,
				//'select_all_none'=> true,
				'placeholder'	=> sprintf( $this->__('Select %s'), $label ),
				'name'				=> sprintf( $this->__('Associated %s'), $label ),
				'desc'				=> sprintf( $this->__('Here you can connect %s to this model.'), $label ),
			];

			// -----------------------------------------------------------------------

			$count++;

			if ( $count < $related_post_types_count )
			{
				$fields[] = ['type' => 'divider'];
			}
		}

		// -------------------------------------------------------------------------

		$this->{__FUNCTION__} = [
			'title'				=> $this->__('Related Posts'),
			'post_types'	=> ['model'],
			'fields'			=> $fields,
		];

		// -------------------------------------------------------------------------

		return $this->{__FUNCTION__};

	}
	// settings()

	/* ===========================================================================
	 * ---------------------------------------------------------------------------
	 * SETTINGS - END
	 * ---------------------------------------------------------------------------
	 * ======================================================================== */

}
// class Model_Related_Posts
