<div class="container text-center">
  <div class="row">
    <?php echo form_open("admin/login", ['class' => 'form-signin']);?>
    <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
    <?php echo $message;?>
      
      <?php echo form_input($identity);?>
      <?php echo form_input($password);?>
      
      <hr class="mb-6">
     
      <?php 
        $button = [
          'type' => 'submit', 
          'content' => lang('login_submit_btn'), 
          'class' => 'btn btn-lg btn-primary btn-block'
        ];
        echo form_button($button);
      ?>
    <?php echo form_close(); ?>
  </div>
  
  <hr class="mb-6">
  <a href="esqueci-minha-senha" class="text-center"><?php echo lang('login_forgot_password');?></a>
   
  </div>
</div>
