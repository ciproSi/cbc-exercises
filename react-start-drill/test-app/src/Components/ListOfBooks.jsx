import React from 'react';
import Book from './Book.jsx';

class ListOfBooks extends React.Component {
    constructor (props) {
        super(props);

        this.state = {
            booksToRead: [],
            unlikedBooks: this.props.books
        }
    }
    
    toggleLists = (book, liked) => {
        console.log(liked);
        
        if (!liked) {
            this.state.booksToRead.push(book);
            const unlikedBooks = this.state.unlikedBooks.filter(b => b.title !== book.title );
            const newArray = this.state.booksToRead;
            this.setState({
                bookToRead: newArray,
                unlikedBooks: unlikedBooks
            })
        } else {
            this.state.unlikedBooks.push(book);
            const booksToRead = this.state.booksToRead.filter(b => b.title !== book.title );
            const newArray = this.state.unlikedBooks;
            this.setState({
                booksToRead: booksToRead,
                unlikedBooks: newArray
            })
        }
        
    }
    
    render () {
        const { booksToRead, unlikedBooks } = this.state;
        
        //sorting based on number
        // const sortedBooks = books.sort((a, b) => a.year - b.year);
        
        //sorting object based on string value
        const sortedBooks = unlikedBooks.sort((a, b) => a.title < b.title ? -1 : 1);

        return (
            <>
                <div className="container">
                    <div className="left">
                        <h1>books</h1>
                        {sortedBooks.map((book, index) => (
                                <Book 
                                    book={book}
                                    key={book.title}
                                    toggleLists={this.toggleLists}
                                    
                                />
                        ))}
                    </div>
                    <div className="right">
                        <h1>books to read</h1>
                        {booksToRead.map((book, index) => (
                                <Book 
                                    book={book}
                                    key={book.title}
                                    toggleLists={this.toggleLists}
                                    liked={true}
                                    
                                />
                        ))} 
                    </div>
                </div>            
                
            </>
        )
    }
}

export default ListOfBooks;