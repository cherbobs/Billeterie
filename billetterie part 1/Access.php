<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "ValidateTicket.php" method = "POST"> <!-- formulaire qui connecte la personne -->
        <br> 
        Name: <input type = "text" name = "name"  required >
        <input type = "submit" name = "submit" value = "Enter">
        <br>
        <br>
        Ticket Number: <input type = "text" name = "ticketnum" required >
        <input type = "submit" name = "submit" value = "Enter">
</form>
</body>
</html>