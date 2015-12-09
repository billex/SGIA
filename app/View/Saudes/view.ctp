<div class="saudes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Saude'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Saude'), array('action' => 'edit', $saude['Saude']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Saude'), array('action' => 'delete', $saude['Saude']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $saude['Saude']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Saudes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Saude'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($saude['Saude']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($saude['Saude']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Perguntamedicacao'); ?></th>
		<td>
			<?php echo h($saude['Saude']['perguntamedicacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Necessidades'); ?></th>
		<td>
			<?php echo h($saude['Saude']['necessidades']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nomemedico'); ?></th>
		<td>
			<?php echo h($saude['Saude']['nomemedico']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

