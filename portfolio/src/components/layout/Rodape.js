import styles from './css/Rodape.module.css'

function Rodape() {
    const anoAtual = new Date().getFullYear();
    return (
        <section className={styles.rodape}>
            <h1>Rodapé</h1>
            <article>
                <p>{anoAtual}</p>
            </article>
        </section>
    )
}

export default Rodape