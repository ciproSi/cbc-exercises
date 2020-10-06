import React from 'react';
import './todoitem.scss';
import { Toggle } from '../toggle/Toggle.jsx';

export class TodoItem extends React.Component {
    constructor(props) {
        super(props);

        this.state = {

        }
    }

    render () {
        return (
            <>
            <div className="item">
                <input type="text" className="item__input"/>
                <Toggle />
            </div>
             <div className="item">
                <input type="text" className="item__input"/>
                <Toggle />
            </div>
            <div className="item">
                <input type="text" className="item__input"/>
                <Toggle />
            </div>
            </>
        )
    }
}