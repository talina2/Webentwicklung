<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spalten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="resources/css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
                        <a class="nav-link" href="<?php echo base_url();?>">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Boards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/spalten');?>">Spalten</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<main class="container-fluid">
    <div class="card ms-3 me-3">
        <div class="card-header">
            <h4>Spalten</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a role="button" class="btn btn-primary mb-2" href="<?php echo base_url('/spalten/erstellen');?>">Erstellen</a>
                

                <table class="table table-hover table-bordered table-responsive rounded-table">
                    <thead class="sticky-header-on-header">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Board</th>
                            <th scope="col">Sortid</th>
                            <th scope="col">Spalte</th>
                            <th scope="col">Spaltenbeschreibung</th>
                            <th scope="col">Bearbeiten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Allgemeine Todos</td>
                            <td>100</td>
                            <td>zu besprechen</td>
                            <td>noch zu besprechende Todos</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                2
                            </th>
                            <td>Allgemeine Todos</td>
                            <td>200</td>
                            <td>In Bearbeitung</td>
                            <td>Todos die aktuell bearbeitet werden</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>



            </li>
        </ul>
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