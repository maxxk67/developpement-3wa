function initStorage() {
    return {
        city: 'Marseille',
        state: 'FR'
    }
}


function storageGetLocationData() {
    return {
        city: localStorage.getItem('city') || initStorage().city,
        state: localStorage.getItem('state') || initStorage().state,
    }
}


function storageSetLocationData(city, state) {
    localStorage.setItem('city', city);
    localStorage.setItem('state', state);
}
