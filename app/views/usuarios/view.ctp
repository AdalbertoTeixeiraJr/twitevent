<!--<div class="menu bubplastic horizontal gray">
	<ul>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Inicio</b></span>", array('controller'=>'pages', 'action' => 'home'), array('escape' => false)); ?></span></li>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Eventos</b></span>", array('controller'=>'Eventos', 'action' => 'index'), array('escape' => false)); ?></span></li>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Adicionar Evento</b></span>", array('controller' => 'Eventos', 'action' => 'add', $usuario['Usuario']['id']), array('escape' => false)); ?></span></li>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Deletar Perfil</b></span>", array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?></span></li>
	</ul>
	<br class="clearit" />
</div>-->
<div id="content">
	<h2><img src="<?php echo $usuario['Usuario']['profile_image_url']; ?>" /> <?php  __($usuario['Usuario']['name']);?></h2>
	<h3>Sobre</h3>
	<?php echo $usuario['Usuario']['description']; ?>
	<br />
	<br />
	<div class="related">
		<h3><?php __('Meus Eventos');?></h3>
		<?php if (empty($usuario['Evento'])) { ?>
			<?php echo $usuario['Usuario']['name'] ?> não possui eventos.
		<?php } ?>
		<?php if (!empty($usuario['Evento'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Titulo'); ?></th>
			<th><?php __('Descricao'); ?></th>
			<th><?php __('Data'); ?></th>
			<th><?php __('Local'); ?></th>
			<th><?php __('Preco'); ?></th>
			<th class="actions"><?php __('');?></th>
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
				<td><?php echo $evento['titulo'];?></td>
				<td><?php echo $evento['descricao'];?></td>
				<td><?php echo $evento['data'];?></td>
				<td><?php echo $evento['local'];?></td>
				<td><?php echo $evento['preco'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Visualizar', true), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<br />
	
	<div class="related">
		<h3><?php __('Eventos Confirmados');?></h3>
		<?php if (empty($eventosConfirmados)) { ?>
			<?php echo $usuario['Usuario']['name'] ?> não possui eventos confirmados ainda.
		<?php } ?>
		<?php foreach ($eventosConfirmados as $ev) { ?>
			<?php //debug($ev); ?>
			<?php $i = 0; ?>
				
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php __('Criador'); ?></th>
				<th><?php __('Titulo'); ?></th>
				<th><?php __('Descricao'); ?></th>
				<th><?php __('Data'); ?></th>
				<th><?php __('Local'); ?></th>
				<th><?php __('Preco'); ?></th>
				<th><?php __('Confirmacao'); ?></th>
				<th class="actions"><?php __('Confirmações');?></th>
				<th class="actions"><?php __('');?></th>
			</tr>
			<?php
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr<?php echo $class;?>>
					<td><?php echo $this->Html->link($ev['Evento']['Usuario']['screen_name'], array('controller' => 'usuarios', 'action' => 'view', $ev['Evento']['Evento']['usuario_id'])); ?></td>
					<td><?php echo $ev['Evento']['Evento']['titulo'];?></td>
					<td><?php echo $ev['Evento']['Evento']['descricao'];?></td>
					<td><?php echo $ev['Evento']['Evento']['data'];?></td>
					<td><?php echo $ev['Evento']['Evento']['local'];?></td>
					<td><?php echo $ev['Evento']['Evento']['preco'];?></td>
					<td><?php echo $ev['confirmacao'];?></td>
					<td class="actions">
							<?php echo $this->Html->link(__('Vou', true), array('controller' => 'usuarios', 'action' => 'add_confirmacao', $ev['Evento']['Evento']['id'], "vou")); ?>
							<?php echo $this->Html->link(__('Talvez', true), array('controller' => 'usuarios', 'action' => 'add_confirmacao', $ev['Evento']['Evento']['id'], "talvez")); ?>
							<?php echo $this->Html->link(__('Cancelar', true), array('controller' => 'usuarios', 'action' => 'delete_confirmacao', $ev['Evento']['Evento']['id'])); ?>
						</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Visualizar', true), array('controller' => 'eventos', 'action' => 'view', $ev['Evento']['Evento']['id'])); ?>
					</td>
				</tr>
			</table>
		<?php } ?>
	</div>
	<br />
	
	<div class="related">
		<h3><?php __('Eventos De Quem Estou Seguindo');?></h3>
		<?php if (empty($eventos)) { ?>
			Os usuarios que você está seguindo não possuem nenhum evento ainda.
		<?php } ?>
		<?php foreach ($eventos as $eventos_seguindo) { ?>
			<?php $i = 0; ?>
			<?php foreach ($eventos_seguindo as $evento) { ?>
				<?php //debug($evento); ?>
				
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php __('Criador'); ?></th>
					<th><?php __('Titulo'); ?></th>
					<th><?php __('Descricao'); ?></th>
					<th><?php __('Data'); ?></th>
					<th><?php __('Local'); ?></th>
					<th><?php __('Preco'); ?></th>
					<th class="actions"><?php __('Confirmações');?></th>
					<th class="actions"><?php __('');?></th>
				</tr>
				<?php
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow"';
						}
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $this->Html->link($evento['usuario_id'], array('controller' => 'usuarios', 'action' => 'view', $evento['usuario_id'])); ?></td>
						<td><?php echo $evento['titulo'];?></td>
						<td><?php echo $evento['descricao'];?></td>
						<td><?php echo $evento['data'];?></td>
						<td><?php echo $evento['local'];?></td>
						<td><?php echo $evento['preco'];?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('Vou', true), array('controller' => 'usuarios', 'action' => 'add_confirmacao', $evento['id'], "vou")); ?>
							<?php echo $this->Html->link(__('Talvez', true), array('controller' => 'usuarios', 'action' => 'add_confirmacao', $evento['id'], "talvez")); ?>
						</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Visualizar', true), array('controller' => 'eventos', 'action' => 'view', $evento['id'])); ?>
						</td>
					</tr>
				</table>
			<?php } ?>
		<?php } ?>
	</div>
</div>