<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-gray-300 min-h-screen"><!--Contenedor principal -->
        <div class="bg-gray-500 p-6 flex justify-between items-center"><!-- Header -->
            <div class="text-white"><!-- Logo -->
                <h1>Logo Empresa</h1>
            </div>
            <div><!-- Navegación -->
                <nav class="text-white space-x-5">
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Inicio</a>
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Clientes</a>
                    <a class="px-4 py-1 text-sm bg-gray-600 rounded hover:bg-gray-400" href="">Productos</a>
                </nav>
            </div>
            <div><!-- Usuario -->
                <span class="text-white bg-gray-800 p-3 rounded-full">
                    DA
                </span>
            </div>
        </div>
        <div class="p-9"><!-- Contenido -->
            <div class="bg-white mx-auto p-6 rounded shadow">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>