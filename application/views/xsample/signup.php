Sign Up
<?php
    echo form_open('account/signup_validation');
    
    echo validation_errors();
    
    echo '<p>Email:';
    echo form_input('email',$this->input->post('email'));
    echo '</p>';
    
    echo '<p> Password:';
    echo form_password('password');
    echo '</p>';
    
    echo '<p>Confirm Password:';
    echo form_password('cpassword');
    echo '</p>';
    
    echo '<p>';
    echo form_submit('signup_submit','Sign Up');
    echo '</p>';
    
    echo form_close();
?>