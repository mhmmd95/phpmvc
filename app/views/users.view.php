<?php require('partials/header.view.php'); ?>

<h1 class="text-lg">System Users</h1>
<p class="text-sm text-gray-400">the list of existed users..</p>

<h2 class="text-md">Create new user</h2>
<form action="/users" method="POST" class="bg-white p-3 m-2 space-y-4">
    <div class="flex gap-x-2">
        <label class="text-sm" for="name">Name: </label>
        <input type="text" name="name" class="border-b-2 w-full flex rounded-lg mt-2 p-3 text-sm outline-0">
    </div>

    <div class="flex gap-x-2">
        <label class="text-sm" for="importance">Role: </label>
        <select name="role">
            <?php foreach ($roleCases as $key => $role) : ?>            
            <option value="<?= $role->value; ?>">
                <?= $role->name; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="rounded-full border border-black bg-black py-1.5 px-5 text-white transition-all hover:bg-white hover:text-black text-center text-sm font-inter flex items-center justify-center">
        Submit
    </button>
</form>

<table class="table w-full">
  <thead>
    <tr>
      <th class="text-left px-4 py-2">name</th>
      <th class="text-left px-4 py-2">isAdmin</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) : ?> 
    <tr>
      <td class="px-4 py-2"><?= $user->name; ?></td>
      <td class="px-4 py-2"><?= $user->admin == true ? 'admin' : 'user'; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>