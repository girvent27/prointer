<?php
function dash()
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/highligth.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
    <title>Trab Prointer</title>
</head>

<body>
    <div class="nav-bar">
        <div class="logo">PROINTER</div>
        <div class="links">
            <a href="?cod=1">Código 1</a>
            <a href="?cod=2">Código 2</a>
            <a href="?cod=3">Código 3</a>
            <a href="?cod=4">Código 4</a>
        </div>
    </div>
    <div class="page-wrapper">
        <?php
    }

    function closeDash()
    {
        ?>
    </div>
    <div class="footer"></div>
    <script>
    hljs.highlightAll();

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>
<?php

    }
?>