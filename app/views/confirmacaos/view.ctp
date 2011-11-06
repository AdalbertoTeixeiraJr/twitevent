<div class="confirmacaos view">
<h2><?php  __('Confirmacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $confirmacao['Confirmacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Presenca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($confirmacao['Presenca']['id'], array('controller' => 'presencas', 'action' => 'view', $confirmacao['Presenca']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $confirmacao['Confirmacao']['usuario_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evento Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $confirmacao['Confirmacao']['evento_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Confirmacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $confirmacao['Confirmacao']['confirmacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Confirmacao', true), array('action' => 'edit', $confirmacao['Confirmacao']['presenca_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Confirmacao', true), array('action' => 'delete', $confirmacao['Confirmacao']['presenca_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $confirmacao['Confirmacao']['presenca_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Confirmacaos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Confirmacao', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presencas', true), array('controller' => 'presencas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presenca', true), array('controller' => 'presencas', 'action' => 'add')); ?> </li>
	</ul>
</div>
