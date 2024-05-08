<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="{{ $metaDescription ?? 'Default Description' }}"/>
    <title>{{ $metaTitle ?? 'Default Title' }}</title>
    @vite('resources/js/app.js')
</head>
<body class="flex min-h-screen">

    <x-partials.navbar />
    <div class="bg-slate-100 w-full min-h-screen flex flex-col">
        <div class="flex-1">
            
            {{ $slot }}
        </div>
        <footer class="bottom-0 bg-slate-950 w-full">
            <p class="text-center text-white py-4">© {{ date('Y') }} Blog Todos los derechos reservados</p>
        </footer>
    </div>
    
</body>
</html>