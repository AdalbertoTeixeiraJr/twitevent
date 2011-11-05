<div class="eventos view">
<h2><?php  __('Evento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['data']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['preco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evento['Usuario']['twitter_user'], array('controller' => 'usuarios', 'action' => 'view', $evento['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['local']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evento['Evento']['valor']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento', true), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Evento', true), array('action' => 'delete', $evento['Evento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
