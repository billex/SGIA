<div class="disciplinas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Disciplina'); ?></h1>
			</div>
		</div>
	</div>



			
		</div><!-- end col md 3 -->
                
		<div class="col-md-9">
			<?php echo $this->Form->create('Disciplina', array('role' => 'form')); ?>
.           
                <table>
                    <tr>
                        <td width="50px"> Nome da Disciplina </td>
                        <td width="300px">
			<?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                        <td width="50px"> Classe </td>
                        <td width="300px">
			<?php echo $this->Form->input('classa_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                 
                </table>
.	

				
		<div class="form-group">
		<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
