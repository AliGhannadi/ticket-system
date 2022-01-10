<?php
require_once 'config.php';


?>

<!doctype html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Ticket System</title>
   <link rel="stylesheet" href="styles.css">


 </head>
 
 

 <body>
<header>
<h1>Ticket Panel</h1>

</header>


 </body>

<div class="form-box">
    <form action="ticket.php" method="post">
        <p>Ticket Title</p>
        <input type="text" name="title" autocomplete="off" required><br>
        <p> Ticket Description </p>
        <div class="desc">
        <textarea name="desc" id="ticketdesc" autocomplete="off" required></textarea> <br>
        </div>
        <p> Email </p>
        <input type="email" name="email" autocomplete="off" required><br><br>
        <input type="submit" name="ticket_submit" value="Submit" id="submit"> 

</form>
</div> <br>
<div class="footer"> 
<div class="copyright"><h5>All Rights Reservered. Developed By <a id="ali" href="https://github.com/AliGhannadi">Ali Ghannadi</a></h5></div>
</div>


</html>