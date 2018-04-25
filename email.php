<?php 
include('signup.php');
$to = "rohitbalahi@gmail.com";
$subject = "Email Subject Here";
$email = $_POST['email'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phone'];
$credit = $_POST['credit'];
$time = $_POST['time'];
$amount = $_POST['amount'];
$message = $_POST['message'];

$content = '
<body style="font-family:arial;">
  <p><br /> </p>
  <table style="width: 100%;" border="0" cellspacing="0" cellpadding="1" align="center">
    <tbody>
      <tr>
        <td colspan="2" style="background-color: #fff;" valign="top" align="center">
          <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
            <br>
            <h3 style="color: #ffc107;">Form</h3>
            <tbody>
              <tr>
                <td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <tr>
                <td colspan="2" style="background-color: #ffc107; color: #fff; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <tr>
                <td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <!-- main content here -->
               <tr>
                <td colspan="2" align="" style="padding: 20px;">
                  <br>
                  <b>Full Name</b> - '.$fname.' '.$lname.'<br> <br>
                  <b>Email Address</b> - '.$email.'<br> <br>
                  <b>Telephone NO</b> - '.$phone.'<br> <br>
                  <b>Credit</b> - '.$credit.'<br> <br>
                  <b>Time</b> - '.$time.'<br> <br>
                  <b>Amount</b> - '.$amount.'<br> <br>
                  <b>Message</b> - "'.$message.'"<br> <br>


                  <br>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <tr>
                <td colspan="2" style="background-color: #ffc107; color: #fff; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <tr>
                <td colspan="2" style="background-color: black; color: #FFF; font-family: Arial; font-size: 12px; padding: 3px;" align="center" valign="top">
                 <p><u></u></p> </td>
               </tr>
               <tr>
                <td>
                </td>
                <td>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>';

  // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  // More headers
$headers .= 'From: <no-reply@wefunds.nyc>' . "\r\n";
  //$headers .= 'Cc: yishmaell@yahoo.com' . "\r\n";
mail($to,$subject,$content,$headers);
  //header("location:javascript://history.go(-1)");
echo "<script type='text/javascript'>window.history.go(-1);window.alert('Your Request has been sent!');</script>";

?>