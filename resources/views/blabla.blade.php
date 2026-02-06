<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>

    <p>Ca coûte {{ $product->price }}€.</p>

    <p>Combien qu'on en a ? 
        @if($product->stock >=50)
            Beaucoup !
        @else
            Pas beaucoup !
        @endif
    </p>
    
</body>
</html>