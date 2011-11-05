<div class="presencas index">
	<h2><?php __('Presencas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('evento_id');?></th>
			<th><?php echo $this->Paginator->sort('confirmacao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($presencas as $presenca):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $presenca['Presenca']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presenca['Evento']['titulo'], array('controller' => 'eventos', 'action' => 'view', $presenca['Evento']['id'])); ?>
		</td>
		<td><?php echo $presenca['Presenca']['confirmacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $presenca['Presenca']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $presenca['Presenca']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $presenca['Presenca']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $presenca['Presenca']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Presenca', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>