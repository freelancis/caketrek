<?php $this->start('header'); ?>
	<h1>it works !</h1>
<?php $this->end(); ?>


<?php
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<div class="hero-unit">
	<p>Welcome to this pre-packaged CakePHP install.</p>
</div>

<div class="row">
	<div class="span9">
		<h2>Understand <small>what's inside</small></h2>
		
		
		<h2>Code stuffs <small>using CakePHP</small></h2>
		<p>You will find some </p>
		
		
		<h2>Use Bootstrap <small>in your Controller</small></h2>
		<p>Bootstrap has been installed in <code>/app/View/Themed/Bootstrap</code>, 
		To activate it in a controller, add <code>public $theme = "Bootstrap";</code> to your working Controller.</p>
<pre>
// in /app/PagesController.php
class PagesController extends AppController {
	public $theme = "Bootstrap";
</pre>
	<p>Use Bootstrap's conventions for naming HTML elements. If you are not a Twitter Bootstrap's expert you can examine <code>/app/View/Users/index.ctp</code> an <?php echo $this->Html->link('read the documentation',array('controllers'=>'pages','action'=>'scaffolding'))?></p>

	</div>
	<div class="span3">
		
		<h2>Documentation</h2>

		<ul class="nav nav-list well">
			<li class="nav-header">
				CakePHP
			</li>
			<li><a href="http://cakefoundation.org/"><?php echo __d('cake_dev', 'Cake Software Foundation'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'Promoting development related to CakePHP'); ?></li></ul></li>
			<li><a href="http://www.cakephp.org"><?php echo __d('cake_dev', 'CakePHP'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'The Rapid Development Framework'); ?></li></ul></li>
			<li><a href="http://book.cakephp.org"><?php echo __d('cake_dev', 'CakePHP Documentation'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'Your Rapid Development Cookbook'); ?></li></ul></li>
			<li><a href="http://api20.cakephp.org"><?php echo __d('cake_dev', 'CakePHP API'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'Quick Reference'); ?></li></ul></li>
			<li><a href="http://bakery.cakephp.org"><?php echo __d('cake_dev', 'The Bakery'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'Everything CakePHP'); ?></li></ul></li>
			<li><a href="http://live.cakephp.org"><?php echo __d('cake_dev', 'The Show'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'The Show is a live and archived internet radio broadcast CakePHP-related topics and answer questions live via IRC, Skype, and telephone.'); ?></li></ul></li>
			<li><a href="http://groups.google.com/group/cake-php"><?php echo __d('cake_dev', 'CakePHP Google Group'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'Community mailing list'); ?></li></ul></li>
			<li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
			<ul><li><?php echo __d('cake_dev', 'Live chat about CakePHP'); ?></li></ul></li>
			<li><a href="http://github.com/cakephp/"><?php echo __d('cake_dev', 'CakePHP Code'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'For the Development of CakePHP Git repository, Downloads'); ?></li></ul></li>
			<li><a href="http://cakephp.lighthouseapp.com/"><?php echo __d('cake_dev', 'CakePHP Lighthouse'); ?> </a>
			<ul><li><?php echo __d('cake_dev', 'CakePHP Tickets, Wiki pages, Roadmap'); ?></li></ul></li>
			<li class="nav-header">
				Bootstrap
			</li>
			<li>
				<?php echo $this->Html->link('Scaffolding', array('controller' => 'pages', 'action' => 'scaffolding')); ?>
			</li>
			<li>
				<?php echo $this->Html->link('Base CSS', array('controller' => 'pages', 'action' => 'base_css')); ?>
			</li>
			<li>
				<?php echo $this->Html->link('Components', array('controller' => 'pages', 'action' => 'components')); ?>
			</li>
			<li>
				<?php echo $this->Html->link('Javascript plugins', array('controller' => 'pages', 'action' => 'javascript')); ?>
			</li>
		</ul>
		
	</div>
</div>


<?php if (Configure::read('debug') > 0): ?>
<hr>
<?php echo $this->element('check_config'); ?>
<?php endif; ?>
