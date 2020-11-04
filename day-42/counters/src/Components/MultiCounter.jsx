import React from 'react';
import Counter from './Counter.jsx';

class MultiCounter extends React.Component {
    constructor (props) {
        super(props);

        this.state = {  };

        for (let i = 0; i < this.props.countersAmount; i++) {
            this.state[i] = 0
        }
        
    }

    handleClick = (key, counter) => {
        this.setState({[key]: counter});
    }

    allIncrease = () => {
        console.log(this.state);
        for (let i = 0; i < this.props.countersAmount; i++) {
            this.setState({
                [i]: ++this.state[i]
            })
        }
    }

    allDecrease = () => {
        console.log(this.state);
        for (let i = 0; i < this.props.countersAmount; i++) {
            this.setState({
                [i]: --this.state[i]
            })
        }
    }

    render () {
        let element = [];
        for (let i = 0; i < this.props.countersAmount; i++) {
            element.push(<Counter key={i} name={i} multiCounter={true} handleClick={this.handleClick} value={this.state[i]}/>);
        }
        
        return (
            <>
            {element}
            <button onClick={this.allIncrease}>All +</button>
            <button onClick={this.allDecrease}>All -</button>
            </>
        )
        
    }
    
}

export default MultiCounter;