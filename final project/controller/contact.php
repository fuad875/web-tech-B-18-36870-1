<html>

<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <h3>Contact us</h3>

                <?php session_start();   ?>


                 <?php
                 if(isset($_POST['back'])) {
                     $_SESSION['error'] = '';
                     $_SESSION['success'] = '';
                     header("Location: home.php");
                 }
                ?>

                <?php if (isset($_SESSION['success']) && $_SESSION['success'] ) : ?>
                    <div class="alert alert-success">
                        Thank you for contacting us!
                    </div>
                <?php endif; ?>

                <form role="form" class="contact-form" action="data.php" method="post">


                    <?php if (isset($_SESSION['error']) && $_SESSION['error']) : ?>
                        <div class="alert alert-warning"><?php echo $_SESSION['error']; ?></div>
                    <?php endif; ?>


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <textarea class="form-control textarea" rows="3" name="msg" id="msg" placeholder="msg"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Send a message</button>
                        </div>
                    </div>
                </form>

               <form action="contact.php" method='post' >
                    <button type='submit' class='btn btn-danger' name='back'>Back </button>
               </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>

<?php
