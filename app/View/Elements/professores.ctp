  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
<header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/mislogo.png" alt="EIM"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        

      

                        </li>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dados Academicos <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'classas', 'action'=>'add'));?>">classes</a</li>
                                <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'notasfinalis', 'action'=>'add'));?>">Notas</a></li>
                                <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'disciplinas', 'action'=>'index'));?>">disciplinas</a></li>

                            </ul>

                        </li>
                        <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'alunos', 'action'=>'index'));?>">Alunos</a></li>
                        <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'classas', 'action'=>'index'));?>">Turmas</a></li>
                       <li><a href="<?php echo $this->Html->url(array('plugin'=>'admin', 'controller'=>'users', 'action'=>'logout'));?>">Sair</a></li> 
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->