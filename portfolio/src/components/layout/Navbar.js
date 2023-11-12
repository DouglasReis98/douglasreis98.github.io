import {useState} from 'react'
import styles from './css/Navbar.module.css'
import logo from '../../img/logo-nav.png'
function Navbar() {

    const [isOpen, setIsOpen] = useState(false);

    const menuToggle = () => setIsOpen(!isOpen);

    return (
        <nav>
           <a href='#'><img src={logo} alt='home-page'/></a>
           <button id={styles['btn-mobile']} className={styles[`${isOpen ? 'fechar' : ''}`]} onClick={menuToggle}><span id={styles['btn-hamburger']}></span></button>
           <ul className={styles[`${isOpen ? 'itemsOpen' : ''}`]}>
           <a href=''><li>Sobre Mim</li></a>
           <a><li>Habilidades</li></a>
           <a><li>Portfólio</li></a>
           <a><li>Blog</li></a>
           <a><li>Contato</li></a>
           </ul>
        </nav>
    )
}

export default Navbar