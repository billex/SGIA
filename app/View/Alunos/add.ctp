<div class="alunos form">

<div class="principal">
    <div class="row">
            <div class="col-md-2">		
            </div><!-- end col md 3 -->
            <div class="col-md-8">
                    <?php echo $this->Form->create('Aluno', array('role' => 'form')); ?><br><br><br>
                <table>
                    <a href="add.ctp"></a>
                    <tr>
                        <td width="150px"> Nome do aluno </td>
                        <td width="600px">
                            <?php echo $this->Form->input('name', array('class' => 'form-control',  'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px"> Apelido </td>
                        <td width="600px">
                        <?php echo $this->Form->input('apelido', array('class' => 'form-control',  'label'=>FALSE));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> Data de Nascimento</td>
                        <td width="600px">
		<?php echo $this->Form->input('datanascimento', array('class' => 'form-controll',  'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px"> Genero</td>
                        <td width="600px">
			<?php echo $this->Form->input('genero_id', array('class' => 'form-control','label'=>FALSE ));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> Nacionalidade</td>
                        <td width="600px">
		        <?php echo $this->Form->input('nacionalidade_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> Documento</td>
                        <td width="600px">
		<?php echo $this->Form->input('documento_id', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> Numero de Documento</td>
                        <td width="600px">
		<?php echo $this->Form->input('numerodocumento', array('class' => 'form-control', 'label'=>FALSE));?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px"> Data de Emissao</td>
                        <td width="600px">
		<?php echo $this->Form->input('dataemissao', array('class' => 'form-controll', 'label'=>FALSE ));?>
                        </td>
                    </tr>
                     <tr>
                        <td width="150px"> Validade</td>
                        <td width="600px">
		<?php echo $this->Form->input('validade', array('class' => 'form-controll','label'=>FALSE ));?>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px"> Primeira Lingua</td>
                        <td width="600px">
		<?php echo $this->Form->input('lingua', array('class' => 'form-control','label'=>FALSE  ));?>
                        </td>
                    </tr>
                    <tr>
                       
                         <td width="150px"> Nivel de Ingles </td>
                        <td width="600px">
		<?php echo $this->Form->input('nivelengles', array('class' => 'form-control','label'=>FALSE  ));?>
                        </td>
                    </tr>
                </table>
.	
				
				<div class="form-group">
					<?php echo $this->Form->submit(__('Cadastrar'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
                <div class="col-md-2">		
		</div><!-- end col md 3 -->
	</div><!-- end row -->
</div>
</div>
