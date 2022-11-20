<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">Navbar</a>
    </nav>
    <div class="container">
        <lot-posting-component />
    </div>
        
</div>

@vite('resources/js/app.js')
</body>
</html>