<!DOCTYPE html>
<html>
    <head>
        <title>E-Vendor|Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" > 
    </head>
    <body>
        <div class="contactpage">
        <?php
        include 'include/header.php';
        ?>
        <div class="container">
            <div class="page-header">
                <h2 class="contacttxt">CONTACT US</h2>
            </div>
            <div class="jumbotron">     
                <div class='row'>
                <div class=' col-sm-4 col-md-4 col-lg-4'>
                    <h2 class="contact_heading">Write to Us</h2>
                    <center>
                        <form>
                        <div class='form-group'>
                            <input type='text' class='form-control contact_form' name='name' placeholder="Enter your Name">
                        </div>
                        <div class='form-group'>
                            <input type='email' class='form-control contact_form' name='email' placeholder="Enter your Email">
                        </div>
                        <div class='form-group'>
                            <input type='phone' class='form-control contact_form' name='email' placeholder="Enter your Mobile">
                        </div>
                        <div class='form-group'>
                            <textarea name='message'class="contact_form" id='message' rows='4' placeholder="Your Message"></textarea>
                        </div>
                        <div class='form-group'>
                        <button type='submit' class='btn btn-primary'>Submit</button>
                        </div>
                    </form>
                    </center>
                </div>
                <div class='col-sm-5 col-md-5 col-lg-5 col-sm-offset-3 col-md-offset-3 col-lg-offset-3'>
                    <h2 class="contact_heading">Company Information:</h2>
                    <center>
                    <p class="contact_details">New Delhi,</p>
                    <p class="contact_details">India</p>
                    <p class="contact_details">Phone:(00)-222-666-444</p>
                    <p class="contact_details">Fax:(000) 000 00 00 0</p>
                    <p class="contact_details">Email: info@enLink.com</p>
                    <p class="contact_details">Follow on: Facebook, Twitter</p>
                    </center>
                </div>
            </div>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
        </div>
    </body>
</html>
