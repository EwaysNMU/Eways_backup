
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">E-WAYS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url() ?>/admin_home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo site_url() ?>/admin_charts">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo site_url() ?>/admin_tables">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
          <a class="nav-link" href="<?php echo site_url() ?>/admin_events">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="nav-link-text">Events</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
          <a class="nav-link" href="<?php echo site_url() ?>/admin_resources">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span class="nav-link-text">Resources</span>
          </a>
        </li>
      </ul>
     
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Charts</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Admin Charts</h1>


          <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart </div>
        <div class="card-body">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Topics', 'Completed'],
          ['Goal Setting',  3],
          ['Time Management',  2],
          ['Stress Management',  1],
          ['Motivation',  3],
          ['Study Strategies',  2],
          ['Tips for  Exams',  4]
        ]);

        var options = {
          title: 'Topics Completed',
          hAxis: {title: 'Topics',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 100%; height: 100%;"></div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart </div>
            <div class="card-body">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Goal Setting", 3, "#b87333"],
        ["Time Management", 2, "silver"],
        ["Stress Management", 1, "gold"],
        ["Motivation", 3, "b87333"],
        ["Study Strategies", 2, "silver"],
        ["Tips for  Exams", 4, "color: gold"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Topics Completed",
        //width: 100%,
        //height: 100%,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 100%; height: 100%;"></div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart </div>
            <div class="card-body">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                  google.charts.load('current', {'packages':['corechart']});
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                      ['Topic', 'Number Completed'],

                      
                      ['Goal Setting',     3],
           

                      
                      ['Time Management',      2],
                      

              
                      ['Stress Management',  1],
                      

                     
                      ['Motivation', 3],
              

                     
                      ['Study Strategies',    2],
     

                     
                      ['Tips for Exams',    4]
        
                      
                    ]);

                    var options = {
                      title: 'Topics Completed'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                  }
              </script>

    <div id="piechart" style="width: 100%; height: 100%;"></div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
      </div>


        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
