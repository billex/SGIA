<?php
            	$grupo = $current_user['group_id'];
	$user=$current_user['username'];
	if(!$user) $user='Não logado!';
            
?> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
          
<ul class="actions"> 
<!-- Menu de topo -->
	<?php 
/*
Chamar no layout, abaixo da div <div id="header">
		<?php echo $this->element('menutopo');//Aqui?>
*/
	$grupo = $current_user['group_id'];
	$user=$current_user['username'];
	if(!$user) $user='Não logado!';

	if($user=='Não logado!'){
		 echo $this->Element('home'); 
	}else{
		if($grupo ==1){
                    echo $this->Element('administrador');
		} 
                elseif($grupo ==2){
                echo $this->Element('registoacademico');           
                }
                elseif($grupo ==4){
                echo $this->Element('professores');
                }                
                elseif($grupo ==5){
                echo $this->Element('encarregados');
                }
else{

}
	}
	?>
</ul> 
