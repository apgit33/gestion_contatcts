<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{ $contact }} </h1>

    <h2>adresse connue : </h2>
    <?php 
    // dd($adresses[$contact]);
    ?>

    @forelse ($adresses as $adresse )
    <p> {{ $adresse->adresse }}</p>

        
    @empty
    <p> Pas d'adresse</p>
        
    @endforelse

</body>
</html>