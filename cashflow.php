<?php
    include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Baheza - Reports</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.15/css/all.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

    <style type="text/css">
        .menu {
            display: flex;
            width: 120%;
            border-bottom: 1px solid gray;
            box-shadow: gray 10px;
        }
        .menu li {
            background: white;
            margin-right: 5px;
            padding: 5px;
            border-radius: 0 10px 0 0;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }

        .active1 {
            color: var(--main-color);
            font-weight: bolder;
        }

        .btn {
            width: 100px;
            background: var(--main-color);
            color: white;
            justify-content: center;
        }

        .cshtle {
            display: flex;
            width: 120%;
            margin-top: 20px;
            border-bottom: 3px solid var(--main-color);
            margin-bottom: 20px;
        }

        .cshtle .title {
            margin-right: 32px;
            width: 100%;
            border-right: 1px solid black;
        }

        .cshtle span {
            color: var(--main-color);
            font-weight: bolder;
            font-size: 18px;
            text-align: center;
            justify-content: center;
        }

        h4 {
            text-align: center;
            font-size: 15px;
            justify-content: center;
        }

        a {
            color: black;
            text-decoration: none;
        }
        .filter {
            display: flex;
            width: 190%;
        }

        .acc-filter {
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: flex-end;
            align-items: center;
        }
    </style>

    <input type="checkbox" id="nav-toggle" name="">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><span  class="las la-home"></span><span>BAHEZA SYSTEM</span></h3>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="customers.php"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="invoices.php"><span class="las la-clipboard-list"></span><span>Invoices</span></a>
                </li>
                <li>
                    <a href="debt.php"><span class="las la-shopping-bag"></span><span>Debts</span></a>
                </li>
                <li>
                    <a href="receivers.php"><span class="las la-receipt"></span><span>Receivers</span></a>
                </li>
                <li>
                    <a href="#" class="active"><span class="las la-user-circle"></span><span>Finance</span></a>
                </li>
                <li>
                    <a href="report.php"><span class="las la-clipboard-list"></span><span>Report</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" name="" placeholder="Search here" />
                </div>
                <div class="user-wrapper">
                    <img src="img/Tadhim.jpg" width="30px" height="30px" alt="">
                    <div>
                        <h4>Provy</h4>
                        <small>Super admin</small>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <div class="recent-grid">
                <div class="projects">
                        
                <!--<img src="page.jpg" style="height:350px; margin-left: 100px;">-->

                    <ul class="menu">
                        <li><a href="finance.php">My Accounts</a></li>
                        <li><a href="expenses.php">Expenses</a></li>
                        <li><a href="profitloss.php">Profit & Loss</a></li>
                        <li class="active1">Cash Flow</li>
                        <li>Insights</li>
                        <li>Reports</li>
                    </ul>
                    <div class="contain">
                        <div class="filter">
                            <div class="date-filter">
                                <input type="month" name="date">
                                <input type="submit" value="Filter" class="btn">
                            </div>
                            <div class="acc-filter">
                                <select>
                                    <option>All Accounts</option>
                                    <option>One Account</option>
                                </select>
                                <select>
                                    <?php
                                        $query = mysqli_query($con,"select * from accounts");
                                        while ($row=mysqli_fetch_array($query)) {
                                            ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['acc_name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="cshtle">
                            <div class="title">
                                <i class="far fa-coins"></i>
                                <span>Starting Balance</span>
                                <h4>27000</h4>
                            </div>
                            <div class="title">
                                <i class="far fa-coins"></i>
                                <span>Money In</span>
                                <h4>27000</h4>
                            </div>
                            <div class="title">
                                <i class="fas fa-layer-group"></i>
                                <span>Money Out</span>
                                <h4>27000</h4>
                            </div>
                            <div class="title">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span>Internal Transfer</span>
                                <h4>27000</h4>
                            </div>
                            <div class="title">
                                <i class="las la-receipt"></i>
                                <span>Ending Balance</span>
                                <h4>27000</h4>
                            </div>
                        </div>

                        <h5 style="text-decoration: underline;">MONTH-END BALANCE</h5>
                        <!-- MONTH BALANCE CHART -->
                        <script type="text/javascript">
          google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },
        width: 900,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
    </script>

                        <!--  end of chart -->

                        <h5 style="text-decoration: underline;">CASH IN & OUT</h5>
                        <!-- CASH IN & OUT CHART -->


                        <!--  end of chart -->

                        
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>