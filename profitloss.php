<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Baheza - Reports</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

        table {
            width: 120%;
            margin-top: 20px;
        }

        .bodly {
            background: white;
            font-weight: bolder;
            border-bottom: 1px solid black;
            border-top: 1px solid black;
        }

        thead {
            background: var(--main-color);
            color: white;
            font-weight: bolder;
        }

        .gross {
            background: var(--main-color);
            font-weight: bolder;
            border-top: 3px solid black;
            border-bottom: 3px solid black;
        }

        .gross td {
            color: white;
        }

        .btn {
            width: 100px;
            background: var(--main-color);
            color: white;
            justify-content: center;
        }

        a {
            color: black;
            text-decoration: none;
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
                        <li class="active1">Profit & Loss</li>
                        <li><a href="cashflow.php">Cash Flow</a></li>
                        <li>Insights</li>
                        <li>Reports</li>
                    </ul>
                    <div class="contain">
                        <input type="month" name="date">
                        <input type="submit" value="Filter" class="btn">
                        <table>
                            <thead class="tableh">
                                <tr>
                                    <th>     </th>
                                    <th>January</th>
                                    <th>February</th>
                                    <th>March</th>
                                    <th>April</th>
                                    <th>May</th>
                                    <th>June</th>
                                    <!--<th>July <?php echo date("Y"); ?></th>
                                    <th>Aug <?php echo date("Y"); ?></th>
                                    <th>Sept <?php echo date("Y"); ?></th>
                                    <th>Oct <?php echo date("Y"); ?></th>
                                    <th>Nov <?php echo date("Y"); ?></th>
                                    <th>Dec <?php echo date("Y"); ?></th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <div class="income">
                                <tr class="bodly">
                                    <td>Income</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                <tr>
                                    <td>Service Revenue</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                </div>
                                <div class="sales">
                                <tr class="bodly">
                                    <td>Cost of Sales</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                <tr>
                                    <td>Raw Material</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                            </div>
                                <tr class="gross">
                                    <td>Gross Profit</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                <div class="expense">
                                <tr class="bodly">
                                    <td>Operating Expenses</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                <tr>
                                    <td>Raw Material</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                            </div>
                            <div class="profit">
                                <tr class="bodly">
                                    <td>Operating Profit</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                <tr>
                                    <td>Raw Material</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                            </div>
                            <tr class="gross">
                                    <td>Net Profit</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <!--<td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>
                                    <td>1500</td>-->
                                </tr>
                                </div>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
</main>
</div>
</body>
</html>