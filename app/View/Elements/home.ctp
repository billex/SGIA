  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
<header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="collapse navbar-collapse navbar-center">
                    <a class="navbar-brand" href="index.html"><img src="images/mislogo.png" alt="Maputo International Schooll"></a>
              
  </div>
				
    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
       <li class="active"><a href="#">Pagina Inicial</a></li>
    <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'posts', 'action'=>'quemsomos'));?>">Quem somos</a</li>
     <li><a href="<?php echo $this->Html->url(array('plugin'=>null, 'controller'=>'posts', 'action'=>'nossosservicos'));?>">Nossos Servicos</a</li>
     <li><a href="<?php echo $this->Html->url(array('plugin'=>'admin', 'controller'=>'users', 'action'=>'login'));?>">Entrar</a></li> 
                                   
   </ul>
   </div>
   </div><!--/.container-->
   </nav><!--/nav-->
		
    </header><!--/header-->