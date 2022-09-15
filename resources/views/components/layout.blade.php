<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Coronatime</title>
</head>
<style type="text/css">
@font-face {
    font-family: 'Inter', sans-serif;
    src: url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    }
    body{
        font-family: 'Inter', sans-serif;
    }
</style> 
<body class="h-screen">
    {{ $slot }}
</body>
</html>