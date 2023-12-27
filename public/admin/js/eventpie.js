// Fetch data from the server
fetch('event.php')
  .then(response => response.json())
  .then(data => {
    // Prepare data for the chart
    const events = data.map(item => item.events);
    const clients = data.map(item => item.clients);
    const colors = generateRandomColors(data.length);

    // Create the chart
    const ctx = document.getElementById('piegraph').getContext('2d');
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: events,
        datasets: [{
          data: clients,
          backgroundColor: colors
        }]
      }
    });
  })
  .catch(error => console.error(error));

// Function to generate random colors
function generateRandomColors(count) {
  const colors = [];
  for (let i = 0; i < count; i++) {
    const color = '#' + Math.floor(Math.random() * 16777215).toString(16);
    colors.push(color);
  }
  return colors;
}