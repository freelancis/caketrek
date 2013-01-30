<?php $current_page = strtolower($this->viewPath); ?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav pull-right connect">
				<li class="divider-vertical"></li>
			
				<?php if($me['id'] != 0) :?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $me['username']; ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						
<?php if (Configure::read('debug') > 0): ?>
<li>
<?php echo $this->Html->link(
	'id_user: '.$me['id'].' id_tourist: '.$me['Tourist']['id'],
	array('controller'=>'users','action' => 'view',$me['id'] ));
?>
</li>
<?php endif; ?>
						<li>
							<?php echo $this->Html->link('Profile', array('controller'=>'users','action' => 'profile' )); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Settings', array('controller'=>'users','action' => 'settings' )); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Logout', array('controller'=>'users','action' => 'logout' )); ?>
						</li>
					</ul>
				</li>
				<?php else: ?>
					<li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
					<li class="divider-vertical"></li>
					<li><?php echo $this->Html->link('Signup', array('controller' => 'users', 'action' => 'add')); ?></li>
				
				<?php endif; ?>
		</ul>
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('caketrek', array('controller'=>'pages','action'=>'home'), array('class'=>'brand')); ?>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php if($current_page=="pages"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('PagesController', array('controller' => 'pages', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="users"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('UsersController', array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="badges"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('BadgesController', array('controller' => 'badges', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="tourists"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('TouristsController', array('controller' => 'tourists', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="guides"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('GuidesController', array('controller' => 'guides', 'action' => 'index')); ?>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>