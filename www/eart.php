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
        <div id="corpo_box2">            <a href="index.html" title="Home" class="home">home</a><br /><br />

		   <div id="corpo_box2_01">

		   
          <h1>e-art</h1>
          <p><em><strong>offline</strong></em><br/></p>
            <p><em>Projeto gráfico  acadêmico</em><em>, onde o objetivo era criar uma linha de texturas, após tratamento e técnicas tenho utilizado</em><br />
            <em>as texturas para criar quadros;</em></p>
          <p><em><strong>allstar ant-social</strong><br />
          tinta gouache e sola de tênis;<br/>
          </em></p>
</div>
			<p><img src="images/eart/eart_allstarantisocial.jpg" /></p>
			<p>&nbsp;</p>
			<p><em><strong>gravetus</strong><br />
		    tinta gouache e gravetos;</em></p>
			<p><img src="images/eart/eart_gravetus.jpg" /></p>
			<p>&nbsp;</p>
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
