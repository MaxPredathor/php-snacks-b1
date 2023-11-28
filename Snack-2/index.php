<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
    <body>
        <main>
            <form action="verification.php" method="GET">
                <label for="name">Name:</label>
                <input type="text" name="name">

                <label for="mail">Mail:</label>
                <input type="email" name="mail">

                <label for="age">Age:</label>
                <input type="text" name="age">

                <button type="submit">Verifica Accesso</button>
            </form>
        </main>
    </body>
</html>