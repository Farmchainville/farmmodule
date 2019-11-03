/*=========================================================================================
    File Name: dashboard-analytics.js
    Description: intialize advance cards
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
    ==========================================================================================*/
    $(window).on('load', function() {

    // Revenue - CharJS Line
    Chart.defaults.derivedLine = Chart.defaults.line;
    var draw = Chart.controllers.line.prototype.draw;
    var custom = Chart.controllers.line.extend({
        draw: function() {
            draw.apply(this, arguments);
            var ctx = this.chart.chart.ctx;
            var _stroke = ctx.stroke;
            ctx.stroke = function() {
                ctx.save();
                ctx.shadowColor = '#9abf3c';
                ctx.shadowBlur = 30;
                ctx.shadowOffsetX = 0;
                ctx.shadowOffsetY = 20;
                _stroke.apply(this, arguments)
                ctx.restore();
            }
        }
    });

    Chart.controllers.derivedLine = custom;
    var ctx = document.querySelector("#thisYearRevenue").getContext('2d');
    var thisYearRevenueChart = new Chart(ctx, {
        type: 'derivedLine',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
            datasets: [{
                data: [5000, 10000, 4000, 14500, 8000, 18500, 8000, 20000],
                borderWidth: 4,
                borderColor: '#4B703A',
                pointBackgroundColor: "#FFF",
                pointBorderColor: "#4B703A",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#4B703A",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: false,
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                displayColors: false,
                callbacks: {
                    label: function(e, d) {
                        // return '${e.xLabel} : ${e.yLabel}'
                    },
                    title: function() {
                        return;
                    }
                }
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }],
                yAxes: [{
                    ticks: {
                        padding: 10,
                        stepSize: 5000,
                        max: 20000,
                        min: 0,
                    },
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        lineWidth: 1,
                        zeroLineColor: '#e5e5e5',
                    }
                }]
            }
        }
    });

    var ctx2 = document.querySelector("#lastYearRevenue").getContext('2d');
    var lastYearRevenueChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "Mon"],
            datasets: [{
                data: [7000, 15000, 6000, 10500, 3000, 11500, 4000, 10000],
                borderWidth: 4,
                borderDash: [8, 4],
                borderColor: '#c3c3c3',
                pointBackgroundColor: "#FFF",
                pointBorderColor: "#c3c3c3",
                pointHoverBackgroundColor: "#FFF",
                pointHoverBorderColor: "#c3c3c3",
                pointRadius: 0,
                pointHoverRadius: 6,
                fill: false,
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                displayColors: false,
                callbacks: {
                    label: function(e, d) {
                        // return '${e.xLabel} : ${e.yLabel}'
                    },
                    title: function() {
                        return;
                    }
                }
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }],
                yAxes: [{
                    ticks: {
                        padding: 10,
                        stepSize: 5000,
                        max: 20000,
                        min: 0,
                    },
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: '#e5e5e5',
                    }
                }]
            }
        }
    });





    //Total Earnings

    var ctx3 = document.getElementById("earning-chart").getContext("2d");

    // Chart Options
    var earningOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(0,0,0,0.8)",
        legend: {
            display: false,
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 70
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 40,
            text: '82%'
        }
    };

    // Chart Data
    var earningData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            data: [28, 35, 36, 48, 46, 42, 60],
            backgroundColor: 'rgba(255,117,136,0.12)',
            borderColor: "#4B703A",
            borderWidth: 3,
            strokeColor : "#4B703A",
            capBezierPoints: true,
            pointColor : "#fff",
            pointBorderColor: "#4B703A",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 3,
            pointRadius: 5,
            pointHoverBackgroundColor: "#FFF",
            pointHoverBorderColor: "#4B703A",
            pointHoverRadius: 7,
        }]
    };

    var earningConfig = {
        type: 'line',

        // Chart Options
        options : earningOptions,

        // Chart Data
        data : earningData
    };

    // Create the chart
    var earningChart = new Chart(ctx3, earningConfig);


     
    // Vector Maps
    // -----------------------------------
    $('#world-map-markers').vectorMap({
      map: 'world_mill',
      backgroundColor: '#fff',
      zoomOnScroll: false,
      series: {
        regions: [{
          values: visitorData,
          scale: ['#ff7588', '#fddde1'],
          normalizeFunction: 'polynomial'
        }]
      },
      onRegionTipShow: function(e, el, code){
        el.html(el.html()+' (Visitor - '+visitorData[code]+')');
      }
    });

    
    //Sessions by Browser
    // -----------------------------------
    Morris.Donut({
        element: 'sessions-browser-donut-chart',
        data: [{
            label: "Obio Akpor",
            value: 3500
        }, {
            label: "Ikwerre",
            value: 2500
        }, {
            label: "Abua–Odual",
            value: 2000
        }, {
            label: "Akuku-Toru",
            value: 1000
        },{
            label: "Ahoada West",
            value: 500
        } ],
        resize: true,
        colors: ['#40C7CA', '#FF7588', '#2DCEE3', '#FFA87D', '#16D39A']
    });

        /********************************************
         *               Monthly Sales               *
         ********************************************/
        Morris.Bar.prototype.fillForSeries = function(i) {
            var color;
            return "0-#fff-#f00:20-#000";
        };

        Morris.Bar({
            element: 'monthly-sales',
            data: [{month: 'Jan', sales: 1835 }, {month: 'Feb', sales: 2356 }, {month: 'Mar', sales: 1459 }, {month: 'Apr', sales: 1289 }, {month: 'May', sales: 1647 }, {month: 'Jun', sales: 2156 }, {month: 'Jul', sales: 1835 }, {month: 'Aug', sales: 2356 }, {month: 'Sep', sales: 1459 }, {month: 'Oct', sales: 1289 }, {month: 'Nov', sales: 1647 }, {month: 'Dec', sales: 2156 }],
            xkey: 'month',
            ykeys: ['sales'],
            labels: ['Sales'],
            barGap: 4,
            barSizeRatio: 0.3,
            gridTextColor: '#bfbfbf',
            gridLineColor: '#E4E7ED',
            numLines: 5,
            gridtextSize: 14,
            resize: true,
            barColors: ['#FF394F'],
            hideHover: 'auto',
        });

});