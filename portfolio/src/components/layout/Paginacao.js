//import React, { useState } from 'react'
import style from './css/Portfolio.module.css'
import { FaChevronLeft  , FaChevronRight   } from "react-icons/fa";

function Paginacao( {totalProjs, postsPorPag, pagAtual, pagAnterior, pagSeguinte } ) {
    let paginas = [];

    for (let i = 1; i <= Math.ceil(totalProjs / postsPorPag); i++) {
        paginas.push(i);       
    }
    /*{paginas.map((pag, index) => {
            return <button key={index} onClick={() => setPagAtual(pag)}>{pag}</button>
        })}*/
        const prevInactive = pagAtual === 1;
        const nextInactive = pagAtual === paginas.length;
    
  return (
    <>
        <button className={`${style.pagNav} ${prevInactive ? style.inactive : style.active}`} onClick={pagAnterior} disabled={prevInactive}><FaChevronLeft /></button>
        <button className={`${style.pagNav} ${nextInactive ? style.inactive : style.active}`} onClick={pagSeguinte} disabled={nextInactive}><FaChevronRight /></button>
    </>
  )
}

export default Paginacao