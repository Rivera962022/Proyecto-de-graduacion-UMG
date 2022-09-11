mapboxgl.accessToken = 'pk.eyJ1IjoiamNoYWNvbjA5MiIsImEiOiJja3Qwcnh4bnUwMzJ6MnBueGY0M3c2ZzhnIn0.dy1ymQ5lEW89c1SeBbgHYQ';
const map = new mapboxgl.Map({
container: 'map', // container ID
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: [-91.5, 14.8], // starting position [lng, lat]
zoom: 9 // starting zoom
});