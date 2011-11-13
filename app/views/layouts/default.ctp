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
			<div id="header">	</div>
			<div class="menu bubplastic horizontal gray">
				<?php $logado = $this->Session->read("Usuario"); ?>
				<?php if (empty($logado)) { ?>
					<ul>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Inicio</b></span>", array('controller'=>'pages', 'action' => 'home'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Eventos</b></span>", array('controller'=>'Eventos', 'action' => 'index'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Sorteios</b></span>", array('controller'=>'Eventos', 'action' => 'sorteios'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Fale Conosco</b></span>", array('controller'=>'pages', 'action' => 'fale'), array('escape' => false)); ?></span></li>
					</ul>					
				<?php } ?>
				<?php if (!empty($logado)) { ?>
					<ul>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Inicio</b></span>", array('controller'=>'pages', 'action' => 'home'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Perfil</b></span>", array('controller' => 'Usuarios', 'action' => 'view'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Meu Calendario</b></span>", array('controller' => 'Usuarios', 'action' => 'calendar', $logado['id']), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Adicionar Evento</b></span>", array('controller' => 'Eventos', 'action' => 'add', $logado['id']), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Sorteios</b></span>", array('controller'=>'Eventos', 'action' => 'sorteios'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Aniversariantes</b></span>", array('controller'=>'Eventos', 'action' => 'index'), array('escape' => false)); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Deletar Perfil</b></span>", array('action' => 'delete', $logado['id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $logado['id'])); ?></span></li>
						<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Fale Conosco</b></span>", array('controller'=>'pages', 'action' => 'fale'), array('escape' => false)); ?></span></li>
					</ul>
				<?php } ?>
				<br class="clearit" />
			</div>
			
			<div id="container">
				<div id="destaque">
					<div id="header_menu_user">
						<ul>
							<?php if (empty($logado)) { ?>
								<li><?php echo $html->link($html->image('logar-pelo-twitter.png'), array('controller'=>'usuarios', 'action' => 'login'), array('escape' => false)); ?></li>
							<?php } ?>
							<?php if (!empty($logado)) { ?>
								<li><?php echo $html->link($html->image('deslogar.png'), array('controller'=>'usuarios', 'action' => 'logout'), array('escape' => false)); ?></li>
								<li><?php echo $html->link($html->image('siganos.png'), array('controller'=>'usuarios', 'action' => 'seguir'), array('escape' => false)); ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>

			<div id="center">
				<div id="main">
					<?php
						echo $content_for_layout;
					?>
				</div>
			</div>
			
			<div id="footer">
				Desenvolvedores: Adalberto, Andr&eacute;, Andrey e Filipe
			</div>
		</div>
		
		<!--<?php echo $this->element('sql_dump'); ?>-->
	</body>
</html>