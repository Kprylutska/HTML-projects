<!DOCTYPE html>

<head>

    <title>Tajfun sushi</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    
</head>

<body onload="loadPage()">
    <div class="header">
        <div class="logo">
            <img class="logo_img" src="../images/logo.png">
            <h1>Tajfun sushi</h1>
            <h3>sushi na wynos</h3>
        </div>
    </div>
    <div class="menu_container">
        <div class="menu_inner_container">
            <nav class="menu_nav">
                <a id="str_gl" class="link_nav" href="/home">STRONA GLÓWNA</a>
                <a class="link_nav" href="/menu">MENU</a>
                <a class="link_nav" href="/orders">ZAMÓWIENIE</a>
                <a class="link_nav" href="/contact">KONTAKT</a>
            </nav>
            <nav class="menu_nav_icons">
                <a href="/profile"><img style="height: 25px;" src="../images/profile.png"></a>
                <a href="/cart"><img style="height: 25px;" src="../images/cart.png"></a>
            </nav>
        </div>
    </div>
    <div class="content_container">
        <div class="content_inner_container">
            @yield('content')
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer_links">
            <a class="footer_link" href="javascript://"> <img src="../images/instagram_img.png"> </a>
            <a class="footer_link" href="javascript://"> <img src="../images/facebook_img.png"> </a>
            <a class="footer_link" href="javascript://"> <img src="../images/twitter_ico.png"> </a>
        </div>
        <div class="footer_nav_menu">
            <a class="footer_nav" href="javascript://" >WRÓC DO GÓRY</a>
            <a class="footer_nav" href="javascript://">ZOBACZ MENU</a>
            <a class="footer_nav" href="javascript://">ZAMÓW ONLINE</a>
        </div>
    </footer>
</body>