@if($errors->any())

   {{dd($errors)}}
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- copie e cole em seu site -->
    <div id="ebrom_chat" data-empresa-uuid="b6ce8eaf-8585-4134-be19-a32b04f779dc"></div>
    <link type="stylesheet" href="https://temp.ebrom.app/widget/eb_chat.css" />
    <script type="text/javascript" src="https://temp.ebrom.app/widget/eb_chat.js"></script>
    <form action="/clients/store" method="post">
        @csrf
        <input name="name" placeholder="Nome">
        <input name="email" placeholder="E-mail">
        <input name="phone" placeholder="Telefone">
        <input name="id_number" placeholder="CPF">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>