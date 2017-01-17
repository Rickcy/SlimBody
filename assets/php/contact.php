<?php

if(isset($_POST['c_message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];


	$to      = 'kuden.and.ko@gmail.com';
	$subject = 'Mail from My Portfolio Site';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){
		$res['sendstatus'] = 'done';

		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to kuden.and.ko@gmail.com';
	}


	echo json_encode($res);
}

?>