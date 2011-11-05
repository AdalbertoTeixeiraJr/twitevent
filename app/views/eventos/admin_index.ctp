<div class="eventos index">
	<h2><?php __('Eventos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('preco');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('local');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($eventos as $evento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evento['Evento']['id']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['data']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['titulo']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['preco']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['Usuario']['twitter_user'], array('controller' => 'usuarios', 'action' => 'view', $evento['Usuario']['id'])); ?>
		</td>
		<td><?php echo $evento['Evento']['descricao']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['local']; ?>&nbsp;</td>
		<td><?php echo $evento['Evento']['valor']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $evento['Evento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evento['Evento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>