import styles from './css/Navbar.module.css'
import logo from '../../img/logo-nav.png'
function Navbar() {

    return (
        <nav>
           <a href='#'><img src={logo} alt='home-page'/></a>
           <button id={styles['btn-mobile']}><span id={styles['btn-hamburger']}></span></button>
           <ul>
           <a><li>Sobre Mim</li></a>
           <a><li>Habilidades</li></a>
           <a><li>Portfólio</li></a>
           <a><li>Blog</li></a>
           <a><li>Contato</li></a>
           </ul>
        </nav>
    )
}

export default Navbar