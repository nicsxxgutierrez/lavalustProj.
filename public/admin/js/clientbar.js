$(document).ready(function(){
    $.ajax({
      url: "http://localhost/event/admin/client.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var months = [];
        var clients = [];
  
        for(var i in data) {
          months.push(data[i].months);
          clients.push(data[i].clients);
        }
  
        var chartdata = {
          labels: months,
          datasets : [
            {
              label: 'Clients in Every Month',
              backgroundColor: 'rgba(1, 255, 231, 1)',
              hoverBackgroundColor: 'rgba(0, 128, 116, 1)',
              data: clients
            }
          ]
        };
  
        var ctx = $("#bargraph");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });