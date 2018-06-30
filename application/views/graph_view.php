
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- including ECharts file -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/main.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/ie8.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css">
     <script type = "text/javascript" src="<?php echo base_url();?>assets/js/echarts.js"></script>
</head>
<body>
    <div align="center" >
                            <header>
                                <p>Are You Agile?</p>
                            </header>
                        </div>
    <!-- prepare a DOM container with width and height -->
    <div id="main" style="width: 2000px;height:900px; padding-top: 60px;padding-left: 1px;"></div>
    <script type="text/javascript">
        // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('main'));

        // specify chart configuration item and data
        var option = option = {

    tooltip: {},
    legend: {
        data: ['Small Releases', 'Planning Game', '实际开销（Retrospective）','实际开销（One site costumer）','实际开销（Stand Up Meeting）','实际开销（Test First）','实际开销（Open Space）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）','实际开销（Planning Game）']
    },
    radar: {
        // shape: 'circle',
        name: {
            textStyle: {
                color: '#fff',
                backgroundColor: '#999',
                borderRadius: 3,
                padding: [3, 5]
           }
        },
        indicator: [
           { name: '销售（Creativity）', max: 6500},
           { name: '管理（Reaction）', max: 16000},
           { name: '信息技术（Proaction）', max: 30000},
           { name: '客服（Learning）', max: 38000},
           { name: '研发（Cost）', max: 52000},
           { name: '市场（Quality）', max: 25000},
           { name: '市场（Simplicity）', max: 25000}
        ]
    },
    series: [{
        name: '预算 vs 开销（Budget vs spending）',
        type: 'radar',
        // areaStyle: {normal: {}},
        data : [
            {
                value : [4300, 10000, 28000, 35000, 50000, 19000],
                name : 'Small Releases'
            },
             {
                value : [5000, 14000, 28000, 31000, 42000, 21000],
                name : 'Planning Game'
            }
        ]
    }]
};

        // use configuration item and data specified to show chart
        myChart.setOption(option);
    </script>
</body>
</html>