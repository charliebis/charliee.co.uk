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

<meta property="description" content="{{ config('meta.description') }}">
<link rel="shortcut icon" href="{{ config('meta.icon.32.path') }}" type="{{ config('meta.icon.32.type') }}"/>
<link rel="canonical" href="{{ config('app.url') }}"/>
<link rel="index" title="{{ config('meta.site_title') }}" href="{{ config('app.url') }}"/>

<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ config('meta.site_title') }}"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="{{ config('meta.description') }}">

<meta property="og:image" content="{{ config('app.url') . config('meta.icon.200.path') }}"/>
<meta property="og:image:secure_url" content="{{ config('app.url') . config('meta.icon.200.path') }}" />
<meta property="og:image:type" content="{{ config('meta.icon.200.type') }}" />
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:image:alt" content="{{ config('meta.personal_name') }}" />
<meta property="og:url" content="{{ config('app.url') }}"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ '@' . config('meta.twitter_user') }}">
<meta name="twitter:creator" content="{{ '@' . config('meta.twitter_user') }}">
<meta name="twitter:title" content="{{ config('meta.site_title') }}">
<meta name="twitter:description" content="{{ config('meta.description') }}">
<meta name="twitter:image" content="{{ config('app.url') . config('meta.icon.500.path') }}">
<meta name="twitter:image:alt" content="{{ config('meta.personal_name') }}">
