<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
//Indica que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la petición
 y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);

?>

<head>
    <title>La proxima pelicuña de Marvel</title>
    <meta name="description" content="la proxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>

    <pre style="font-style: 8px; overflow:scroll; height: 250px;">
          <?php var_dump($data); ?>
         </pre>
    <h2>La próxima película de Marvel</h2>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="poster de <?= $data["title"]; ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?>se entrena en <?= $data["days_until"]; ?> dias</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<hgroup>







    <style>
        :root {
            color-scheme: light dark;
        }

        section {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        hgroup {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        img {
            margin: 0 auto;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>