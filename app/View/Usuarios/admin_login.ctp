<div class="container">

    <?php echo $this->Form->create('Usuario', array('class' => 'form-signin', 'inputDefaults' => array('label' => false), 'role' => 'form')); ?>
    <h2 class="form-signin-heading">Por favor faça o login</h2>


    <?php echo $this->Session->flash(); ?>


    <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Usuário', 'autofocus' => 'autofocus', 'div' => false)); ?>


    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Senha', 'div' => false)); ?>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <?php echo $this->Form->end(); ?>

</div> <!-- /container -->
