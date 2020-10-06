import React from 'react';
import './weekforecast.scss';
import { forecast } from './forecast.js';
import { DayForecast } from '../DayForecast/DayForecast.jsx';

const forecastToComponent = (forecast) => {
    return (
        <DayForecast 
            weather = {forecast.weather}
            day = {forecast.weekday}
            tempDay = {forecast.tempDay}
            tempNight = {forecast.tempNight}
        />
    )
};
export class WeekForecast extends React.Component {
    render () {
        return (
            <>
            <h1>Weekly Weather Forecast</h1>
            <div className="week-forecast">
                {forecast.map(forecastToComponent)}
            </div>
            </>
            
        )
    }
}

