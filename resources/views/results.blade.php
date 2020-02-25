<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Rezultatas</h1>

            {{-- sitas kintamasis atkeliauja is
                /app/http/controllers/CalculatorController calculate funkcijos
            --}}
            <h2> {{ $result }}</h2>

        </div>
    </div>
</div>
</body>
</html>