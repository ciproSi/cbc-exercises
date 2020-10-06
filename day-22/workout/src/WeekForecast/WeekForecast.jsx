import React from 'react';
import './weekforecast.scss';
import { DayForecast } from '../DayForecast/DayForecast.jsx';
import spinner from './spinner.png';

//when i am fetching data I save the data to the state of a components

export class WeekForecast extends React.Component {
    constructor (props) {
        super(props);

        this.state = {
            forecasts: [],
        }
    }
    
    componentDidMount () {
        fetch ('http://bootcamp.podlomar.org/api/weather')
            .then((resp) => resp.json())
            .then((fetchedData) => this.setState({forecasts: fetchedData}))
    
    }

    render () {
        if (this.state.forecasts.length === 0) {
            return (
               <>
                <h1>Weekly Weather Forecast</h1>
                    <div className="week-forecast">    
                    <img src={spinner} alt="spinner" className="spinner"></img>
                </div>
            </>
            )
        }
        return (
            <>
            <h1>Weekly Weather Forecast</h1>
            <div className="week-forecast">
                {this.state.forecasts.map(forecastToComponent)}
            </div>
            </>
            
        )
    }
}

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