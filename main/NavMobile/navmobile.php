<head>
    <link rel="stylesheet" href="main/NavMobile/navmobile.css">
</head>

<div class="navMobile">
    <div class="container">
        <div class="bar">
            <div class="menuOpen">
                    <p class="subtitle">websystem suportes</p>
                    <div class="hamb" onclick="menuControl()"><i class="fas fa-bars"></i></div>
            </div>                
            <div class="bar-active" id="barra">        
                <ul>
                    <li><a>Serviços</a></i>
                    <li><a>Sobre Nós</a></i>
                    <li><a>Metodologias</a></i>
                    <li><a>Blog</a></i>
                    <li><button class="buttonIn">Solicitar Atendimento</button></li>
                </ul>
            </div>    
        </div>   
    </div> 
</div> 

<script>
function menuControl() {
  var x = document.getElementById("barra");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
