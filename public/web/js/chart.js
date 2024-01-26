// var options = {
//   chart: {
//     height: 150,
//     type: 'line',
//     toolbar: {
//       show: false
//     }
//   },
//   stroke: {
//     curve: 'straight'
//   },
//   colors: ['#005d83'],
//   dataLabels: {
//     enabled: true,
//     style: {
//       fontSize: '14px',
//     },

//     formatter: function (val, opt) {
//       return val + "%"
//     },
//   },
//   series: [

//     {
//       name: '',
//       type: 'line',
//       data: [100, 21, 53, 0, 84, 60, 71]
//     }],
//   fill: {

//   },
//   markers: {
//     size: 5
//   },
//   xaxis: {
//     type: 'category',
//     labels: {
//       show: true,
//       style: {
//         colors: ["f00"],
//         fontSize: '12px',
//         fontFamily: 'Helvetica, Arial, sans-serif',
//         cssClass: 'apexcharts-xaxis-label',
//       },
//     },
//   },
//   yaxis: {
//     show: false,
//     title: {
//       text: 'Points',
//     },
//     labels: {
//       show: false,
//     },
//     max: 100,
//     min: 0
//   },
//   grid: {
//     yaxis: {
//       lines: {
//         show: false
//       }
//     }
//   }

// }

// var chart = new ApexCharts(
//   document.querySelector("#chart2"),
//   options
// );

// chart.render();

// Fetching the JSON file using the fetch API
fetch('web/js/data.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Parse the JSON from the response
  })
  .then(data => {
    // Work with the fetched JSON data
    console.log(data); // This will log the content of your JSON file

    // Perform operations with the data (e.g., use it in your chart)
    // Example: Assuming your chart creation logic
    const transformedData = data.map(d => ({
      x: new Date(d.date),
      y: [d.open, d.open, d.close, d.close]
    }));

    // Your chart creation with the transformed data
var options = {
  series: [
    {
      name: 'Close Price',
      data: transformedData
    }
  ],
  chart: {
    stacked: false,
    height: 150,
    toolbar: {
      show: true
    },

    zoom: {
      type: 'x',

      enabled: true,

      autoScaleYaxis: true
    }
  },

  colors: ['#e01515', '#e01515'],

  dataLabels: {
    enabled: false
  },

  grid: {
    yaxis: {
      // set to false to remove horizontal lines through graph

      lines: {
        show: false
      }
    }
  },

  legend: {
    show: true,

    position: 'top',

    horizontalAlign: 'left',

    labels: {}
  },

  stroke: {
    width: 3,

    curve: 'smooth',

    lineCap: 'butt',

    dashArray: [0, 3]
  },

  theme: {},

  tooltip: {
    x: {
      formatter: function (val) {
        console.log(val)

        return dayjs(val).format('MMM DD, YYYY')
      }
    },

    shared: false,

    marker: false
  },

  xaxis: {
    type: 'datetime',

    tooltip: {
      enabled: false
    },

    axisTicks: {
      show: true
    },
    tooltip: {
      enabled: true,
      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    },
    labels: {
      show: false,

      showDuplicates: false,

      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    }
  },

  yaxis: [
    {
      seriesName: 'Close Price',

      axisBorder: {
        show: false
      },

      axisTicks: {
        show: false
      },

      labels: {
        show: false,
        style: {}
      },

      opposite: false
    }
  ]
};

var chart = new ApexCharts(document.querySelector('#chart'), options)
chart.render()

  })
  .catch(error => {
    console.error('There was a problem fetching the data:', error);
  });


  // Fetching the JSON file using the fetch API
fetch('web/js/data.json')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json(); // Parse the JSON from the response
})
.then(data => {
  // Work with the fetched JSON data
  console.log(data); // This will log the content of your JSON file

  // Perform operations with the data (e.g., use it in your chart)
  // Example: Assuming your chart creation logic
  const transformedData = data.map(d => ({
    x: new Date(d.date),
    y: [d.open, d.open, d.close, d.close]
  }));

  // Your chart creation with the transformed data
var options = {
series: [
  {
    name: 'Close Price',
    data: transformedData
  }
],
chart: {
  stacked: false,
  height: 150,
  toolbar: {
    show: true
  },

  zoom: {
    type: 'x',

    enabled: true,

    autoScaleYaxis: true
  }
},

colors: ['#e01515', '#e01515'],

dataLabels: {
  enabled: false
},

grid: {
  yaxis: {
    // set to false to remove horizontal lines through graph

    lines: {
      show: false
    }
  }
},

legend: {
  show: true,

  position: 'top',

  horizontalAlign: 'left',

  labels: {}
},

stroke: {
  width: 3,

  curve: 'smooth',

  lineCap: 'butt',

  dashArray: [0, 3]
},

theme: {},

tooltip: {
  x: {
    formatter: function (val) {
      console.log(val)

      return dayjs(val).format('MMM DD, YYYY')
    }
  },

  shared: false,

  marker: false
},

xaxis: {
  type: 'datetime',

  tooltip: {
    enabled: false
  },

  axisTicks: {
    show: false
  },
  tooltip: {
    enabled: true,
    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  },
  labels: {
    show: false,

    showDuplicates: false,

    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  }
},

yaxis: [
  {
    seriesName: 'Close Price',

    axisBorder: {
      show: false
    },

    axisTicks: {
      show: false
    },

    labels: {
      show: false,
      style: {}
    },

    opposite: false
  }
]
};

var chart = new ApexCharts(document.querySelector('#chart2'), options)
chart.render()

})
.catch(error => {
  console.error('There was a problem fetching the data:', error);
});

  // Fetching the JSON file using the fetch API
fetch('web/js/data.json')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json(); // Parse the JSON from the response
})
.then(data => {
  // Work with the fetched JSON data
  console.log(data); // This will log the content of your JSON file

  // Perform operations with the data (e.g., use it in your chart)
  // Example: Assuming your chart creation logic
  const transformedData = data.map(d => ({
    x: new Date(d.date),
    y: [d.open, d.open, d.close, d.close]
  }));

  // Your chart creation with the transformed data
var options = {
series: [
  {
    name: 'Close Price',
    data: transformedData
  }
],
chart: {
  stacked: false,
  height: 150,
  toolbar: {
    show: true
  },

  zoom: {
    type: 'x',

    enabled: true,

    autoScaleYaxis: true
  }
},

colors: ['#e01515', '#e01515'],

dataLabels: {
  enabled: false
},

grid: {
  yaxis: {
    // set to false to remove horizontal lines through graph

    lines: {
      show: false
    }
  }
},

legend: {
  show: true,

  position: 'top',

  horizontalAlign: 'left',

  labels: {}
},

stroke: {
  width: 3,

  curve: 'smooth',

  lineCap: 'butt',

  dashArray: [0, 3]
},

theme: {},

tooltip: {
  x: {
    formatter: function (val) {
      console.log(val)

      return dayjs(val).format('MMM DD, YYYY')
    }
  },

  shared: false,

  marker: false
},

xaxis: {
  type: 'datetime',

  tooltip: {
    enabled: false
  },

  axisTicks: {
    show: false
  },
  tooltip: {
    enabled: true,
    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  },
  labels: {
    show: false,

    showDuplicates: false,

    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  }
},

yaxis: [
  {
    seriesName: 'Close Price',

    axisBorder: {
      show: false
    },

    axisTicks: {
      show: false
    },

    labels: {
      show: false,
      style: {}
    },

    opposite: false
  }
]
};

var chart = new ApexCharts(document.querySelector('#chart3'), options)
chart.render()

})
.catch(error => {
  console.error('There was a problem fetching the data:', error);
});

  // Fetching the JSON file using the fetch API
  fetch('web/js/data.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Parse the JSON from the response
  })
  .then(data => {
    // Work with the fetched JSON data
    console.log(data); // This will log the content of your JSON file

    // Perform operations with the data (e.g., use it in your chart)
    // Example: Assuming your chart creation logic
    const transformedData = data.map(d => ({
      x: new Date(d.date),
      y: [d.open, d.open, d.close, d.close]
    }));

    // Your chart creation with the transformed data
  var options = {
  series: [
    {
      name: 'Close Price',
      data: transformedData
    }
  ],
  chart: {
    stacked: false,
    height: 150,
    toolbar: {
      show: true
    },

    zoom: {
      type: 'x',

      enabled: true,

      autoScaleYaxis: true
    }
  },

  colors: ['#e01515', '#e01515'],

  dataLabels: {
    enabled: false
  },

  grid: {
    yaxis: {
      // set to false to remove horizontal lines through graph

      lines: {
        show: false
      }
    }
  },

  legend: {
    show: true,

    position: 'top',

    horizontalAlign: 'left',

    labels: {}
  },

  stroke: {
    width: 3,

    curve: 'smooth',

    lineCap: 'butt',

    dashArray: [0, 3]
  },

  theme: {},

  tooltip: {
    x: {
      formatter: function (val) {
        console.log(val)

        return dayjs(val).format('MMM DD, YYYY')
      }
    },

    shared: false,

    marker: false
  },

  xaxis: {
    type: 'datetime',

    tooltip: {
      enabled: false
    },

    axisTicks: {
      show: false
    },
    tooltip: {
      enabled: true,
      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    },
    labels: {
      show: false,

      showDuplicates: false,

      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    }
  },

  yaxis: [
    {
      seriesName: 'Close Price',

      axisBorder: {
        show: false
      },

      axisTicks: {
        show: false
      },

      labels: {
        show: false,
        style: {}
      },

      opposite: false
    }
  ]
  };

  var chart = new ApexCharts(document.querySelector('#chart4'), options)
  chart.render()

  })
  .catch(error => {
    console.error('There was a problem fetching the data:', error);
  });

    // Fetching the JSON file using the fetch API
fetch('web/js/data.json')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json(); // Parse the JSON from the response
})
.then(data => {
  // Work with the fetched JSON data
  console.log(data); // This will log the content of your JSON file

  // Perform operations with the data (e.g., use it in your chart)
  // Example: Assuming your chart creation logic
  const transformedData = data.map(d => ({
    x: new Date(d.date),
    y: [d.open, d.open, d.close, d.close]
  }));

  // Your chart creation with the transformed data
var options = {
series: [
  {
    name: 'Close Price',
    data: transformedData
  }
],
chart: {
  stacked: false,
  height: 150,
  toolbar: {
    show: true
  },

  zoom: {
    type: 'x',

    enabled: true,

    autoScaleYaxis: true
  }
},

colors: ['#e01515', '#e01515'],

dataLabels: {
  enabled: false
},

grid: {
  yaxis: {
    // set to false to remove horizontal lines through graph

    lines: {
      show: false
    }
  }
},

legend: {
  show: true,

  position: 'top',

  horizontalAlign: 'left',

  labels: {}
},

stroke: {
  width: 3,

  curve: 'smooth',

  lineCap: 'butt',

  dashArray: [0, 3]
},

theme: {},

tooltip: {
  x: {
    formatter: function (val) {
      console.log(val)

      return dayjs(val).format('MMM DD, YYYY')
    }
  },

  shared: false,

  marker: false
},

xaxis: {
  type: 'datetime',

  tooltip: {
    enabled: false
  },

  axisTicks: {
    show: false
  },
  tooltip: {
    enabled: true,
    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  },
  labels: {
    show: false,

    showDuplicates: false,

    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  }
},

yaxis: [
  {
    seriesName: 'Close Price',

    axisBorder: {
      show: false
    },

    axisTicks: {
      show: false
    },

    labels: {
      show: false,
      style: {}
    },

    opposite: false
  }
]
};

var chart = new ApexCharts(document.querySelector('#chart5'), options)
chart.render()

})
.catch(error => {
  console.error('There was a problem fetching the data:', error);
});

  // Fetching the JSON file using the fetch API
  fetch('web/js/data.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Parse the JSON from the response
  })
  .then(data => {
    // Work with the fetched JSON data
    console.log(data); // This will log the content of your JSON file

    // Perform operations with the data (e.g., use it in your chart)
    // Example: Assuming your chart creation logic
    const transformedData = data.map(d => ({
      x: new Date(d.date),
      y: [d.open, d.open, d.close, d.close]
    }));

    // Your chart creation with the transformed data
  var options = {
  series: [
    {
      name: 'Close Price',
      data: transformedData
    }
  ],
  chart: {
    stacked: false,
    height: 150,
    toolbar: {
      show: true
    },

    zoom: {
      type: 'x',

      enabled: true,

      autoScaleYaxis: true
    }
  },

  colors: ['#e01515', '#e01515'],

  dataLabels: {
    enabled: false
  },

  grid: {
    yaxis: {
      // set to false to remove horizontal lines through graph

      lines: {
        show: false
      }
    }
  },

  legend: {
    show: true,

    position: 'top',

    horizontalAlign: 'left',

    labels: {}
  },

  stroke: {
    width: 3,

    curve: 'smooth',

    lineCap: 'butt',

    dashArray: [0, 3]
  },

  theme: {},

  tooltip: {
    x: {
      formatter: function (val) {
        console.log(val)

        return dayjs(val).format('MMM DD, YYYY')
      }
    },

    shared: false,

    marker: false
  },

  xaxis: {
    type: 'datetime',

    tooltip: {
      enabled: false
    },

    axisTicks: {
      show: false
    },
    tooltip: {
      enabled: true,
      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    },
    labels: {
      show: false,

      showDuplicates: false,

      formatter: function (val) {
        return dayjs(val).format('MMM YYYY')
      }
    }
  },

  yaxis: [
    {
      seriesName: 'Close Price',

      axisBorder: {
        show: false
      },

      axisTicks: {
        show: false
      },

      labels: {
        show: false,
        style: {}
      },

      opposite: false
    }
  ]
  };

  var chart = new ApexCharts(document.querySelector('#chart6'), options)
  chart.render()

  })
  .catch(error => {
    console.error('There was a problem fetching the data:', error);
  });

    // Fetching the JSON file using the fetch API
fetch('web/js/data.json')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json(); // Parse the JSON from the response
})
.then(data => {
  // Work with the fetched JSON data
  console.log(data); // This will log the content of your JSON file

  // Perform operations with the data (e.g., use it in your chart)
  // Example: Assuming your chart creation logic
  const transformedData = data.map(d => ({
    x: new Date(d.date),
    y: [d.open, d.open, d.close, d.close]
  }));

  // Your chart creation with the transformed data
var options = {
series: [
  {
    name: 'Close Price',
    data: transformedData
  }
],
chart: {
  stacked: false,
  height: 150,
  toolbar: {
    show: true
  },

  zoom: {
    type: 'x',

    enabled: true,

    autoScaleYaxis: true
  }
},

colors: ['#e01515', '#e01515'],

dataLabels: {
  enabled: false
},

grid: {
  yaxis: {
    // set to false to remove horizontal lines through graph

    lines: {
      show: false
    }
  }
},

legend: {
  show: true,

  position: 'top',

  horizontalAlign: 'left',

  labels: {}
},

stroke: {
  width: 3,

  curve: 'smooth',

  lineCap: 'butt',

  dashArray: [0, 3]
},

theme: {},

tooltip: {
  x: {
    formatter: function (val) {
      console.log(val)

      return dayjs(val).format('MMM DD, YYYY')
    }
  },

  shared: false,

  marker: false
},

xaxis: {
  type: 'datetime',

  tooltip: {
    enabled: false
  },

  axisTicks: {
    show: false
  },
  tooltip: {
    enabled: true,
    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  },
  labels: {
    show: false,

    showDuplicates: false,

    formatter: function (val) {
      return dayjs(val).format('MMM YYYY')
    }
  }
},

yaxis: [
  {
    seriesName: 'Close Price',

    axisBorder: {
      show: false
    },

    axisTicks: {
      show: false
    },

    labels: {
      show: false,
      style: {}
    },

    opposite: false
  }
]
};

var chart = new ApexCharts(document.querySelector('#chart7'), options)
chart.render()

})
.catch(error => {
  console.error('There was a problem fetching the data:', error);
});

    // Fetching the JSON file using the fetch API
    fetch('web/js/data.json')
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json(); // Parse the JSON from the response
    })
    .then(data => {
      // Work with the fetched JSON data
      console.log(data); // This will log the content of your JSON file

      // Perform operations with the data (e.g., use it in your chart)
      // Example: Assuming your chart creation logic
      const transformedData = data.map(d => ({
        x: new Date(d.date),
        y: [d.open, d.open, d.close, d.close]
      }));

      // Your chart creation with the transformed data
    var options = {
    series: [
      {
        name: 'Close Price',
        data: transformedData
      }
    ],
    chart: {
      stacked: false,
      height: 300,
      toolbar: {
        show: true
      },

      zoom: {
        type: 'x',

        enabled: true,

        autoScaleYaxis: true
      }
    },

    colors: ['#e01515', '#e01515'],

    dataLabels: {
      enabled: false
    },

    grid: {
      yaxis: {
        // set to false to remove horizontal lines through graph

        lines: {
          show: false
        }
      }
    },

    legend: {
      show: true,

      position: 'top',

      horizontalAlign: 'left',

      labels: {}
    },

    stroke: {
      width: 3,

      curve: 'smooth',

      lineCap: 'butt',

      dashArray: [0, 3]
    },

    theme: {},

    tooltip: {
      x: {
        formatter: function (val) {
          console.log(val)

          return dayjs(val).format('MMM DD, YYYY')
        }
      },

      shared: false,

      marker: false
    },

    xaxis: {
      type: 'datetime',

      tooltip: {
        enabled: false
      },

      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: true,
        formatter: function (val) {
          return dayjs(val).format('MMM YYYY')
        }
      },
      labels: {
        show: true,

        showDuplicates: false,

        formatter: function (val) {
          return dayjs(val).format('MMM YYYY')
        }
      }
    },

    yaxis: [
      {
        seriesName: 'Close Price',

        axisBorder: {
          show: true
        },

        axisTicks: {
          show: true
        },

        labels: {
          show: true,
          style: {}
        },

        opposite: false
      }
    ]
    };

    var chart = new ApexCharts(document.querySelector('#chart-detail'), options)
    chart.render()

    })
    .catch(error => {
      console.error('There was a problem fetching the data:', error);
    });
