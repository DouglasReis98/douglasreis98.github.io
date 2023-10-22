import styles from './css/Sobre.module.css'

function Sobre() {
    return (
        <section className={styles.sobre}>
            <h1>Sobre</h1>
            <article>
                <div className={styles.fotoReal} />
                <div className={styles.textoNome}>
                    <p>
                        Desde os meus 9 anos de idade, quando ganhei o meu primeiro computador, comecei a me aventurar pela informática.
                        Em 2014 tive o meu primeiro contato com a programação, e fiquei espantado e ao mesmo tempo fascinado em como os sites e sistemas em geral funcionavam. Fiz cursos de PHP, Lógica de Programação, Java, Delphi, Visual Basic e Microsoft Access. Depois comecei a me aprofundar no Desenvolvimento Web através de cursos online.
                        Em 2019, comecei a cursar Análise e Desenvolvimento de Sistemas pela UNOPAR, onde estudei por 3 anos.
                        Fiz estágio no Colégio Antônio Vieira, em Salvador - BA, onde eu pude desenvolver várias Soft Skills através das atividades.
                        Me formei em 2022 e atualmente sigo estudando e buscando cada vez mais conhecimento para subir mais e mais degraus na minha carreira.
                    </p>
                    <div className={styles.qualificacao}>
                        <h2>Qualificação</h2>
                    </div>
                </div>
            </article>
        </section>

    )
}

export default Sobre