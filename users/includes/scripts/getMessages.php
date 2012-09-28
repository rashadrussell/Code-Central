<?php
session_start();

if(file_exists(dirname(__DIR__) . '/' . 'cdeC_load.php')) {
require_once(dirname(__DIR__) . '/' . 'cdeC_load.php');
} else {
    echo '<br />';
    echo 'doesn\'t exist';
}

$q = $_GET["q"];

$email = $_SESSION['email'];
$email = stripslashes($email);
$email = mysql_real_escape_string($email);

$sql = mysql_query("SELECT toUser, fromUser, subject, message, date FROM messages WHERE toUserId='$_SESSION[id]' ORDER BY date DESC");


function getMessages() {
    global $sql;
    
    while($row = mysql_fetch_array($sql))
    {
       echo '<li class="message">' . $row['message'] . '</li>';
    }   
}

?>


<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementsByName("mainContent").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementsByClass("message").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getMessages.php?q="+str,true);
xmlhttp.send();
}
</script>


