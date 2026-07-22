<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Membros</title>
</head>
<body>

    <h1>Cadastro de Membros</h1>

    <form action="/membros" method="POST">

        @csrf

        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco"><br><br>

        <label>Data de nascimento:</label><br>
        <input type="date" name="data_nascimento"><br><br>

        <button type="submit">Salvar</button>

    </form>

</body>
</html>