<div class="titulo">Calculator</div>

<form method="post">
    <input type="text" name="x">
    <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <input type="text" name="y">
    <button type="submit" name="submit" value="submit"> CALCULATE </button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

if (isset($_POST['submit'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $operator = $_POST['operator'];
    switch($operator) {
        case 'None' :
            echo "You need to chose an operator :(";
            break;
        case 'Add' :
            echo "$x + $y is equal to: " . $x + $y;
            break;
        case 'Subtract' :
            echo "$x - $y is equal to: " . $x - $y;
            break;
        case 'Multiply' :
            echo "$x * $y is equal to: " . $x * $y;
            break;
        case 'Divide' :
            echo "$x / $y is equal to: " . $x / $y;
            break;
       }
}
