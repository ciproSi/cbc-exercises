import React from 'react';
import './toggle.scss';

export class Toggle extends React.Component {
    constructor(props) {
        super(props);
        
        this.state = {
            toggle: 'question',
        };
    }

    render () {
        return (
            <div onClick={this.handleClick} className={`toggle toggle--${this.state.toggle}`}></div>
        )
    }

    handleClick = () => {
        if (this.state.toggle === 'question') {
            this.setState({toggle: 'cross'});
        }

        if (this.state.toggle === 'cross') {
            this.setState({toggle: 'check'});
        }

        if (this.state.toggle === 'check') {
            this.setState({toggle: 'question'});
        }
    }
}