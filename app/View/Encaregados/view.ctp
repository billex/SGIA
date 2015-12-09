<div class="encaregados view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Encaregado'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Encaregado'), array('action' => 'edit', $encaregado['Encaregado']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Encaregado'), array('action' => 'delete', $encaregado['Encaregado']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $encaregado['Encaregado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Encaregados'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Encaregado'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Alunos'), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Documentos'), array('controller' => 'documentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Documento'), array('controller' => 'documentos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($encaregado['Encaregado']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alunoid'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['alunoid']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Documento'); ?></th>
		<td>
			<?php echo $this->Html->link($encaregado['Documento']['name'], array('controller' => 'documentos', 'action' => 'view', $encaregado['Documento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numerodocumento'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['numerodocumento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Localtrabalho'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['localtrabalho']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ocupacao'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['ocupacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefonemergencia'); ?></th>
		<td>
			<?php echo h($encaregado['Encaregado']['telefonemergencia']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

