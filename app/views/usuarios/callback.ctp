<?php //debug($twitter_account); ?>
<div id="content">
	<?php $logado = $this->Session->read("Usuario"); ?>
	<?php if (!empty($logado)) { ?>
		<p>Usuario logado</p>
	<?php } ?>
	<?php if (empty($logado)) { ?>
		<?php echo $this->Form->create('Usuario');?>
			<fieldset>
				<legend><?php __('Login'); ?></legend>
			<?php
				echo $this->Form->input('twitter_user');
				echo $this->Form->input('senha', array('type' => 'password'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
	<?php } ?>
</div