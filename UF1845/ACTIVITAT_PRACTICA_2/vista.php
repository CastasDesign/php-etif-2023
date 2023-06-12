<!DOCTYPE html>
<html lang="ca">
<head>
    <title>Formulari de Contacte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Formulari de Contacte</h2>
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="correu" placeholder="Correu">
        <input type="submit" name="submit" value="Enviar Correu">
    </form>
</body>
</html>
