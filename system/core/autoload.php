<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<!-- This code autoload all classes there are in the core -->
<?php
spl_autoload_register(function ($className) {
    if (is_file(CORE . $className . "php")) include CORE . $className . "php";
})

/* This function (anonymous) loads all classes in the file where it is included.

In this case in Index*/
?>