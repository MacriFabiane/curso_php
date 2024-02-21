<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamento.php" method="GET"><!- action é aonde o get vai processar os dados do form ->
        <div>
            <input type="text" name ="nome" placeholder="Preencha seu nome">
        </div>
        <div>
            <input type="text" name ="idade" placeholder="Preencha com sua idade"> <!-name é a parte qu vai ser a chave do array get ->
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body> 
</html>