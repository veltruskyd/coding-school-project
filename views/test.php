<?php use Core\View;


View::render('header'); ?>
  
<body> 

<?php View::render('nav'); ?>

<div id="divLogin">
        <form action="/coding-school-project/test" class="formContainer" method="post">
            <h3>Počet knih</h3>
            <label for="login--email">Počet knih:</label>
            <input class="form" type="number" name="login--email" required>
            <label for="login-pw">Heslo:</label>
            <input class="form" type="number" name="login--pw"  required>
            <button id="login--button" type="submit">Přihlásit</button>
        </form>
    </div>

    <div class="container">
  <select id="countrySelect" class="select-relations">
    <option value="USA">USA</option>
    <option value="Canada">Canada</option>
  </select>
  <select id="citySelect" class="select-relations" data-sf-parent="countrySelect">
    <option value="New York" data-pr="countrySelect:USA">New York</option>
    <option value="Los Angeles" data-pr="countrySelect:USA">Los Angeles</option>
    <option value="Toronto" data-pr="countrySelect:Canada">Toronto</option>
    <option value="Vancouver" data-pr="countrySelect:Canada">Vancouver</option>
  </select>
  <select id="regionSelect" class="select-relations" data-sf-parent="citySelect">
    <option value="Manhattan" data-pr="citySelect:New York">Manhattan</option>
    <option value="Brooklyn" data-pr="citySelect:New York">Brooklyn</option>
    <option value="Hollywood" data-pr="citySelect:Los Angeles">Hollywood</option>
    <option value="Downtown" data-pr="citySelect:Los Angeles,citySelect:Toronto">Downtown</option>
    <option value="North Vancouver" data-pr="citySelect:Vancouver">North Vancouver</option>
    <option value="West Vancouver" data-pr="citySelect:Vancouver">West Vancouver</option>
  </select>
</div>


<!-- Select Relations JS -->
<script src="select-relations.js"></script>

</body> 
  
</html> 