<?php include "../objects/header.php"; ?>
  
<body> 

<nav>
    <div id="navigace1"><img src="../images/menu.svg" alt="menu">
        <div class="dropdown-content">
        <a class="dropdownItem" href="../index.php">Domů</a><br>
        <a class="dropdownItem" href="./new.php">Nejnovější</a><br>
        <a class="dropdownItem" href="./best.php">Nejlepší</a><br>
        <a class="dropdownItem" href="./login.php">Přihlásit</a><br>
        <a class="dropdownItem" href="./register.php">Registrovat</a>
        </div>
    </div>
    <div id="navigace2"></div>
    <div id="navigace3"><a href="./register.php" title="Registrace"><img src="../images/register.svg" alt="register"></a></div>
    <div id="navigace4"><a href="../views/login.php" title="Přihlášení"><img src="../images/login.svg" alt="login"></a></div>
    <div id="navigace5"></div>
</nav>

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

<footer>
    <div class="footerKontakt">
        <a href="mailto:daniel.veltrusky@gmail.com">Napište nám</a>
    </div>
    <div class="footerAbout">
    Cyklistika pohodlně je web zaměřený na sdílení pohodlných a bezpečných cyklostezek pro pohyb mezi městy a uvnitř nich.
    </div>
</footer>

</body> 
  
</html> 