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
 * Actions
 *
 * Format: ControllerName/action_name => settings
 *
 * @var array
 */
	public $actions = array();

/**
 * beforeRender
 *
 * @param string $viewFile
 * @return void
 */
	public function beforeRender($viewFile) {
		if (is_array(Configure::read('Wysiwyg.actions'))) {
			$this->actions = Hash::merge($this->actions, Configure::read('Wysiwyg.actions'));
		}
		$action = Inflector::camelize($this->params['controller']) . '/' . $this->params['action'];
		if ($action === 'ElFinder/admin_index') {
  		$this->Html->css(
  		  array(
  		    'http://code.jquery.com/ui/1.8.18/themes/smoothness/jquery-ui.css', 
  		    '/ElFinder/elfinder/css/elfinder.min'
  		  ),
  		  null,
  		  array('inline' => false)
  		);
  		$this->Html->script(
  		  array(
  		    '/ElFinder/elfinder/js/elfinder.min',
  		  ),
  		  array('inline' => false)
  		);
		} elseif (Configure::read('Writing.wysiwyg') && isset($this->actions[$action])) {
		  $this->_CroogoPlugin = new CroogoPlugin();
		  if ($this->_CroogoPlugin->isActive('ckeditor')) {
	  	  Configure::write('Js.Wysiwyg.attachmentsPath', Router::url('/ElFinder/elfinder/elfinder-ckeditor.html'));
		  } elseif ($this->_CroogoPlugin->isActive('tinymce')) {
		    Configure::write('Js.Wysiwyg.attachmentsPath', Router::url('/ElFinder/elfinder/elfinder-tinymce.html'));
		  }
		}
	}
}
