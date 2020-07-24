let city = '';
let state = '';


city = storageGetLocationData().city;
state = storageGetLocationData().state;


initUI();


document.addEventListener('DOMContentLoaded', getWeather);


document.getElementById('w-change-btn').addEventListener('click', e => {
    city = document.getElementById('city').value;
    state = document.getElementById('state').value;

    storageSetLocationData(city, state);

    getWeather();

    $('#locModal').modal('hide');
});



function getWeather() {
    weatherGetWeather()
        .then(weather => {
            uiPaint(weather);
        })
        .catch(err => console.error(err));
}
