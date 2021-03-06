<div class="classas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Classas'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('ano_id'); ?></th>
						<th><?php echo $this->Paginator->sort('Professor'); ?></th>
						
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($classas as $classa): ?>
					<tr>
						<td><?php echo h($classa['Classa']['id']); ?>&nbsp;</td>
						<td><?php echo h($classa['Classa']['name']); ?>&nbsp;</td>
						<td>
			<?php echo $this->Html->link($classa['Ano']['name'], array('controller' => 'anos', 'action' => 'view', $classa['Ano']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($classa['User']['name'], array('controller' => 'users', 'action' => 'view', $classa['User']['id'])); ?>
		</td>
						<td class="actions">
                                                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', array('action' => 'lancarnota', $classa['Classa']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $classa['Classa']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $classa['Classa']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $classa['Classa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $classa['Classa']['id'])); ?>
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
	</div><!-- end row -->


</div><!-- end containing of content -->