<div class="pauts view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Paut'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Paut'), array('action' => 'edit', $paut['Paut']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Paut'), array('action' => 'delete', $paut['Paut']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $paut['Paut']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pauts'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Paut'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Classas'), array('controller' => 'classas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Classa'), array('controller' => 'classas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Alunos'), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Anos'), array('controller' => 'anos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Anos'), array('controller' => 'anos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($paut['Paut']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Classa'); ?></th>
		<td>
			<?php echo $this->Html->link($paut['Classa']['name'], array('controller' => 'classas', 'action' => 'view', $paut['Classa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aluno'); ?></th>
		<td>
			<?php echo $this->Html->link($paut['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $paut['Aluno']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Disciplina'); ?></th>
		<td>
			<?php echo $this->Html->link($paut['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $paut['Disciplina']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Anos'); ?></th>
		<td>
			<?php echo $this->Html->link($paut['Anos']['name'], array('controller' => 'anos', 'action' => 'view', $paut['Anos']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

