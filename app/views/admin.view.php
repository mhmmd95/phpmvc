<?php include('partials/header.view.php'); ?>

<h1 class="text-lg">System Tickets</h1>
<p class="text-sm text-gray-400">the list of existed tickets..</p>

<h2 class="text-md">please choose an admin account</h2>
<form action="/admin/tickets" method="POST" class="bg-white p-3 m-2 space-y-4">
    <div class="flex gap-x-2">
        <label class="text-sm" for="name">Name: </label>
        <input type="text" name="name" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>    

    <button type="submit" class="rounded-full border border-black bg-black py-1.5 px-5 text-white transition-all hover:bg-white hover:text-black text-center text-sm font-inter flex items-center justify-center">
        Submit
    </button>
</form>

<?php require 'partials/footer.view.php'; ?>