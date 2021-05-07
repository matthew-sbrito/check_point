<main class="content">
    <?php
        renderTitle(
            'Editar Usuário',
            'Atualize a senha do Usuário',
            'icofont-edit' 
        );
        include(TEMPLATE_PATH. '/messages.php');
    ?>

    <form action="/edit_password.php?update=<?=$id?>" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="name" value="<?=$name?>">
        <input type="hidden" name="email" value="<?=$email?>">
        <input type="hidden" name="start_date" value="<?=$start_date?>">
        <input type="hidden" name="end_date" value="<?=$end_date?>">
        <input type="hidden" name="is_admin" value="<?=$is_admin?>">
        <div class="form-row">
        <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha"
                    class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirme a senha"
                    class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        <div>
            <button class="btn btn-secondary btn-lg">Alterar Senha</button>
            <a href="/edit_user.php?update=<?= $id ?>" 
                class="btn btn-secondary btn-lg">Cancelar</a>
        </div>
    </form>
</main>