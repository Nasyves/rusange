<?php
    include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>RUSANGE - Expesens</title>
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

        .btn-primary {
            background: var(--main-color);
        }

        a {
            color: black;
            text-decoration: none;
        }
    </style>

    <input type="checkbox" id="nav-toggle" name="">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><span  class="las la-home"></span><span>RUSANGE SYSTEM</span></h2>
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
                        <li class="active1">Expenses</li>
                        <li><a href="profitloss.php">Profit & Loss</a></li>
                        <li><a href="cashflow.php">Cash Flow</a></li>
                        <li>Insights</li>
                        <li>Reports</li>
                    </ul>
                    <div class="contain">
                        <!-- Modal -->
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <select class="form-control">
                                <option>Type of Expenses</option>
                                <option>Instant Expenses</option>
                                <option>Instant Sale</option>
                                <option>Bill</option>
                                <option>Bulk Paymt from Customer</option>
                                <option>Bulk Paymt from Supplier</option>
                                <option>Refund to Customer</option>
                                <option>Refund to Supplier</option>
                                <option>Issue Customer Credit</option>
                                <option>Apply Customer Credit</option>
                                <option>Receive Supplier Credit</option>
                                <option>Use Supplier Credit</option>
                                <option>Transfer From</option>
                                <option>Transfer To</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="number" class="form-control" id="amt" placeholder="Enter Amount">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select name="category" class="form-control">
                                <option>Select Expense Category</option>
                                <option>Income</option>
                                <option>Cost of Sales</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub-Category</label>
                            <select class="form-control">
                                <option>Choose the sub-category</option>
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Account</label>
                            <select class="form-control">
                                <option>Choose Account</option>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Save</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>