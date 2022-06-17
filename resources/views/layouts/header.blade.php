<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="apple-touch-icon" sizes="180x180" href="{{$_SERVER['APP_CDN']}}/assets/icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{$_SERVER['APP_CDN']}}/assets/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{$_SERVER['APP_CDN']}}/assets/icon/favicon-16x16.png">
<link rel="manifest" href="{{$_SERVER['APP_URL']}}/assets/icon/site.webmanifest">
<link rel="mask-icon" href="{{$_SERVER['APP_CDN']}}/assets/icon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2563eb">
<meta name="theme-color" content="#2563eb">

<link rel="stylesheet" href="{{$_SERVER['APP_CDN']}}/css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.4.3/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
<script defer src="{{$_SERVER['APP_CDN']}}/assets/js/alpine.min.js" type="application/javascript"></script>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KH7G4N7');
</script>
<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5E1F693QBP"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-5E1F693QBP');
</script>