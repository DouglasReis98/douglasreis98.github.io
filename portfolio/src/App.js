import './App.css';
import { useState } from 'react';
import Main from './components/layout/Main';
import Navbar from './components/layout/Navbar';
import Sobre from './components/layout/Sobre';
import Habilidades from './components/layout/Habilidades';
import Portfolio from './components/layout/Portfolio';
import Contato from './components/layout/Contato';
import Rodape from './components/layout/Rodape';
import Projeto_Modal from './components/layout/ProjetoModal';

function App() {



  return (
    <div className="App">
      <header>
        <Navbar />
        <Main />
        <Sobre />
        <Habilidades />
        <Portfolio />
        <Contato />
        <Rodape />
        <Projeto_Modal />
      </header>
    </div>
  );
}

export default App;
