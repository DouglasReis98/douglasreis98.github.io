import styles from './css/Contato.module.css'

function Contato() {
    return (
        <section className={styles.contato}>
            <h1>Contato</h1>
            <article>
                <form action="#" method="post">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" />
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <label for="assunto">Assunto</label>
                    <input type="text" name="assunto" />
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" />
                    <input type="submit" id={styles.enviar} value="Enviar" />
                </form>

                <div>
                    <p>Ficou interessado nos meus serviços?</p>

                    <p>Fique a vontade para me enviar um e-mail!</p>
                </div>
            </article>
        </section>
    )
}

export default Contato