<div class="encaregados form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Encaregado'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
            <div class="col-md-2"></div>
		<div class="col-md-8">
			<?php echo $this->Form->create('Encaregado', array('role' => 'form')); ?>
                    
 <table>
                    <a href="add.ctp"></a>
                    <tr>
                        <td width="150px"> Nome do Encarregado </td>
                        <td width="600px">
		<?php echo $this->Form->input('name', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    
			 <tr>
                        <td width="150px"> Documento </td>
                        <td width="600px">
		<?php echo $this->Form->input('documento_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> No Documento </td>
                        <td width="600px">
		<?php echo $this->Form->input('numerodocumento', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    
                     <tr>
                        <td width="150px"> Endereco </td>
                        <td width="600px">
	      <?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="150px"> Local de Trabalho </td>
                        <td width="600px">
	      <?php echo $this->Form->input('localtrabalho', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="150px"> Cargo </td>
                        <td width="600px">
	<?php echo $this->Form->input('ocupacao', array('class' => 'form-control', 'label' => FALSE));?>
                        </td>
                    </tr>
                    
                      <tr>
                        <td width="150px"> Contacto </td>
                        <td width="600px">
	<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'label' => FALSE));?>
                        </td>
                    </tr>
                    
                     <tr>
                        <td width="150px"> Email </td>
                        <td width="600px">
	<?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => FALSE));?>
                        </td>
                    </tr>
                    
                     <tr>
                        <td width="150px"> Contacto de Emergencia </td>
                        <td width="600px">
	<?php echo $this->Form->input('telefonemergencia', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                              
                    <div class="form-group">
					<?php echo $this->Form->hidden('alunoid', array('class' => 'form-control', 'default' => $_SESSION["nomealuno"]));?>
				</div>
                   </table>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
                 <div class="col-md-2"></div>
	</div><!-- end row -->
</div>
