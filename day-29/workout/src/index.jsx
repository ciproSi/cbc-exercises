import React from 'react';
import ReactDOM from 'react-dom';
import List from './List/List.jsx';

import './index.scss';
import './index.html';

class App extends React.Component {
  constructor(props) {
    super(props);

    };
  
  render() {
    return (
      <>
        <List />
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
