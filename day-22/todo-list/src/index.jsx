import React from 'react';
import reactDOM from 'react-dom';
import { TodoItem } from './todoItem/TodoItem.jsx';
import './style.scss';
import './index.html';


reactDOM.render(<TodoItem />, document.getElementById('app'));

