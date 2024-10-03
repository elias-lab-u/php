<!DOCTYPE html>
<html>
    <head>
        <title>calculadora PHP </title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form action="operador.php" method="GET">
            <input type="number" name="n1">
            <input type="number" name="n2">
            <select name="operacion">
                <option value="s">sumar</option>
                <option value="r">restar</option>
                <option value="m">multiplicar</option>
                <option value="d">dividir</option>
            </select>
            <button type="submit">=</button>
        </form>
    </body>
</html>

