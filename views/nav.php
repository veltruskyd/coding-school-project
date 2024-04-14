
<?php

use Core\Auth;

if(Auth::user()) {
echo(
    '<nav>
    <div id="navigace1"><img class="navImg" src="/coding-school-project/images/menu.svg" alt="menu">
        <div class="dropdown-content">
        <a class="dropdownItem" href="/coding-school-project/">Domů</a><br>
        <a class="dropdownItem" href="/coding-school-project/new">Nejnovější</a><br>
        <a class="dropdownItem" href="/coding-school-project/best">Nejlepší</a><br>
        <a class="dropdownItem" href="/coding-school-project/logout">Odhlásit</a><br>
        <a class="dropdownItem" href="/coding-school-project/register">Registrovat</a>
        </div>
    </div>
    <div id="navigace2"></div>
    <div id="navigace3"><a type="submit" method="GET" href="/coding-school-project/register" title="Registrace"><img class="navImg" src="/coding-school-project/images/register.svg" alt="register"></a></div>
    <div id="navigace4"><a href="/coding-school-project/logout" title="Ohlášení"><img class="navImg_out" src="/coding-school-project/images/login.svg" alt="logout"></a>  
    </div>
    <div id="navigace5"></div>
</nav>'
);
}else{
    echo(
        '<nav>
        <div id="navigace1"><img class="navImg" src="/coding-school-project/images/menu.svg" alt="menu">
            <div class="dropdown-content">
            <a class="dropdownItem" href="/coding-school-project/">Domů</a><br>
            <a class="dropdownItem" href="/coding-school-project/new">Nejnovější</a><br>
            <a class="dropdownItem" href="/coding-school-project/best">Nejlepší</a><br>
            <a class="dropdownItem" href="/coding-school-project/login">Přihlásit</a><br>
            <a class="dropdownItem" href="/coding-school-project/register">Registrovat</a>
            </div>
        </div>
        <div id="navigace2"></div>
        <div id="navigace3"><a type="submit" method="GET" href="/coding-school-project/register" title="Registrace"><img class="navImg" src="/coding-school-project/images/register.svg" alt="register"></a></div>
        <div id="navigace4"><a href="/coding-school-project/login" title="Přihlášení"><img class="navImg" src="/coding-school-project/images/login.svg" alt="login"></a>  
        </div>
        <div id="navigace5"></div>
    </nav>');
}