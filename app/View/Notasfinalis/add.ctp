<div class="notasfinalis form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Notasfinali'); ?></h1>
			</div>
		</div>
	</div>



				
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Notasfinali', array('role' => 'form')); ?><br><br><br>
                        <table>
                            <a href="add.ctp"</a>
                    <tr>
                    <td width="150px"> Nome do Aluno </td>
                        <td width="600px">
	<?php echo $this->Form->input('aluno_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                    <td width="150px"> Disciplina </td>
                        <td width="600px">
	<?php echo $this->Form->input('disciplina_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
				
		    <tr>
                    <td width="150px"> Classe </td>
                        <td width="600px">
	<?php echo $this->Form->input('classa_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                    <td width="150px"> Nota </td>
                        <td width="600px">
	<?php echo $this->Form->input('valorda_nota', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                        </table>
				
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
                       <?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
