<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titolo</title>
    <!-- comando per caricare il compilatore di vue per il js -->
    @vite('resources/js/app.js')
</head>
<body>

@include('partials/header')
@include('partials/jumbotron')
@yield('content')


@include('partials/sectionLink')
@include('partials/footer')



    
</body>
</html>