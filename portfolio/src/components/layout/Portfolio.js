import styles from './css/Portfolio.module.css'
import projeto from './../../img/proj-imagem.png'
function Portfolio() {
    return (
        <section className={styles.portfolio}>
            <h1>Portfólio</h1>
            <article>
                <img src={projeto} />
                <img src={projeto} />
                <img src={projeto} />
                <img src={projeto} />
                <img src={projeto} />
                <img src={projeto} />
            </article>
        </section>
    )
}

export default Portfolio