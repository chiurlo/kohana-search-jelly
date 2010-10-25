<?php defined('SYSPATH') or die('no direct script access');

/**
 * Implementation of Jelly interface for Jelly Models
 *
 * @package		Kohana Search
 * @author		Brandon Summers (brandon@evolutionpixels.com)
 * @author		Howie Weiner (howie@microbubble.net)
 * @author		Alison Cheeseman (admin@birdhive.com)
 * @copyright	(c) 2010, Alison Cheeseman
 * @copyright	(c) 2010, Brandon Summers
 * @copyright	(c) 2009, Mirobubble Web Design
 * @license		http://opensource.org/licenses/mit-license.php MIT License
 */
 
abstract class Kohana_Jelly_Searchable extends Jelly_Model {

  	public function get_identifier()
	{
		return $this->id();
	}

	public function get_type()
	{
		return $this->name();
	}

	public function get_unique_identifier()
	{
		return $this->name().'_'.$this->get_identifier();
	}

}