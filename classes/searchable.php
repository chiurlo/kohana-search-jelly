<?php defined('SYSPATH') or die('no direct script access');

abstract class Kohana_Jelly_Searchable extends Jelly {

  	public function get_identifier()
	{
		return $this->primary_val();
	}

	public function get_type()
	{
		return $this->_meta->model();
	}

	public function get_unique_identifier()
	{
		return $this->_meta->model().'_'.$this->get_identifier();
	}

}