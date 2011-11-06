<div class="presencas view">
<h2><?php  __('Presenca');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $presenca['Presenca']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($presenca['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $presenca['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($presenca['Evento']['titulo'], array('controller' => 'eventos', 'action' => 'view', $presenca['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Confirmacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $presenca['Presenca']['confirmacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presenca', true), array('action' => 'edit', $presenca['Presenca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Presenca', true), array('action' => 'delete', $presenca['Presenca']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $presenca['Presenca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presencas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presenca', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
