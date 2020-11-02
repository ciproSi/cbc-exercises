import React from "react";
import ReactDOM from "react-dom";
import "./style.scss";
import "./index.html";

class Inbox extends React.Component {
  render() {
    return (
      <>
       <h1>Hello world</h1>
      </>
    );
  }
}

const appElm = document.querySelector("#app");
ReactDOM.render(<Inbox />, appElm);
