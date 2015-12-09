<div class="nacionalidades view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Nacionalidade'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Nacionalidade'), array('action' => 'edit', $nacionalidade['Nacionalidade']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Nacionalidade'), array('action' => 'delete', $nacionalidade['Nacionalidade']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $nacionalidade['Nacionalidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nacionalidades'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nacionalidade'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Alunos'), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($nacionalidade['Nacionalidade']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($nacionalidade['Nacionalidade']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Body'); ?></th>
		<td>
			<?php echo h($nacionalidade['Nacionalidade']['body']); ?>
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
	<h3><?php echo __('Related Alunos'); ?></h3>
	<?php if (!empty($nacionalidade['Aluno'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Apelido'); ?></th>
		<th><?php echo __('Datanascimento'); ?></th>
		<th><?php echo __('Genero Id'); ?></th>
		<th><?php echo __('Nacionalidade Id'); ?></th>
		<th><?php echo __('Numerodocumento'); ?></th>
		<th><?php echo __('Dataemissao'); ?></th>
		<th><?php echo __('Validade'); ?></th>
		<th><?php echo __('Lingua'); ?></th>
		<th><?php echo __('Nivelengles'); ?></th>
		<th><?php echo __('Edanterior'); ?></th>
		<th><?php echo __('Edpais'); ?></th>
		<th><?php echo __('Edlingua'); ?></th>
		<th><?php echo __('Datafromto'); ?></th>
		<th><?php echo __('Edclasse'); ?></th>
		<th><?php echo __('Eddanterior'); ?></th>
		<th><?php echo __('Eddpais'); ?></th>
		<th><?php echo __('Eddlingua'); ?></th>
		<th><?php echo __('Eddformto'); ?></th>
		<th><?php echo __('Eddclasse'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($nacionalidade['Aluno'] as $aluno): ?>
		<tr>
			<td><?php echo $aluno['id']; ?></td>
			<td><?php echo $aluno['name']; ?></td>
			<td><?php echo $aluno['apelido']; ?></td>
			<td><?php echo $aluno['datanascimento']; ?></td>
			<td><?php echo $aluno['genero_id']; ?></td>
			<td><?php echo $aluno['nacionalidade_id']; ?></td>
			<td><?php echo $aluno['numerodocumento']; ?></td>
			<td><?php echo $aluno['dataemissao']; ?></td>
			<td><?php echo $aluno['validade']; ?></td>
			<td><?php echo $aluno['lingua']; ?></td>
			<td><?php echo $aluno['nivelengles']; ?></td>
			<td><?php echo $aluno['edanterior']; ?></td>
			<td><?php echo $aluno['edpais']; ?></td>
			<td><?php echo $aluno['edlingua']; ?></td>
			<td><?php echo $aluno['datafromto']; ?></td>
			<td><?php echo $aluno['edclasse']; ?></td>
			<td><?php echo $aluno['eddanterior']; ?></td>
			<td><?php echo $aluno['eddpais']; ?></td>
			<td><?php echo $aluno['eddlingua']; ?></td>
			<td><?php echo $aluno['eddformto']; ?></td>
			<td><?php echo $aluno['eddclasse']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'alunos', 'action' => 'view', $aluno['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'alunos', 'action' => 'edit', $aluno['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'alunos', 'action' => 'delete', $aluno['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $aluno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
