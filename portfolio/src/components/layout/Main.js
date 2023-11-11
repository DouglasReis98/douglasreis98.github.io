import { useState, useEffect} from 'react'
import styles from './css/Main.module.css'
import video from './../../videos/video-fundo.mp4'
import imagem from './../../img/douglas_avatar3.png'
function Main() {

    const TypingOcupacoes = () => {
        const arrOcups = ["Analista de Sistemas", "Desenvolvedor Full - Stack", "Programador"]
        const [currentText, setCurrentText] = useState("")
        const [currentIndex, setCurrentIndex] = useState(0)

        useEffect(() => {
            const intervalId = setInterval(() => {
                const currentChar = arrOcups[currentIndex][currentText.length];
                
                if (currentChar) {
                    setCurrentText((prevText) => prevText + currentChar)
                } else {
                    clearInterval(intervalId)
                    setTimeout(() => {
                        setCurrentIndex((prevIndex) => (prevIndex + 1) % arrOcups.length);
                        setCurrentText('');
                    }, 2000);
                }            
            }, 100);

            return () => clearInterval(intervalId);
        }, [currentIndex, currentIndex, arrOcups]);
        
        return currentText;
    }

    return (
        <section className={styles.main}>
            <video autoPlay loop muted>
                <source src={video} type="video/mp4">
                </source>
            </video>

            <div className={styles.apresentacao}>
                <div className={styles.texto}>
                    <h1>Seja bem vindo(a)!<br/> Meu nome é</h1>
                    <h2>DOUGLAS REIS</h2>
                    <h3><span>{TypingOcupacoes()}</span></h3>
                    <h4>Este é o meu portfólio, onde você poderá apreciar os meus projetos de sites, sistemas e aplicações diversas.</h4>
                </div>
                <div className={styles.foto} />       
            </div>
        </section>
    )

}

export default Main