<div class="masterhead">
	<h1>it works !</h1>
</div>

<div class="container">

<?php
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<div class="hero-unit">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php echo $this->Html->link('Utilisateurs',array('controller'=>'users','action'=>'index'), array('class'=>'btn btn-primary btn-large')); ?>
</div>

<?php if (Configure::read('debug') > 0): ?>
<?php echo $this->element('check_config'); ?>
<?php endif; ?>


</div><!--.container-->