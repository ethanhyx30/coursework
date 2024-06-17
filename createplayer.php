<!DOCTYPE html>
<html>
<head>
    <title>Create Player</title>
    <meta charset = "utf-8">
    <meta name="viewport" content = "width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <!-- Team Logo -->
    <div class = "top"> 
        TEAM MANAGER
    </div>
    <!-- Four buttons, linking to corresponding pages -->
    <div class = "container">   
        <!-- Allows the user to enter information, which will then be entered into the database via addplayer.php -->
        <form action="addplayer.php" method = "post"> 
            First Name:<input type = "text" name = "firstname" class = "input"><br>
            Last Name:<input type = "text" name = "lastname"><br>
            Position:<select name = "position">
                <option value = "PG">Point Guard</option>
                <option value = "SG">Shooting Guard</option>
                <option value = "SF">Small Forward</option>
                <option value = "PF">Power Forward</option>
                <option value = "C">Center</option>
            </select><br>
            Height:<input type = "number" name = "height"><br>
            Weight:<input type = "number" name = "weight"><br>
            Year:<input type = "number" name = "year"><br>
            House:<input type = "text" name = "house"><br>
            Username:<input type = "text" name = "username"><br>
            Password:<input type = "password" name = "password"><br>
            <input type="submit" value = "Add Player">
        </form>
    </div>    
    <!-- Bottom of the page containing contact information -->
    <div class = "bottom">
        Made by Ethan He
    </div>
</body>
</html>