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
                    <li class="active"><a href="team.blade.php">TEAM</a></li>
                    <li><a href="partners.blade.php">PARTNERS</a></li>
                    <li><a href="contact.blade.php">CONTACT</a></li>
                </ul>
            </div>
        </header>

        <!-- untuk team -->
        <section id="team">
            <div class="tengah">
                <div class="kolom">
                    <h1>Our Structur Team</h1>
                    <h2>Team</h2>
                    <p>Berikut ini beberapa orang yang merupakan team dari Melife Indonesia.</p>
            </div>

            <div class="team-list">
                <div class="kartu-team">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgBhcplevwUKGRs1P-Ps8Mwf2wOwnW_R_JIA&usqp=CAU"/>
                    <p>Raihan Alexander</p>
                </div>
                <div class="kartu-team">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgBhcplevwUKGRs1P-Ps8Mwf2wOwnW_R_JIA&usqp=CAU"/>
                    <p> Jacky Laravenda</p>
                </div>
                <div class="kartu-team">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgBhcplevwUKGRs1P-Ps8Mwf2wOwnW_R_JIA&usqp=CAU"/>
                    <p>Abraham Fransiskus</p>
                </div>
                <div class="kartu-team">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgBhcplevwUKGRs1P-Ps8Mwf2wOwnW_R_JIA&usqp=CAU"/>
                    <p>Jackson lee Tiang</p>
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
