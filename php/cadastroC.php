

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autily</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .background {
            background-color: #f9f9f9;
            height: 100vh;
            width: 100vw;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.7;
        }

        .circle.blue1 {
            background-color: #02a7e9;
        }

        .circle.blue2 {
            background-color: #60caf7;
        }

        .circle.small {
            width: 50px;
            height: 50px;
        }

        .circle.medium {
            width: 120px;
            height: 120px;
        }

        .circle.large {
            width: 200px;
            height: 200px;
        }

        .circle.one {
            top: 20px;
            right: 40px;
        }

        .circle.two {
            top: 80px;
            left: 20px;
        }

        .circle.three {
            bottom: 50px;
            right: 60px;
        }

        .circle.four {
            bottom: 80px;
            left: 30px;
        }

        .circle.five {
            top: 180px;
            right: 150px;
        }

        .circle.six {
            bottom: 120px;
            left: 80px;
        }

        .circle.seven {
            top: 50px;
            right: 100px;
        }

        .container {
            background-color: white;
            padding: 30px;
            max-width: 100%;
            width: 500px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: 2;
            position: relative;
        }

        .container img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
        }

        .input-group input::placeholder {
            color: #aaa;
        }

        .input-group input:focus {
            border-color: #02a7e9;
        }

        .button {
            background-color: #02a7e9;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        .button:hover {
            background-color: #60caf7;
        }

        .links {
            margin-top: 20px;
        }

        .links a {
            text-decoration: none;
            color: #02a7e9;
            font-size: 14px;
            display: block;
            margin-top: 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .message {
            color: red;
            margin-top: 10px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<div class="background">
    <div class="container">
        <img src="../img/ia (1).png" alt="" class="ia"> <!-- Ajuste o caminho da imagem -->
        <h1>Bem-vindo!</h1>

        <form id="formCadastro" method="POST" action="../api/cadastrar_crianca.php">
            <input type="hidden" name="acao" value="cadastro">
            <div class="input-group">
                <input type="text" name="nome" placeholder="Nome" required>
            </div>
            <div class="input-group">
                <input type="text" name="idade" placeholder="Idade" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="input-group">
                <input type="password" name="senha" placeholder="Senha" required>
            </div>
            <button class="button" type="submit">Criar Conta</button>
        </form> 
    </div>
</div>
