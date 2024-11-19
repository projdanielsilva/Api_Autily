<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../chatbot/style.css">
    <title>Area Criança</title>

    <style>
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

        .logo {
            height: 40px; 
            margin-left: 47%;
        }

        h1, p {
            color: #000000;
        }

        h4{
            color: #0026ff;
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

        .bubble:nth-child(1) { width: 100px; height: 100px; left: 10%; animation-duration: 7s; }
        .bubble:nth-child(2) { width: 150px; height: 150px; left: 70%; animation-duration: 12s; }
        .bubble:nth-child(3) { width: 50px; height: 50px; left: 30%; animation-duration: 10s; }
        .bubble:nth-child(4) { width: 80px; height: 80px; left: 50%; animation-duration: 15s; }
        .bubble:nth-child(5) { width: 60px; height: 60px; left: 20%; animation-duration: 8s; }
        .bubble:nth-child(6) { width: 120px; height: 120px; left: 80%; animation-duration: 18s; }
        .bubble:nth-child(7) { width: 90px; height: 90px; left: 40%; animation-duration: 20s; }
        .bubble:nth-child(8) { width: 110px; height: 110px; left: 60%; animation-duration: 14s; }
        .bubble:nth-child(9) { width: 130px; height: 130px; left: 15%; animation-duration: 22s; }
        .bubble:nth-child(10) { width: 70px; height: 70px; left: 75%; animation-duration: 9s; }

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

        @media (max-width: 768px) {
            .text-section { width: 95%; }
            .image-section img { width: 90%; max-width: 200px; }
        }

        .unit-container {
          display: flex;
          flex-direction: column;
          gap: 15px;
      }

      .unit {
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-color: #e6e6e6;
          padding: 15px;
          border-radius: 15px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          width: 350px;
          flex-direction: column;
          display: flex;
          gap: 15px;
          align-items: center; 
          justify-content: center;
          margin-top: 10%;
      }

      .unit-info h3 {
          font-size: 1.2em;
          color: white;
      }

      .unit-info p {
          font-size: 0.9em;
          color: white;
      }

      .unit:nth-child(1) {
          background-color: #66B9FA;
      }

      .unit:nth-child(2) {
          background-color: #258EE8;
      }

      .unit:nth-child(3) {
          background-color: #66B9FA;
      }

      .unit:nth-child(4) {
          background-color: #258EE8;
      }

      .unit:nth-child(5) {
          background-color: #66B9FA;
      }

      .unit:nth-child(6) {
          background-color: #258EE8;
      }

      .progress-circle {
          background-color: white;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          color: #5f00ff;
          font-weight: bold;
      }

      .main-content {
          flex: 1;
          display: flex;
          justify-content: center; 
          align-items: center;     
          padding-bottom: 30px;
      }
        </style>
</head>

<header>
    <a href="pais.php">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
    <img src="../img/autily azul claro.png" alt="Logo" class="logo">      
    <div class="menu-container">
    </div>
</header>

<body>

 <!-- Botão Flutuante -->
 <button id="floatButton" class="float-button">
        <img src="../chatbot/testeia.png.png" alt="Assistente" class="float-image">
    </button>

    <!-- Janela do Chat -->
    <div id="chatbox" class="chatbox hidden">
        <div id="chat-header" class="chat-header">
            <img src="../chatbot/50px2.png" alt="">
            <span>MIA</span>
            <button id="closeButton" class="close-button">&times;</button>
        </div>
        <div id="messages" class="messages"></div>
        <div id="options" class="options"></div>
    </div>

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


            <div class="unit-container">
              <div class="unit">
                  <div class="unit-info">
                      <h3>Jogo 1</h3>
                      <br>
                      <h4>Objetivo:</h4>
                      <p>TAL TAL</p>
                      <br>
                      <h4>Acertos:</h4>
                      <p>10/15</p> 
                      <br>
                      <h3>Evolução Atual:</h3>                    
                  </div>
                  <div class="progress-circle">
                      <p>90%</p>
                  </div>
              </div>
              
              <div class="unit">
                  <div class="unit-info">
                    <h3>Jogo 2</h3>
                    <br>
                    <h4>Objetivo:</h4>
                    <p>TAL TAL</p>
                    <br>
                    <h4>Acertos:</h4>
                    <p>10/15</p> 
                    <br>
                    <h3>Evolução Atual:</h3> 
                  </div>
                  <div class="progress-circle">
                      <p>85%</p>
                  </div>
              </div>
      
              <div class="unit">
                  <div class="unit-info">
                    <h3>Jogo 3</h3>
                    <br>
                    <h4>Objetivo:</h4>
                    <p>TAL TAL</p>
                    <br>
                    <h4>Acertos:</h4>
                    <p>10/15</p> 
                    <br>
                    <h3>Evolução Atual:</h3> 
                  </div>
                  <div class="progress-circle">
                      <p>75%</p>
                  </div>
              </div>
      
              <div class="unit">
                <div class="unit-info">
                  <h3>Jogo 4</h3>
                  <br>
                  <h4>Objetivo:</h4>
                  <p>TAL TAL</p>
                  <br>
                  <h4>Acertos:</h4>
                  <p>10/15</p> 
                  <br>
                  <h3>Evolução Atual:</h3> 
                </div>
                <div class="progress-circle">
                    <p>70%</p>
                </div>
            </div>    
            
            <div class="unit">
              <div class="unit-info">
                <h3>Jogo 5</h3>
                <br>
                <h4>Objetivo:</h4>
                <p>TAL TAL</p>
                <br>
                <h4>Acertos:</h4>
                <p>10/15</p> 
                <br>
                <h3>Evolução Atual:</h3> 
              </div>
              <div class="progress-circle">
                  <p>70%</p>
              </div>
          </div> 
          
          <div class="unit">
            <div class="unit-info">
              <h3>Jogo 6</h3>
              <br>
              <h4>Objetivo:</h4>
              <p>TAL TAL</p>
              <br>
              <h4>Acertos:</h4>
              <p>10/15</p> 
              <br>
              <h3>Evolução Atual:</h3> 
            </div>
            <div class="progress-circle">
                <p>70%</p>
            </div>
        </div>

              </div>
              </div>
          </div>
        </main>

        <footer>
            <div class="footer-space"></div>
            <p>&copy; 2024 Autily</p>
            <p>Desenvolvido por: Equipe Autily</p>
            <p>Contato: <a href="autilyy@gmail.com">autilyy@gmail.com</a></p>
        </footer>
    </div>
</body>
<script src="../chatbot/scripts.js"></script>
</html>
