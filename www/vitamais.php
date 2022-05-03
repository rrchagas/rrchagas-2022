<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" CONTENT=" Portfolio Robson Chagas - Vislumbre é um pouco mais que imaginar, é ver sua imaginação através de alguma iniciativa simples e distinta. Esse é o objetivo do vislumbre.org, é tornar real sua imaginação, é sua oportunidade de ir além da imaginação!">
<meta name="information" CONTENT="Portfolio Robson Chagas - Vislumbre é um pouco mais que imaginar, é ver sua imaginação através de alguma iniciativa simples e distinta. Esse é o objetivo do vislumbre.org, é tornar real sua imaginação, é sua oportunidade de ir além da imaginação! ">
<META NAME="Name" CONTENT="Vislumbre é o portfolio Robson Chagas">
<META NAME="Publisher" CONTENT="Vislumbre é o portfolio Robson Chagas">
<META name="audience" content="All">
<META name="page-topic" content="Information">
<META NAME="Name" CONTENT="Vislumbre">
<META NAME="Publisher" CONTENT="Portfólio Robson Chagas">
<META name="audience" content="All">
<META name="page-topic" content="Information">


<title>VISLUMBRE-RAZORS - Design Interativo & Design de Interface.</title>
<script src="jquery.min.js"></script>
<script language="javascript">
$(document).ready(function(){
    var y_fixo = $("#menu").offset().top;
    $(window).scroll(function () {
        $("#menu").animate({
            top: y_fixo+$(document).scrollTop()+"px"
            },{duration:500,queue:false}
        );
    });
});
</script>

<link href="estilo.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!--go madre-->
<div id="madre"><!--go topo-->
    <div id="topo"> <a href="index.html"><img src="images/logo_vislumbre.png" border="0" title="VISLUMBRE O LOGO MAIS" /></a>
  </div>
    <!--end topo-->
<!--go corpo-->
    <div id="corpo">
    	<!--go corpo_box1-->
			<?php include "include/menu-lateral.php"; ?>	
    	<!--end corpo_box1-->

        <!--go corpo_box2-->
        <div id="corpo_box2">            <a href="index.html" title="Home" class="home">home</a><br /><br />

		   <div id="corpo_box2_01">

		   
            <h1>vita mais</h1>
          <p><em><strong><a href="http://www.pop.com.br/promocao" target="_blank" class="url" >projeto acadêmico / comercial</a></strong></em><br/> 
            <br />
          <p><em>Projeto Gráfico desde de sua concepção, desenho técnico e finalização;<br />
Diversos desses projetos foram desenvolvidos;</em><br />
          </p>
            <p><em><strong>Agradecimentos</strong><br/>
            POLESSI EMBALAGENS, Antonio Polessi e Ronaldo Polessi</em></p>

			<p><em><strong>Cliente:</strong> Vital Alimentos, 
			<strong>Agência:</strong> Vislumbre, <strong>Trabalho: </strong>Design de Gráfico / Embalagem<br />
			</em></p>
</div>
      <img src="images/vital/vitamais_01.jpg" /></div>
        <!--end corpo_box2-->




    </div>
    <!--end corpo-->


    <!--go rodape-->
    <div id="rodape">    <p>© 1998- 2019 Vislumbre/Razors.</p>

    </div>
    <!--end rodape-->


</div>
<!--end madre-->


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4803168-2");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
