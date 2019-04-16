<head>
    <!-- title ..................................... -->
    <title>Z I I R O</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="vcomm/favicon.png">

    <!-- facebook ..................................... -->
    <meta property="og:url"           content="https://www.vcomm.com.br" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="V-COMM - Virtual Commerce" />
    <meta property="og:description"   content="V-Comm é uma plataforma de Marketing Digital que ajuda você a divulgar sua empresa na Internet." />
    <meta property="og:image"         content="facebook.jpg" />

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- css ..................................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:200,400,700,900');
        body{
            font-family: 'Montserrat', sans-serif !important;
        }
        .label{
            color: salmon !important;
        }
        .info{
            color: #666 !important;
            font-weight: 400 !important;
            font-size: 12px;
        }
        .fine{
            font-weight: 200 !important;
        }
        /* ..................................... 

        default colors

        ..................................... */

        :root {
            --color1: #fa8072;
            --color2: #BB7365;
            --color3: #DEADA1;
            --color4: #ffffff;
            --color5: #3C4663;
            --color6: #6D748C;
        }
        ::selection {      background: var(--color1); }
        ::-moz-selection { background: var(--color1); }

        a{
            color: var(--color5) !important;
            font-weight: bold;
            transition: color .5s ease-out;
            -moz-transition: color .5s ease-out;
            -webkit-transition: color .5s ease-out;
            -o-transition: color .5s ease-out;
        }
        a:hover{ color: var(--color1) !important; }

        .gray{
            background-color: #f2f2f2;
            color: #f2f2f2;
        }
        .color1{ color: var(--color1) !important; }
        .color2{ color: var(--color2) !important; }
        .color3{ color: var(--color3) !important; }
        .color4{ color: var(--color4) !important; }
        .color5{ color: var(--color5) !important; }
        .color6{ color: var(--color6) !important; }
        .black{ color: black !important;}

        .bg1{ background-color: var(--color1) !important; }
        .bg2{ background-color: var(--color2) !important; }
        .bg3{ background-color: var(--color3) !important; }
        .bg4{ background-color: var(--color4) !important; }
        .bg5{ background-color: var(--color5) !important; }
        .bg6{ background-color: var(--color6) !important; }

        .is-color{
            background-color: var(--color1);
            color: var(--color4) !important;
            border: 0 !important;
            font-family: 'Montserrat', sans-serif;
        }
        .is-color:hover{
            color: var(--color6) !important;
            background-color: var(--color5) !important;
        }
        .is-color:focus{
            color: var(--color1) !important;
            background-color: #f2f2f2 !important;
        }
        .is-color h1{
            color: white !important;
        }

    </style>

    <!-- js ..................................... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.js"></script>
    <script src="engine/engine.js"></script>
</head>