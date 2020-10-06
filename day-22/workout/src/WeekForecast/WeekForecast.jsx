import React from 'react';
import ReactDOM from 'react-dom';
import './weekforecast.scss';
import { forecast } from './forecast.js';
import { DayForecast } from '../DayForecast/DayForecast.jsx';

export class WeekForecast extends React.Component {
    render () {
        return (
            <>
            <h1>Weekly Weather Forecast</h1>
            <div className="week-forecast">
                <DayForecast weather={forecast[0].weather} day={forecast[0].weekday} tempDay={forecast[0].tempDay} tempNight={forecast[0].tempNight}/>
                <DayForecast weather={forecast[1].weather} day={forecast[1].weekday} tempDay={forecast[1].tempDay} tempNight={forecast[1].tempNight}/>
                <DayForecast weather={forecast[2].weather} day={forecast[2].weekday} tempDay={forecast[2].tempDay} tempNight={forecast[2].tempNight}/>
                <DayForecast weather={forecast[3].weather} day={forecast[3].weekday} tempDay={forecast[3].tempDay} tempNight={forecast[3].tempNight}/>
                <DayForecast weather={forecast[4].weather} day={forecast[4].weekday} tempDay={forecast[4].tempDay} tempNight={forecast[4].tempNight}/>
                <DayForecast weather={forecast[5].weather} day={forecast[5].weekday} tempDay={forecast[5].tempDay} tempNight={forecast[5].tempNight}/>
                <DayForecast weather={forecast[6].weather} day={forecast[6].weekday} tempDay={forecast[6].tempDay} tempNight={forecast[6].tempNight}/>

            </div>
            </>
            
        )
    }
}