import logo from './logo.svg';
import './App.css';
import './Components/Counter.jsx';
import Counter from './Components/Counter.jsx';
import MultiCounter from './Components/MultiCounter.jsx';

function App() {

  return (
    <>
      <h1>simple counter</h1>

      <Counter />
      <Counter />
      <Counter />

      <h1>multicounter</h1>
      {/* You can set any amount of counters by setting countersAmount property */}
      <MultiCounter countersAmount={10} />
    </>
  );
}

export default App;
