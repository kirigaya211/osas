
<div>
   
    <div id="chart">
      
    </div>
    
      
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
        <script>
          
    const options = {
      colors: ["#1A56DB", "#FDBA8C"],
      series: [
        {
          name: "Pending",
          color: "#FEF9C3",
          data: [
            { x: "June", y: {{$pending['June']}} },
            { x: "July", y: {{$pending['July']}} },
            { x: "August", y: {{$pending['August']}} },
            { x: "September", y: {{$pending['September']}} },
            { x: "October", y: {{$pending['October']}} },
            { x: "November", y: {{$pending['November']}} },
            { x: "December", y: {{$pending['December']}} },
          ],
        },
        {
          name: "Disapproved",
          color: "#EF4444",
          data: [
            { x: "June", y: {{$denied['June']}} },
            { x: "July", y: {{$denied['July']}} },
            { x: "August", y: {{$denied['August']}} },
            { x: "September", y: {{$denied['September']}} },
            { x: "October", y: {{$denied['October']}} },
            { x: "November", y: {{$denied['November']}} },
            { x: "December", y: {{$denied['December']}} },
          ],
        },
        {
          name: "Approved",
          color: "#22C55E",
          data: [
            { x: "June", y: {{$accepted['June']}} },
            { x: "July", y: {{$accepted['July']}} },
            { x: "August", y: {{$accepted['August']}} },
            { x: "September", y: {{$accepted['September']}} },
            { x: "October", y: {{$accepted['October']}} },
            { x: "November", y: {{$accepted['November']}} },
            { x: "December", y: {{$accepted['December']}} },
          ],
        },
      ],
      chart: {
        type: "bar",
        height: "420px",
        fontFamily: "Inter, sans-serif",
        toolbar: {
          show: false,
        },
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: "90%",
          borderRadiusApplication: "end",
          borderRadius: 5,
          distributed:false
        },
      },
      tooltip: {
        shared: true,
        intersect: false,
        style: {
          fontFamily: "Inter, sans-serif",
        },
      },
      states: {
        hover: {
          filter: {
            type: "darken",
            value: 1,
          },
        },
      },
      stroke: {
        show: true,
        width: 0,
        colors: ["transparent"],
      },
      grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
          left: 2,
          right: 2,
          top: -14
        },
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        show: false,
      },
      xaxis: {
        floating: false,
        labels: {
          show: true,
          style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
          }
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: true,
      },
      grid:{
        show: true,
        borderColor:'#a9a9a9'
      },
      fill: {
        opacity: 1,
      },
    }
    
    if(document.getElementById("chart") && typeof ApexCharts !== 'undefined') {
      window.onload = function() {
        const chart = new ApexCharts(document.getElementById("chart"), options);
        chart.render();
      };
    }
    
        </script>
    
    </div>
