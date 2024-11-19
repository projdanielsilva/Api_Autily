<?php
session_start(); // Inicia a sessão
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (!isset($_SESSION['id_crianca'])) {
    header("Location: ../api/erro404.php"); 
    exit();
}

//echo "Bem-vindo, " . $_SESSION['nome'] . "!";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Area Criança</title>

    <!-- <style>
        .scrollable-app {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            padding-bottom: 30px;
        }

        footer {
            background-color: #66B9FA;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-content p {
            margin: 5px 0;
        }

        .footer-content a {
            color: #fff;
            text-decoration: none;
        }

        .footer-content a:hover {
            text-decoration: underline;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #00a2ff;
            overflow-x: hidden;
        }

        header {
            background-color: #66B9FA;
            padding: 10px;
            position: relative;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 40px;
            margin-left: 47%;
        }

        .perfil-icon {
            font-size: 50px;
            color: white;
            margin-left: auto;
        }

        h1,
        p {
            color: #fff;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .image-section img {
            width: 120%;
            border-radius: 50%;
            max-width: 300px;
        }

        .text-section {
            background-color: #00a2ff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            width: 90%;
            max-width: 500px;
        }

        .text-section h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .text-section p {
            font-size: 1em;
            margin-bottom: 20px;
        }

        .text-section button {
            background-color: #77c2ff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        .text-section button:hover {
            background-color: #77c2ff;
        }

        .icone-container {
            background-color: rgba(114, 162, 250, 0.8);
            border-radius: 2%;
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .icones-app {
            display: flex;
            justify-content: center;
        }

        .icones-app a {
            margin: 0 10px;
        }

        .icones-app img {
            width: 40px;
            height: 40px;
            transition: transform 0.2s;
        }

        .icones-app img:hover {
            transform: scale(1.1);
        }

        .background-bubbles {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            background-color: #66B9FA;
            animation: rise 15s infinite linear;
        }

        @keyframes rise {
            0% {
                transform: translateY(100vh);
            }

            100% {
                transform: translateY(-100vh);
            }
        }

        .bubble:nth-child(1) {
            width: 100px;
            height: 100px;
            left: 10%;
            animation-duration: 7s;
        }

        .bubble:nth-child(2) {
            width: 150px;
            height: 150px;
            left: 70%;
            animation-duration: 12s;
        }

        .bubble:nth-child(3) {
            width: 50px;
            height: 50px;
            left: 30%;
            animation-duration: 10s;
        }

        .bubble:nth-child(4) {
            width: 80px;
            height: 80px;
            left: 50%;
            animation-duration: 15s;
        }

        .bubble:nth-child(5) {
            width: 60px;
            height: 60px;
            left: 20%;
            animation-duration: 8s;
        }

        .bubble:nth-child(6) {
            width: 120px;
            height: 120px;
            left: 80%;
            animation-duration: 18s;
        }

        .bubble:nth-child(7) {
            width: 90px;
            height: 90px;
            left: 40%;
            animation-duration: 20s;
        }

        .bubble:nth-child(8) {
            width: 110px;
            height: 110px;
            left: 60%;
            animation-duration: 14s;
        }

        .bubble:nth-child(9) {
            width: 130px;
            height: 130px;
            left: 15%;
            animation-duration: 22s;
        }

        .bubble:nth-child(10) {
            width: 70px;
            height: 70px;
            left: 75%;
            animation-duration: 9s;
        }

        .botao {
            background-color: #2986ff;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .texto {
            color: rgb(255, 255, 255);
        }

        .menu-section {
            background-color: #00a2ff;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .menu-section img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .menu-section h1,
        .menu-section p {
            margin: 10px 0;
        }

        .menu-section button {
            background-color: #0400ff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        .menu-section button:hover {
            background-color: #3cc4bb;
        }

        .img-menu {
            margin-left: 35%;
        }

        .img-nova {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        @media (max-width: 768px) {
            .text-section {
                width: 95%;
            }

            .image-section img {
                width: 90%;
                max-width: 200px;
            }
        }

        .menu-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            background-color: #00a2ff;
            border-radius: 5px;
            width: 200px;
            z-index: 1000;
        }

        .dropdown a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .dropdown a:hover {
            background-color: #77c2ff;
        }

        #page-content {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            z-index: 1001;
            overflow: auto;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .close {
            float: right;
            font-size: 24px;
            cursor: pointer;
            color: #000000;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            background-color: #2986ff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #77c2ff;
        }

        .text-section h1 {
            margin-bottom: 20px;
            /* Mais espaço entre o título e o parágrafo */
        }

        .text-section button {
            background-color: #77c2ff;
            /* Azul mais agradável */
            padding: 12px 25px;
            /* Tamanho do botão ajustado */
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .text-section button:hover {
            background-color: #66a5e1;
            /* Cor ao passar o mouse */
        }

        .icon-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .icon-buttons button {
            background-color: #2986ff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 5px;
            /* Espaço entre os botões */
        }

        .icon-buttons button:hover {
            background-color: #77c2ff;
        }

        .extra-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0f7fa;
            border-radius: 5px;
        }

        .add-info-btn {
            background-color: #2986ff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            /* Espaço entre os botões */
            transition: background-color 0.3s;
        }

        .add-info-btn:hover {
            background-color: #77c2ff;
        }

        .add-delete-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .add-delete-container button {
            margin: 0 10px;
            /* Espaço entre os botões */
        }

        .form-group button {
            display: block;
            /* Para centralizar */
            margin: 20px auto;
            /* Centraliza o botão de salvar */
            background-color: #2986ff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #77c2ff;
        }

        #info-list {
            list-style-type: none;
            padding: 0;
        }

        #info-list li {
            margin: 5px 0;
        }

        #info-list button {
            margin-left: 10px;
        }

        .alert-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .alert-box {
            background: linear-gradient(45deg, #ffffff, #0099ff);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 300px;
        }

        .input-password {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .sign-in-button {
            background-color: #0059ff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
    </style> -->
</head>

<header>
        <img src="../img/autily azul claro.png" alt="Logo" class="logo">
        <div class="menu-container">
            <i class="fas fa-bars" id="menu-icon" style="font-size: 30px; color: white; cursor: pointer;"></i>
            <div class="dropdown" id="dropdown-menu">
                <a href="perfilC.php" onclick="showPage('perfil')">Perfil</a>
                <a href="#" onclick="showPage('ajuda')">Ajuda</a>
                <!-- <a href="#" onclick="showAlert()">Ir para área dos pais</a> -->
                 <a href="../api/logout.php">Ir para área dos pais</a>
                <div id="customAlert" class="alert-container" style="display: none;">
                    <div class="alert-box">
                        <span class="close" onclick="closeAlert()">&times;</span>
                        <input type="password" id="parentPassword" placeholder="Password" class="input-password">
                        <button class="sign-in-button" onclick="redirectToPais()">Entrar</button>
                    </div>
                </div>
                <a href="../api/logout.php">Sair</a>
            </div>
        </div>
    </header>


<body>
    <div class="scrollable-app">
        <main class="main-content">
            <div class="background-bubbles">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>

            <div class="container">
                <div class="image-section">
                    <img src="../img/ia (1).png" alt="Nina">
                </div>

                <div class="text-section">
                <h1>Bem-vindo(a), <?php echo $_SESSION['nome']; ?></h1> <!-- Teste se o ID da sessão está correto -->
                    <p>Esta é a área dedicada às crianças. Aqui você pode interagir com jogos, rotinas e muito mais!</p>
                </div>

                <div class="menu-section">
                    <img src="../img/jogo.PNG" alt="Imagem de pintura" class="img-nova">
                    <h1>Jogos</h1>
                    <p>Hora de Brincar! Escolha um dos nossos jogos e divirta-se!</p>
                    <a href="../jogos/jogos.html">
                        <button class="botao">Começar a Jogar</button>
                    </a>
                </div>

                <div class="menu-section">
                    <img src="../img/rotinaa.PNG" alt="imagem com relogio" class="img-nova">
                    <h1>Rotina</h1>
                    <p>Clique aqui e veja a rotina que seus pais deixaram para você!</p>
                    <a href="rotinaC.html">
                        <button class="botao">Ver Rotina</button>
                    </a>
                </div>
            </div>

            <!-- <div id="page-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div id="content">
                    <h2>Perfil</h2>

                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select id="tipo" required>
                            <option value="pai">Pai</option>
                            <option value="responsavel">Responsável</option>
                        </select>
                    </div>
                    <form id="perfil-form">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade:</label>
                            <input type="number" id="idade" required>
                        </div>
                        <div class="form-group">
                            <label for="nivel-autismo">Nível do Autismo:</label>
                            <select id="nivel-autismo" required>
                                <option value="leve">Leve</option>
                                <option value="moderado">Moderado</option>
                                <option value="severo">Severo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email do responsável:</label>
                            <input type="email" id="email" required>
                        </div>

                        <div class="extra-info" id="extra-info-container">
                            <h2>Adicionar Informações Extras</h2>
                            <div class="form-group">
                                <input type="text" id="extra-info" placeholder="Digite aqui...">
                            </div>
                            <button class="add-info-btn" onclick="addExtraInfo()">+ Adicionar</button>

                            <ul id="info-list"></ul> Lista para informações adicionais 
                        </div>
                        <div class="form-group">
                            <button type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div> -->
        </main>

        <footer>
            <div class="footer-space"></div>
            <p>&copy; 2024 Autily</p>
            <p>Desenvolvido por: Equipe Autily</p>
            <p>Contato: <a href="autilyy@gmail.com">autilyy@gmail.com</a></p>
        </footer>
    </div>

    <script>
        document.getElementById('menu-icon').onclick = function() {
               const dropdown = document.getElementById('dropdown-menu');
               dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
           };
       
           function showPage(page) {
               let content = '';
               if (page === 'perfil') {
                   content = `
                       <h2>Perfil</h2>
                       <div class="form-group">
                           <label for="tipo">Tipo:</label>
                           <select id="tipo" required>
                               <option value="pai">Pai</option>
                               <option value="responsavel">Responsável</option>
                           </select>
                       </div>
                       <form id="perfil-form">
                           <div class="form-group">
                               <label for="nome">Nome:</label>
                               <input type="text" id="nome" required>
                           </div>
                           <div class="form-group">
                               <label for="idade">Idade:</label>
                               <input type="number" id="idade" required>
                           </div>
                           <div class="form-group">
                               <label for="nivel-autismo">Nível do Autismo:</label>
                               <select id="nivel-autismo" required>
                                   <option value="leve">Leve</option>
                                   <option value="moderado">Moderado</option>
                                   <option value="severo">Severo</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="email">Email do responsável:</label>
                               <input type="email" id="email" required>
                           </div>
                           <div class="extra-info" id="extra-info-container">
                               <h2>Adiconar Informações Extras</h2>
                               <div class="form-group">
                                   <input type="text" id="extra-info" placeholder="Digite aqui...">
                               </div>
                               <button class="add-info-btn" onclick="addExtraInfo()">+ Adicionar</button>
                               <ul id="info-list"></ul> <!-- Lista para informações adicionais -->
                           </div>                   
                           <div class="form-group">
                               <button type="submit">Salvar</button>
                           </div>
                       </form>
                   `;
               } else if (page === 'ajuda') {
                   content = `
                       <h2 style="color: black; margin-bottom:20px;">Ajuda</h2>
                       <p style="color: black;">Bem-vindo à seção de ajuda do Autily!</p> 
                       <p style="color: black;">1. O autily tem como objetivo facilitar e auxiliar o seu cotidiano</p> 
                       <p style="color: black;">2. Ao clicar na rotina, voce vera a rotina do dia que seus pais ou responsaveis te deixaram!</p>
                       <p style="color: black;">3. Ao clicar nos Jogos o autily te dara varias opções de jogos, escolha o que mais te agrada e jogue a vontade!</p> 
                       <p style="color: black;">Para mais informações entrar em contato com a equipe autily pelo email abaixo:</p>
                   `;
               }
       
               document.getElementById('content').innerHTML = content;
       
               // Adiciona a funcionalidade de salvar para o formulário
               if (page === 'perfil') {
                   document.getElementById('perfil-form').onsubmit = function(event) {
                       event.preventDefault();
                       alert('Perfil salvo com sucesso!');
                       closeModal();
                   };
               }
       
               document.getElementById('page-content').style.display = 'block';
           }
       
           function closeModal() {
               document.getElementById('page-content').style.display = 'none';
           }
       
           const infoList = [];
       
           function addExtraInfo() {
               const extraInfoInput = document.getElementById('extra-info');
               const info = extraInfoInput.value.trim();
               
               if (info) {
                   infoList.push(info);
                   extraInfoInput.value = ''; // Limpa o campo de entrada
                   updateInfoList(); // Atualiza a lista exibida
               }
           }
       
           function deleteInfo(index) {
               infoList.splice(index, 1);
               updateInfoList(); // Atualiza a lista exibida
           }
       
           function editInfo(index) {
               const newInfo = prompt('Edite a informação:', infoList[index]);
               if (newInfo !== null) {
                   infoList[index] = newInfo;
                   updateInfoList(); // Atualiza a lista exibida
               }
           }
       
           function updateInfoList() {
               const infoListElement = document.getElementById('info-list');
               infoListElement.innerHTML = ''; // Limpa a lista antes de re-popular
       
               infoList.forEach((info, index) => {
                   const li = document.createElement('li');
                   li.textContent = info;
       
                   const editButton = document.createElement('button');
                   editButton.textContent = '✏️ Editar';
                   editButton.onclick = () => editInfo(index);
       
                   const deleteButton = document.createElement('button');
                   deleteButton.textContent = '🗑️ Deletar';
                   deleteButton.onclick = () => deleteInfo(index);
       
                   li.appendChild(editButton);
                   li.appendChild(deleteButton);
                   infoListElement.appendChild(li);
               });
           }
   
           const modal = document.getElementById("modal");
           const btn = document.getElementById("openModalBtn");
           const span = document.getElementsByClassName("close")[0];
   
           btn.onclick = function() {
           modal.style.display = "block";
           }
   
           // Fechar o modal
           span.onclick = function() {
           modal.style.display = "none";
           }
   
           // Fechar o modal ao clicar fora dele
           window.onclick = function(event) {
           if (event.target == modal) {
               modal.style.display = "none";
           }
           }
   </script>
</body>

</html>