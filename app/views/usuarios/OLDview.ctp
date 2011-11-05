<div class="usuarios view">
<h2><?php  __('Usuario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('TwiterUser'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['twiterUser']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Usuario', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Eventos');?></h3>
	<?php if (!empty($usuario['Evento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Data'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Preco'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th><?php __('Local'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Evento'] as $evento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $evento['id'];?></td>
			<td><?php echo $evento['data'];?></td>
			<td><?php echo $evento['titulo'];?></td>
			<td><?php echo $evento['preco'];?></td>
			<td><?php echo $evento['usuario_id'];?></td>
			<td><?php echo $evento['descricao'];?></td>
			<td><?php echo $evento['local'];?></td>
			<td><?php echo $evento['valor'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'eventos', 'action' => 'edit', $evento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'eventos', 'action' => 'delete', $evento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
