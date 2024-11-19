<?php
session_start(); // Inicia a sessão
include('../config_serv/conexao.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    // Redireciona o usuário para a página de login caso não esteja logado
    header("Location: ../api/erro404.php"); // 
    exit();
}

$responsavel_id = $_SESSION['id'];
$conn->set_charset("utf8mb4");

// Consulta para obter os dados da criança
$stmt = $conn->prepare("SELECT nome, idade, email, nivel_de_suporte, info FROM crianca WHERE responsavel_id = ?");
$stmt->bind_param("i", $responsavel_id);
$stmt->execute();
$result = $stmt->get_result();

$crianca = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Perfil do Usuário</title>
    <style>
        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.7;
            z-index: 0;
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

        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f2f2f2;
            min-height: 100vh;
            justify-content: center;
        }

        .background {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        main {
            position: relative;
            padding: 20px;
            z-index: 1;
            border-radius: 15px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        #form-perfil {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 35vw;
            height: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            align-items: center;
            margin: 0 auto;
            transition: all 0.3s ease;
            position: relative;
            /* Isso permite que o ícone fique dentro */
        }

        .seta {
            position: absolute;
            /* Para posicionar o ícone no topo do formulário */
            left: 0;
            top: 0;
            margin-left: 30px;
            /* Ajuste do espaço à esquerda */
            margin-top: 30px;
            /* Ajuste do espaço no topo */
        }

        .seta a {
            text-decoration: none;
            /* Remove sublinhado do link */
        }

        .seta .fa-arrow-left {
            font-size: 24px;
            color: #02a7e9;
        }

        #user-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        #dados-perfil {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        label {
            font-weight: bold;
            align-self: flex-start;
        }

        input,
        button {
            padding: 0.5rem;
            font-size: 1rem;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        button {
            background-color: #02a7e9;
            color: white;
            border-radius: 30px;
            padding: 12px 20px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsividade */

        @media (max-width: 500px) {
            #form-perfil {
                width: 90vw;
                min-width: 350px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            #form-perfil {
                padding: 20px;
                max-width: 70%;
            }
        }

        @media (max-width: 480px) {
            #user-avatar {
                width: 80px;
                height: 80px;
            }

            #dados-perfil {
                font-size: 1rem;
            }

            input,
            button {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <div class="background">
        <!-- Bolinhas decorativas -->
        <div class="circle small blue1 one"></div>
        <div class="circle medium blue2 two"></div>
        <div class="circle large blue1 three"></div>
        <div class="circle medium blue1 four"></div>
        <div class="circle small blue2 five"></div>
        <div class="circle large blue2 six"></div>
        <div class="circle small blue1 seven"></div>

        <main>
            <!-- Formulário para editar informações -->
            <section id="perfil-editar">
                <!-- Formulário para editar informações -->
                <form id="form-perfil" action="../api/perfil.php" method="POST">
                    <div class="seta">
                        <a href="../php/pais.php">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                    <img src="../img/ia (1).png" alt="Avatar do Usuário" id="user-avatar">
                    <div id="dados-perfil">Dados do Perfil da Criança</div>

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($crianca['nome'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <label for="idade">Idade:</label>
                    <input type="text" id="idade" name="idade" value="<?php echo htmlspecialchars($crianca['idade'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <label for="email">Email Responsável:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($crianca['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <label for="suporte">Nível de Suporte:</label>
                    <input type="text" id="suporte" name="suporte" value="<?php echo htmlspecialchars($crianca['nivel_de_suporte'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <label for="info">Informações:</label>
                    <input type="text" id="info" name="info" value="<?php echo htmlspecialchars($crianca['info'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                    <button type="submit">Salvar Alterações</button>
                </form>
            </section>


        </main>
    </div>


</body>

</html>