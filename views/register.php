<?php use Core\View;


View::render('header'); ?>
  
<body> 

<?php View::render('nav'); ?>

<main>

    <div id="divLogin">
        <form action="/coding-school-project/" class="formContainer" method="post" onmousemove = confirm()>
            
            <h3>Registrace</h3>
            <label for="register--email">Emailová adresa:</label>
            <input class="form" type="email" name="register--email" required>
            <label for="register--nick">Přezdívka:</label>
            <input class="form" type="text" name="register--nick" required>
            <label for="login--pw">Heslo:</label>
            <input class="form" type="password" name="login--pw" id="loginPW" required>
            <label for="login--repw">Heslo znovu:</label>
            <input class="form" type="password" name="login--repw" id="repwConf" required>
            <p id="repw--confirm">Hesla se neshodují!</p>
            <p id="pw--short">Heslo je příliš krátké!</p>
            <button id="register--button" type="submit">Registrovat</button>
        </form>
    </div>

</main>

<?php View::render('footer'); ?>

<script src="../script/pwConfirm.js"></script>
<script src="../script/atd.js"></script>

</body> 
  
</html> 