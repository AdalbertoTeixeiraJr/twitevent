<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('screen_name');
		echo $this->Form->input('name');
		echo $this->Form->input('profile_image_url');
		echo $this->Form->input('description');
		echo $this->Form->input('Evento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Usuario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seguindos', true), array('controller' => 'seguindos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seguindo', true), array('controller' => 'seguindos', 'action' => 'add')); ?> </li>
	</ul>
</div>