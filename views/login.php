<?php use Core\View;


View::render('header'); ?>
  
<body> 

<?php View::render('nav'); 

$errors = 
['email_taken'=>'Tento email je již registrován',
'wrong_credentials'=>'Chybné přihlašovací údaje'];
?>

<main>

    <div id="divLogin">
        <form action="/coding-school-project/login" class="formContainer" method="post">
            <h3>Přihlášení</h3>
            <label for="login--email">Emailová adresa:</label>
            <input class="form" type="email" name="login--email" required>
            <label for="login-pw">Heslo:</label>
            <input class="form" type="password" name="login--pw"  required>
            <button id="login--button" type="submit">Přihlásit</button>
            <?php if(isset($_GET['error'])) echo ('<p id="error_message">'.$errors[$_GET['error']].'</p>'); ?>
        </form>
    </div>

</main>

<?php View::render('footer'); ?>

</body> 
  
</html> 