$(function () {
  let chart_element = $(".jsGraphContainer #graph")[0].getContext("2d");

  let number_of_points = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23];

  let bus = [5, 4, 2, 2, 4, 20, 50, 75, 80, 70, 50, 70, 75, 55, 45, 40, 50, 75, 70, 50, 35, 30, 20, 15];
  let truck = [3, 2, 5, 15, 20, 25, 20, 15, 15, 10, 5, 10, 10, 15, 23, 15, 5, 10, 12, 7, 6, 5, 3, 2];
  let van = [0, 1, 1, 0, 0, 3, 25, 30, 35, 20, 10, 15, 20, 20, 10, 20, 25, 40, 25, 15, 10, 6, 5, 2];
  let car = [20, 15, 10, 5, 3, 25, 60, 95, 97, 75, 65, 80, 85, 80, 60, 65, 75, 85, 95, 80, 70, 55, 30, 25];

  const chartInit = () => {
    return new Chart(chart_element, {
      type: "line",
      data: {
        labels: number_of_points,
        datasets: [
          {
            data: car,
            fill: false,
            label: "CAR",
            borderColor: "rgb(247, 29, 87)",
            backgroundColor: "rgb(247, 29, 87)",
            color: "rgb(255, 255, 255)",
            tension: 0.1,
            borderWidth: 1.5,
          },
          {
            data: truck,
            fill: false,
            label: "Truck",
            borderColor: "rgb(0, 203, 71)",
            backgroundColor: "rgb(0, 203, 71)",
            color: "rgb(255, 255, 255)",
            tension: 0.1,
            borderWidth: 1.5,
          },
          {
            data: van,
            fill: false,
            label: "VAN",
            borderColor: "rgb(254, 230, 0)",
            backgroundColor: "rgb(254, 230, 0)",
            color: "rgb(255, 255, 255)",
            tension: 0.1,
            borderWidth: 1.5,
          },
          {
            data: bus,
            fill: false,
            label: "BUS",
            borderColor: "rgb(152, 161, 255)",
            backgroundColor: "rgb(152, 161, 255)",
            color: "rgb(255, 255, 255)",
            tension: 0.1,
            borderWidth: 1.5,
          },
        ],
      },
      options: {
        elements: {
          point: {
            radius: 0,
          },
        },
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        scales: {
          y: {
            grid: {
              backgroundColor: "white",
              color: "white",
              backdropColor: "white",
              borderDash: [1, 3],
              drawTicks: false,
              // offset: true,
              borderColor: "white",
              padding: 20,
            },
            title: {
              display: true,
              text: "Vehicle Count Per Hour",
            },
          },
          x: {
            grid: {
              color: "white",
              borderDash: [0, 1],
              drawTicks: false,
              borderColor: "white",
              padding: 20,
            },
            title: {
              display: true,
              text: "Hour of Day",
            },
            ticks: {
              maxRotation: 0,
            },
          },
        },
      },
    });
  };
  Chart.defaults.color = "white";
  Chart.defaults.font.size = 11;
  let trafficDensityChart = chartInit();

  $(".jsGraphCar").click((e) => toggleData(0, e));
  $(".jsGraphTruck").click((e) => toggleData(1, e));
  $(".jsGraphVan").click((e) => toggleData(2, e));
  $(".jsGraphBus").click((e) => toggleData(3, e));

  const toggleData = (data, e) => {
    const isDataVisisble = trafficDensityChart.isDatasetVisible(data);
    console.log(isDataVisisble);
    console.log(e.currentTarget);
    if (isDataVisisble) {
      e.currentTarget.classList.add("inactive");
      trafficDensityChart.hide(data);
    } else {
      e.currentTarget.classList.remove("inactive");
      trafficDensityChart.show(data);
    }
  };
});
