<div class="alunos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Aluno'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Aluno.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Aluno.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Alunos'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Generos'), array('controller' => 'generos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Genero'), array('controller' => 'generos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Nacionalidades'), array('controller' => 'nacionalidades', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Nacionalidade'), array('controller' => 'nacionalidades', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Documentos'), array('controller' => 'documentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Documento'), array('controller' => 'documentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Brothers'), array('controller' => 'brothers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Brother'), array('controller' => 'brothers', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Educacaoanteriores'), array('controller' => 'educacaoanteriores', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Educacaoanteriore'), array('controller' => 'educacaoanteriores', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Encaregados'), array('controller' => 'encaregados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Encaregado'), array('controller' => 'encaregados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pagamentos'), array('controller' => 'pagamentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pagamento'), array('controller' => 'pagamentos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Aluno', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('apelido', array('class' => 'form-control', 'placeholder' => 'Apelido'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('datanascimento', array('class' => 'form-control', 'placeholder' => 'Datanascimento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('genero_id', array('class' => 'form-control', 'placeholder' => 'Genero Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nacionalidade_id', array('class' => 'form-control', 'placeholder' => 'Nacionalidade Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('documento_id', array('class' => 'form-control', 'placeholder' => 'Documento Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('numerodocumento', array('class' => 'form-control', 'placeholder' => 'Numerodocumento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('dataemissao', array('class' => 'form-control', 'placeholder' => 'Dataemissao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('validade', array('class' => 'form-control', 'placeholder' => 'Validade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lingua', array('class' => 'form-control', 'placeholder' => 'Lingua'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nivelengles', array('class' => 'form-control', 'placeholder' => 'Nivelengles'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
