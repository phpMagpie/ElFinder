<?php

CroogoNav::add('media.children.attachments', array(
	'title' => __d('croogo', 'Attachments'),
	'url' => array(
		'admin' => true,
		'plugin' => 'el_finder',
		'controller' => 'el_finder',
		'action' => 'index',
	),
));

Croogo::hookHelper('ElFinder', 'ElFinder.ElFinder');
