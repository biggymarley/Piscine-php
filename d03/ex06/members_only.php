<?php
header("WWW-Authenticate: Basic realm=''member area'' charset=UTF-8");
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'zaz') {
    $img = base64_encode(file_get_contents("../img/42.png"));
    echo "dasdasd";
?>
    <html>

    <body>
        Hello Zaz<br />
        <img src='data:image/png;base64,<?php echo $img ?>'>
    </body>

    </html>
<?php
} else {
?>
    <html>

    <body>That area is accessible for members only</body>

    </html>
<?php
}
?>