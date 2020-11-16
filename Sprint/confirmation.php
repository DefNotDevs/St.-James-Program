<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Bootstrap is first) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css" >

    <title>Form Validation</title>

</head>
<body>

<div class="container" id="main">

    <!-- Jumbotron header -->
    <h1>Account created for <?php echo $_GET['name']; ?>!</h1>

    <pre>
    <?php
    var_dump($_GET);
    ?>
    </pre>
</div>
</body>
</html>

