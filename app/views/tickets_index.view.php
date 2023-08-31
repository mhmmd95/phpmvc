<?php include('partials/header.view.php'); ?>

<h1 class="text-lg">Ticketing System</h1>
<p class="text-sm text-gray-400">welcome, please send a ticket and an admin is going to respond soon!</p>

<h2 class="text-md">Submit Your Ticket</h2>
<form action="/" method="POST" class="bg-white p-3 m-2 space-y-4" enctype="multipart/form-data">
    <div class="flex gap-x-2">
        <label class="text-sm" for="name">Name: </label>
        <input type="text" name="name" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="title">Title: </label>
        <input type="text" name="title" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="phone">Phone: </label>
        <input type="text" name="phone" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="email">Email: </label>
        <input type="email" name="email" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="importance">Importance: </label>
        <select name="importance">
            <?php foreach ($importanceCases as $importance) : ?>            
            <option value="<?= $importance->value; ?>"><?= $importance->value; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="description">Description: </label>
        <textarea name="description" class="border-b-2 w-full flex rounded-lg h-[200px] mt-2 p-3 text-sm outline-0" placeholder="a brief description..">
        </textarea>
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="attachment">Attachment: </label>
        <input type="file" name="attachment">
    </div>

    <button type="submit" class="rounded-full border border-black bg-black py-1.5 px-5 text-white transition-all hover:bg-white hover:text-black text-center text-sm font-inter flex items-center justify-center">
        Submit
    </button>
</form>

<?php require 'partials/footer.view.php'; ?> 