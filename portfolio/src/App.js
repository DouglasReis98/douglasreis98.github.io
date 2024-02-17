import './App.css';
import Main from './components/layout/Main';
import Navbar from './components/layout/Navbar';
import Sobre from './components/layout/Sobre';
import Habilidades from './components/layout/Habilidades';
import Portfolio from './components/layout/Portfolio';
import Contato from './components/layout/Contato';
import Rodape from './components/layout/Rodape';

/* Swipper */
import { register } from "swiper/element/bundle";
import 'swiper/css';
import 'swiper/css/navigation';

register();

/* Swiper */



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
      </header>
    </div>
  );
}

export default App;
