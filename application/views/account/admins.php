<table border="1">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Password</th>
    </tr>
    <?php
    foreach($admins as $a)
    {
        echo '<tr>';
            echo '<td>'.$a['fname'].' '.$a['mi'].'. '.$a['lname'].'</td>';
            echo '<td>'.$a['email'].'</td>';
            echo '<td>'.$a['type'].'</td>';
            echo '<td><a href="">Default</a></td>';
        echo '</tr>';
    }
    ?>
</table>