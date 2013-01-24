<div class="row">
	<div class="span4">
		<h2>Security</h2>
		<?php Debugger::checkSecurityKeys(); ?>
	</div>
	<div class="span4">
		<h2>URL Rewriting</h2>
		<p id="url-rewriting-warning" class="alert alert-error">
			<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
			1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/advanced-installation.html#apache-and-mod-rewrite-and-htaccess">Help me configure it</a>
			2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" >I don't / can't use URL rewriting</a>
		</p>
	</div>
	<div class="span4">
		<h2>PHP Version</h2>
		<?php
			if (version_compare(PHP_VERSION, '5.2.8', '>=')):
				echo '<span class="alert success">';
					echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
				echo '</span>';
			else:
				echo '<span class="alert">';
					echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
				echo '</span>';
			endif;
		?>
		
	</div>
	<div class="span4">
		<h2>Write permissions</h2>
		<?php
			if (is_writable(TMP)):
				echo '<div class="notice success">';
					echo __d('cake_dev', 'Your tmp directory is writable.');
				echo '</div>';
			else:
				echo '<div class="notice">';
					echo __d('cake_dev', 'Your tmp directory is NOT writable.');
				echo '</div>';
			endif;
		?>
	</div>
	<div class="span4">
		<h2>Cache</h2>
		<div>
			<?php
				$settings = Cache::settings();
				if (!empty($settings)):
					echo '<div class="notice success">';
						echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit APP/Config/core.php ', '<em>'. $settings['engine'] . 'Engine</em>');
					echo '</div>';
				else:
					echo '<div class="notice">';
						echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in APP/Config/core.php');
					echo '</div>';
				endif;
			?>
		</div>
	</div>
	<div class="span4">
		<h2>Database</h2>

		<?php
			$filePresent = null;
			if (file_exists(APP . 'Config' . DS . 'database.php')):
				echo '<div class="notice success">';
					echo __d('cake_dev', 'Your database configuration file is present.');
					$filePresent = true;
				echo '</div>';
			else:
				echo '<div class="notice">';
					echo __d('cake_dev', 'Your database configuration file is NOT present.');
					echo '<br/>';
					echo __d('cake_dev', 'Rename APP/Config/database.php.default to APP/Config/database.php');
				echo '</div>';
			endif;
		?>

<?php
		if (isset($filePresent)):
			App::uses('ConnectionManager', 'Model');
			try {
				$connected = ConnectionManager::getDataSource('default');
			} catch (Exception $connectionError) {
				$connected = false;
			}
			if ($connected && $connected->isConnected()):
				echo '<div class="notice success">';
		 			echo __d('cake_dev', 'Cake is able to connect to the database.');
				echo '</div>';
			else:
				echo '<div class="notice">';
					echo __d('cake_dev', 'Cake is NOT able to connect to the database.');
					echo '<br /><br />';
					echo $connectionError->getMessage();
				echo '</div>';
			endif;
		endif;
?>
	</div>
	<div class="span4">
		<h2>PCRE</h2>
		<?php
			App::uses('Validation', 'Utility');
			if (!Validation::alphaNumeric('cakephp')) {
				echo '<p><div class="notice">';
					echo __d('cake_dev', 'PCRE has not been compiled with Unicode support.');
					echo '<br/>';
					echo __d('cake_dev', 'Recompile PCRE with Unicode support by adding <code>--enable-unicode-properties</code> when configuring');
				echo '</div></p>';
			}
		?>
	</div>
</div>