import React from 'react';
import ReactDOM from 'react-dom';
import { Question } from './question/Question.jsx';
import './index.html';

class App extends React.Component {
  render () {
    return (
      <Question question='This is my question' />
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'));

