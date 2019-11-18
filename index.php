<html>
<head>
    <meta charset="UTF-8">
    <title>lab 1</title>
    <h1 align="center">Введите ваши даные</h1>
</head>
<body>
<form method="post">
    <div id="communal">
        <button  type="submit">Цена</button>
    </div>
    <div class="three fields">
        <div class="field">
            <label>До</label>
            <input type="number" name="прошлый" placeholder="прошлый">
        </div>
        <div class="field">
            <label>После</label>
            <input type="number" name="текущий" placeholder="текущий">
        </div>
        <div class="field">
            <label>Тариф</label>
            <input type="number" name="тариф" placeholder="тариф">
        </div>
    </div>
</form>
<?php
if(is_numeric($_POST["прошлый"]) && is_numeric($_POST["текущий"]) && is_numeric($_POST["тариф"]))
{
    $Sum = ($_POST["текущий"] - $_POST["прошлый "]) * $_POST["тариф"];
}
echo $Sum;
?>
</div>
</div>
</div>
</body>
</head>
</html>

