<div class="alunos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Aluno'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

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
