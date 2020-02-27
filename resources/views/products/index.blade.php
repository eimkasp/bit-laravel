<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1> Produktai </h1>
        </div>

        @foreach($products as $product)
            <div class="col-sm-6">
                <hx3>{{ $product->title }}</hx3>
                <small>{{ $product->price }}€</small>

                <hr>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>