import styles from './css/ProjetoModal.module.css'
import {FaRegTimesCircle} from 'react-icons/fa'
import imagem from './../../img/proj-imagem.png'
function ProjetoModal() {

    return (
        <div className={styles.modal}>

            <div className={styles.projetoContainer}>
                <span className={styles.fecharModal}>
                    <FaRegTimesCircle />
                </span>
                <h1>Nome do Projeto</h1>
                <div className={styles.projeto}>
                    <img src={imagem} />
                    <div className={styles.projetoInfos}>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <div>
                            <b>Cliente:</b> Lorem Ipsum<br/>
                           <b>Data:</b> 00/00/0000<br/>
                           <b>Tags:</b> Lorem Ipsum<br/>
                           <b>URL:</b>  Lorem Ipsum<br/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    )


}

export default ProjetoModal