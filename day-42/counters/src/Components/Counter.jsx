import React from 'react';

class Counter extends React.Component {
    constructor (props) {
        super(props);

        this.state = {
            counter: 0
        }
    }
    
    increaseCounter = () => {
        this.setState({counter: ++this.state.counter});

        if (this.props.multiCounter === true) {
            this.props.handleClick(this.props.name, this.state.counter);
        }
    }

    decreaseCounter = () => {
        this.setState({counter: --this.state.counter});

        if (this.props.multiCounter === true) {
            this.props.handleClick(this.props.name, this.state.counter);
        }
    }
    
    render () {
        if (typeof this.props.value == 'number')   {
            this.state.counter = this.props.value;
        };

        return (
            <>
            <div className="wrapper">
                <button onClick={this.increaseCounter}>+</button>
                <div className="counter">{this.state.counter}</div>
                <button onClick={this.decreaseCounter}>-</button>
            </div>

            </>
        )
    }

 
}

export default Counter;