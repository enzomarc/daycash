<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DayCash - Online lottery</title>
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/ivy.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    @yield('styles')
</head>
<body>
<div class="header">
    <div class="row navbar">
        <div class="four columns">
            <a href="#">
                <h6 style="font-family: 'Gilroy ExtraBold', sans-serif; color: #fff; margin: 0; font-size: 1.4em;"><i class=""></i>DayCash</h6>
            </a>
        </div>
        <div class="eight columns">
            <button class="topup"><i class="fas fa-upload"></i> &nbsp;Recharger mon compte</button>
            <i style="margin-right: .5%;" class="fas fa-coins"></i>
            <span class="points"></span>

            <a class="menu_btn" href="#">
                <img class="avatar" src="/assets/img/avatar.jpg" alt="user_avatar">
            </a>
        </div>
    </div>
    <div class="row menu">
        <span class="username"></span>
        <span class="phone"></span>
        <a href="#"><i class="fa fa-cog"></i>Paramètres</a>
        <a href="#"><i class="fa fa-globe-africa"></i>Parrainage</a>
        <a id="logout-btn" href="#"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
    </div>
</div>

<div class="row ads"></div>

<div class="row content">
    @yield('content')
</div>


<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/toastr.min.js"></script>
<script src="/assets/js/misc.js"></script>
@yield('scripts')
<script>
    checkAuth();
    toastr.options.progressBar = true;
    toastr.options.positionClass = "toast-bottom-right";
    const user = JSON.parse(sessionStorage.getItem('user'));

    $('span.points').text(user.points + 'pts');
    $('span.username').text(user.name);
    $('span.phone').text(user.phone);

    $('a.menu_btn').click(function () {
        const menu = $('div.menu');

        if (menu.hasClass('show')) {
            menu.addClass('hide').removeClass('show').hide();
        } else {
            menu.removeClass('hide').addClass('show').show();
        }
    });

    $('a#logout-btn').click(function () {
        logout();
    });
</script>
</body>
</html>