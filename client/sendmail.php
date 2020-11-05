<?php
//Check whether the submission is made
if(isset($_POST["submit"])){

//msg body
$txtMsg = "<html>
<head></head>
<body>

<table>
	<tr>
		<td>Name : ".$_POST["Name"]."</td>
	</tr>
	<tr>
		<td>Email : ".$_POST["Email"]."</td>
	</tr>
	<tr>
		<td>Mobile : ".$_POST["Mobile"]."</td>
	</tr>
         <tr>
		<td>Subject: ".$_POST["Subject"]."</td>
	</tr>
        <tr>
		<td>Message :".$_POST["Message"]."</td>
	</tr>
                  
</table></body></html>";

//Declarate the necessary variables

$mail_to= "anthologyking@gmail.com"; 

$mail_from=$_POST["Email"];
$mail_sub=" Enquiry from  ";
$mail_mesg=$txtMsg;

/*$headers = "From:$mail_from/r/nReply-to:$mail_from";
$headers .= "Content-type: text/html\r\n";*/

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//Check for success/failure of delivery 
if(mail($mail_to,$mail_sub,$mail_mesg,$headers))
echo "<center><span class='textred' align='center'><b>E-mail has been sent successfully from $mail_sub to $mail_to</b></span></center>";
else
echo "<center><span class='textred' align='center'><b>Failed to send the E-mail from $mail_sub to $mail_to</b></span></center>";
}

echo ("<meta http-equiv='refresh' content='2;url=http://anthologyking.infinityfreeapp.com/bhaskar_test/contact.html?'>");
?>