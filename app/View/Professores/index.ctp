<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><br>
<div class="professores index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8"><br><br>
                    <h3>Lista de professores</h3>
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('Numero'); ?></th>
						<th><?php echo $this->Paginator->sort('Nome'); ?></th>
						<th><?php echo $this->Paginator->sort('Endereco'); ?></th>
						<th><?php echo $this->Paginator->sort('Contacto'); ?></th>
						<th><?php echo $this->Paginator->sort('Disciplina'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($professores as $professore): ?>
					<tr>
						<td><?php echo h($professore['Professore']['id']); ?>&nbsp;</td>
						<td><?php echo h($professore['Professore']['name']); ?>&nbsp;</td>
						<td><?php echo h($professore['Professore']['endereco']); ?>&nbsp;</td>
						<td><?php echo h($professore['Professore']['contacto']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($professore['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $professore['Disciplina']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $professore['Professore']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $professore['Professore']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $professore['Professore']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $professore['Professore']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
                <div class="col-md-2"></div>
	</div><!-- end row -->
       


</div><!-- end containing of content -->