<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TIENDAVENTAS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body{
                background-color: aqua;
            }
            .imagen{
                border: 50px;
            }
        </style>
    </head>
    <body>
        <h1><center>TIENDA DE TODO</center></h1>
        <section class="ventas">
            <div class="Abarrotes">
                <h2>Columna Abarrotes</h2>
                <div class="imagen">
                    <img src="img/aba1.jpg" alt="">
                </div>
            </div>
            <div class="Ropa">
                <h2>Columna Ropa</h2>
                <div class="imagen">
                    <img src="img/" alt="">
                </div>
            </div>
            <div class="Muebles">
                <h2>Columna Muebles</h2>
                <div class="imagen">
                    <img src="img/" alt="">
                </div>
            </div>
            <div class="Electro Domesticos">
                <h2>Columna Electro Domesticos</h2>
                <div class="imagen">
                    <img src="img/" alt="">
                </div>
            </div>
        </section>
    </body>
</html>
