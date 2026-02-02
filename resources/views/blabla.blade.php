<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $company['name'] }}</h1>
    <p>Nombre de produits : {{ $company['nb_produits'] }}</p>

    <p>L'entreprise est-elle ouverte ? 
        @if($company['ouvert'] == true)
            oui !
        @else
            non !
        @endif
    </p>
    
</body>
</html>