<div class="7u">
    <p>Profile</p>
    <br>
    <h1>Full Name:</h1> <?= $fname.' '.$mi.'. '.$lname ?>
    <h1>Email: </h1> <?= $email ?>
    <h1>Gender: </h1> <?= $gend ?>
    <h1>Account Type: </h1> <?= $type ?>
    <h1><a href="">Edit Profile</a></h1> 
    <h1><a href="">Change Password</a></h1>
</div>
<div class="5u">
    <ul>
        <li>
            <img src="<?= base_url().'pic1.jpg'?>" style="height:250px; weight:250px"/>
        </li>
        <li>
            <h1><a href="">Change Profile Picture</a></h1>
        </li>
    </ul>
</div>