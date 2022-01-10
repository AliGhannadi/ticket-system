
<?php

if(isset($_POST['ticket_submit'])) {
    $ticket_title = $_POST["title"];
    $ticketdesc = $_POST["desc"];
    $email = $_POST["email"];
    // Send Email To User
    $from = "test@gmail.com"; // Your Email
    $to = "$email"; // Dont Touch it
    $subject = "Your Ticket Reacived"; // Ticket Title
    $message = "Hi Dear User. Your Ticket Message  Reacived Succesfully. Your Ticket Title: $ticket_title, Your Ticket Description: $ticketdesc"; // Ticket Description
    $headers = "From:" . $from; 
    if(ticket_submit($ticket_title, $ticketdesc, $email)) {
      
        redirect('ok/ok.html');
        mail($to,$subject,$message,$headers);
    }else {
        echo 'Something Went Wrong. Try Again Later.';
    }
}
if(isset($_POST['adminsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(admin_login($username, $password)){
       $_SESSION['adminlogin'] = $username;
        redirect('index.php'); 
    }else{
        echo 'Wrong Username Or Password';
    }
}

if(isset($_GET['admin-logout'])){
    admin_logout();
    redirect('admin/login.php');
}


    
?>
