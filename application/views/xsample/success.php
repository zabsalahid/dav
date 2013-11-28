<?php
echo 'Success!';

echo '<pre>';
print_r($this->session->all_userdata());
echo '</pre>';


?>

<a href="<?php echo base_url();?>account/logout">Log Out</a>