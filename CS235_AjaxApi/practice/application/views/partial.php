<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
    <tbody id='table'>
<?php
    foreach($users as $user)
    { ?>
        <tr><td><?= $user['email'] ?></td><td><?= $user['first_name'] ?></td><td><?= $user['last_name'] ?></td></tr>
<?php
    }   ?>

    </tbody>
</table>