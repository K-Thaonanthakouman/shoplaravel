<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>
<!-- @foreach($plage as $item)
    Produit n°{{ $item['id'] }} : {{ $item['name']}}, {{ $item['price']}}€.<br/>
@endforeach -->

@forelse($plage as $item)
    @if($loop->first)
        Premier produit !
    @elseif($loop->last)
        Dernier produit !
    @endif
    Produit n°{{ $item['id'] }} : {{ $item['name']}}, {{ $item['price']}}€. (index {{ $loop->index }})<br/>
@empty
    Aucun élément trouvé.
@endforelse
</p>
    
</body>
</html>