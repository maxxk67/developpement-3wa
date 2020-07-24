function initUI() {
    this.city = document.getElementById('w-location');
    this.desc = document.getElementById('w-desc');
    this.string = document.getElementById('w-string');
    this.details = document.getElementById('w-details');
    this.icon = document.getElementById('w-icon');
    this.humidity = document.getElementById('w-humidity');
    this.feelsLike = document.getElementById('w-feels-like');
    this.dewpoint = document.getElementById('w-dewpoint');
    this.wind = document.getElementById('w-wind');
}


function uiPaint(weather) {
    this.city.innerText = weather.name;
    this.desc.innerText = weather.sys.country;
    this.string.innerText = weather.main.temp;
    this.details.innerText = weather.wind.speed;

    this.icon.setAttribute('src', `https://openweathermap.org/img/w/${weather.weather[0].icon}.png`);
    /*this.humidity.innerText =
    this.feelsLike.innerText =
    this.dewpoint.innerText =
    this.wind.innerText =*/
}
