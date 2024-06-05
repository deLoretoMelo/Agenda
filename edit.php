<?php

include_once("templates/header.php");

?>

    <div class="container">
        <?php include_once("templates/back-btn.html"); ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="digite o nome" value="<?= $contact["name"] ?>" required>
            </div>
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="phone">Nome do contato:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="digite o telefone" value="<?= $contact["phone"] ?>" required>
            </div>
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="observations">Nome do contato:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="observações" rows="3"><?= $contact["observations"] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>


<?php

include_once("templates/footer.php");

?>