		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Classa Id'); ?></th>
		<th class="actions"></th>
	</tr>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Registos'); ?></h3>
	<?php if (!empty($classa['Registo'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Classa Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($classa['Registo'] as $registo): ?>
		<tr>
			<td><?php echo $registo['id']; ?></td>
			<td><?php echo $registo['aluno_id']; ?></td>
			<td><?php echo $registo['classa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span>'), array('controller' => 'notasfinalis', 'action' => 'add'), array('escape' => false)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Registo'), array('controller' => 'registos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
