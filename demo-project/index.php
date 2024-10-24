<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="./assets/js/bootstrap.js"></script>
    <script defer src="./assets/js/cdn.min.js"></script>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<body x-data x-cloak>
    <div class="container-fluid" x-data="{theme : true}" :class="theme ? 'bg-light text-dark' : 'bg-dark text-light'">
        <div class="row">
            <div class="col col-12 d-flex justify-content-between align-items-center p-3">
                <img src="https://alpinejs.dev/alpine_long.svg" alt="" height="30px">
                <button x-on:click="theme = !theme" x-text="theme ? 'dark' : 'light'"
                    :class="theme ? 'btn btn-dark' : 'btn btn-light'"></button>
            </div>
        </div>

        <div class="row">
            <div class="col col-2 py-4">
                <?php require_once "sideLinks.php" ?>
            </div>
            <div class="col col-9 my-4 mx-3" id="myAllData">
                <?php
                if (!empty($_GET['id'])) {
                    $id = $_GET['id'];
                    $files = [
                        'p1' => './directives/calculator.php',
                        'p2' => './directives/attendence.php',
                        '1' => './directives/x-data_show_trans.php',
                        '2' => './directives/x-init.php',
                        '3' => './directives/x-bind_on.php',
                        '4' => './directives/x-text_html.php',
                        '5' => './directives/x-model.php',
                        '6' => './directives/x-for.php',
                        '7' => './directives/x-effect.php',
                        '8'=>'./directives/x-teleport.php',
                        '9'=>'./directives/x-if.php'
                    ];

                    if (array_key_exists($id, $files)) {
                        require_once $files[$id];
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>