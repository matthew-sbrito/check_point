<main class="content">
    <?php
        renderTitle(
            'Editar Usuário',
            'Atualize os dados do Usuário',
            'icofont-edit' 
        );
        include(TEMPLATE_PATH. '/messages.php');
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="password" value="<?=$password?>">
        <input type="hidden" name="confirm_password" value="<?=$password?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome"
                    class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>"
                    value="<?= $name?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Informe o E-mail"
                    class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                    value="<?= $email?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
                <input type="date" id="start_date" name="start_date" placeholder="Informe a data de admissão"
                    class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>"
                        value="<?= $start_date?>">
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                <input type="date" id="end_date" name="end_date" placeholder="Informe a data de desligamento"
                    class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>"
                        value="<?= $end_date?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="is_admin">Administrador?</label>
                <input type="checkbox" id="is_admin" name="is_admin"
                    class="form-control <?= $errors['is_admin'] ? 'is-invalid' : '' ?>"
                    <?= $is_admin ?'checked' : '' ?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary btn-lg">Salvar</button>
            <a href="/users.php" 
                class="btn btn-secondary btn-lg">Cancelar</a>
            <a href="/edit_password.php?update=<?=$id?>"
                class="btn btn-secondary btn-lg">Alterar senha</a>
        </div>
    </form>
</main>