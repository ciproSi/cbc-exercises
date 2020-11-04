import React from 'react';
import LifeCycleB from './LifeCycleB.jsx';

class LifeCycleA extends React.Component {
    constructor (props) {
        super(props);

        console.log('A constructor');

    }

    componentDidMount () {
        console.log('A did mount');
    }

    render () {
        console.log('A render');
        return (
            <div>
                <LifeCycleB />
            </div>

        );
    }
}
export default LifeCycleA;
