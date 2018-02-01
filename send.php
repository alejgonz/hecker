
<?php
function mailing($to,$sender_name,$from,$subject,$body)
{
    global $SERVER_NAME;
    $subject = nl2br($subject);
    $body = nl2br($body);

    $recipient = $to;
    $headers = "From: " . "$sender_name" . "<" . "$from" . ">\n";
    $headers .= "X-Sender: <" . "$to" . ">\n";
    $headers .= "Return-Path: <" . "$to" . ">\n";
    $headers .= "Error-To: <" . "$to" . ">\n";
    $headers .= "Content-Type: text/html\n";
    @mail($recipient,$subject,$body,$headers);	
}
		//Change your email here
		$to="example@mail.com";
		$sender=$_POST['name'];
		$from = $_POST['email'];
		$subject = $_POST['subject'];
		$body = "Name: ".$_POST['name']."<br>Phone: ". $_POST['phone']."<br>Comments: ".$_POST['comments'];
		
		mailing($to,$sender,$from,$subject,$body); 
		echo "Successfully Sent!";
	 
?> 