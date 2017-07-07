<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/smoothScroll.js"></script>
    </head>
    <body>
        <main>
<?php
if (isset($_POST["email"])) {
    $to = 'woofie1234@interia.pl';
    $subject = $_POST["temat"];
    $message = $_POST["tresc"];
	$telefon = $_POST["telefon"];
	$message = "Numer telefonu: ".$telefon."  ".$message;
    $email = $_POST["email"];
    $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    $success = mail($to, $subject, $message, $headers);
    if (!$success) {
        $wynik = error_get_last()['message'];
    } else {
        $wynik = "Wysłano wiadomość e-mail.";
        $div = '<div id="mailing" style="position: fixed; width:100%; height: 50px; font-size:30px; text-align:center; z-index: 40; background-color: white;">' . $wynik . '</div>';
		
	}
	echo $div;
}

?>
            <nav>
                <img src="img/Logo3.png" alt="logo"/>
                <ul class="menu"> 
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li><a href="#onas">O nas</a></li>
                    <li><a href="#home">Meblomex</a></li>
                </ul>
            </nav>
            <section id="home">
                <div id="zdjecie1" class="parallax">
                    <header>
                        <div>
                            Lorem ipsum
                        </div>
                    </header>
                </div>
            </section>
            <div id="zdjecia">
                <img src="img/2017-03-31-11-17-05.jpg" alt="" />
                <img src="img/couch-furniture-living-room-sofa.jpg" alt="" />
                <img src="img/pexels-photo-262040.jpeg" alt="" />
                <!--<img src="img/dining-room-1078895_960_720.jpg" alt="" />-->
            </div>
            <section id="onas">
                <div id="zdjecie2" class="parallax">
                    <div>
                        <header>
                            <div>
                                O nas
                            </div>
                        </header>
                        <article>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                        </article>
                    </div>
                </div>
            </section>
            <section id="kontakt">
                <div>
                    <div id="formularz">
                        <form method="POST" action="" accept-charset="UTF-8">
                            <input type="text" name="imie" placeholder=" Imię"><br/>
							<input type="text" name="telefon" placeholder=" Numer telefonu"><br/>
                            <input type="email" name="email" placeholder=" E-mail" required><br/>
                            <input type="text" name="temat" placeholder=" Temat"><br/>
                            <textarea name="tresc" placeholder=" Treść" required></textarea><br/>
                            <button id="submit" type="submit">Wyślij</button>
                        </form>
                    </div>
                    <div id="danekontaktowe">
                        <header>
                            <div>Kontakt</div>
                        </header>
                        <article>
                            <p> ul. Przykładowa 6<br/>
                                00-000 Żory<br/></p><p>
                                Telefon: 111 111 111<br/>
                                E-mail: example@info.pl</p>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        <script>
            $('a[href^="#"]').on('click', function (e) {
                var el = $(e.target.getAttribute('href'));
                var elOffset = el.offset().top;
                var elHeight = el.height();
                var offset = elOffset;
                $.smoothScroll({
                    speed: 700
                }, offset);
                return false;
            });
            $(function () {
                $("#mailing").delay(4000).fadeOut();
            });
        </script>

    </body>
</html>
