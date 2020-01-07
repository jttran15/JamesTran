<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='jatran@aggies.ncat.edu';
		$subject='Form Submission';
		$message="Names: ".$name."\n"."Phone: ".$phone"\n"."Wrote the following: "."\n\n".$msg;
		$headers="Form: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo"<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wring!";
		}
	}
?>