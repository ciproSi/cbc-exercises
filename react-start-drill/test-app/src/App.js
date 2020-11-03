import React from 'react';
import './App.css';
import books from './Constants/books.json';
import ListOfBooks from './Components/ListOfBooks.jsx';

class App extends React.Component {
  
  render () {
    return (
    <ListOfBooks books = {books} />
    )
  }
}

export default App;
