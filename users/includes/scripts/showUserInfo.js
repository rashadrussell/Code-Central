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
    document.getElementsByName("firstname").innerHTML=xmlhttp.responseText;
    document.getElementsByName("lastname").innerHTML=xmlhttp.responseText;
    document.getElementsByName("country").innerHTML=xmlhttp.responseText;
    document.getElementsByName("website").innerHTML=xmlhttp.responseText;
    document.getElementsByName("bio").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getUserInfo.php?q="+str,true);
xmlhttp.send();
}

