<h1>Log In </h1>

<?php

    echo form_open('account/login_validation');
    
    echo validation_errors();
    
    echo '<p> Email:';
    echo form_input('email',$this->input->post('email'));
    echo '</p>';
    
    echo '<p> Password:';
    echo form_password('password');
    echo '</p>';
    
    echo '<p>';
    echo form_submit('login_sumbit', 'Log In');
    echo '</p>';
    
    echo form_close();
?>
<a href="<?php echo base_url().'account/signup';?>">Sign Up</a>
