import React from 'react';
import './answer.scss';

export class Answer extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            likes: 0,
            comment: '',
            commentInput: false,
            commented: false,
        };
    }
    
    render() {
        let element = null;
        if (this.state.commented === false) {
            element = [
                <button onClick={this.commentAnswer}>Comment on the answer</button>,
            ]
        } else if (this.state.commented === true && this.state.commentInput === false) {
            element = [
                <input value = {this.state.comment} onChange = {this.handleChange} onKeyDown={this.sentComment} type="text"/>,
            ]
        } else if (this.state.commentInput === true) {
            element = [
                <div className="comment">{this.state.comment}</div>
            ]
        }
        return (
            <>
                <div className="answer__title">{this.props.answerTittle}</div>
                <div className="answer__body">{this.props.answerBody}</div>
                <button onClick={this.handleLike}>Like - {this.state.likes}</button>
                {element}
            </>
        )
    }
    //methods whis serves as event listeners needs to be declared as arrow functions
    handleLike = () => {
        const likes = ++this.state.likes;
        this.setState({likes: likes});
    }

    commentAnswer = () => {
        this.setState({commented: true})
    }

    sentComment = (e) => {
        if (e.key === 'Enter') {
            this.setState({commentInput: true})
        }
    }

    handleChange = (e) => {
        this.setState({comment: e.target.value})
    }
}