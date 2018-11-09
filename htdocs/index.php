<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>
        <h1>Hello World2!</h1>
<?php
        $homepage = file_get_contents('http://counter:8080');
        echo $homepage;
?>
        <script>
            (async function () {
                const count = await fetch('http://localhost:8081').then(res => res.text())
                alert(count)
            })()
        </script>
    </body>
</html>