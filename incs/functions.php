<?php

function ticket_submit($ticket_title, $ticketdesc, $email){
   global $db;
   $query = mysqli_query($db, "INSERT INTO tickets (ticket_title, ticketdesc, email) VALUES ('$ticket_title', '$ticketdesc', '$email')");
  
if($query) {
	return true;
} else {
	return false;
}
}

function tickets(){
   global $db;
   $query = mysqli_query($db, "SELECT * FROM tickets BY id DESC");
   return $query;

}


function redirect($url){
	header("Location: " . $url);
}

function admin_login($username, $password){
   if($username == ADMIN_USERNAME && $password == ADMIN_PASSWORD){
      redirect('index.php');
      return true;
   }else{
     return false;
   }
}

function is_login() {
  if(isset($_SESSION['adminlogin'])) {
     return true;
  }else{
     return false;
    
  }
}

function get_tickets(){
   global $db;
   $query = mysqli_query($db, "SELECT * FROM tickets ORDER BY id DESC");
   return $query;
}

function admin_logout() {
	unset($_SESSION['adminlogin']);
}
   ?>




