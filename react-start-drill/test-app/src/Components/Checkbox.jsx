import React from 'react';

class Checkbox extends React.Component {
    render () {
        

        // with full notation this.props.something
        // return (
        //     <input type="checkbox" onChange={this.props.functionName} checked={this.props.checked} />
        // )

        // OR easier with destructuring 
        const { onChangeFunction, checked, liked }  = this.props;

        return (
           <input type="checkbox" onChange={onChangeFunction} checked={liked} />
        )
    }
}

export default Checkbox;