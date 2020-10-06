import React from 'react';
import ReactDOM from 'react-dom';
import './index.scss';
import './index.html';
import { WeekForecast } from './WeekForecast/WeekForecast.jsx';

ReactDOM.render(<WeekForecast />, document.querySelector('.container'));