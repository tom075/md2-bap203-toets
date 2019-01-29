<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'BAP203') }}</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<div class="container">
    <main>
        <div class="row">
            <div class="col-xs-12 col-md-9">
                @section('content')
                    <!-- dit is de content section die je in je view kunt invullen / overschrijven -->
                @show
            </div>
            <div class="col-xs-12 col-md-3">
                @section('sidebar')
                <!-- dit is de sidebar section die je in je view kunt invullen / overschrijven -->
                @show
            </div>
        </div>
    </main>
</div>
</body>
</html>
