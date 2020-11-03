import React from 'react';
import Checkbox from './Checkbox.jsx';

class Book extends React.Component {
    constructor (props) {
        super(props);

        this.state = {
            checkBoxChecked: false,
            liked: false
        }

    }

    onChangeFunction = () => {
        const { checkBoxChecked } = this.state;
        this.setState({checkBoxChecked: !checkBoxChecked})

        this.props.toggleLists(this.props.book, this.state.liked);
       
        
        
    }

    render () {
        const { book, liked } = this.props;
        const { checkBoxChecked } = this.state;
        return (
            <div className="book">
                <div className="book__title">
                    <a href={book.link}>{book.title}</a>
                </div>
                <div className="book__author">by: {book.author}</div>
                <div className="book__year">{book.year}</div>
                <div className="book__image">
                    {/* <a href={book.link}><img src={book.imageLink} alt=""/></a> */}
                </div>
                
                {/* Passing function to children component is the only way how to get information about the state of that children element as some change in the children component will trigger that function and parent component has the result of that function - like change of the state of parent component. So actually we keep the state of children component in the parent componet. */}
                
                <Checkbox 
                    // here we are passing function to the children element
                    // the syntax with ! means the opposite
                    onChangeFunction = {this.onChangeFunction}
                    checked = {checkBoxChecked}
                    liked={liked}
                     
                />

            </div>
        )
    }
}

export default Book;