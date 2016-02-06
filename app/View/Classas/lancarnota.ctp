<br />	<br /><br /><br />
		
<div class="related row">
	<div class="col-md-12">
	<?php if (!empty($classa['Registo'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Código de Estudante'); ?></th>
		<th><?php echo __('Nome de Estudante'); ?></th>
		<th><?php echo __('Lançar'); ?></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($classa['Registo'] as $registo): ?>
		<tr>
			<td><?php echo $registo['aluno_id']; ?></td>
			<td><?php echo $registo['aluno_id']; ?></td>
			
			<td>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span>'), array('controller' => 'notasfinalis', 'action' => 'add'), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'registos', 'action' => 'edit', $registo['id']), array('escape' => false)); ?>
			</td>
			
			<td>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php //echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Registo'), array('controller' => 'registos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
