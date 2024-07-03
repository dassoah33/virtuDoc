$(function() {
    "use strict";

    if ($("#morris-bar-example").length) {
        Morris.Bar({
            element: "morris-bar-example",
            barColors: ["#ebeef1", "#1976d2"],
            data: [
                { y: "2010", a: 80, b: 100 },
                { y: "2011", a: 110, b: 130 },
                { y: "2012", a: 90, b: 110 },
                { y: "2013", a: 80, b: 100 },
                { y: "2014", a: 110, b: 130 },
                { y: "2015", a: 90, b: 110 },
                { y: "2016", a: 120, b: 140 },
                { y: "2017", a: 110, b: 125 },
                { y: "2018", a: 170, b: 190 },
                { y: "2019", a: 120, b: 140 }
            ],
            xkey: "y",
            ykeys: ["a", "b"],
            hideHover: "auto",
            gridLineColor: "#eef0f2",
            resize: true,
            barSizeRatio: 0.4,
            labels: ["iPhone 8", "Samsung Galaxy"]
        });
    }

    if ($("#morris-donut-example").length) {
        Morris.Donut({
            element: "morris-donut-example",
            resize: true,
            colors: ["#7266bb", "#1d84c6", "#f85359"],
            data: [
                { label: "Samsung Company", value: 12 },
                { label: "Apple Company", value: 30 },
                { label: "Vivo Mobiles", value: 20 }
            ]
        });
    }

    $(document).ready(function() {
        function createSparkline() {
            $("#sparkline1").sparkline(
                [25, 23, 26, 24, 25, 32, 30, 24, 19],
                {
                    type: "line",
                    width: "100%",
                    height: "297",
                    chartRangeMax: 35,
                    lineColor: "#1991eb",
                    fillColor: "rgba(25, 118, 210, 0.18)",
                    highlightLineColor: "rgba(0, 0, 0, .1)",
                    highlightSpotColor: "rgba(0, 0, 0, .2)",
                    maxSpotColor: false,
                    minSpotColor: false,
                    spotColor: false,
                    lineWidth: 1
                }
            );
        }

        var resizeTimeout;
        createSparkline();
        $(window).resize(function(e) {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                createSparkline();
            }, 300);
        });
    });

    if ($("#morris-line-example").length) {
        Morris.Line({
            element: "morris-line-example",
            gridLineColor: "#eef0f2",
            lineColors: ["#f15050"],
            data: [
                { y: "2013", a: 80000.50 },
                { y: "2014", a: 110000.75 },
                { y: "2015", a: 90000.25 },
                { y: "2016", a: 120000.60 },
                { y: "2017", a: 110000.45 },
                { y: "2018", a: 170000.90 },
                { y: "2019", a: 120000.30 }
            ],
            xkey: "y",
            ykeys: ["a"],
            hideHover: "auto",
            resize: true,
            labels: ["Series A"]
        });
    }
    
    
    
});
