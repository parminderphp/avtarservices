@extends('layouts.default')
@section('content')

<div class="scrolltotop">
    <a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="ti-arrow-up"></i></a>
</div>

	<div class="section-lg bg-image" style="background-image: url(assets/images/banner/contactus.png)">
        <div class="bg-dark-06">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    	 <h1 class="display-4 font-weight-bold line-height-140" style="color:#fff;">Contact Us</h1>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section no-padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="margin-bottom-30">
                                <h6 class="heading-uppercase no-margin">Phone</h6>
                                <p>+(91) 8968465576</p>
                            </div>
                            <div class="margin-bottom-30">
                                <h6 class="heading-uppercase no-margin">Email</h6>
                                <p>parminder.php@gmail.com</p>
                            </div>
                            <div>
                                <h6 class="heading-uppercase no-margin">Address</h6>
                                <p>Avtar Services, sector 49b, Chandigarh</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="contact-form text-md-left">
								<?php
                                if(isset($_POST['submit'])) {							
                                                            
                                    require('include/config.php');
                                    extract($_POST);
                                
                                    $sql = "INSERT into contactus (name,email,message,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "New record created successfully";		
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                
                                    $conn->close();
                                        
                                    /*$to = "parminder.php@gmail.com";
                                    $subject = "From Avtar Services";
                                    $message = $message;
                                    $from = $email;
                                    $headers = "From:" . $from;
                                    mail($to,$subject,$message,$headers);*/
                                
                                }
                                ?>
                                <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="E-Mail" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" name="message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    </div>
                                </form>
                            
                                <!--<form method="post" id="contactform">
                                    <div class="form-row">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" id="name" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="email" id="email" name="email" placeholder="E-Mail" required="">
                                        </div>
                                    </div>
                                    <input type="text" id="subject" name="subject" placeholder="Subject" required="">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                    <button class="button button-lg button-border-1px button-outline-dark-2" type="submit">Send Message</button>
                                </form>
                                <div class="submit-result">
                                    <span id="success">Thank you! Your Message has been sent.</span>
                                    <span id="error">Something went wrong, Please try again!</span>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection