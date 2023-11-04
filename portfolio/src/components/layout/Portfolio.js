import styles from './css/Portfolio.module.css'
import projeto from './../../img/proj-imagem.png'
import ProjetoModal from './ProjetoModal'
import { useState } from 'react'
function Portfolio() {
const [modalOn, setModalOn] = useState(false)

    return (
        <section className={styles.portfolio}>
            <h1>Portfólio</h1>
            <article>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto} onClick={() => setModalOn(true)}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            </article>
            <ProjetoModal modalOn={modalOn} setModalOn={() => setModalOn(!modalOn)}/>
        </section>
    )
}

export default Portfolio