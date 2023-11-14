<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #ff5733;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .parrafo {
            margin-top: 20px;
        }

        button {
            width: 165px;
            height: 60px;
            cursor: pointer;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 3rem;
            background-color: #2c3e50;
            border: 2px solid #2c3e50;
            transition: 0.3s;
        }

        button:hover {
            background-color: #e74c3c;
            border: 2px solid #e74c3c;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="submit" value="Cerrar sesión" name="btncerrar" />
    </form>
    <p class="parrafo"><a href="http://localhost/erickchavez/prueba3.html"><button>VISTA DE PERFIL</button></a></p>
    <p class="parrafo"><a href="http://localhost/erickchavez/CarritoHealdo/"><button>EMPIEZA A VENDER!</button></a></p>
</body>
</html>
