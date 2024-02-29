<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="Author" content="Aiden Kops" />
        <meta name="Description" content="" />
        <meta name="Keywords" content="" />
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
      @extends('frontend.layout')
      @section('content')
        @foreach($student as $name => $age)
              @if($age >= 18)
                  {{ $name }} is {{ $age }} years old <br>
              @endif
          @endforeach
      @endsection

    </body>
</html>