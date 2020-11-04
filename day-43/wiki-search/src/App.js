import react, { useState } from 'react';
import logo from './logo.svg';
import './App.css';
import './Components/SearchBar';
import SearchBarch from './Components/SearchBar';
import SearchResults from './Components/SearchResults';

function App() {

  const [searchQuery, setSearchQuery] = useState('');
  const [search, setSearch] = useState('');

    const handleChange = (e) => {
        setSearchQuery(e.target.value);
    }
    
    const handleSubmit = (e) => {
        setSearch(searchQuery);
        e.preventDefault();
        
    }

  return (
    <div className="App">
      <SearchBarch handleSubmit={handleSubmit} handleChange={handleChange} />
      <SearchResults search={search} />

    </div>
  );
}

export default App;
