<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

<link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo|Raleway' rel='stylesheet' type='text/css'>

<!-- My Chart script -->
<script src="js/chart.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- My Styles -->
<link rel="stylesheet" href="css/styles.css">

<body>
<div class="container-fluid" id="top-container">
    <div class="row">
        <article class="col-sm-6 top-blocks"><p class="price">$ 7,678</p> <p class="title">weekly spending</p></article>
        <article class="col-sm-6 top-blocks"><p class="price">$ 40,765</p><p class="title">month budget</p></article>
    </div>
        <div style="clear: both"></div>
    <section class="chart-container">
        <div class="row chart-titles">
            <div class="col-xs-6 title-social"><p class="bullet bullet-light"></p>Social Media</div> 
            <div class="col-xs-6 title-adwords"><p class="bullet bullet-dark"></p>Google Adwords</div>
        </div>
        <div id="my-chart" class="ct-chart ct-perfect-fourth">
            <p class="dollar-sign">$</p>
        </div>
    </section>
</div>

    <div class="tabbable">
        <ul class="nav nav-tabs centered">
            <li><a href="#today" data-toggle="tab">Today</a></li>
            <li class="active"><a href="#last-week" data-toggle="tab">Last Week</a></li>
            <li><a href="#last-month" data-toggle="tab">Last Month</a></li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane" id="today">
                <h4>Today</h4>
                <p>....</p>
            </div>
            
            <div class="tab-pane active" id="last-week">
                <div class="row">
                    <div class="title">
                        <p class="bullet bullet-light"></p>1 second ago 
                    </div>
                    <div class="price">
                        $ 0.67
                    </div>
                </div>
                <div class="row">
                    <div class="title">
                        <p class="bullet bullet-dark"></p>
                        2 minutes ago 
                    </div>
                    <div class="price">$ 1.06</div>
                </div>
            </div>
            
            <div class="tab-pane" id="last-month">
                <h4>Last Month Panel</h4>
                <p>....</p>
            </div>
        </div><!-- /.tab-content -->
    </div><!-- /.tabbable -->


<div class="row bottom">
    <div class="col-xs-12">
        <div class="col-xs-2 col-xs-15 icons">
            <span class="glyphicon glyphicon-list-alt"></span><p>Platforms</p>
        </div>
        <div class="col-xs-2 col-xs-15 icons">
            <span class="glyphicon glyphicon-th-list"></span><p>Reports</p>
        </div>
        <div class="col-xs-2 col-xs-15 icons active">
            <span class="glyphicon glyphicon-calendar"></span><p>Campaigns</p>
        </div>
        <div class="col-xs-2 col-xs-15 icons">
            <span class="glyphicon glyphicon-globe"></span><p>Locations</p>
        </div>
        <div class="col-xs-2 col-xs-15 icons">
            <span class="glyphicon glyphicon-user"></span><p>My Profile</p>
        </div>
    </div>
</div>

</body>
</html>
