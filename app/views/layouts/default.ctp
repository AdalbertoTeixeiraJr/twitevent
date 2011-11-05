<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php __('TwitEvent ::'); ?>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('cake.generic');
			echo $html->css('layout');
			echo $html->css('menu_style');
			echo $html->css('header_menu');
			echo $html->css('header_menu_user');

			echo $scripts_for_layout;
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="header_menu">
					<ul>
						<li><?php echo $html->link("Inicio", array('controller'=>'pages', 'action' => 'home')); ?></li>
						<li><?php echo $html->link("Eventos", array('controller'=>'Eventos', 'action' => 'index')); ?></li>
					</ul>
				</div>
				<div id="header_menu_user">
					<ul>
						<?php $logado = $this->Session->read("Usuario"); ?>
						<?php if (!empty($logado)) { ?>
							<li><?php echo $html->link("Logout", array('controller'=>'usuarios', 'action' => 'logout')); ?></li>
							<li><?php echo $html->link("Meu Calendario", array('controller'=>'usuarios', 'action' => 'calendar', $logado["id"])); ?></li>
							<li><?php echo $html->link($logado["screen_name"], array('controller'=>'usuarios', 'action' => 'view', $logado["id"])); ?></li>
						<?php } ?>
						<?php if (empty($logado)) { ?>
							<li><?php echo $html->link($html->image('logar-pelo-twitter.png'), array('controller'=>'usuarios', 'action' => 'login'), array('escape' => false)); ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			
			<!--<div class="menu bubplastic horizontal gray">
				<ul>
					<li><?php //echo $html->link($html->image('logar-pelo-twitter.png'), array('controller'=>'usuarios', 'action' => 'login'), array('escape' => false, 'target' => '_blank')); ?></li>
					<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Principal</b></span>", array('controller'=>'pages', 'action' => 'display'), array('escape' => false)); ?></span></li>
					<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Login</b></span>", array('controller'=>'Usuarios', 'action' => 'login'), array('escape' => false)); ?></span></li>
					<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Cadastrar</b></span>", array('controller'=>'Usuarios', 'action' => 'add'), array('escape' => false)); ?></span></li>
					<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Eventos</b></span>", array('controller'=>'Eventos', 'action' => 'view'), array('escape' => false)); ?></span></li>
				</ul>
				<br class="clearit" />
			</div>-->
			
			<!--<div id="content">
				<?php
					echo $content_for_layout;
				?>
			</div>-->
			<?php echo $this->Session->flash(); ?>
			<div id="main">
				<?php
					echo $content_for_layout;
				?>
			</div>
			
			<div id="footer">
				Desenvolvedores: Adalberto, Andr&eacute;, Andrey e Filipe
			</div>
		</div>
		
		<!--<?php echo $this->element('sql_dump'); ?>-->
	</body>
</html>