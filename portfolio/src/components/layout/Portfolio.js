import styles from './css/Portfolio.module.css'
import projeto from './../../img/proj-imagem.png'
function Portfolio() {
    return (
        <section className={styles.portfolio}>
            <h1>Portfólio</h1>
            <article>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            <div className={styles.projeto}>
                <img src={projeto} alt='projeto' />
                <div className={styles.nomeProjeto}>
                    <h3>Nome do Projeto</h3>
                </div>
            </div>
            </article>
        </section>
    )
}

export default Portfolio