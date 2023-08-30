<?php require('partials/header.view.php'); ?>

<h1>
    <?php foreach ($users as $user) : ?> 
        <?php echo $user->name . ", <br>"; ?>
    <?php endforeach; ?>
</h1>

<h1>Submit Your Name</h1>
<form action="/users" method="POST">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>