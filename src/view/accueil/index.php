<?php

/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 15:48
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> BIENVENUE </title>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= WEB_ROOT ?>public/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body style="background-color: #F9901A;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MANOBI AFRICA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>

        </div>
    </nav><br>
    <div class="container mt-5">
        <br>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contact">Ajouter un contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= WEB_ROOT ?>accueil/index" method="POST">
                            <div class="form-group">
                                <label for="nom" class="col-form-label">Nom:</label>
                                <input type="text" name="nom" class="form-control" id="nom">
                            </div>

                            <div class="form-group">
                                <label for="prenom" class="col-form-label">Prénom:</label>
                                <input type="text" name="prenom" class="form-control" id="prenom">
                            </div>
                            <div class="form-group">
                                <label for="categorie" class="col-form-label">Catégorie:</label>
                                <select name="categorie" class="form-control form-control-sm">

                                    <?php foreach ($categories as $ca) : ?>
                                        <option value="<?= $ca['libelle']; ?>"> <?= $ca['libelle']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="adresse" class="col-form-label">Adresse:</label>
                                <textarea name="adresse" class="form-control" id="adresse"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">Nouveau contact</button>

                <h5 class="card-title">Carnet D'adresse</h5>
                <table id="ficheContact" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Catégorie</th>
                            <th>Adresse</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($contacts as $c) : ?>

                            <tr>
                            <td><?= $c['id']; ?></td>
                                <td><?= $c['nom']; ?></td>
                                <td><?= $c['prenom']; ?></td>
                                <td><?= $c['categorie']; ?></td>
                                <td><?= $c['adresse']; ?></td>
                            </tr>

                        <?php endforeach; ?>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Catégorie</th>
                            <th>Adresse</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details</h4>
                </div>
                <form action="<?= WEB_ROOT ?>accueil/index" method="post">
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="adresse" class="col-form-label">Nom:</label>
                                <input type="text" name="nom" class="form-control nom" id="nom" />
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="prenom" class="col-form-label">Prénom:</label>
                                <input type="text" name="prenom" class="form-control prenom" id="prenom" />
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="categorie" class="col-form-label">Categorie:</label>
                                <input type="text" name="categorie" class="form-control categorie">
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="adresse" class="col-form-label">adresse:</label>
                                <textarea name="adresse" class="form-control adresse"> </textarea>
                            </div>
                        </div>
                        <input type="hidden" name="id" class="id">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="update" value="Mettre à jour"/>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <style>
        .btn-purple {
            color: #fff;
            background-color: #6f42c1;
            border-color: #643ab0;
        }

        .modal-body div {
            float: left;
            width: 100%
        }

        .modal-body div p {
            float: left;
            width: 20%;
            font-weight: 600;
        }

        .modal-body div span {
            float: left;
            width: 80%
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $('#ficheContact').DataTable({
                searching: false,
                responsive: true,
                "autoWidth": false,
            });
            var table = $('#ficheContact').DataTable();
            $('#ficheContact tbody').on('click', 'tr', function() {

                $(".nom").val(table.row(this).data()[1]);
                $(".prenom").val(table.row(this).data()[2]);
                $(".categorie").val(table.row(this).data()[3]);
                $(".id").val(table.row(this).data()[0]);
                $(".adresse").val(table.row(this).data()[4]);

                $("#myModal").modal("show");
            });
        });
    </script>
</body>

</html>