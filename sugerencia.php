<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetMovies</title>
    <link rel="stylesheet" href="./css/login.css">
    <style>
        /* Estilos para los checkboxes */
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
            list-style: none;
            padding: 0;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .checkbox-group input[type="checkbox"] {
            display: none;
        }

        /* Checkbox personalizado */
        .checkbox-group label:before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 5px;
            border: 2px solid #c0392b;
            border-radius: 3px;
            background-color: transparent;
        }

        /* Cambio de color al estar seleccionado */
        .checkbox-group input[type="checkbox"]:checked + label:before {
            background-color: #c0392b;
        }
    </style>
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <script src="main.js" defer></script>
</head>
<body>
    <div class="box">
      
        <form method="POST" action="registro.php">
            <div class="genre-selection">
                <h2>¡Encuentra las películas perfectas para ti!</h2>
                <p>Selecciona tus géneros de películas favoritos:</p>
                <br>
                <ul class="checkbox-group">
                    <li>
                        <input type="checkbox" id="accion" name="genero[]" value="Acción">
                        <label for="accion">Acción</label>
                    </li>
                    <li>
                        <input type="checkbox" id="aventura" name="genero[]" value="Aventura">
                        <label for="aventura">Aventura</label>
                    </li>
                    <li>
                        <input type="checkbox" id="comedia" name="genero[]" value="Comedia">
                        <label for="comedia">Comedia</label>
                    </li>
                    <li>
                        <input type="checkbox" id="suspenso" name="genero[]" value="Suspenso">
                        <label for="suspenso">Suspenso</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ciencia" name="genero[]" value="Ciencia">
                        <label for="ciencia">Ciencia Ficción</label>
                    </li>
                    <li>
                        <input type="checkbox" id="terror" name="genero[]" value="Terror">
                        <label for="terror">Terror</label>
                    </li>
                </ul>
            </div>
            <div class="btn">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
