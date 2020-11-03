import React from 'react';

export default class userInfo extends React.Component {
    render () {
        return (
             <div className="user">
                <span>chell@aperture.sc</span><br/>
                <a href="#">logout</a>
            </div>
        )
    }
}