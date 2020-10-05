import React from 'react';
import ReactDOM from 'react-dom';
import './style/style.scss';
import './index.html';

const messages = [
    {
        from: 'Petr',
        subject: 'zase na píču',
        messageBody: 'lorem ipsum dolor sit amet'
    },
    {
        from: 'Honza',
        subject: 'už lepší',
        messageBody: 'lorem ipsum dolor sit amet'
    },
    {
        from: 'Jaroslav',
        subject: 'give a shit',
        messageBody: 'lorem ipsum dolor sit amet'
    },
];


export class Message extends React.Component {
    render () {
        return (
            <div className="message">
                <div className="message__from">{this.props.from}</div>
                <div className="message__subject">{this.props.subject}</div>
                <div className="message__body">{this.props.messageBody}</div>
            </div>
        )
    }
};

class App extends React.Component {
    render () {
        return (
            <>
                <Message from={messages[1].from} subject={messages[1].subject} messageBody={messages[1].messageBody} />
            </>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('container'));
