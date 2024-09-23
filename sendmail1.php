 <!DOCTYPE html>
  <head>
  <title>backgroundImage</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
 </head>
 <body>
  <?php
  // line of code to retrieve  form data    "post"
    $name=$_POST['name'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $message=$_POST['message'];

/* $msg variable */
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Sender Name: $name\r\n ";
    $msg.="Mobile No: $mobileno\r\n ";
    $msg.="Sender E-mail: $email\r\n ";
    $msg.="Message: $message\r\n ";


    $to=" Enter Email Address To / Receiving";   // email  sent
    $subject="Web Site Form";   // subject
    $mailheaders="From: $email\r\n";  // email   display  the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p style='background-color:green;color:white;width:200px;height:40px;text-align:center;font-size:18px;'> Form Received</p>";  //file_get_contents("img.png");
     }
     else
     {
      echo "<p style='background-color:red;color:white;width:200px;height:40px;text-align:center;font-size:18px;'> The form has not been sent </p>";
     }

      if(mail($to,$subject,$body))
     {
   mail($email,$msg,"Day/Night Image","Form Received");
  }

     ?>


    <p>Detail of Form!<br />
       <?php
       echo  $msg;
       ?>

       </p>
   <p><a href="index.html">Main Page</p>

 </body>
</html>
