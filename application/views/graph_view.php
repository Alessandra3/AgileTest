
<!DOCTYPE html>
<html style="height: 100%">
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- including ECharts file -->   
</head>
<body style="height: 100%; margin: 0">

 <div id="container" style="height: 100%"></div>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
 

           <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;
// Schema:
// date,AQIindex,PM2.5,PM10,CO,NO2,SO2
var SR = [
    [1000, 1000, 1000, 1000, 500, 500,100]
];

var PG = [
    [100, 100, 1000, 100, 500, 100,1000]
    
];

var RM = [
    [500, 500, 1000, 1000, 500, 1000, 500]
    
];

var CI = [
    [1000, 1000, 100, 100, 1000, 1000, 500]
    
];

var CO = [
    [100, 100, 100, 1000, 100, 100, 500]
    
];

var OS = [
    [1000, 1000, 1000, 100, 100, 500, 1000]
    
];

var DM = [
    [1000, 1000, 100, 1000, 100, 100, 1000]
    
];


var lineStyle = {
    normal: {
        width: 1,
        opacity: 0.5
    }
};

option = {
    backgroundColor: '#161627',
    title: {
        text: 'Are You Agile?',
        left: 'center',
        textStyle: {
            color: '#eee'
        }
    },
    legend: {
        bottom: 5,
        data: ['Small Releases','Planning Game','Retrospective Meeting','Continuous Integration','Collective Ownership','Open Space','Stand Up Meeting'],
        itemGap: 20,
        textStyle: {
            color: '#fff',
            fontSize: 18
        },
        selectedMode: 'single'
    },
    // visualMap: {
    //     show: true,
    //     min: 0,
    //     max: 20,
    //     dimension: 6,
    //     inRange: {
    //         colorLightness: [0.5, 0.8]
    //     }
    // },
    radar: {
        indicator: [
           { name: 'Creativity', max: 1000},
           { name: 'Proaction', max: 1000},
           { name: 'Reaction', max: 1000},
           { name: 'Learning', max: 1000},
           { name: 'Cost', max: 1000},
           { name: 'Quality', max: 1000},
           { name: 'Simplicity', max: 1000}
        ],
        shape: 'circle',
        splitNumber: 3,
        name: {
            textStyle: {
                color: 'rgb(238, 197, 102)'
            }
        },
        splitLine: {
            lineStyle: {
                color: [
                    'rgba(238, 197, 102, 0.1)', 'rgba(238, 197, 102, 0.2)',
                    'rgba(238, 197, 102, 0.4)', 'rgba(238, 197, 102, 0.6)',
                    'rgba(238, 197, 102, 0.8)', 'rgba(238, 197, 102, 1)'
                ].reverse()
            }
        },
        splitArea: {
            show: false
        },
        axisLine: {
            lineStyle: {
                color: 'rgba(238, 197, 102, 0.5)'
            }
        }
    },
    series: [
        {
            name: 'Small Releases',
            type: 'radar',
            lineStyle: lineStyle,
            data: SR,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#FF0000'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.1
                }
            }
        },
        {
            name: 'Planning Game',
            type: 'radar',
            lineStyle: lineStyle,
            data: PG,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#7FFF00'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.05
                }
            }
        },
        {
            name: 'Retrospective Meeting',
            type: 'radar',
            lineStyle: lineStyle,
            data: RM,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#87CEFA'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.05
                }
            }
        },
        {
            name: 'Collective Ownership',
            type: 'radar',
            lineStyle: lineStyle,
            data: CO,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#FFA500'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.05
                }
            }
        },
        {
            name: 'Open Space',
            type: 'radar',
            lineStyle: lineStyle,
            data: OS,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#40E0D0'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.05
                }
            }
        },
         {
            name: 'Stand Up Meeting',
            type: 'radar',
            lineStyle: lineStyle,
            data: DM,
            symbol: 'none',
            itemStyle: {
                normal: {
                    color: '#FFFF00'
                }
            },
            areaStyle: {
                normal: {
                    opacity: 0.05
                }
            }
        },
    ]
};
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
</body>
</html>