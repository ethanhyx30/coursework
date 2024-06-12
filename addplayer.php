<?php
    //Connect to the database
    include_once("connection.php");
    //For debugging - outputs all the entered values to make sure they are correct
    echo $_POST["firstname"]."<br>";
    echo $_POST["lastname"]."<br>";
    echo $_POST["position"]."<br>";
    echo $_POST["height"]."<br>";
    echo $_POST["weight"]."<br>";
    echo $_POST["year"]."<br>";
    echo $_POST["house"]."<br>";
    echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";

    $stmt = $conn->prepare("INSERT INTO TblPlayers
    (PlayerID, Firstname, Lastname, Position, Height, Weight, Year, House, Username, Password, Status, Selected)VALUES
    (null, :firstname, :lastname, :position, :height, :weight, :year, :house, :username, :password, 0, 0)");

    $stmt->bindParam(":firstname", $_POST["firstname"]);
    $stmt->bindParam(":lastname", $_POST["lastname"]);
    $stmt->bindParam(":position", $_POST["position"]);
    $stmt->bindParam(":height", $_POST["height"]);
    $stmt->bindParam(":weight", $_POST["weight"]);
    $stmt->bindParam(":year", $_POST["year"]);
    $stmt->bindParam(":house", $_POST["house"]);
    $stmt->bindParam(":username", $_POST["username"]);
    $stmt->bindParam(":password", $_POST["password"]);
    $stmt->execute();
    $conn=null;
?>  