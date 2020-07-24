// https://openweathermap.org/current

const API_KEY = 'la votre';


async function weatherGetWeather() {
    let url = new URL('https://api.openweathermap.org/data/2.5/weather');

    url.searchParams.set('q', `${city},${state}`);
    url.searchParams.set('appid', API_KEY);
    url.searchParams.set('units', 'metric');


    const response = await fetch(url);

    return await response.json();

}
