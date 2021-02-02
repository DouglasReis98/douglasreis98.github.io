<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Douglas Reis</title>
<style>

#nav-btn {
position:fixed;
border: #bababa 1px solid;
border-radius: 2px;
padding: 5px 10px;
cursor: pointer;
background-color:  ;
transition: all 0.4s linear;
left: 20px;
    }

    #nav-btn:hover {
     border: #0061f2 1px solid;
	background: ;
    color:#bababa;
    }

    #nav-btn > div {
     width: 20px;
	height: 3px;
	background: #bababa;
	margin: 4px 0px;
	transition: all 0.4s linear;
    }

    #nav-btn:hover div {
      background: #0061f2;
    }

    #nav-slide {
   	position: fixed;
	left: -250px;
	top: 60px;
	height: 0px;
	background: ;
	transition: left 0.4s linear;
	font-family:"Roboto Condensed", sans-serif;
	float:right;
	margin:0;
	padding:0;
	color:#FFF;
    }
	#nav-slide li{
	list-style-type: none;
	padding-left: 10px;
	padding-right: 10px;
	lor: #FFF;
	text-decoration:none;
}

#nav-slide li:hover{
	transition:all .9s ease;
	background: #999 ;
	color: #FFF;
	width: 100px;
}

#nav-slide a:link{
	color: #666;
	text-decoration:none;
}
#nav-slide a:active{
	color: #666;
	text-decoration:none;
}
#nav-slide a:visited{
	color: #666;
	text-decoration:none;
}
#nav-slide a:hover{
	color: #666;
	text-decoration:none;
}

  </style>
</head>

<body>

<div id="partecima">
<div id="divdomenu">
<div id="head">
<div class="logo">
<a href="http://douglasreis.6te.net">
<img src="imagens/logo.png" alt="Douglas Reis" width="50" height="40">
</a>
</div>
<script>

    function slidetoggle() {
      var slider = document.getElementById("nav-slide");
      slider.style.height = window.innerHeight - 60 + "px";

      if(slider.style.left == "0px") {
        slider.style.left = "-250px";
      }
      else {
        slider.style.left = "0px";
      }
    }

  </script>
<nav id="nav-btn" onclick="slidetoggle()">
  <div></div>
  <div></div>
  <div></div>
</nav>

<section id="nav-slide">
    <li><a href="sobre.php">SOBRE</a></li>
<li><a href="servicos.php">SERVIÇOS</a></li>
<li><a href="portfolio.php">PORTFÓLIO</a></li>
<li><a href="https://www.youtube.com/channel/UCpXG4JXU-hjQusxdhSYpyLg">YOUTUBE</a></li>
<li><a href="contato.php">CONTATO</a></li>
</section>

</div>
</div>
<div id="fundo">
  <div id="divcentral">
<h1>DESIGNER GRÁFICO</h1>
<p>WEB DESIGN, MOTION GRAPHICS, ARTES VISUAIS</p>
</div>
</div>

<div class="clear"></div>
<div id="partebaixo">
<div id="sobre">
<img title="Douglas Reis" alt="Douglas Reis" src="imagens/foto.jpg" width="200" height="200" />
<p>Oi, sou
<strong>Douglas Reis</strong>, sou Designer Gráfico e Web Designer e esse é o meu portfólio.</p>
<p>Aqui estão as minhas recentes criações.</p>
<p> Fique à vontade!! </p>
</div>
</div>
<div class="clear"></div>
<div id="redes">
<div id="botoes">
<div class="left">
<a href="https://www.facebook.com/douglasreis00">
<img src="imagens/social_media/facebook/normal.png" width="50" height="50" >
</a>
<a href="https://twitter.com/doug_amaralreis">
<img src="imagens/social_media/twitter/normal.png" width="50" height="50" >
</a>
<a href="http://instagram.com/douglasreis00">
<img src="imagens/social_media/instagram/normal.png" width="50" height="50" >
</a>
<a href="https://www.linkedin.com/pub/douglas-reis/">
<img src="imagens/social_media/linkedin/normal.png" width="50" height="50" >
</a>
</div>
<div class="right">
"douglas-reis@hotmail.com"
</div>
</div>
</div>

</body>
</html>