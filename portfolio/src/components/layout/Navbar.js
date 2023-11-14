import { useState } from 'react'
import styles from './css/Navbar.module.css'
import logo from '../../img/logo-nav.png'
import { Link } from 'react-scroll'
function Navbar() {

    const [isOpen, setIsOpen] = useState(false);

    const menuToggle = () => setIsOpen(!isOpen);

    const alertaBlog = () => alert("O blog está indisponível! Ficará disponível em breve!");

    return (
        <nav>
            <a href='/'><img src={logo} alt='home-page' /></a>
            <button id={styles['btn-mobile']} className={styles[`${isOpen ? 'fechar' : ''}`]} onClick={menuToggle}><span id={styles['btn-hamburger']}></span></button>
            <ul className={styles[`${isOpen ? 'itemsOpen' : ''}`]}>
                <li><Link smooth={true} offset={-56} to='sobre'>Sobre Mim</Link></li>
                <li><Link smooth={true} offset={-56} to='habilidades'>Habilidades</Link></li>
                <li><Link smooth={true} offset={-56} to='portfolio'>Portfólio</Link></li>
                <li><Link onClick={alertaBlog}>Blog</Link></li>
                <li><Link smooth={true} offset={-56} to='contato'>Contato</Link></li>
            </ul>
        </nav>
    )
}

export default Navbar