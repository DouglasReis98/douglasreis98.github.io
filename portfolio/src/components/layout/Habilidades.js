import styles from './css/Habilidades.module.css'
import { FaBootstrap, FaCss3Alt, FaFigma, FaHtml5, FaJs, FaPhp } from 'react-icons/fa'

function Habilidades() {
    return (
        <section id="habilidades" className={styles.habilidades}>
            <h1>Habilidades</h1>
            <article>
                <div>
                    <FaHtml5 />
                    <h3>HTML5</h3>
                </div>
                <div>
                    <FaCss3Alt />
                    <h3>CSS3</h3>
                </div>
                <div>
                    <FaJs />
                    <h3>JavaScript</h3>
                </div>
                <div>
                    <FaPhp />
                    <h3>PHP</h3>
                </div>
                <div>
                    <FaFigma />
                    <h3>Figma</h3>
                </div>
                <div>
                    <FaBootstrap />
                    <h3>Bootstrap</h3>
                </div>
            </article>
        </section>
    )
}

export default Habilidades