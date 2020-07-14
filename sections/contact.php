    <?php
        $result = "";
        if (isset($_POST['submit'])) {
            require 'phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->Host='smtp.gmail.com';
            // $mail->Host='nderaxcel.alwaysdata.net';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'nderagakuraaxcel@gmail.com';
            $mail->Password = 'axcel24051991jesus';

            $mail->setFrom($_POST['email'],$_POST['name']);
            $mail->addAddress('irferax@gmail.com');
            $mail->addReplyTo($_POST['email'],$_POST['name']);


            $mail->isHTML(true);
            $mail->Subject = 'From Soubmission: '.$_POST['subject'];
            $mail->Body = '<h1 align="center"> Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';


            if (!$mail->send()) {
                $result = "Something went wrong. Please try again";
            }else{
                $result = "Thanks ".$_POST['name']." for contacting us. We'll back to you soon !";
            }
        }
    ?>
    <!-- Getting touch -->
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form action="" class="contact-form" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="msg" placehorder="Message" id="" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="submit" value="SEND MESSAGE" class="btn btn-primary">
                        <!-- <button type="submit" class="btn btn-primary">SEND MESSAGE</button> -->
                        <h5><?php echo $result; ?></h5>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>Adresse: </b> <i class="fa fa-map-marker"></i> Bujumbura Burundi</div>
                    <div class="follow"><b>Phone: </b><i class="fa fa-phone"></i> +25779383134</div>
                    <div class="follow"><b>Email: </b><i class="fa fa-envelope-o"></i> irferax@gmail.com</div>
                    <div class="follow"><label for=""><b>Get Social: </b></label>
                       <a href=""> <i class="fa fa-facebook"></i></a>
                       <a href=""> <i class="fa fa-instagram"></i></a>
                       <a href=""> <i class="fa fa-linkedin"></i></a>
                       <a href=""> <i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>