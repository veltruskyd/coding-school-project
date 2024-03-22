<?php include "./objects/header.php"; ?>
  
<body> 

<nav>
    <div id="navigace1"><img src="../images/menu.svg" alt="menu">
        <div class="dropdown-content">
        <a class="dropdownItem" href="../index.html">Domů</a><br>
        <a class="dropdownItem" href="./new.html">Nejnovější</a><br>
        <a class="dropdownItem" href="./best.html">Nejlepší</a><br>
        <a class="dropdownItem" href="./login.html">Přihlásit</a><br>
        <a class="dropdownItem" href="./register.html">Registrovat</a>
        </div>
    </div>
    <div id="navigace2"></div>
    <div id="navigace3"><a href="./register.html" title="Registrace"><img src="../images/register.svg" alt="register"></a></div>
    <div id="navigace4"><a href="./login.html" title="Přihlášení"><img src="../images/login.svg" alt="login"></a></div>
    <div id="navigace5"></div>
</nav>

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

<footer>
    <div class="footerKontakt">
        <a href="mailto:daniel.veltrusky@gmail.com">Napište nám</a>
    </div>
    <div class="footerAbout">
    Cyklistika pohodlně je web zaměřený na sdílení pohodlných a bezpečných cyklostezek pro pohyb mezi městy a uvnitř nich.
    </div>
</footer>

<script src="../script/pwConfirm.js"></script>
<script src="../script/atd.js"></script>

</body> 
  
</html> 