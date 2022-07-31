// Lógica da animação:
// 1 - Selecionar elementos que devem ser animados
// 2 - Definir a classe que é adicionada durante a animação
// 3 - Criar função de animação
//  3.1 - Verificar a distância entre a barra de scroll e o topo do site
//  3.2 - Verificar se a distância do 3.1 + Offset é maior do que a distância entre o elemento e o Topo da Página.
//  3.3 - Se verdadeiro adicionar classe de animação, remover se for falso.
// 4 - Ativar a função de animação toda vez que o usuário utilizar o Scroll
// 5 - Otimizar ativação

//Debounce do Lodash
/*const debounce = function (func, wait, immediate) {
	let timeout;
	return function (...args) {
		const context = this;
		const later = function () {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		const callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

const target = document.querySelectorAll('[data-animar]')
const animationClass = 'animate'

function animaScroll() {
	const windowTop = window.pageYOffset + ((window.innerHeight * .3) / 4);
	target.forEach(function(element) {
		if ((windowTop) > element.offsetTop) {
			element.classList.add(animationClass)
			console.log(element);
		} else {
			element.classList.remove(animationClass)
		}
	})
}

animaScroll();

if (target.length) {
	window.addEventListener('scroll', debounce(function () {
		animaScroll();
		console.log('ativa-funcao')
	}, 200))
}*/


window.addEventListener('scroll', reveal)

function reveal(){
	let reveals = document.querySelectorAll('[data-animar]')
	const animationClass = 'animate'
	for (let i = 0; i < reveals.length; i++) {
		 
		let windowHeight = window.innerHeight;
		let revealTop = reveals[i].getBoundingClientRect().top;
		let revealPoint = 180;

		if (revealTop < windowHeight - revealPoint) {
			reveals[i].classList.add(animationClass);
		} else {
			reveals[i].classList.remove(animationClass);
		}
	}
}