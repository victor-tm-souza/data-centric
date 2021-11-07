<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>PECI</title>

    <link rel="stylesheet" type="text/css" href="fullPage_src/fullpage01.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body>

    <div id="fullpage">
        <div class="section " id="section0">
            <h1><b>Data-Centric</b> Machine</br>
                Learning ops for</br>
                Autonomous Driving
            </h1>
        </div>
        <div class="section" id="section1">
            <div id="left1">
                What is Machine Learning?
            </div>
            <div id="right1">
                Machine Learning is the automatic learning process of machines.
                </br>
                To obtain a Machine Learning model it is mandatory for us to pocess 3 key resources:
                </br></br></br>
                <b>MODEL + DATASET + METRICS</b>
            </div>
        </div>
        <div class="section" id="section2">
            <div id="left2">
                <p style="font-size:2em;"><b>Strategy</b></p></br></br>
                For many years, researchers have been using a model-centric strategy
                when approaching machine learning, this is, they have been focusing on building models
                (algorithms).</br>The better the model, the better the result.</br></br>
                However, now, this models already exist, they are accurate and they are open-source.
                </br></br>
                <p style="color: rgb(0, 155, 153);">So, How to improve those models' accuracy?</p>
            </div>
            <div id="right2">
            </div>
        </div>
        <div class="section" id="section2">
            <div id="left2">
                <p style="font-size:2em;">
                    <b>Data-Centric!</b>
                </p></br></br>
                With this strategy, we choose an already existing, good, model and then focus on enhancing the quality
                of the dataset to be used for training the model.

            </div>
            <div id="right2">
            </div>
        </div>
        <div class="section" id="section4">
            <div id="left4">
                <p style="font-size:2em;">
                    <b>Tools</b>
                </p></br>
                <p>Sensor: <a href="https://en.wikipedia.org/wiki/Lidar">LiDAR</a></p>
                <p>Data: <a href="https://en.wikipedia.org/wiki/Point_cloud">Point Clouds</a></p>
                <p>Model: <a href="https://arxiv.org/abs/1812.05784">Point Pillars</a></p>
                <p>Metrics: <a href="https://jonathan-hui.medium.com/map-mean-average-precision-for-object-detection-45c121a31173">
                        IoU, Average Precision</a>
                </p>
            </div>
            <div id="right4">
                <img src="img/point_cloud.jpg" style="width: 100%;"></br>
                <p>(Pointcloud taken from a LIDAR)</p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="fullPage_src/fullpage.js"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            verticalCentered: false,
            autoScrolling: true,
            scrollHorizontally: true,
            navigation: true,
            navigationTooltips: ['Home', 'Intro', 'Strategy', 'Data-Centric', 'Tools'],
            showActiveTooltip: true,
            scrollingSpeed: 1000,
            css3: false
        });
    </script>
</body>

</html>