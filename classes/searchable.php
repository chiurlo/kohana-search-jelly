<?php defined('SYSPATH') or die('no direct script access');

abstract class Kohana_Jelly_Searchable extends Jelly {

  	public function get_identifier()
	{
		return $this->primary_val();
	}

	public function get_type()
	{
		return $this->object_name();
	}

	public function get_unique_identifier()
	{
		return $this->object_name().'_'.$this->get_identifier();
	}

}