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
                    <li class="active"><a href="about.blade.php">ABOUT</a></li>
                    <li><a href="team.blade.php">TEAM</a></li>
                    <li><a href="partners.blade.php">PARTNERS</a></li>
                    <li><a href="contact.blade.php">CONTACT</a></li>
                </ul>
            </div>
        </header>

        <!-- about -->
        <section class="about">
            <div class="container">
                <img src="https://media-exp1.licdn.com/dms/image/C560BAQFTELZ7-16bHg/company-logo_200_200/0/1613253122659?e=2159024400&v=beta&t=bIw76nerjyT9Pgf3grHmJxzTS6zi5lH9zUwoUp8lMWo" align="center">
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</P>
            </div>
        </section>

        <!-- kawan kampong -->
        <section class="project">
            <div class="container">
                <h3>KAWAN KAMPONG</h3>
                <img src="img/kawankampong.jpeg">
                <div class="text">
                    <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</P>
                </div>
                <h3>KAWAN SEHAT</h3>
                <img src="img/kawansehat.jpeg">
                <div class="text">
                    <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</P>
                </div>
                <h3>KAWAN BICARA</h3>
                <img src="img/kawanbicara.jpeg">
                <div class="text">
                    <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</P>
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
