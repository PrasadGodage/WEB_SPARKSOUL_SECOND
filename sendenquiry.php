<?php
error_reporting(0);
if(isset($_GET['submit'])){
    $to = "sparksoul.rupali@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . $mobile . "  wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



   
             <div class="row">
               <div class="col-lg-7">
                 <div class="section-heading">
                 
                   <div id="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.124444479692!2d74.20307067385089!3d19.57916853598646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd01741c68dfc5%3A0xd432b4240ced9015!2sTop%2010%20Imperial%20Shopping%20Hub%2C%20Sangamner!5e0!3m2!1sen!2sin!4v1691316685449!5m2!1sen!2sin" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                   </div>
                   
                   <div class="info">
                     <span><i class="fa fa-phone"></i> <a href="#">+91 8055798679</a></span>
                     <span><i class="fa fa-envelope"></i> <a href="#">info@sparksoulinfotech.com</a></span>
                    
                   </div>
                   <div class="info">
                     
                     <span><i class="fa fa-map-marker"></i> <a href="#">Shop No. S-10B, 2nd Floor, Top Ten Imperial, Sangamner, 422605</a></span>
                   </div>
                 </div>
               </div>
               <div class="col-lg-5 align-self-center">
                 <form id="contact" action="sendenquiry.php" method="post">
                   <div class="row">
                     <div class="col-lg-12">
                       <fieldset>
                         <input type="name" id="name" placeholder="First Name" autocomplete="on" name="first_name" required>
                       </fieldset>
                     </div>
                     <div class="col-lg-12">
                       <fieldset>
                         <input type="name" id="name" placeholder="Last Name" autocomplete="on" name="last_name" required>
                       </fieldset>
                     </div>
                     <div class="col-lg-12">
                       <fieldset>
                         <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                       </fieldset>
                     </div>
       
                     <div class="col-lg-12">
                       <fieldset>
                         <input type="mobile" name="mobile" id="mobile" placeholder="Mobile No." autocomplete="on" required>
                       </fieldset>
                     </div>
                                  <div class="col-lg-12">
                       <fieldset>
                         <input type="text" rows="5" name="message" cols="30" id="website" placeholder="Message" required="">
                       </fieldset>
                     </div>
                     <div class="col-lg-12">
                       <fieldset>
                         <button type="submit" name="submit" value="Submit" id="form-submit" class="main-button">Submit Request</button>
                       </fieldset>
                     </div>
                   </div>
                 </form>
               </div> 
             </div>
        