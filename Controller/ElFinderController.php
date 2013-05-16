<?php

App::uses('ElFinderAppController', 'ElFinder.Controller');

/**
 * ElFinder Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package  Croogo
 * @version  1.0
 * @author   Paul Gardner <phpmagpie@webbedit.co.uk>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class ElFinderController extends ElFinderAppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'ElFinder';
	
/**
 * Models used by the Controller
 *
 * @var array
 * @access public
 */
	public $uses = array();

/**
 * admin_index
 *
 * @return void
 */
	public function admin_index() {
		$this->set('title_for_layout', 'ElFinder Attachments');
	}

}
