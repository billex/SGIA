<div class="documentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Documento'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Documento'), array('action' => 'edit', $documento['Documento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Documento'), array('action' => 'delete', $documento['Documento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $documento['Documento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Documentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Documento'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Encaregados'), array('controller' => 'encaregados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Encaregado'), array('controller' => 'encaregados', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($documento['Documento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($documento['Documento']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Body'); ?></th>
		<td>
			<?php echo h($documento['Documento']['body']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Encaregados'); ?></h3>
	<?php if (!empty($documento['Encaregado'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Documento Id'); ?></th>
		<th><?php echo __('Numerodocumento'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Localtrabalho'); ?></th>
		<th><?php echo __('Ocupacao'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Telefonemergencia'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($documento['Encaregado'] as $encaregado): ?>
		<tr>
			<td><?php echo $encaregado['id']; ?></td>
			<td><?php echo $encaregado['aluno_id']; ?></td>
			<td><?php echo $encaregado['name']; ?></td>
			<td><?php echo $encaregado['documento_id']; ?></td>
			<td><?php echo $encaregado['numerodocumento']; ?></td>
			<td><?php echo $encaregado['endereco']; ?></td>
			<td><?php echo $encaregado['localtrabalho']; ?></td>
			<td><?php echo $encaregado['ocupacao']; ?></td>
			<td><?php echo $encaregado['telefone']; ?></td>
			<td><?php echo $encaregado['email']; ?></td>
			<td><?php echo $encaregado['telefonemergencia']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'encaregados', 'action' => 'view', $encaregado['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'encaregados', 'action' => 'edit', $encaregado['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'encaregados', 'action' => 'delete', $encaregado['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $encaregado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Encaregado'), array('controller' => 'encaregados', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
