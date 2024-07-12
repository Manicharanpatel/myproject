<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email addresses
$admin_email = 'harithakondi826@gmail.com';
$owner_email = 'charan.vkantech@gmail.com';

// Send email to admin
$admin_subject = 'New Form Submission';
$admin_message = "Hello Admin,\n\nYou have received a new form submission:\n\nName: $name\nEmail: $email\nMessage:\n$message";
mail($admin_email, $admin_subject, $admin_message);

// Send email to owner
$owner_subject = 'New Form Submission';
$owner_message = "Hello Owner,\n\nYou have received a new form submission:\n\nName: $name\nEmail: $email\nMessage:\n$message";
mail($owner_email, $owner_subject, $owner_message);

// Send thank you email to the member
$member_subject = 'Thank You for Your Submission';
$member_message = "Hello $name,\n\nThank you for submitting the form. We will get back to you shortly.\n\nBest Regards,\nYour Organization";
mail($email, $member_subject, $member_message);
echo $email;//''. $member_subject, $member_message;

// Redirect back to the thank you page or any other page
 header('Location:index.php');
// //  <?php
//     $to      = 'charanthumula007@gmail.com';
//     $subject = 'the subject';
//     $message = 'hello';
//     $headers = 'From: charanthumula007@gmail.com'       . "\r\n" .
//                  'Reply-To: harithakondi826@gmail.com' . "\r\n" .
//                  'X-Mailer: PHP/' . phpversion();

//     mail($to, $subject, $message, $headers);


 ?>

