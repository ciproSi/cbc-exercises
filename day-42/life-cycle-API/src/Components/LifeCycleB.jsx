import React from 'react';

class LifeCycleB extends React.Component {
    constructor (props) {
        super(props);

        console.log('B constructor');

    }

    componentDidMount () {
        console.log('B did mount');
    }

    render () {
        console.log('B render');
        return (
            <div>
            </div>

        );
    }
}
export default LifeCycleB;
