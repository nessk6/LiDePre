<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Younes Ledad" />
    <meta name="Keywords" content="Web,HTML" />
    <meta name="Description" content="lidepreLogin" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Slab:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendors/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icone/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icone/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icone/favicon-16x16.png">
    <link rel="manifest" href="/assets/icone/site.webmanifest">
    <title>LiDePre-{{$title ?? ''}}</title>
</head>
<body>
    @include('partials/header2')
    @yield('content')
    @include('partials/footer')
</body>
</html>