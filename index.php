<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$human = $_POST['human']
    $from = 'From: TangledDemo'; 
    $to = 'lifeofloadish@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";




    /* Anything that goes in here is only performed if the form is submitted */
	if ($_POST['submit']) {
    if ($name != '' && $email != '') {/* need name and email to send */ 
		
        if ($human == '21') {		/*spam check */ 		 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
			} 
			else{ 
	        echo '<p>Oops! ¯\_(ツ)_/¯!</p>'; 
			} 
		} 
		else if ($_POST['submit'] && $human != '21') { /*spam is wrong */
			echo '<p>Ah ah ah, you didnt say the magic word!</p>';
		}
    } 
	else {/*missing fields */ 
        echo '<p>Fill in all required fields!</p>';
    }
}
	
	
	
		

?>