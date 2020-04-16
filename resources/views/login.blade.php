<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DayCash - Connexion</title>
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/ivy.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>
            C'est le sassayé, venez me tromper
        </h1>
        <span class="subtitle"></span>
    </div>

    <div class="row form-container">
        <div class="one column">
            <a href="#" id="back-btn">
                <i class="fa fa-chevron-left"></i>
            </a>
        </div>
        <div class="seven columns steps-container">
            <div class="step show" id="step_1">
                <label for="phone">Entrez votre numéro de téléphone</label>
                <span class="required">Obligatoire</span>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="+000 000-000-000" style="letter-spacing: .1em">
            </div>

            <div class="step" id="step_2">
                <label for="city">Entrez votre mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
            </div>
        </div>
        <div class="four columns">
            <a href="#" id="send-btn" class="button button-primary">
                <span class="text">
                    Mot de passe
                </span>
                <span class="icon">
                    <i class="fa fa-unlock"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="row msg-container">
        <span>.</span>
    </div>
</div>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/scrollreveal.min.js"></script>
<script src="/assets/js/typed.min.js"></script>
<script src="/assets/js/misc.js"></script>
<script src="/assets/js/signin.js"></script>
<script>
    // Animated typing
    const typed = new Typed('span.subtitle', {
        strings: ['1 million de FCFA à gagner chaque jour', 'Une chance sur sept de gagner le Jackpot', 'Connectez vous et tentez de gagner 1 million de FCFA.'],
        loop: false,
        showCursor: false,
        typeSpeed: 30,
        backSpeed: 10,
        startDelay: 2000,
        backDelay: 2000
    });

    const sr = ScrollReveal();

    sr.reveal('h1', {
        origin: "top",
        distance: "100%",
        duration: 1000,
        delay: 1000
    });

    sr.reveal('span.subtitle', {
        origin: "left",
        distance: "100%",
        duration: 1000,
        delay: 2000
    });

    sr.reveal('div.form-container', {
        origin: "top",
        distance: "100%",
        duration: 1000,
        delay: 2500
    });
</script>
</body>
</html>