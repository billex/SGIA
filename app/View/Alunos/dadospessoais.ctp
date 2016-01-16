<div class="alunos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10"><br><br>
                    <h3><?php echo __('Alunos'); ?></h3>
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('Nº'); ?></th>
						<th><?php echo $this->Paginator->sort('Nome'); ?></th>
						<th><?php echo $this->Paginator->sort('Apelido'); ?></th>
						<th><?php echo $this->Paginator->sort('Genero'); ?></th>
						<th><?php echo $this->Paginator->sort('Nacionalidade'); ?></th>
						<th><?php echo $this->Paginator->sort('Documento'); ?></th>
						<th><?php echo $this->Paginator->sort('Nº Documento'); ?></th>
						<th><?php echo $this->Paginator->sort('Lingua'); ?></th>
						<th><?php echo $this->Paginator->sort('Nivel Ingles'); ?></th>
						<th><?php echo $this->Paginator->sort('Acções'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($alunos as $aluno): ?>
					<tr>
						<td><?php echo h($aluno['Aluno']['id']); ?>&nbsp;</td>
						<td><?php echo h($aluno['Aluno']['name']); ?>&nbsp;</td>
						<td><?php echo h($aluno['Aluno']['apelido']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($aluno['Genero']['name'], array('controller' => 'generos', 'action' => 'view', $aluno['Genero']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($aluno['Nacionalidade']['name'], array('controller' => 'nacionalidades', 'action' => 'view', $aluno['Nacionalidade']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($aluno['Documento']['name'], array('controller' => 'documentos', 'action' => 'view', $aluno['Documento']['id'])); ?>
		</td>
						<td><?php echo h($aluno['Aluno']['numerodocumento']); ?>&nbsp;</td>
						<td><?php echo h($aluno['Aluno']['lingua']); ?>&nbsp;</td>
						<td><?php echo h($aluno['Aluno']['nivelengles']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'encarregado', $aluno['Aluno']['id']), array('escape' => false)); ?>
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
                <div class="col-md-1"></div>
	</div><!-- end row -->


</div><!-- end containing of content -->