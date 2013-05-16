<?php
$this->set('showActions', false);
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb('ElFinder Attachments', array('controller' => 'el_finder', 'action' => 'index'));
?>

<script type="text/javascript" charset="utf-8">
	$().ready(function() {
		var elf = $('#elfinder').elfinder({
			url : '/ElFinder/elfinder/php/connector.php'  // connector URL (REQUIRED)
		}).elfinder('instance');			
	});
</script>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>