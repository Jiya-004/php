<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="POST">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="firstname">
<br><br>
            <label for="lastname">lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="lastname">
<br><br>
            <label for="favouritepet">Favourite pet?</label>
            <select id="favouritepet" name="favouritepet" id="">
            <option value="none">none</option>
            <option value="dog">dog</option>
            <option value="cat">cat</option>
            <option value="bird">bird</option>
            </select>
            <br>
            
<button type="submit">submit</button>
        </form>
</main>
</body>
</html>