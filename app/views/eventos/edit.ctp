<div class="eventos form">
<?php echo $this->Form->create('Evento');?>
	<fieldset>
		<legend><?php __('Edit Evento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data');
		echo $this->Form->input('titulo');
		echo $this->Form->input('preco');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('local');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Evento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Evento.id'))); ?></li>
	</ul>
</div>