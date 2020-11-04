import React, { useState } from 'react';

const SearchBarch = (props) => {
    const [dropDownValue, setDropDownValue] = useState();
    const [dropDownClosed, setDropDownClosed] = useState(true);
    cosnt [textInputValue, setTextInputValue] = useState('ahoj');

    return (
        <>
        <form onSubmit={props.handleSubmit}>
            <input name="test" type="text" onChange={props.handleChange} />
            <button>Search</button>
        </form>

        </>
    
    )
}


export default SearchBarch;