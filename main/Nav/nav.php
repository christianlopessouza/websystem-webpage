<head>
    <link rel="stylesheet" href="main/Nav/nav.css">
</head>


<div class="nav">
<div class="lineTransition"></div>
    <div class="container">
        <div class="bar">
                <p class="subtitle">websystem suportes</p>
                <ul>
                    <li><a href="#services_one">Serviços</a></i>
                    <li><a href="#bio_two">Sobre Nós</a></i>
                    <li><a href="#metodology_three">Metodologias</a></i>
                    <li><a href="#blog_four">Blog</a></i>
                    <li><button class="buttonIn">Solicitar Atendimento</button></li>
                </ul>
                    <button class="buttonOut">Solicitar Atendimento</button>
        </div>    
    </div> 
</div> 

<script>
    var height = $('#header').height();

    $(window).scroll(function(){
        if($(this).scrollTop() > height+70){
            $('.nav').addClass('fixed');
        }else{
            $('.nav').removeClass('fixed');
        }

        });
</script>