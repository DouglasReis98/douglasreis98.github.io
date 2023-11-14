import styles from './css/Rodape.module.css'
import { FaInstagram, FaLinkedin, FaGithub } from 'react-icons/fa'
import logo from './../../img/logo.png'
import { Link } from 'react-scroll';
function Rodape() {
    
    const anoAtual = new Date().getFullYear();
    const alertaBlog = () => alert("O blog está indisponível! Ficará disponível em breve!");

    return (
        <footer>
            <section>
                <div>
                    <ul>
                        <li><Link smooth={true} offset={-56} to='sobre'>Sobre Mim</Link></li>
                        <li><Link smooth={true} offset={-56} to='habilidades'>Habilidades</Link></li>
                        <li><Link smooth={true} offset={-56} to='portfolio'>Portfólio</Link></li>
                        <li><Link onClick={alertaBlog}>Blog</Link></li>
                        <li><Link smooth={true} offset={-56} to='contato'>Contato</Link></li>
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