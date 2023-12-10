import { useState } from 'react'
import styles from './css/Habilidades.module.css'
import { FaBootstrap, FaCss3Alt, FaFigma, FaHtml5, FaJs, FaPhp } from 'react-icons/fa'

function Habilidades() {

    const [habilidades] = useState([
        {nome: "HTML5", icone: <FaHtml5 />},
        {nome: "CSS3", icone: <FaCss3Alt />},
        {nome: "JavaScript", icone: <FaJs />},
        {nome: "PHP", icone: <FaPhp />},
        {nome: "Figma", icone: <FaFigma />},
        {nome: "Bootstrap", icone: <FaBootstrap />}
    ])
    return (
        <section id="habilidades" className={styles.habilidades}>
            <h1>Habilidades</h1>
            <article>            
                    {habilidades.map((hab, i) => { 
                    return <div key={i}>{hab.icone}<h3>{hab.nome}</h3></div>})
                    }          
            </article>
        </section>
    )
}

export default Habilidades