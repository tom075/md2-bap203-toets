@extends('layouts.master')

@section('content')
    <h2>Help / Foutmeldingen</h2>
    <p><a href="{{ route('home') }}">Terug naar homepage</a>
    <p>
        Een aantal foutmeldingen die je kunt krijgen en de mogelijke oplossing.
    </p>

    <h5>Class App\Http\Controllers\Request does not exist</h5>
    <p>
        Je moet aangeven welke Request class je bedoelt in je controller code.<br/>
        Zet daarom: <code>use Illuminate\Http\Request;</code> bovenin de controller class, maar wel binnen de <code>&lt;?php</code> tag.
    </p>

    <h5>Class App\Link does not exist</h5>
    <p>
        Je moet aangeven welke Link class je bedoelt in je controller code.<br/>
        Zet daarom: <code>use App\Link;</code> bovenin de controller class, maar wel binnen de <code>&lt;?php</code> tag.
    </p>

    <h5>Illuminate\Database\QueryException  : SQLSTATE[HY000] [2002] Connection refused</h5>
    <p>
        Je database server staat niet aan. Start XAMMP of MAMP op.
    </p>

    <h5>Could not open input file: artisan</h5>
    <p>Je staat in je command-line venster niet in de directory met je Laravel project. Daarom kan hij het command artisan niet vinden.
        Ga naar de juiste directory en probeer het opnieuw
    </p>

    <h5>Application key not set</h5>
    <p>
        Je hebt geen geheime key in je .env bestand<br/>
        Voer het commando uit: <code>php artisan key:generate</code>
    </p>
    <h5>Sorry, your session has expired. Please refresh and try again.</h5>
    <p>Je bent vergeten de CSRF beveiliging aan je form toe te voegen. Voeg <code>&#64;csrf</code> toe aan je formulier om de csrf check aan te zetten.</p>

    <h5>Undefined variable: ...</h5>
    <p>
        In je Blade view gebruik je de naam van een variabele die er niet is (misschien fout gespeld, of niet meegegeven aan de view in de controller?)<br/>
        Check je blade view op fouten, of geef de variabele aan de view mee.
    </p>

    <h5>Instellingen die je hebt gedaan of aangepast werken niet</h5>
    <p>
        Start de interne Laravel server opnieuw op, door in het terminal venster waar <code>php artisan serve draait</code>, Control-C te drukken.<br/>
        Start de server dan op nieuw op: <code>php artisan serve</code><br/>
        Voer het commando uit: <code>php artisan key:generate</code>
    </p>

    Nog steeds een rare fout waar je niet uitkomt? Check het log bestand (met de datum van vandaag) in je project op: <code>/storage/logs/</code>
@endsection
