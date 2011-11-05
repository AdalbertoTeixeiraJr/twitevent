<div class="seguindos view">
<h2><?php  __('Seguindo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $seguindo['Seguindo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($seguindo['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $seguindo['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seguindo', true), array('action' => 'edit', $seguindo['Seguindo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Seguindo', true), array('action' => 'delete', $seguindo['Seguindo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seguindo['Seguindo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seguindos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seguindo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
