<div class="container text-center">
      <div class="row">
      <?php echo form_open("admin/forgot_password", ['class' => 'form-signin']);?>
            <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal"><?php echo lang('forgot_password_heading');?></h1>
            <p class="lead">
                  <?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?>
            </p>

            <?php echo $message;?>
            <?php echo form_input($identity);?>
            <hr class="mb-6">

            <?php 
                  $button = [
                        'type' => 'submit', 
                        'content' => lang('forgot_password_submit_btn'), 
                        'class' => 'btn btn-lg btn-primary btn-block'
                  ];
                  echo form_button($button);
            ?>

            <?php echo form_close(); ?>
      </div>
</div>
