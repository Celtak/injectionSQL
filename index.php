<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Injection SQL</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        div {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 90%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

    </style>

</head>

<body>

    <h1>Tester l'injection SQL</h1>

    <div>

        <form action="sql.php" method="post">

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            
        </form>

    </div>

</body>

</html>