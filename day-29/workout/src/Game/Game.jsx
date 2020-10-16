import React from 'react';

export default class Game extends React.Component {
    constructor(props) {
        super(props);
        
    }

    render() {
        //just tried another way
        // let genres = '';
        // this.props.genres.forEach(genre => {
        //     genres += genre.name + ' ';
        // });
        // const regex = / /g;
        // genres = genres.replace(regex, '-');

        return (
            <div className="game">
               <h3>{this.props.name}</h3>
               <h4>Genre:
                   { 
                        this.props.genres.map(genre => (
                             ' ' + genre.name  
                        ))
                   }
               </h4>
               <h4>Rating: { this.props.rating } / 100</h4>
               <h4>Release date: {this.props.released_at}</h4>
               <div className="game__detail">
                   <img src={this.props.image_url} alt=""/>
                   <p>{this.props.description}</p>
               </div>
            </div>
        );
    }
}