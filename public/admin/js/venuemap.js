// Initialize the map
var map = L.map('map').setView([13.4105, 121.1817], 13);

// Add the MapChart tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Fetch location data from the database using PHP
fetch('map.php')
  .then(response => response.json())
  .then(data => {
    // Loop through the locations and add markers to the map
    data.forEach(tblmap => {
      L.marker([tblmap.lat, tblmap.lng]).addTo(map)
        .bindPopup(tblmap.name);
    });
  });