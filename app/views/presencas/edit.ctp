<div class="presencas form">
<?php echo $this->Form->create('Presenca');?>
	<fieldset>
		<legend><?php __('Edit Presenca'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('confirmacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Presenca.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Presenca.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Presencas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento', true), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
	</ul>
</div>