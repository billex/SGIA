<div class="educacaoanteriores view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Educacaoanteriore'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Educacaoanteriore'), array('action' => 'edit', $educacaoanteriore['Educacaoanteriore']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Educacaoanteriore'), array('action' => 'delete', $educacaoanteriore['Educacaoanteriore']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $educacaoanteriore['Educacaoanteriore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Educacaoanteriores'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Educacaoanteriore'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($educacaoanteriore['Educacaoanteriore']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Escola'); ?></th>
		<td>
			<?php echo h($educacaoanteriore['Educacaoanteriore']['escola']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pais'); ?></th>
		<td>
			<?php echo h($educacaoanteriore['Educacaoanteriore']['pais']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lingua'); ?></th>
		<td>
			<?php echo h($educacaoanteriore['Educacaoanteriore']['lingua']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date'); ?></th>
		<td>
			<?php echo h($educacaoanteriore['Educacaoanteriore']['date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Classe'); ?></th>
		<td>
			<?php echo h($educacaoanteriore['Educacaoanteriore']['classe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aluno'); ?></th>
		<td>
			<?php echo $this->Html->link($educacaoanteriore['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $educacaoanteriore['Aluno']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

