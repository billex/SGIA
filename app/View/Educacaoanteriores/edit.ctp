<div class="educacaoanteriores form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Educacaoanteriore'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Educacaoanteriore.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Educacaoanteriore.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Educacaoanteriores'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Alunos'), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Educacaoanteriore', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('escola', array('class' => 'form-control', 'placeholder' => 'Escola'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pais', array('class' => 'form-control', 'placeholder' => 'Pais'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lingua', array('class' => 'form-control', 'placeholder' => 'Lingua'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('date', array('class' => 'form-control', 'placeholder' => 'Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('classe', array('class' => 'form-control', 'placeholder' => 'Classe'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('aluno_id', array('class' => 'form-control', 'placeholder' => 'Aluno Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
