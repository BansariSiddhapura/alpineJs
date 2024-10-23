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

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-12 bg-light text-light d-flex justify-content-start align-items-center p-3">
                <img src="https://alpinejs.dev/alpine_long.svg" alt="" height="30px">
                <span class="fs-3">Alpine Demo</span>
            </div>

        </div>

        <div class="row">
            <div class="col col-2 bg-light py-4 text-dark">
                <span class="fs-4 fw-bold">Directives</span>
                <ul class="list-group gap-1 list-unstyled d-flex justify-content-center">
                    <li><a href="index.php?id=1" class="btn btn-link text-decoration-none text-black">x-data</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-init</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-show</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-bind</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-on</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-text</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-html</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-model</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-modelable</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-for</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-transition</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-effect</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-ignore</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-ref</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-cloak</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-teleport</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-if</a></li>
                    <li><a href="" class="btn btn-link text-decoration-none text-black">x-id</a></li>
                </ul>
            </div>
            <div class="col col-9 my-4" id="myAllData">
            <?php
                $id=$_GET['id'];
                switch($id):
                    case '1':
                        require_once "./directives/x-data.html";
                        break;
                    default:
                        echo "no files";
                endswitch
            ?>
            </div>
        </div>
    </div>

</body>

</html>