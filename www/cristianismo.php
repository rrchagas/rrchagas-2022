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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4803168-2']);
  _gaq.push(['_setDomainName', 'vislumbre.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
        <div id="corpo_box2">
        	<a href="index.html" title="Home" class="home">home</a><br /><br />

		   <div id="corpo_box2_01">
            <h1>cristianismo hoje</h1>
            <p><em><strong>
            <a href="http://www.cristianismohoje.com.br" target="_blank" class="url" title="Cristianismo Hoje" >http://www.cristianismohoje.com.br</a></strong></em><br/></p>
            
            <p><em>Cristianismo Hoje é um Portal com conteúdo voltado para o público cristão. Além de desenvolver e
            produzir, trabalhei<br />diretamente no ajuste do projeto de interface.</em></p>

            <p><em><strong>Agradecimentos</strong><br/>
            João Sousa, <a  href=" http://bit.ly/LzkH08" target="_blank" title="Taukane">Taukane</a> e <a href="http://bit.ly/JY86iJ" title="Maujor" target="_blank">Maujor</a></em>
            </em></p>

			<p><em><strong>Cliente:</strong> Binworks,
			<strong>Agência:</strong> Binworks, <strong>Trabalho: </strong>Design de Interface
            </em></p>
			</div>

			<img src="images/cristianismo/layout_ch01.jpg" />
			<img src="images/cristianismo/layout_ch02.jpg" />
			<img src="images/cristianismo/layout_ch03.jpg" />
			<img src="images/cristianismo/layout_ch04.jpg" />            
			<img src="images/cristianismo/layout_ch00.jpg" />

            
        </div>
        <!--end corpo_box2-->




    </div>
    <!--end corpo-->


    <!--go rodape-->
    <div id="rodape">    <p>© 1998- 2019 Vislumbre/Razors.</p>

    </div>
    <!--end rodape-->


</div>
<!--end madre-->


</body>
</html>
