<?php
session_start();
requireValidSession(true);

$exception = null;
$userData=[];

if(count($_POST) === 0 and isset($_GET['update'])) {
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
}
if(count($_POST) > 0){
    $dbUser = new User($_POST);
    $_POST['password'] = $dbUser->password;
    $_POST['confirm_password'] = $dbUser->password;
    try{
        $dbUser->update();
        addSuccessMsg('Usuário alterado com sucesso!');
        header('Location: users.php');
        exit();
        
    }catch(Exception $e){
        $exception = $e;
    }
}


loadTemplateView('edit_user', $userData + ['exception' => $exception]);