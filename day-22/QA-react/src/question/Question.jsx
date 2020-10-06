import React from 'react';
import './question.scss';
import { Answer } from '../answer/Answer.jsx';

export class Question extends React.Component {
    render () {
        return (
            <>
                <h4>{this.props.question}</h4>
                <Answer 
                    answerTittle='taky nevim' 
                    answerBody='i can think the whole afternoon but i will think out just a shit'
                />
            </>
        )
    }
};