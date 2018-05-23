<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-center{
            text-align: center;
        }

        .text-large{
            font-size: 25px;
        }
    </style>
</head>
<body>
<header>
    <h1 class="text-center">FirstWordPress</h1>
</header>
<main>
    <?php
    include_once 'Model/Profile.php';

    if(isset($_POST["FullName"]) && isset($_POST["DateofBirth"]))//TODO: AJAX, File Server
    {
        $Profile = new Profile($_POST["FullName"], $_POST["DateofBirth"]);
        ?>

        <h4>FullName: <?echo $Profile->Name?></h4>
        <h4>DOB: <?echo $Profile->DOB?></h4>

    <? } else { ?>

        <form method="post">
            <input type="hidden" value="token">
            <p>
                <label for="FullNameInput">FullName:</label>
                <input id="FullNameInput" name="FullName" type="text" required>
            </p>
            <p>
                <label for="DateofBirthInput">Date of Birth:</label>
                <input id="DateofBirthInput" name="DateofBirth" type="date" required>
            </p>
            <p>
                <input type="submit" value="Show Profile">
            </p>

        </form>
    <? } ?>
</main>
<footer class="text-large text-center">
    <p>By Rostislav Z &copy; <?echo date('Y')?></p>
</footer>
</body>
</html>