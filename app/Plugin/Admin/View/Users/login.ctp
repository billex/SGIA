<br><br>
<div class="modal-dialog">
    <div class="loginmodal-container">
            <h1>Faça Login</h1><br>
           <?php echo $this->Session->flash('auth'); ?>
           <?php echo $this->Form->create('User');?>
          <?php echo $this->Form->input('username', array("label"=>FALSE,"placeholder"=>"Username"));?>
          <?php echo $this->Form->input('password', array("label"=>FALSE, "placeholder"=>"Password"));?>
            <input type="submit" name="login" class="login loginmodal-submit" value="Entrar">

      <div class="login-help">
            <a href="#">Registar</a> - <a href="#">Esqueci a minha senha</a>
      </div>
    </div>
</div>
		  </div>