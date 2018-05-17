var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["HTML5", "CSS", "Bootstrap", "Javascript", "Jquery", "PHP", "MySQL","Laravel"],
        datasets: [{
            data: [8, 7, 7, 8, 8, 9, 9, 7],
            borderWidth: 1,
            pointBackgroundColor:'rgba(255, 99, 132, 0.2)',
            pointBorderColor :'rgba(255, 99, 132, 1.0)',
            backgroundColor:'rgba(255, 99, 132, 0.2)',
            borderColor:'rgba(255, 99, 132, 1.0)',
            pointRadius:5.0,
            borderWidth:3.0,
        }]
    },
    options: {
    	legend: {
            display: false,
        },
        scales: {
        	xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Skills'
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero:false,
                    max:10,
                    min:5
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Level [ 0 -10 ]'
                }
            }]
        },
        title: {
            display: true,
            text: 'Mastery Level'
        }

    }
});