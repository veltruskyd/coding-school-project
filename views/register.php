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
        <form action="/coding-school-project/register" class="formContainer" method="post" >
            
            <h3>Registrace</h3>
            <label for="register--email">Emailová adresa:</label>
            <input class="form" type="email" name="register--email" required>
            <label for="login--pw">Heslo:</label>
            <input class="form" type="password" name="login--pw" id="loginPW" required>
            <label for="login--repw">Heslo znovu:</label>
            <input class="form" type="password" name="login--repw" id="repwConf" required>
            <button id="register--button" type="submit">Registrovat</button>
            <a href="/coding-school-project/login">Máte účet? Přihlaste se.</a>
            <p id="repw--confirm">Hesla se neshodují!</p>
            <p id="pw--short">Heslo je příliš krátké!</p>
            <?php if(isset($_GET['error'])) echo ('<p id="error_message">'.$errors[$_GET['error']].'</p>'); ?>
        </form>
    </div>

</main>

<?php View::render('footer'); ?>

<script src="./script/pwConfirm.js"></script>

</body> 
  
</html> 