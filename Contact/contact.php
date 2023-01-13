<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact / Games / Review / Ratings / Spellen">
    <meta name="author" content="E. Boateng, B. Diker, Y. Maâyouf, A. Oomen">
    <meta name="keywords" content="Games / Review / Ratings / Spellen">
    <title>Contact - GameStars</title>
    <link rel="Website icon" type="png" href="images/gamestars logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
                session_start();

                // $_SESSION['naam'] = @$_POST["naam"];
                // $_SESSION["email"] = @$_POST["email"];
                // $_SESSION["onderwerp"] = @$_POST["onderwerp"];
                // $_SESSION["toelichting"] = @$_POST["toelichting"];


                if(isset($_POST['naam'])){
                    $_SESSION['naam'] = $_POST["naam"];
                }else{
                    $_SESSION['naam'] = '';
                }
                if(isset($_POST['email'])){
                    $_SESSION["email"] = $_POST["email"];
                }else{
                    $_SESSION["email"] = '';
                }
                if(isset($_POST['onderwerp'])){
                    $_SESSION["onderwerp"] = $_POST["onderwerp"];
                }else{
                    $_SESSION["onderwerp"] = '';
                }
                if(isset($_POST['toelichting'])){
                    $_SESSION["toelichting"] = $_POST["toelichting"];
                }else{
                    $_SESSION["toelichting"] = '';
                }


                file_put_contents("form.php", $_SESSION['naam'] . ' - ' . $_SESSION['email'] . ' - ' . $_SESSION['onderwerp'] . ' - ' . $_SESSION['toelichting']);
                session_destroy();
            ?>
<body>
    <header class="col-12">
        <section class="d-flex justify-content-between">
            <article class="col-lg-2">
                <a href="../Homepage/index.html">
                    <img src="images/logo.png" alt="Logo van GameStars" class="col-lg-10 col-4">
                </a>
            </article>
            <nav class="col-lg-10 navbar navbar-expand-lg overlay">
                    <div>
                        <button class="navbar-toggler mt-3" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            </button>
                            <ul class="navbar-nav mb-2 mb-lg-0 mobile">
                                <li class="nav-item">
                                    <a class="nav-link" href="../Homepage/index.html">
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Ratings/ratings.html">
                                        <p>Ratings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Alle spellen/alle-spellen.html">
                                        <p>Alle spellen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Spel review/spel-review-2.html">
                                        <p>Spel review</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Merchandise/merchandise.html">
                                        <p>Merchandise</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../Over ons/over-ons.html">
                                        <p>Over ons</p>
                                    </a>
                                </li>
                                <li class="nav-item mb-5">
                                    <a class="nav-link" href="../Contact/contact.php">
                                        <p class="lijnHome">Contact</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
        <section class="mt-5">
            <h1>Contact</h1>
        </section>
    </header>
    <main class="container-fluid">
        <article class="pt-3  col-lg-8 mx-auto">
            <h3>Stuur een Email</h3>
            <p>*verplicht veld</p>
        </article>
        <form class="col-12  col-lg-8 mx-auto" method="post" action="contact.php">
            <div class="row mb-3">
                <label for="naam" class="col-5 col-form-label" >
                    <h2>Naam *</h2>
                </label>
                <div class="col-12">
                    <input type="text" class="form-control" id="naam" name="naam">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-5 col-form-label">
                    <h2>E-mail *</h2>
                </label>
                <div class="col-12">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="onderwerp" class="col-5 col-form-label">
                    <h2>Onderwerp *</h2>
                </label>
                <div class="col-12">
                    <input type="text" class="form-control" id="onderwerp" name="onderwerp">
                </div>
            </div>
            <div class="row mb-3">
                <label for="toelichting" class="col-5 col-form-label">
                    <h2>Toelichting *</h2>
                </label>
                <div class="col-12 mb-2">
                    <textarea type="text" name="toelichting" class="col-12"></textarea>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <button type="submit" class="btn btn-dark col-3 col-md-2 col- col-lg-2">Bevestigen</button>
                </div>
            </div>
        </form>
        <section class="row">
            <article class="col-1 col-lg-3">

            </article>
            <article class="col-10 pt-4 pb-3 mb-4 col-lg-6 mx-lg-auto">
                <p class="text-center">Onze experts denken graag met u mee. Voor samenwerkingen, vragen, opmerkingen of
                    andere zaken kunt u ons bereiken via E-mail, telefoon, contact, social media of u kunt ten alle
                    tijden een brief sturen.</p>
            </article>
            <article class="col-2 col-lg-3">

            </article>
            <article class="col-8 col-lg-6 mx-lg-auto gegevens text-center">
                <p>+316 57 32 12 84</p>
                <p>info@Gamestars.nl</p>
                <p>Betaplein 18,</p>
                <p class="mb-5">2321 CS Leiden</p>
            </article>
        </section>
    </main>
    <div class="footer-dark ">
    <footer>
    <div class="container ">
        <div class="row ">
          <div class="col-md-6 col-lg-6 item text mt-2 ">
            <h1>Game Stars</h1>
          </div>
          <div class="mt-5 mb-5 ml-2 col item social">
            <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram.png"
                alt="icoontje van instagram"></a>
            <a href="https://nl-nl.facebook.com/" target="_blank"><img src="images/facebook.png"
                alt="icoontje van facebook"></a>
            <a href="https://web.whatsapp.com/" target="_blank"><img src="images/whatsapp.png"
                alt="icoontje van whatsapp"></a>
            <a href="https://twitter.com/?lang=nl" target="_blank"><img src="images/twitter.png"
                alt="icoontje van twitter"></a>
            <a href="https://www.tiktok.com/nl-NL/" target="_blank"><img src="images/tiktok.png"
                alt="icoontje van tiktok"></a>
          </div>
        </div>
      </div>
      <div class="alle-infos row mt-4 mr-2 justify-content-center">
        <div class="col-sm-6 col-md-3 col-lg-3 item mb-4">
          <h3>Games</h3>
          <ul>
            <li><a href="../Homepage/index.html">Alle plattfroms</a></li>
            <li><a href="../Homepage/index.html">Playstaion</a></li>
            <li><a href="../Homepage/index.html">Xbox</a></li>
            <li><a href="../Homepage/index.html">Nitendo</a></li>
            <li><a href="../Homepage/index.html">PC</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 item mb-4">
          <h3>Media</h3>
          <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://nl-nl.facebook.com/" target="_blank">Facebook</a></li>
            <li><a href="https://www.tiktok.com/nl-NL/" target="_blank">Tiktok</a></li>
            <li><a href="https://twitter.com/?lang=nl" target="_blank">Twitter</a></li>
            <li><a href="https://www.reddit.com/" target="_blank">Reddit</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 item mb-4">
          <h3>Legal</h3>
          <ul>
            <li><a href="#">Gebruikenvoorwaarden</a></li>
            <li><a href="#">Privacybeleid</a></li>
            <li><a href="#">Disclaimers</a></li>
            <li><a href="../Contact/contact.php">Bedrijf info</a></li>
            <li><a href="#">Toegankelijkheid</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 item mb-4">
          <h3>Diensten</h3>
          <ul>
            <li><a href="../Contact/contact.php">Contact ons</a></li>
            <li><a href="#">Adverteren</a></li>
            <li><a href="#">Carrière</a></li>
            <li><a href="#">Steun ons</a></li>
            <li><a href="#">Nieuwsbrief</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12 item text mt-5 ">
            <p>© Copyright 2023 GameStars, </p>
            <p>aan de inhoud van deze website kunnen op geen enkel wijze rechten worden ontleend.</p>
          </div>
        </div>
    </footer>
  </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>