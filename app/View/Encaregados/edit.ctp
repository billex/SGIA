<div class="encaregados form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Encaregado'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Encaregado.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Encaregado.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Encaregados'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Alunos'), array('controller' => 'alunos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Aluno'), array('controller' => 'alunos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Documentos'), array('controller' => 'documentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Documento'), array('controller' => 'documentos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Encaregado', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('alunoid', array('class' => 'form-control', 'placeholder' => 'Alunoid'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('documento_id', array('class' => 'form-control', 'placeholder' => 'Documento Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('numerodocumento', array('class' => 'form-control', 'placeholder' => 'Numerodocumento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'placeholder' => 'Endereco'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('localtrabalho', array('class' => 'form-control', 'placeholder' => 'Localtrabalho'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ocupacao', array('class' => 'form-control', 'placeholder' => 'Ocupacao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'placeholder' => 'Telefone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefonemergencia', array('class' => 'form-control', 'placeholder' => 'Telefonemergencia'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
