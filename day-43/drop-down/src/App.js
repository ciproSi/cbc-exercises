import React, { useState, useEffect } from 'react';

import './App.css';

const App = () => {
  const [dropDownValue, setDropDownValue] = useState('Select');
  const [dropDownClosed, setDropDownClosed] = useState(true);
  const [textInputValue, setTextInputValue] = useState('');

  const handleChange = (e) => {
    setTextInputValue(e.target.value);
  }

  const handleDropDownClick = () => {
    setDropDownClosed(!dropDownClosed);
  }

  const handleItemClick = (e) => {
    setDropDownValue(e.target.innerText);
    setDropDownClosed(!dropDownClosed);
  }
  return (
    <>
      <input type="text" value={textInputValue} onChange={handleChange} />
      <div className="dd-wrapper">
        <div className="dd-header">
          <div className="dd-header-title" onClick={handleDropDownClick} >{dropDownValue}</div>
        </div>
        <ul className="dd-list" hidden={dropDownClosed}>
          <li className="dd-list-item" onClick={handleItemClick}>1</li>
          <li className="dd-list-item" onClick={handleItemClick}>2</li>
          <li className="dd-list-item" onClick={handleItemClick}>3</li>
        </ul>
      </div>
    </>
  );
}
export default App;
