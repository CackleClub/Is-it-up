<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <h1>Is It Up?</h1>
    <form action="" method="GET">
        <input type="text" name="i" placeholder="check ip/domain" autocomplete="off">
        <button type="submit">Is it up?</button>
    </form>
    <br />
    <?php  
    include('isitup.php');
    ?>
    </div>
</body>
</html>