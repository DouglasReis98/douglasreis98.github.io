import styles from './css/Rodape.module.css'
import { FaInstagram, FaLinkedin, FaGithub } from 'react-icons/fa'
import logo from './../../img/logo.png'
function Rodape() {
    const anoAtual = new Date().getFullYear();
    return (
        <footer>
            <section>
            <div>
                <ul>
                    <a><li>Sobre Mim</li></a>
                    <a><li>Habilidades</li></a>
                    <a><li>Portfólio</li></a>
                    <a><li>Blog</li></a>
                    <a><li>Contato</li></a>
                </ul>
            </div>
            <div>
                <img src={logo} />
                <div className={styles.socialMedia}>
                    <a href='#'><FaInstagram /></a>
                    <a href='#'><FaLinkedin /></a>
                    <a href='#'><FaGithub /></a>
                </div>
            </div>
            <div>
                    <h3>Contato</h3>
                    <p>Telefone: (71) 98877-1526</p>
                    <p>E-mail: douglasamaralreis@outlook.com</p>
            </div>
            </section>
            <div className={styles.copyright}>
                <p>Copyright &copy; {anoAtual} Douglas Reis - Todos os direitos reservados</p>
            </div>
        </footer>
    )
}

export default Rodape