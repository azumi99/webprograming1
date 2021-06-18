<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="asset/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72eca601e0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>acbagus.com</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="index.html">ACBAGUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- breadcrumb -->
    <div class="container space">
        <nav aria-label="breadcrumb space">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>

    <!-- form contact -->
    <div class="kotak">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Saran Anda Berguna Bagi Kami</h3>
                <p class="text">
                    Tinggalkan pesan anda dan jangan lupa ikuti kami di social berikut ya saya tunggu follownya.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="asset/image/contact/location.png" class="icon" alt="" />
                        <p>Jalan Menceng Lurus No 1001</p>
                    </div>
                    <div class="information">
                        <img src="asset/image/contact/email.png" class="icon" alt="" />
                        <p>admin@bagus.id</p>
                    </div>
                    <div class="information">
                        <img src="asset/image/contact/phone.png" class="icon" alt="" />
                        <p>082251116009</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Jan lupa follow ya :</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/ilham.kuhakusoft">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/ananda_xcn/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/ilham-tegar-1b60391a5/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form method="POST" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Nama</label>
                        <span>Nama</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Nomor Handphone</label>
                        <span>Nomor Handphone</span>
                    </div>
                    <div class="input-container">
                        <select name="service" class="input">
                            <option value=""></option>
                            <option value="Cuci AC">Cuci AC</option>
                            <option value="Bongkar Pasang AC">Bongkar Pasang AC</option>
                            <option value="Perbaikan AC">Perbaikan AC</option>
                        </select>
                        <label for="">Pilih Layanan</label>
                        <span>Pilih Layanan</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Keluhan</label>
                        <span>Keluhan</span>
                    </div>
                    <input type="submit" name="submit" value="Send" class="btm" />
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $subjek = $_POST['name'];
        $email = $_POST['email'];
        $pesan = $_POST['phone'] . '<br/>' . $_POST['service'] . '<br/>' . $_POST['message'];

        include "asset/classes/class.phpmailer.php";
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPDebug = 2;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "kuhakuteam99@gmail.com";
        $mail->Password = "155ilham";
        $mail->SetFrom("kuhakuteam99@gmail.com", $email);
        $mail->Subject = $subjek;
        $mail->AddAddress("ilhambintang399@gmail.com");
        $mail->MsgHTML($pesan);

        if ($mail->Send()) {
            echo "<script>alert('Terkirim, Kami akan segera menghubungi anda')</script>";
            echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
        } else
            echo "<script>alert('GAGAL')</script>";
        echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
    }
    ?>

    <!-- footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>ACBAGUS.ID</h3>
                        <p>acbagus.id layanan maintenance air conditioner dengan protokol kesehatan mengutamakan
                            kepuasan pelanggan</p>
                        <p>
                            <strong>Phone:</strong> +62 822 5111 6009<br>
                            <strong>Email:</strong> admin@acbagus.id<br>
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Sported</h4>
                        <div style="margin-top: 5%; text-align: center;">
                            <img src="asset/image/footer1.png" style="width: 20%; margin: 2%; margin-left: 0% ; ">
                            <img src="asset/image/footer2.png" style="width: 20%; margin: 2%;">
                            <img src="asset/image/footer3.png" style="width: 20%; margin: 2%;">
                            <br />
                            <img src="asset/image/footer4.png" style="width: 20%; margin: 2%; margin-left: 0% ; ">
                            <img src="asset/image/footer5.png" style="width: 20%; margin: 2%;">
                            <img src="asset/image/footer6.png" style="width: 20%; margin: 2%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>acbagus.id</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href=""><i class="fab fa-instagram"></i></i></a>
                <a href="" target="_blank" class="instagram"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="asset/js/cotactstyle.js"></script>

</body>

</html>