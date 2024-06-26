<?php

include_once("templates/header.php");

?>

    <div class="container">
        <?php include_once("templates/back-btn.html"); ?>
        <h1 id="main-title">Criando Contato</h1>
        <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="digite o nome" required>
            </div>
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="phone">Nome do contato:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="digite o telefone" required>
            </div>
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="observations">Nome do contato:</label>
                <textarea type="text" class="form-control" name="observations" id="observations" placeholder="observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


<?php

include_once("templates/footer.php");

?>