<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="get" action="database.php">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div>
                <label for="fullName">Nome Completo</label>
                <br>
                <input type="text" name="full-name" id="fullName" required>
            </div>
            <br>
            <div>
                <label for="birthDate">Data de Nascimento</label>
                <br>
                <input type="date" name="birth-date" id="birthDate" required>
            </div>
            <br>
            <div>
                <label for="sex">Sexo</label>
                <br>
                <input type="radio" name="sex" id="vale" value="M" checked>
                <label for="male">Masculino</label>
                <br>
                <input type="radio" name="sex" id="female" value="F">
                <label for="female">Feminino</label>
            </div>
            <br>
            <div>
                <label for="maritalStatus">Estado Civil</label>
                <br>
                <select name="marital-status" id="maritalStatus" required>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="separado">Separado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viúvo">Viúvo</option>
                </select>
            </div>
        </fieldset>
        <br>
        <fieldset>
            <legend>Informações de Cadastro</legend>
            <div>
                <label for="email">E-mail</label>
                <br>
                <input type="email" name="email" id="email" required>
            </div>
            <br>
            <div>
                <label for="password">Senha</label>
                <br>
                <input type="password" name="password" id="password" required>
            </div>
        </fieldset>
        <br>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>