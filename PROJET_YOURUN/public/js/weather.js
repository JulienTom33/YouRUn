// WIDGET METEO

window.addEventListener("DOMContentLoaded", (event) => {

fetch("https://api.openweathermap.org/data/2.5/weather?q=bordeaux&appid=f0c488b169343389c31457c73ea49957&units=metric&lang=fr")
    .then(response => response.json())
    .then(response => {
        console.log(response);
        document.getElementById("description").textContent = response.weather[0].description;
        document.getElementById("temp").textContent = `${response.main.temp} °C`;
        document.querySelector('h3').textContent = response.name;
    })

});