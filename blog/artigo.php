<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title>Artigo - Douglas Reis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Douglas Reis - Designer Gráfico, Web Designer, Programador, Analista de Sistemas.">
	<meta name="keywords" content="Design Gráfico, Web Design, Programação, Análise de Sistemas, Sites">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Douglas Reis">
	<link rel="stylesheet" href="css/main-style.css">
	<!---MEDIA QUERY--->
	
	<link rel="stylesheet" media="screen and (max-width: 1024px)" href="css/largescreen.css">
	<link rel="stylesheet" media="screen and (max-width: 720px)" href="css/mediumscreen.css">
	<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/smallscreen.css">
	<link rel="stylesheet" media="screen and (max-width: 380px)" href="css/extrasmallscreen.css">
	
	<!---FECHA MEDIA QUERY--->
	<link href="font-awesome/css/all.css" rel="stylesheet">
	<link rel="icon" href="img/icon.png">
	</head>
<body>
<header id="cabecalho">
  <a id="logo" href="index.html" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false"title="Douglas Reis"><img src="img/logoblog_bnw.png"></a>
  <nav id="menu">
    <button id="btn-mobile"><span id="hamburger"></span></button>
    <ul id="menu-botoes" role="botões do menu">
<li><a href="index.html">HOME</a></li>
<li><a href="artigos.html">ARTIGOS</a></li>
<li><a href="portfolio.html">PORTFÓLIO</a></li>
<li><a href="contato.html">CONTATO</a></li>
</ul>
  </nav>
</header>
<script>
	/*Atribui o id btn-moblie à constante btnMobile*/
const btnMobile = document.getElementById('btn-mobile');

/*A função ativa e desativa a classe active */
function toggleMenu(){
  if (event.type === 'touchstart') event.preventDefault()
  const menu = document.getElementById('menu');
  menu.classList.toggle('active');
  const active = menu.classList.contains('active')
  event.currentTarget.setAttribute('aria-expanded', active);
  if(active){
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

/*Atribui o evento 'click' para ser usado na função toggleMenu*/
btnMobile.addEventListener('click', toggleMenu);

btnMobile.addEventListener('touchstart', toggleMenu);
</script>
<main id="principal">
<h2 id="titulo">Lorem Ipsum</h2>
<img id="img-artigo" src="img/logoblog.png">
<h6>Data de Postagem: 00/00/0000 || Tags: Web Development, Programação</h6>
<p id="texto-artigo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus orci, sagittis id consequat id, imperdiet a nulla. Nam et ullamcorper nibh. Ut ut eleifend lorem. Suspendisse viverra ornare lectus vitae ultricies. Ut sagittis ex enim, vitae consequat quam imperdiet sit amet. Maecenas aliquet rhoncus nisl sed accumsan. Donec semper leo vel maximus interdum.

Duis faucibus orci lacus, ac imperdiet orci pellentesque nec. Pellentesque id tempor ipsum. Donec ut pellentesque odio, id dignissim velit. Nam eleifend dapibus velit, nec commodo nisl tristique vel. Praesent tempus, ante eget aliquam venenatis, metus erat ultricies magna, at ultrices tortor mauris quis mauris. Phasellus pulvinar ut lorem nec sollicitudin. Proin non metus a lorem dignissim pharetra id sit amet turpis. Nam bibendum congue enim, eget placerat libero. Donec eu pulvinar urna, ut tincidunt massa. Proin ut erat a nulla aliquet maximus sit amet ac magna. Proin a eros vitae lorem consectetur tincidunt. Integer id lectus sed lectus venenatis fermentum ac ut nisi. Fusce consequat ex et diam maximus, eu porta diam pretium. Phasellus pulvinar ornare tellus, ut gravida velit malesuada non. Sed non dictum urna. Quisque lorem dui, rhoncus eget mi quis, rhoncus pharetra magna.

Duis vulputate turpis sed sodales rutrum. Mauris in arcu diam. Aenean auctor nibh sed libero aliquet venenatis. Vivamus ultricies, nisi eu lobortis feugiat, dolor nunc fermentum metus, sit amet auctor massa velit nec erat. Maecenas vitae tempus erat. Integer velit massa, imperdiet sit amet dapibus ullamcorper, ultricies a metus. Mauris aliquam semper sollicitudin. Sed in aliquet nibh. Curabitur eget eros non augue vestibulum mollis. Praesent dignissim, magna et tempus dapibus, dui velit rhoncus turpis, ac cursus lectus purus ac leo. Aenean vehicula id risus a feugiat. Donec luctus imperdiet erat non pulvinar. Nunc sit amet mi eget sapien rhoncus faucibus. Curabitur quis ipsum ac ante suscipit varius quis quis risus. Morbi molestie nunc id nisi interdum congue.</p>
</main>
<aside class="aba-lateral">
<div class="ultimos-artigos">
	<h3>Últimos Artigos</h3>
	<br>
	<p>Título de Artigo</p>
	<p>Título de Artigo</p>
	<p>Título de Artigo</p>
	<p>Título de Artigo</p>
	<p>Título de Artigo</p>
</div>
<div class="publicidade">
	<h3>Publicidade</h3>

</div>
</aside>
<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://douglasreis.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>	
<footer>

<div class="rodape-col">
<div class="menu-rodape">
<ul>
<li><a href="index.html">HOME</a></li>	
<li><a href="artigos.html">ARTIGOS</a></li>
<li><a href="portfolio.html">PORTFÓLIO</a></li>
<li><a href="contato.html">CONTATO</a></li>
</ul>
</div>
</div>

<div class="rodape-col">
<a href="index.html" title="Douglas Reis"><img src="img/logoblog_bnw.png"></a>
<ul class="redes">
	<li><a href="https://www.facebook.com/douglasreis00">
<i class="fab fa-facebook"></i>
</a></li>
	<li><a href="https://github.com/DouglasReis98">
<i class="fab fa-github"></i>
</a></li>
	<li><a href="http://instagram.com/douglasreis_ads">
<i class="fab fa-instagram"></i>
</a></li>
	<li><a href="https://www.linkedin.com/pub/douglas-reis/">
<i class="fab fa-linkedin-in"></i>
</a></li>
</ul>
</div>

<div class="rodape-col">
<div class="fone-email">
<h3>Contato</h3>
<ul>
<li>Telefone: (71) 98877-1526</li>
<li>Email: douglasamaralreis@outlook.com</li>
</ul>
</div>
</div>
</footer>
</body>
</html>
