<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MDLIB 2.0</title>
    <style>
        body {
            margin: 0;
            background-color: #a3c9d9;
            font-family: Arial, sans-serif;
            color: #000;
        }
        nav {
            background-color: #a3c9d9;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 15px;
            font-size: 14px;
        }
        nav a {
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .user-icon {
            margin-left: auto;
            width: 32px;
            height: 32px;
            background-color: #4a6a7a;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .container {
            background-color: #4a6a7a;
            margin: 20px auto;
            max-width: 1200px;
            padding: 15px;
            border-radius: 5px;
        }
        .header-title {
            text-align: center;
            font-weight: bold;
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 20px;
            margin-bottom: 15px;
            background: linear-gradient(to bottom, #a3c9d9, #4a6a7a);
            padding: 5px 0;
            border-radius: 5px;
            color: black;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('arquivos') }}">Arquivos</a>
        <a href="{{ route('processados') }}">Processados</a>
        <a href="{{ route('guia') }}">Guia</a>
        <a href="{{ route('auditoria') }}">Auditoria</a>
        <a href="{{ route('equipe') }}">Equipe</a>
        <a href="{{ route('painel-adm') }}">Painel ADM</a>
        <a href="{{ route('meus-dados') }}">Meus Dados</a>
        <a href="{{ route('login') }}" class="user-icon" title="Login">U</a>
    </nav>
    <div class="container">
        <div class="header-title">MDLIB 2.0</div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
