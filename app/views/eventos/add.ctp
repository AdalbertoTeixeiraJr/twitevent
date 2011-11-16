<div id="content">
	<?php echo $this->Form->create('Evento');?>
		<fieldset>
			<legend><?php __('Adicionar Evento'); ?></legend>
		<?php
			echo $this->Form->input('data');
			echo $this->Form->input('titulo');
			echo $this->Form->input('preco');
			echo $this->Form->hidden('usuario_id', array('value' => $usuario['Usuario']['id']));
			echo $this->Form->input('descricao');
			echo $this->Form->input('local');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>