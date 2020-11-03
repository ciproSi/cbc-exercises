import React from "react";
import ReactDOM from "react-dom";
import "./style.scss";
import "./index.html";
import App from './components/App.jsx';

const appElm = document.querySelector("#app");
ReactDOM.render(<App />, appElm);
