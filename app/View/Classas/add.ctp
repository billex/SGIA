<div class="classas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Classa'); ?></h1>
				
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Classa', array('role' => 'form')); ?> 
                     <table>
                    <tr>
                        <td width="150px"> Nome da Classe</td>
                        <td width="600px">
			<?php echo $this->Form->input('name', array('class' => 'form-control','label'=>FALSE ));?>
                        </td>
                    </tr>
                    <tr>
                       
                         <td width="150px">Ano</td>
                        <td width="600px">
		<?php echo $this->Form->input('ano_id', array('class' => 'form-control','label'=>FALSE ));?>
                        </td>
                    </tr>
                    <tr>
                       
                         <td width="150px">Turma</td>
                        <td width="600px">
		<?php echo $this->Form->input('user_id', array('class' => 'form-control','label'=>FALSE ));?>
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
