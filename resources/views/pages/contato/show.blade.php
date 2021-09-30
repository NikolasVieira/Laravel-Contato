<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" />

    <title>contato</title>

</head>

<body>
    <div>
        <p>Nome do Contato {{ $contato->nome }} </p>
        <p>E-Mail do Contato {{ $contato->email }} </p>
        <p>Telefone do Contato {{ $contato->telefone }} </p>
    </div>
</body>

</html>
