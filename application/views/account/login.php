<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to DavAlert</title>
  <link rel="stylesheet" href="<?php echo base_url().'css/login.css';?>">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
</head>
<body>
<section class="container">
    <div class="login">
        <h1>DavAlert</h1>
        <?php
            echo form_open('access/login_validation');
            
            //if(validation_errors()) echo '<script>window.alert("'.validation_errors().'");</script>';
        ?>
        <p><input type="text" name="email" value="<?php $this->input->post('email'); ?>" placeholder="Email" required></p>
        <p><input type="password" name="password" value="" placeholder="Password" required></p>
        <?php
            echo '<p class="errors">'.validation_errors().'</p>';
        ?>
        <p class="submit">
          <input type="submit" name="commit" value="Login">
          <input type="reset" name="reset" value="Reset">
        </p>
        <?php
            echo form_close();
        ?>
    </div>
</section>
</body>
</html>
