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

<body>
    <header>

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
            <?php
                // session_start();

                // $_SESSION['naam'] = @$_POST["naam"];
                // $_SESSION["email"] = @$_POST["email"];
                // $_SESSION["onderwerp"] = @$_POST["onderwerp"];
                // $_SESSION["toelichting"] = @$_POST["toelichting"];

                session_start();

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

                print_r($_SESSION);
                file_put_contents("form.php", $_SESSION['naam'] . ' - ' . $_SESSION['email'] . ' - ' . $_SESSION['onderwerp'] . ' - ' . $_SESSION['toelichting']);
                // session_destroy();
            ?>
    </main>
    <footer>

    </footer>
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