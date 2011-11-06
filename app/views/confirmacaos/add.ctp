<div class="confirmacaos form">
<?php echo $this->Form->create('Confirmacao');?>
	<fieldset>
		<legend><?php __('Add Confirmacao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('confirmacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Confirmacaos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Presencas', true), array('controller' => 'presencas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presenca', true), array('controller' => 'presencas', 'action' => 'add')); ?> </li>
	</ul>
</div>