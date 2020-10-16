import React from 'react';
import Game from '../Game/Game.jsx';

export default class List extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            loading: false,
            data: [],
            url:  'http://www.cbp-exercises.test/day-29/workout/endpoint.php'
        };
    }

    componentDidMount() {
        this.loadData();
    }

    loadData() {
        if (this.state.url) {
            this.setState({ 
                loading: true,
                data: []
            })

            fetch(this.state.url)
                .then(response => response.json())
                .then(data => {
                    this.setState({ 
                        data: data
                    })
                })
                .finally(this.setState({
                    loading: false
                }));
        }
    }

    changeOrder = (event) => {
        const url = `http://www.cbp-exercises.test/day-29/workout/endpoint.php?orderby=${event.target.name}`;
        this.setState({
            url: url,
            loading: true
        });
        this.loadData();

      }

    render() {

        let content = (
            <div className="message">Loading...</div>
        )
        if (!this.state.loading) {
            content = (
                <>
                    <h1>List of games</h1>
                    <button name="name&way=desc" onClick={this.changeOrder}>Order by name DESC</button>
                    <button name="rating&way=asc" onClick={this.changeOrder}>Order by rating ASC</button>
                    <button name="rating&way=desc" onClick={this.changeOrder}>Order by rating DESC</button>
                    <ol>
                        {
                            this.state.data.map(item => ( 
                                <li key={item.name}><Game key={ item.name } { ...item } /></li>
                            ))
                        }
                    </ol>
                </>
            )
        }
        
        return (
            <div className="games">
                { content }
            </div>
        );
    }
}