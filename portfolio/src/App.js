import './App.css';
import Main from './components/layout/Main';
import Navbar from './components/layout/Navbar';
import Sobre from './components/layout/Sobre';
import Habilidades from './components/layout/Habilidades';
import Portfolio from './components/layout/Portfolio';
import Contato from './components/layout/Contato';

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
      </header>
    </div>
  );
}

export default App;
