<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato - Naciona Fábricas</title>
</head>
<body style="width: 100%; background-color:#1fdea8; padding: 0; text-align: center; display: flex; flex-direction: column; align-items: center; ">

<header style="display: flex; width:100%; justify-content: center;">

    <h2 style="background-color: #ffffff; width:60%; padding:10px 0;">Nova mensagem do Formulário de Contato</h2>

</header>

<main style="width: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px 0; align-items: center;
background-color:#1fdea8; ">
    <p style="text-decoration: none; background-color: #ffffff; padding: 15px; margin: 0; color: black; width: 60%; display: flex; justify-content: space-between; "><strong>Nome:</strong> {{ $formData['nome'] }}</p>
    <p style="text-decoration: none; background-color: #ffffff; padding: 15px; margin: 0; color: black; width: 60%; display: flex; justify-content: space-between;"><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p style="text-decoration: none; background-color: #ffffff; padding: 15px; margin: 0; color: black; width: 60%; display: flex; justify-content: space-between;"><strong>Telefone:</strong> {{ $formData['telefone'] }}</p>
    <p style="text-decoration: none; background-color: #ffffff; padding: 15px; margin: 0; color: black; width: 60%; display: flex; justify-content: space-between;"><strong>Mensagem:</strong> {{ $formData['mensagem'] }}</p>
</main>

<footer style="background-color: #ffffff; width:60%; padding:10px 0;">
    <p style="text-decoration: none; color: #000000; font-weight: 700; font-size: 20px;">Nacional Fábricas</p>
</footer>

</body>
</html>
