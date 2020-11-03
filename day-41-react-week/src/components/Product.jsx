import React from 'react';

export default class Product extends React.Component {
    render () {
        console.log(this.props.product);
        
        return (
            
            <div className="product">
                <img src={this.props.product.img_url} alt="" />
                <div className="name">Propulsion gel</div>
            </div>
        )
    }

}