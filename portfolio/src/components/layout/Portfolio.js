import styles from './css/Portfolio.module.css'
import projeto from './../../img/proj-imagem.png'
import { useState, useEffect } from 'react'
import Projetos from './Projetos'
import Paginacao from './Paginacao';

function Portfolio() {

    const [pagAtual, setPagAtual] = useState(1);
    //const [postsPorPag, setPostsPorPag] = useState(6)
    const postsPorPag = 6;

    useEffect(() => {
      fetch("")
      .then((res) => console.log(res.json))
    })

    const projetos = [
        { id: 1, img: projeto, nome: "Nome do Projeto" },
        { id: 2, img: projeto, nome: "Nome do Projeto" },
        { id: 3, img: projeto, nome: "Nome do Projeto" },
        { id: 4, img: projeto, nome: "Nome do Projeto" },
        { id: 5, img: projeto, nome: "Nome do Projeto" },
        { id: 6, img: projeto, nome: "Nome do Projeto" },
        { id: 7, img: projeto, nome: "Nome do Projeto" },
        { id: 8, img: projeto, nome: "Nome do Projeto" },
        { id: 9, img: projeto, nome: "Nome do Projeto" },
        { id: 10, img: projeto, nome: "Nome do Projeto" },
        { id: 11, img: projeto, nome: "Nome do Projeto" },
        { id: 12, img: projeto, nome: "Nome do Projeto" },
        { id: 13, img: projeto, nome: "Nome do Projeto" },
        { id: 14, img: projeto, nome: "Nome do Projeto" },
        { id: 15, img: projeto, nome: "Nome do Projeto" },
        { id: 16, img: projeto, nome: "Nome do Projeto" },
        { id: 17, img: projeto, nome: "Nome do Projeto" },
        { id: 18, img: projeto, nome: "Nome do Projeto" },
        { id: 19, img: projeto, nome: "Nome do Projeto" },
        { id: 20, img: projeto, nome: "Nome do Projeto" },
    ];

    const totalPag = Math.ceil(projetos.length / postsPorPag);
    const pagAnterior = () => {
      setPagAtual((prevPage) => Math.max(prevPage - 1, 1));
    }

    const pagSeguinte = () => {
      setPagAtual((prevPage) => Math.min(prevPage + 1, totalPag))
    }

    const ultimoPostId = pagAtual * postsPorPag;
    const primeiroPostId = ultimoPostId - postsPorPag;

    const projetosAtuais = projetos.sort((a,b) => {return b.id - a.id}).slice(primeiroPostId, ultimoPostId)

    console.log(pagAtual)
    return (
        <section id="portfolio" className={styles.portfolio}>
            <h1>Portfólio</h1>
            <article>
                    <Projetos projetos={projetosAtuais}/>
                    <Paginacao totalProjs={projetos.length} postsPorPag={postsPorPag} pagAtual={pagAtual} pagAnterior={pagAnterior} pagSeguinte={pagSeguinte}/>
            </article>
        </section>
    )
}

export default Portfolio