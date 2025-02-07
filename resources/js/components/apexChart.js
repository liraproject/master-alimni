export const chart = {

    chartPertama: {
        colors: ["#4C4EE7", "#0EA5E9"],
        series: [],
        chart: {
            height: 330,
            type: "line",
            parentHeightOffset: 0,
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false,
        },
        plotOptions: {},
        legend: {
            show: false,
        },
        xaxis: {
            categories: [],
            labels: {
                hideOverlappingLabels: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            tooltip: {
                enabled: false,
            },
        },
        stroke: {
            width: 3,
        },
        markers: {
            size: 5,
            hover: {
                size: 8,
            },
        },
        grid: {
            padding: {
                left: 10,
                right: 0,
                top: -30,
                bottom: -8,
            },
        },
        yaxis: {
            show: false,
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
            },
        },
    }

}