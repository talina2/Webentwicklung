<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startseite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="../../../public/main.css">-->
    <link href="resources/css/main.css" rel="stylesheet" type="text/css">


    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md mb-4 ps-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img src="resources/images/WE_Logo.svg" alt="logo.svg" height="60">
                </a>

                <button class="navbar-toggler custom-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown"
                        aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Boards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/spalten');?>">Spalten</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container-fluid">
        <div class="card ms-3 me-3">
            <div class="card-header">
                <h4>Tasks</h4>
            </div>
            <div class="card-body">
            </div>
        </div>
    </main>


    <footer>
        <div class="container pt-5 pb-4">
            <div class="row">
                <div class="col-md-4">
                    © Web-Entwicklung Team 2023
                </div>

                <div class="col-md-auto ms-md-auto">
                    <p class="text-end">
                        Impressum
                    </p>
                </div>
                <div class="col-md-auto">
                    <p class="text-end">
                        Datenschutz
                    </p>
                </div>
                <div class="col-md-auto">
                    <p class="text-end">
                        Kontakt
                    </p>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>