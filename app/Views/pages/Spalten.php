<?= $this->extend('layouts/DefaultLayout') ?>

<?= $this->section('content') ?>
<main class="container-fluid">
    <div class="card ms-3 me-3">
        <div class="card-header">
            <h4>Spalten</h4>
        </div>
        <div class="card-body">
            <div class="d-flex" id="spalten-table-toolbar">
                <a role="button" class="btn btn-primary mb-3 me-1 createSpalteButton" data-bs-toggle="modal" data-bs-target="#createSpalteModal"><i class="fa-solid fa-square-plus" style="color: #ffffff;"></i> Neu</a>
                <div class="spalten-buttons-toolbar">
                </div>
            </div>

            <table class="table table-hover table-bordered table-responsive"
                   id="table"
                   data-toggle="table"
                   data-height="460"
                   data-ajax="spaltenAjaxRequest"
                   data-search="true"
                   data-pagination="true"
                   data-buttons-toolbar=".spalten-buttons-toolbar">
                <thead>
                    <tr>
                        <th scope="col" data-sortable="true" data-field="id">ID</th>
                        <th scope="col" data-sortable="true" data-field="spalte">Spalte</th>
                        <th scope="col" data-sortable="true" data-field="board">Board</th>
                        <th scope="col" data-sortable="true" data-field="sortid">Sortid</th>
                        <th scope="col" data-field="spaltenbeschreibung">Spaltenbeschreibung</th>
                        <th scope="col" data-field="bearbeiten">Bearbeiten</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Create spalte Modal -->
    <div class="modal fade" id="createSpalteModal" tabindex="-1" aria-labelledby="createSpalteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">Neue Spalte erstellen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    include APPPATH . 'Views/components/SpalteForm.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit spalte Modal -->
    <div class="modal fade" id="editSpalteModal" tabindex="-1" aria-labelledby="editSpalteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Spalte bearbeiten</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    include APPPATH . 'Views/components/SpalteForm.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Deletion Modal -->
    <div class="modal fade" id="deleteSpalteModal" tabindex="-1" aria-labelledby="deleteSpalteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteSpalteModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <form id="deleteSpalteForm" data-delete-at="place url here">
                        <button type="submit" class="btn btn-warning delete-task-btn">Spalte löschen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.createSpalteButton', function () {
            var createSpalteModal = $('#createSpalteModal');
            createSpalteModal.find('form').attr('data-send-to', '<?php echo base_url('spalten/erstellen'); ?>');
        });

        $(document).on('click', '.editSpalteButton', function () {
            var id = $(this).data('id');
            var boardsid = $(this).data('boardsid');
            var sortid = $(this).data('sortid');
            var spalte = $(this).data('spalte');
            var spaltenbeschreibung = $(this).data('spaltenbeschreibung');
            var editSpalteModal = $('#editSpalteModal');
            editSpalteModal.find('#editModalLabel').text('Spalte "' + spalte + '" bearbeiten');
            editSpalteModal.find('#spalte').val(spalte);
            editSpalteModal.find('#spaltenbeschreibung').val(spaltenbeschreibung);
            editSpalteModal.find('#sortid').val(sortid);
            editSpalteModal.find('#boardsid').val(boardsid);
            editSpalteModal.find('form').attr('data-send-to', '<?php echo base_url('spalten/bearbeiten/'); ?>' + id);
        });

        function spaltenAjaxRequest(params) {
            $.ajax({
                url: '<?= base_url('spalten/raw') ?>',
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    response.spalten.forEach(function(spalte) {
                        spalte.bearbeiten = `<i class="fa-solid fa-pen-to-square editSpalteButton" data-bs-toggle="modal" data-bs-target="#editSpalteModal" data-id="${spalte.id}" data-spalte="${spalte.spalte}" data-spaltenbeschreibung="${spalte.spaltenbeschreibung}" data-board="${spalte.board}" data-boardsid="${spalte.boardsid}" data-sortid="${spalte.sortid}"></i>
                                <i class="fa-solid fa-trash deleteSpalteButton" data-bs-toggle="modal" data-bs-target="#deleteSpalteModal" data-id="${spalte.id}" data-spalte="${spalte.spalte}"></i>`;
                    });
                    params.success({
                        total: response.spalten.length,
                        rows:  response.spalten
                    })
                }
            })
        }

        // Delete Spalte
        $(document).on('click', '.deleteSpalteButton', function () {
            var id = $(this).data('id');
            var spalte = $(this).data('spalte');
            $('#deleteSpalteModalLabel').text('Wollen Sie die Spalte "' + spalte + '" wirklich löschen?');
            $('#deleteSpalteForm').attr('data-delete-at', '<?= base_url('spalten/loeschen/') ?>' + id);
        });

        // Delete Spalte ajax
        $(document).on('submit', '#deleteSpalteForm', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('data-delete-at'),
                dataType: 'json',
                data: $(this).serialize(),
                success: function (response) {
                    $('.alert').remove();
                    if (response.successfulValidation) {
                        $('#deleteSpalteModal').modal('hide');
                        $('#table').bootstrapTable('refresh');
                    } else {
                        $('#deleteSpalteModal').modal('hide');
                        // Create a Bootstrap alert dynamically
                        var alertDiv = $('<div class="alert alert-danger alert-dismissible fade show" role="alert"></div>');
                        var closeButton = $('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>');
                        var messageDiv = $('<div></div>').text(response.error.deletion);
                        alertDiv.append(messageDiv);
                        alertDiv.append(closeButton);
                        // Append the alert above the buttons
                        $('#spalten-table-toolbar').before(alertDiv);
                    }
                }
            });
        });
    </script>


</main>
<?= $this->endSection() ?>