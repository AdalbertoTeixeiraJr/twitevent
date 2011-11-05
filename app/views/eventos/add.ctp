<div class="menu bubplastic horizontal gray">
	<ul>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Perfil</b></span>", array('controller' => 'Usuarios', 'action' => 'view', $usuario['Usuario']['id']), array('escape' => false)); ?></span></li>
	</ul>
	<br class="clearit" />
</div>

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