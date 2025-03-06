<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    @vite('resources/css/app.css') <!-- Si tu utilises Vite + Tailwind -->
    @livewireStyles <!-- Important pour charger les styles Livewire -->
</head>
<body>
<div class="container mx-auto p-10">
    <h1 class="text-2xl font-bold mb-5">Réservez votre propriété</h1>
    @livewire('booking-manager') <!-- Ici tu appelles ton composant Livewire -->
</div>

@livewireScripts <!-- Important pour charger les scripts Livewire -->
</body>
</html>
