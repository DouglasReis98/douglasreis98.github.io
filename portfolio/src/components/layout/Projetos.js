import React from 'react'
import styles from './css/Portfolio.module.css'
import { useState } from 'react'

import ProjetoModal from './ProjetoModal'

function Projetos({ projetos }) {

    const [modalOn, setModalOn] = useState(false)

    return (
        <div className={styles.portfolioContainer}>
            {projetos.map((item) => (
                <div className={styles.projeto} key={item.id} onClick={() => setModalOn(true)}>
                    <img src={item.img} alt='projeto' />
                    <div className={styles.nomeProjeto}>
                        <h3>{item.nome} ({item.id})</h3>
                    </div>
                </div>
            )
            )}
            <ProjetoModal modalOn={modalOn} setModalOn={() => setModalOn(!modalOn)} />
        </div>
    )
}

export default Projetos