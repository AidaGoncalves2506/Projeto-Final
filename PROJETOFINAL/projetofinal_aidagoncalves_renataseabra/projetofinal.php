<?php
include("Conexao.php");

if (isset ($_POST["email"]) || isset ($_POST['senha']))  {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha o seu email";
} else if (strlen($_POST["senha"]) == 0) {
        echo "Preencha a sua senha";
} else {

$email= $email = $mysqli->real_escape_string($_POST["email"]);
$email= $email = $mysqli->real_escape_string($_POST["senha"]);

$sql_code = "SELECT * FROM usuarios WHERE email '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL:" . $mysqli->error);

$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {

 $usuario = $sql_query-> fetch_assoc();

 if(isset($_SESSION)) {
    session_start();

 }
 $_SESSION['id'] = $usuario['id'];
 $_SESSION['nome'] = $usuario['nome'];

 header ('Location: painel.php');
} else {
echo "Falha ao logar! Email ou senha incorretos";


    }
}
}
?>
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HanGo</title>
    <link rel="stylesheet" href="styleprojeto.css">
    
</head>
<body background="img/fundoazul.jpg"> 

<div class="div" align="right">

    <form action="https://wa.me/qr/KJT2VZ3QIPT5L1" align="left">
        <button>  <img src="img/call3.png" width="30" height="30" />
        </button>
        </form>

        <form action="mailto:hangoaprender2024@gmail.com" align="left">
            <button>  <img src="img/email.png" width="30" height="30" />
            </button>
            </form>

</div>

<div class="" align="rigt">
<form action="Conexao.php" align="right" method="POST">
    <p>
    <label> </label>
    <input type="text" name="email" placeholder="Enter Email"> 
    </p>
    <p>
    <label> </label>
    <input type="password" placeholder="Enter Password" name="senha"/> 
    </p>

    <button class="button button1" type="submit"> Iniciar sessão </button>
    </p>

</form>
</div>

<table align="center" border="0" width="99%"  bordercolor="LightSeaGreen" bgcolor="AliceBlue">

    <td width="500" align="center">
        <div class="HangoLogo" align="center">
            <img src="img/HangoLogo.png" height="50px">
            </div>
     </td> 
    <tr height=""> </td> </tr>
    
    <div class="barraazul" align="center">
    <td width="500" align="center">
    <img src="img/fundoazul.jpg" height="5px" width="1200"> </div>
    </td>
    </tr>
    <tr>
        <td>
            <section id="hanGo-info">
                <div class="info-container">
                    <div class="por-que" onmouseover="mostrarInfo()" onmouseout="restaurarInfo()">
                        <h2 id="titulo-por-que">Por que escolher a HanGo?</h2>
                        <p id="info-por-que">A HanGo é uma plataforma inovadora para apreender Hangul (Coreano).</p>
                    </div> 
                    <div class="como-funciona">
                        <h2>Como Funciona o HanGo</h2>
                        <ul class="funcionamento-lista">
                            <li><strong>Aulas Online:</strong> Oferecemos aulas individuais ou em grupo para estudantes a partir dos 14 anos.</li>
                            <li><strong>Exercícios e Projetos:</strong> Os alunos podem realizar exercícios e desenvolver projetos finais de aprendizagem, adaptados ao seu nível de conhecimento.</li>
                            <li><strong>Conteúdo Personalizado:</strong> O conteúdo didático é elaborado com base nos gostos e preferências de cada aluno, garantindo uma experiência de aprendizagem envolvente.</li>
                            <li><strong>Vídeo-Aulas Flexíveis:</strong> Disponibilizamos vídeo-aulas que podem ser assistidas conforme a conveniência do aluno, permitindo praticar no seu próprio horário.</li>
                            <li><strong>Avaliação do Aprendizado:</strong> Utilizamos questionários para avaliar o nível de aprendizagem e, posteriormente, aplicamos um teste para verificar o progresso do aluno.</li>
                        </ul>
                    </div>
                    <div class="equipa" onmouseover="mostrarInfoEquipa()" onmouseout="restaurarInfoEquipa()">
                        <h2 id="titulo-equipa">Conheça a Nossa Equipa</h2>
                        <p id="info-equipa">A nossa equipa é composta por especialistas em ensino de línguas.</p>
                    </div>
                    <!-- Seção com Vídeos Incorporados -->
                    <div class="exemplos-conteudos">
                        <h2>Exemplos de Conteúdos na Nossa Plataforma</h2>
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dG4a5QxoGwE?si=ZJTUalOPRZL_sozw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zHqY1u68Pqg?si=Pi698QpCfFpIIRpa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/pWVtB0ZNn0w?si=HZO-6oFyZZJDZs7N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                 </div>
            </section>
        </td>
    </tr>
</table>

<footer>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <!-- Redes Sociais -->
                <div class="col-12 col-md-4">
                    <h4>As nossas redes:</h4>
                    <div class="social-networks-links">
                        <a href="https://www.facebook.com" target="_blank" rel="nofollow">Facebook</a>
                        <a href="https://twitter.com" target="_blank" rel="nofollow">Twitter</a>
                        <a href="https://instagram.com" target="_blank" rel="nofollow">Instagram</a>
                        <a href="http://www.linkedin.com" target="_blank" rel="nofollow">LinkedIn</a>
                    </div>
                </div>

                <!-- Contactos -->
                <div class="col-12 col-md-4">
                    <h4>Contactos:</h4>
                    <p>Vias de comunicação (WhatsApp e Email) disponíveis para tirar qualquer tipo de dúvidas.</p>
                    <p>Horário: Dias úteis das 09:00 às 18:00h</p>
                    <p>+351 96 240 1500</p>
                    <p>+351 91 392 7105</p>
                    <br><a href="mailto:hangoaprender2024@gmail.com" style="color:#af0ab5;">hangoaprender2024@gmail.com</a>
                </div> 
            </div>
            <hr> 
            <div class="footer-copyright">
                <p>© 2024 HanGo. Desenvolvido por Aida & Renata Pi04</p>
            </div>
        </div>
    </div>
</footer>
<script>
    function mostrarInfo() {
        document.getElementById("titulo-por-que").innerText = "Por que escolher a HanGo?";
        document.getElementById("info-por-que").innerText = "A HanGo transforma sua experiência de aprendizagem, oferecendo recursos interativos personalizados e suporte dedicado.";
    }

    function restaurarInfo() {
        document.getElementById("titulo-por-que").innerText = "Por que escolher a HanGo?";
        document.getElementById("info-por-que").innerText = "A HanGo é uma plataforma inovadora para apreender Hangul (Coreano).";
    }
    function mostrarInfoEquipa() {
        document.getElementById("titulo-equipa").innerText = "Conheça a Nossa Equipa";
        document.getElementById("info-equipa").innerText = "A nossa equipa é dedicada e apaixonada pelo ensino de línguas, com vasta experiência e formação.";
    }

    function restaurarInfoEquipa() {
        document.getElementById("titulo-equipa").innerText = "Conheça a Nossa Equipa";
        document.getElementById("info-equipa").innerText = "A nossa equipa é composta por Aida Gonçalves & Renata Seabra.";
    }
</script>
</body>
</html>

        
    
    
    


    

    
     
    

  
    






</body>
</td> </tr>
<tr> <td colspan="2" align="center"> <h6>Criado por: Aida Gonçalves e Renata Seabra (PI04) </h6> </td> </tr>
</table>
</html>