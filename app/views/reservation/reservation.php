<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php site_url('save')?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="name" required>
    <label for="address">address:</label>
    <input type="text" name="address" placeholder="address" required>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="name" required>
    <label for="contact">Contact:</label>
    <input type="text" name="Contact" placeholder="Contact" required>
    <label for="venue_id">Venue:</label>
    <select name="venue_id" id="venue">
        <option selected disabled>venue</option>
        <?php foreach($venue as $venue):?> 
        <option value="<?= $venue['id']?>"> <?= $venue['venue']?> </option>
        <?php endforeach ?>
    </select>
    <label for="name">Time:</label>
    <input type="text" name="Duration" placeholder="duration" required>
    <input type="hidden" name="status" placeholder="name" value="0">
    <button type="submit">save</button>
    </form> 
</body>
</html>