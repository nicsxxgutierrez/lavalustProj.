$(document).ready(function(){
  $.ajax({
    url: "http://localhost/event/admin/earn.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var months = [];
      var earn = [];

      for(var i in data) {
        months.push(data[i].months);
        earn.push(data[i].earn);
      }

      var chartdata = {
        labels: months,
        datasets : [
          {
            label: 'Monthly Income',
            backgroundColor: 'rgba(0, 255, 40, 0.8)',
            hoverBackgroundColor: 'rgba(178, 0, 92, 1)',
            data: earn
          }
        ]
      };

      var ctx = $("#linegraph");

      var lineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});