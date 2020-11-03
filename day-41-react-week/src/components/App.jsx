import React from 'react';
import ReactDOM from 'react-dom';
import Header from './Header.jsx';
import Footer from './Footer.jsx';
import Search from './Search.jsx';
import ProductList from './ProductList.jsx';

export default class App extends React.Component {
    render () {
        return (
            <>
            
            <Header />

            <div id="main">
                <Search />

                <div className="content">
                    <h1>Products</h1>

                    <ProductList />

                 </div>

             </div>

             <Footer />
             
            </>
        )
    }
}