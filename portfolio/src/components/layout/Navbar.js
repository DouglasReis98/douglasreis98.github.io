import styles from './css/Navbar.module.css'
import logo from '../../img/logo-nav.png'
function Navbar() {

    return (
        <nav>
           <a href='#'><img src={logo} alt='home-page'/></a>
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