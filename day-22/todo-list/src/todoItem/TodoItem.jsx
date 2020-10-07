import React from 'react';
import './todoitem.scss';
import { Toggle } from '../toggle/Toggle.jsx';

export class TodoItem extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            numberOfItems: 1,
            show: true,
        }
    }

    render () {
        if (this.state.show) {
            return (
                 <>
                    <div className="item">
                        <input type="text" className="item__input"/>
                        <Toggle />
                        <div onClick={this.handleItemDisplay} className="item__remove">-</div>
                    </div>
                </>
            )
        } else {return null;}
    }

    handleItemDisplay = (e) => {
        this.setState({show: false});
    }
}

