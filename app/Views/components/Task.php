<div class="card mb-3" id="task<?= $id ?>">
    <div class="card-body">
        <table>
            <tbody>
            <tr>
                <th scope="row">Name</th>
                <td><?= $task ?></td>
            </tr>
            <tr>
                <th scope="row">Notiz</th>
                <td><?= $notizen ?></td>
            </tr>
            <tr>
                <th scope="row">Erinnerungsdatum</th>
                <td><?= $erinnerungsdatum ?></td>
            </tr>
            <tr>
                <th scope="row">Zugeteilte Person</th>
                <td><?= $vorname ?> <?= $nachname ?></td>
            </tbody>
        </table>

        <i data-bs-target="#editTaskModal" class="fa-solid fa-pen-to-square editTaskButton"
           data-task="<?= $task ?>"
           data-taskartenid="<?= $taskartenid ?>"
           data-taskartenicon="<?= $taskartenicon ?>"
           data-taskart="<?= $taskart ?>"
           data-spaltenid="<?= $spaltenid ?>"
           data-personenid="<?= $personenid ?>"
           data-erinnerungsdatum="<?= $erinnerungsdatum ?>"
           data-erinnerung="<?= $erinnerung ?>"
           data-notizen="<?= $notizen ?>"
           data-id="<?= $id ?>"
           data-bs-toggle="modal"></i>
        <i class="fa-solid fa-trash deleteTaskButton" data-bs-toggle="modal" data-bs-target="#deleteTaskModal" data-id="<?= $id ?>" data-boards-id="<?= $boardsid ?>" data-task="<?= $task ?>"></i>
    </div>
</div>