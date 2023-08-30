<?php include('partials/header.view.php'); ?>

<h1>Ticketing System</h1>
<hr>


<ul>
    <?php foreach ($tickets as $ticket) : ?>
    <li>

        <strong>Ticket: </strong>
        <?php if ($ticket->completed) : ?>
        <strike><?= $ticket->description; ?> </strike>
        <hr>
        <?php else : ?>
        <?= $ticket->description;  ?>
        <hr>
        <?php endif; ?>

    </li>
    <?php endforeach; ?>

</ul>



<?php require 'partials/footer.view.php'; ?> 