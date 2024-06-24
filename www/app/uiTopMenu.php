<?php $scriptName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);?>

<nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav" style="font-family: 'Noto Sans', sans-serif;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/" style="font-family: 'Noto Sans', sans-serif;">
            <span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                <img width="32" height="32" src="../assets/favicons/favicon-192.png?h=d4de2dbc22fa110a47b25d496d14c43a">
            </span>
            <span>A ByG Creation</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span
                    class="visually-hidden">Toggle</span>
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link <?php if($scriptName == "index"){echo "active text-primary";} ?>" href="/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link <?php if($scriptName == "services"){echo "active text-primary";} ?>" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link <?php if($scriptName == "projects"){echo "active text-primary";} ?>" href="#">Projets</a></li>
                <li class="nav-item"><a class="nav-link <?php if($scriptName == "contact"){echo "active text-primary";} ?>" href="contact.php">Contact</a></li>
            </ul>

            <?php
            $session["Auth"] = false;

            if ($session["Auth"]){?>
                <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://fr.gravatar.com/userimage/37035730/7caee715ec7a49e2480c7a45cf38da5e.jpeg" />
                <div>
                    <p class="fw-bold text-primary mb-0">David RAMBEAU</p>
                    <p class="text-muted mb-0">Administrateur</p>
                </div>
            </div>
                <?php
            }
            else{?>
                <a class="btn btn-primary shadow" role="button" href="login.php">Connexion</a>
            <?php
            }
            ?>


        </div>
        </div>
</nav><!-- End: Navbar Centered Links -->