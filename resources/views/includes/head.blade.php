<script>
    const themeStorageKey = 'theme-setting';
    let themeSetting;

    if (localStorage.getItem(themeStorageKey)) {
        themeSetting = localStorage.getItem(themeStorageKey);
    }
    else {
        themeSetting = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    document.firstElementChild.setAttribute('data-theme', themeSetting);
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title', config('app.name'))</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=block&family=Inter&display=swap">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="shortcut icon" href="/img/charlie_icon_32.png" type="image/png"/>
<link rel="canonical" href="{{ config('app.url') }}"/>
<link rel="index" title="@yield('title', config('app.name'))" href="{{ config('app.url') }}"/>

<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="@yield('title', config('app.name'))"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Software Engineer with over 20 years of experience in building and maintaining websites and applications, based in Leighton Buzzard, UK.">

<meta property="og:image" content="https://charliee.co.uk/img/charlie_200.png"/>
<meta property="og:image:secure_url" content="https://charliee.co.uk/img/charlie_200.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:image:alt" content="Charles Edwards" />
<meta property="og:url" content="{{ config('app.url') }}"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CAEdwards82">
<meta name="twitter:creator" content="@CAEdwards82">
<meta name="twitter:title" content="Charles Edwards | Software Engineer">
<meta name="twitter:description" content="Software Engineer with over 20 years of experience in building and maintaining websites and applications, based in Leighton Buzzard, UK.">
<meta name="twitter:image" content="https://charliee.co.uk/img/charlie_500.png">
<meta name="twitter:image:alt" content="Charles Edwards">
