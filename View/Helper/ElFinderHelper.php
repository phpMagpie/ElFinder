<?php

App::uses('AppHelper', 'View/Helper');

/**
 * ElFinder Helper
 *
 * PHP version 5
 *
 * @category ElFinder.Helper
 * @package  ElFinder.View.Helper
 * @version  1.5
 * @author   Paul Gardner <phpmagpie@webbedit.co.uk>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class ElFinderHelper extends AppHelper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
		'Js',
	);

/**
 * beforeRender
 *
 * @param string $viewFile
 * @return void
 */
	public function beforeRender($viewFile) {
  	$this->Html->css(
  	  array(
  	    'http://code.jquery.com/ui/1.8.18/themes/smoothness/jquery-ui.css', 
  	    '/ElFinder/elfinder/css/elfinder.min'),
  	  null,
  	  array('inline' => false)
  	);
		$this->Html->script(
	    array(
	      '/ElFinder/elfinder/js/elfinder.min',
	    ),
	    array('inline' => false)
	  );
	}
}
