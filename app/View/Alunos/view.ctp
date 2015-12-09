<div class="alunos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Aluno'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Aluno'), array('action' => 'edit', $aluno['Aluno']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Aluno'), array('action' => 'delete', $aluno['Aluno']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $aluno['Aluno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Alunos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aluno'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Generos'), array('controller' => 'generos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Genero'), array('controller' => 'generos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nacionalidades'), array('controller' => 'nacionalidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nacionalidade'), array('controller' => 'nacionalidades', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Documentos'), array('controller' => 'documentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Documento'), array('controller' => 'documentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Brothers'), array('controller' => 'brothers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Brother'), array('controller' => 'brothers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Educacaoanteriores'), array('controller' => 'educacaoanteriores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Educacaoanteriore'), array('controller' => 'educacaoanteriores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Encaregados'), array('controller' => 'encaregados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Encaregado'), array('controller' => 'encaregados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pagamentos'), array('controller' => 'pagamentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pagamento'), array('controller' => 'pagamentos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($aluno['Aluno']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Apelido'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['apelido']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Datanascimento'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['datanascimento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Genero'); ?></th>
		<td>
			<?php echo $this->Html->link($aluno['Genero']['name'], array('controller' => 'generos', 'action' => 'view', $aluno['Genero']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nacionalidade'); ?></th>
		<td>
			<?php echo $this->Html->link($aluno['Nacionalidade']['name'], array('controller' => 'nacionalidades', 'action' => 'view', $aluno['Nacionalidade']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Documento'); ?></th>
		<td>
			<?php echo $this->Html->link($aluno['Documento']['name'], array('controller' => 'documentos', 'action' => 'view', $aluno['Documento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numerodocumento'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['numerodocumento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dataemissao'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['dataemissao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Validade'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['validade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lingua'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['lingua']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nivelengles'); ?></th>
		<td>
			<?php echo h($aluno['Aluno']['nivelengles']); ?>
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
	<h3><?php echo __('Related Brothers'); ?></h3>
	<?php if (!empty($aluno['Brother'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Turma'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($aluno['Brother'] as $brother): ?>
		<tr>
			<td><?php echo $brother['id']; ?></td>
			<td><?php echo $brother['aluno_id']; ?></td>
			<td><?php echo $brother['name']; ?></td>
			<td><?php echo $brother['turma']; ?></td>
			<td><?php echo $brother['body']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'brothers', 'action' => 'view', $brother['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'brothers', 'action' => 'edit', $brother['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'brothers', 'action' => 'delete', $brother['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $brother['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Brother'), array('controller' => 'brothers', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Educacaoanteriores'); ?></h3>
	<?php if (!empty($aluno['Educacaoanteriore'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Escola'); ?></th>
		<th><?php echo __('Pais'); ?></th>
		<th><?php echo __('Lingua'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Classe'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($aluno['Educacaoanteriore'] as $educacaoanteriore): ?>
		<tr>
			<td><?php echo $educacaoanteriore['id']; ?></td>
			<td><?php echo $educacaoanteriore['escola']; ?></td>
			<td><?php echo $educacaoanteriore['pais']; ?></td>
			<td><?php echo $educacaoanteriore['lingua']; ?></td>
			<td><?php echo $educacaoanteriore['date']; ?></td>
			<td><?php echo $educacaoanteriore['classe']; ?></td>
			<td><?php echo $educacaoanteriore['aluno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'educacaoanteriores', 'action' => 'view', $educacaoanteriore['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'educacaoanteriores', 'action' => 'edit', $educacaoanteriore['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'educacaoanteriores', 'action' => 'delete', $educacaoanteriore['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $educacaoanteriore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Educacaoanteriore'), array('controller' => 'educacaoanteriores', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Encaregados'); ?></h3>
	<?php if (!empty($aluno['Encaregado'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Alunoid'); ?></th>
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
	<?php foreach ($aluno['Encaregado'] as $encaregado): ?>
		<tr>
			<td><?php echo $encaregado['id']; ?></td>
			<td><?php echo $encaregado['alunoid']; ?></td>
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
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Pagamentos'); ?></h3>
	<?php if (!empty($aluno['Pagamento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Situacao'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($aluno['Pagamento'] as $pagamento): ?>
		<tr>
			<td><?php echo $pagamento['id']; ?></td>
			<td><?php echo $pagamento['aluno_id']; ?></td>
			<td><?php echo $pagamento['name']; ?></td>
			<td><?php echo $pagamento['telefone']; ?></td>
			<td><?php echo $pagamento['fax']; ?></td>
			<td><?php echo $pagamento['situacao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pagamentos', 'action' => 'view', $pagamento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pagamentos', 'action' => 'edit', $pagamento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pagamentos', 'action' => 'delete', $pagamento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pagamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pagamento'), array('controller' => 'pagamentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
