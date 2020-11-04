import React, { useState, useEffect } from 'react';

const SearchResults = (props) => {
    const [searchResults, setSearchResults] = useState([]);
    
    async function fetchData () {
        const searchUrl = 'https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=' + props.search;
        const response = await fetch(searchUrl);
        const data = await response.json();
        data && data.query && data.query.search && setSearchResults(data.query.search);
        console.log(searchResults);
    }

    useEffect(() => {
        fetchData();
    }, [props.search]);

    return (
        <>
        <h1>search results</h1>
        {
            searchResults.map((result, index) => (
                <div key={index}>{result.title}</div>
            ))
        }
        </>
    )
}

export default SearchResults;