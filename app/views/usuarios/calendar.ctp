<?php //debug($usuario); ?>

<?php $eventos_all = ""; ?>
<?php foreach ($usuario["Evento"] as $evento_usuario) { ?>
	<?php $horario = date("Y, m-1, d", strtotime($evento_usuario["data"])); ?>
	<?php $eventos_all = $eventos_all . "{ title: '" . $evento_usuario["titulo"] . "', start: new Date(" . $horario . "), url: '" . $html->url('/Eventos/view/' . $evento_usuario['id'], true) . "' },"; ?>
	
<?php } ?>

<?php foreach ($eventos as $eventos_seguindo) { ?>
	<?php foreach ($eventos_seguindo as $evento) { ?>
		<?php $horario = date("Y, m-1, d", strtotime($evento["data"])); ?>
		<?php $eventos_all = $eventos_all . "{ title: '" . $evento["titulo"] . "', start: new Date(" . $horario . "), url: '" . $html->url('/Eventos/view/' . $evento['id'], true) . "' },"; ?>
	<?php } ?>
<?php } ?>

<?php $eventos_all = substr_replace($eventos_all, '', -1); ?>

<?php
	echo $this->Html->css('fullcalendar/fullcalendar', 'stylesheet', array('inline' => false));
	echo $this->Html->css('fullcalendar/fullcalendar.print', 'stylesheet', array('media' => 'print', 'inline' => false));
	echo $javascript->link('jquery/jquery-1.5.2.min', false);
	echo $javascript->link('jquery/jquery-ui-1.8.11.custom.min', false);
	echo $javascript->link('fullcalendar/fullcalendar.min.js', false);
	echo $javascript->codeBlock("
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		//alert(m);
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: [" . $eventos_all . "]
		});
		
	});
	", array('inline' => false));
?>
<div class="menu bubplastic horizontal gray">
	<ul>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Perfil</b></span>", array('controller' => 'Usuarios', 'action' => 'view', $usuario['Usuario']['id']), array('escape' => false)); ?></span></li>
	</ul>
	<br class="clearit" />
</div>
<div id="content">
	<div id='calendar'></div>
</div>