<?php 
	
	$current_page = $this->params['action'];

?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php echo $this->Html->link('caketrek', array('controller'=>'pages','action'=>'home'), array('class'=>'brand')); ?>
			<div class="nav-collapse">
				<ul class="nav">
					<li <?php if(strtolower($this->viewPath)=="pages"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('PagesController', array('controller' => 'pages', 'action' => 'index')); ?>
					</li>
					<li <?php if(strtolower($this->viewPath)=="users"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('UsersController', array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li <?php if(strtolower($this->viewPath)=="badges"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('BadgesController', array('controller' => 'badges', 'action' => 'index')); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>