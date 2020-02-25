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
                <h1>Skaiciuokle</h1>

                <form method="post">
                    {{-- Jei naudojame POST metoda butinai irasyti sita eilute VISADA--}}
                    @csrf

                    <div class="form-group">
                        <label>Skaicius 1</label>
                        <input type="number" required name="number1" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Skaicius 2</label>
                        <input type="number" required name="number2" class="form-control" />
                    </div>

                    <input type="submit" class="btn btn-success"  value="Skaiciuoti" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>