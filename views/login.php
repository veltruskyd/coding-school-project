<?php include "../objects/header.php"; ?>
  
<body> 

<?php include "../objects/nav.php"; ?>

<main>

    <div id="divLogin">
        <form action="/coding-school-project/" class="formContainer" method="post">
            <h3>Přihlášení</h3>
            <label for="login--email">Emailová adresa:</label>
            <input class="form" type="email" name="login--email" required>
            <label for="login-pw">Heslo:</label>
            <input class="form" type="text" name="login--pw"  required>
            <button id="login--button" type="submit">Přihlásit</button>
        </form>
    </div>

</main>

<?php include "../objects/footer.php"; ?>

</body> 
  
</html> 