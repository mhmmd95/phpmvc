<?php include('partials/header.view.php'); ?>

<h1 class="text-lg">System Tickets</h1>
<p class="text-sm text-gray-400">the list of existed tickets..</p>

<table class="table w-full">
    <thead>
        <tr>
            <th class="text-left px-4 py-2">name</th>
            <th class="text-left px-4 py-2">title</th>
            <th class="text-left px-4 py-2">phone</th>
            <th class="text-left px-4 py-2">email</th>
            <th class="text-left px-4 py-2">importance</th>
            <th class="text-left px-4 py-2">description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tickets as $ticket) : ?>
            <tr>
                <td class="px-4 py-2"><?= $ticket->name; ?></td>
                <td class="px-4 py-2"><?= $ticket->title; ?></td>
                <td class="px-4 py-2"><?= $ticket->phone; ?></td>
                <td class="px-4 py-2"><?= $ticket->email; ?></td>
                <td class="px-4 py-2"><?= $ticket->importance; ?></td>
                <td class="px-4 py-2"><?= $ticket->description; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require 'partials/footer.view.php'; ?>