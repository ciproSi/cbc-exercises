import React from 'react';
import reactDOM from 'react-dom';
import { TodoItem } from './todoItem/TodoItem.jsx';
import './style.scss';
import './index.html';


class App extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            numberOfItems: 1

        }
    }

    render () {
        let element = [];
        for (let i = 0; i < this.state.numberOfItems; i++) {
            element.push(<TodoItem />)
        }
        return (
            <>
                {element}
                <div  onClick={this.handleAddItem} className="item__add">+</div>
            </>
        )
    }

    handleAddItem = () => {
        const itemsNrIncrease = ++this.state.numberOfItems;
        this.setState({numberOfItems: itemsNrIncrease});
    }
    
}

reactDOM.render(<App />, document.getElementById('app'));

