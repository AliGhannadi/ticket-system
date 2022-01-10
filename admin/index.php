<?php
require_once ('../config.php');

$tickets = get_tickets();

if(!is_login()){
   redirect('login.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<title>admin panel</title>
<link rel="stylesheet" href="styles2.css">
</head>


<body>
<p id="logout"><a href="?admin-logout=1">Logout</a></p>
<table>
<thead>
    <tr>
        <th id="title">Ticket Title</th>
        <th id="title">Ticket Mail</th>
        <th id="title">Ticket Description</th>
        <th id="title">Ticket Time</th>
    </tr>
</thead>


<?php while($ticket = mysqli_fetch_array($tickets))
{
?>
<tr>
        <th id="desc"><?php echo $ticket['ticket_title'] ?></th>
        <th id="desc"><?php echo $ticket['email'] ?></th>
        <th id="desc"><?php echo $ticket['ticketdesc'] ?></th>
        <th id="desc"><?php echo $ticket['ticket_time'] ?></th>
    </tr>
    

    <?php } ?>
    </table>
</body>












</html>