<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pig latin translation tool">
    <meta name="author" content="Martin Kochan">

    <title>Pig latin Translator</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- custom bootstrap style - footer -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Pig Latin Translator</h1>
        </div>
        <p class="lead">Welcome to english pig latin translator. If you want to translate your text to pig latin, please
            use the form below.</p>

        <form>
            <div class="form-group">
                <label for="englishInput">Paste your text here:</label>
                <textarea class="form-control" id="englishInput" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Translate</button>
            <div class="form-group">
                <label for="translationResult">Your text translated to pig latin:</label>
                <textarea class="form-control" id="translationResult" rows="5"></textarea>
            </div>
        </form>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Simple pig latin translator developed by Martin Kochan.</p>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</body>
</html>