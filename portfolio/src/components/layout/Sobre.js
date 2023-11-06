import {FaLessThan, FaGreaterThan} from 'react-icons/fa'
import styles from './css/Sobre.module.css'
import prepara from './../../img/qualificacoes/logo_prepara.png'
import unopar from './../../img/qualificacoes/logo_unopar.png'
import timtec from './../../img/qualificacoes/logo_timtec.png'
import udemy from './../../img/qualificacoes/udemy-logo.png'
//current_item


function Sobre() {

    const idade = () => {
        let data = new Date(),
            ano_atual = data.getFullYear(),
            mes_atual = data.getMonth() + 1,
            dia_atual = data.getDate(),

            ano_aniversario = 1998,
            mes_aniversario = 1,
            dia_aniversario = 28,

            idadeResult = ano_atual - ano_aniversario;

        if (mes_atual <= mes_aniversario && dia_atual < dia_aniversario) {
            idadeResult--
        }

        return idadeResult < 0 ? 0 : idadeResult;
    }

    /*
    
    const arrows = document.querySelectorAll('.arrow');
    const itens = document.querySelectorAll('.item-qualif');
    const numItens = itens.length;
    let currentItem = 0;

arrows.forEach(arrow => {
    arrow.addEventListener('click', () => {
        const isEsq = arrow.classList.contains("previous");

        if (isEsq) {
            currentItem -= 1;
        } else {
            currentItem += 1;
        }

        if (currentItem >= numItens) {
            currentItem = 0;
        }

        if (currentItem < 0) {
            currentItem = numItens - 1;
        }

        itens.forEach(item => item.classList.remove('current-item'));

        itens[currentItem].scrollIntoView({
            inline: "center",
            behavior: 'smooth',
            block: 'nearest'
        })
        console.log('arrow clicked', currentItem);

    })
})

    
    */

    return (
        <section className={styles.sobre}>
            <h1>Sobre</h1>
            <article>
                <div className={styles.fotoReal} />
                <div className={styles.textoNome}>
                    <p> Meu nome é Douglas Reis, tenho {idade()} anos e sou natural de Simões Filho - Bahia.<br />
                        Desde os meus 9 anos de idade, quando ganhei o meu primeiro computador, comecei a me aventurar pela informática.
                        Em 2014 tive o meu primeiro contato com a programação, e fiquei espantado e ao mesmo tempo fascinado em como os sites e sistemas em geral funcionavam. Fiz cursos de PHP, Lógica de Programação, Java, Delphi, Visual Basic e Microsoft Access. Depois comecei a me aprofundar no Desenvolvimento Web através de cursos online.
                        Em 2019, comecei a cursar Análise e Desenvolvimento de Sistemas pela UNOPAR, onde estudei por 3 anos.
                        Fiz estágio no Colégio Antônio Vieira, em Salvador - BA, onde eu pude desenvolver várias Soft Skills através das atividades.
                        Me formei em 2022 e atualmente sigo estudando e buscando cada vez mais conhecimento para subir mais e mais degraus na minha carreira.
                    </p>
                    <div className={styles.qualificacao}>
                        <h2>Qualificações</h2>
                        <i className={styles.previous}><FaLessThan/></i>
                        <i className={styles.next}><FaGreaterThan/></i>
                        <div id={styles["wrapper-qualif"]}>
                            <div className={styles.box_qualif}>
                                <div className={styles.item_qualif}>
                                    <img alt src={prepara}/>
                                        <h3>Prepara Cursos</h3>
                                        <h4>Design Gráfico, Web Design, Programação</h4>
                                        <h4>2013 - 2014</h4>
                                </div>
                                <div className={styles.item_qualif}>
                                    <img alt src={unopar}/>
                                        <h3>UNOPAR</h3>
                                        <h4>Técnólogo em Análise e Desenvolvimento de Sistemas</h4>
                                        <h4>2019 - 2022</h4>
                                </div>
                                <div className={styles.item_qualif}>
                                    <img alt src={timtec}/>
                                        <h3>TIM Tec</h3>
                                        <h4>UI e UX</h4>
                                        <h4>2020</h4>
                                </div>
                                <div className={styles.item_qualif}>
                                    <img alt src={udemy}/>
                                        <h3>Udemy</h3>
                                        <h4>Desenvolvimento Web Completo 2022</h4>
                                        <h4>Cursando</h4>
                                </div>
                            </div>
                        </div>
                        <section id="clearfix"></section>
                    </div>
                </div>
            </article>
        </section>

    )
}

export default Sobre