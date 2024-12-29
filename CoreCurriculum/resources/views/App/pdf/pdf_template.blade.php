<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin: 0 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Relatório</h1>
    </div>
    <div class="content">
        <p>Nome: {{ $data['name'] ?? 'Não informado' }}</p>
        <p>Email: {{ $data['email'] ?? 'Não informado' }}</p>
        <p>Mensagem: {{ $data['message'] ?? 'Nenhuma mensagem enviada' }}</p>
        <h1>teste etste</h1>
    </div>
</body>
</html>
