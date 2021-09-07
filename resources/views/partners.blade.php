<DOCTYPE html>
    <html>
    <html>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MELIFE INDONESIA</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- loader -->
        <div class="bg-loader">
            <div class="loader"></div>
        </div>

        <!-- header -->
        <div class="medsos">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <h1><a href="welcome.blade.php">Melife</a></h1>
                <ul>
                    <li><a href="welcome.blade.php">HOME</a></li>
                    <li><a href="about.blade.php">ABOUT</a></li>
                    <li><a href="team.blade.php">TEAM</a></li>
                    <li class="active"><a href="partners.blade.php">PARTNERS</a></li>
                    <li><a href="contact.blade.php">CONTACT</a></li>
                </ul>
            </div>
        </header>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <h1>Our Top Partners</h1>
                    <h2>Partners</h2>
                    <p>Berikut ini adalah partner atau rekan kerja Melife yang selalu mendukung Melife Indonesia.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="img/invotech.jpeg"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer>
            <div class="container">
                <small>Copyright &copy; 2020 - Anggi. All Rights Reserved.</small>
            </div>
        </footer>


        <script type="text/javascript">
            $(document).ready(function(){
                $(".bg-loader").hide();
            })
        </script>
    </body>
    </html>
