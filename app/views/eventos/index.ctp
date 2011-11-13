<!--<div class="menu bubplastic horizontal gray">
	<br class="clearit" />
</div>-->
<div class="content">
	<h2><?php __('Eventos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo __('Criador'); ?></th>
			<th><?php echo __('Data');?></th>
			<th><?php echo __('Titulo');?></th>
			<th><?php echo __('Preco');?></th>
			<th><?php echo __('Descricao');?></th>
			<th><?php echo __('Local');?></th>
			<th class="actions"><?php __('');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($eventos as $evento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?> >
		<td><?php echo $this->Html->link($evento['Usuario']['screen_name'], array('controller' => 'usuarios', 'action' => 'view', $evento['Usuario']['id'])); ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['data']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['titulo']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['preco']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['descricao']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['local']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar', true), array('action' => 'view', $evento['Evento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>