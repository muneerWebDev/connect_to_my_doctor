<?php include 'header.php'; ?>

<!-- Right side header -->
<div class="header">
    <h2>Booked Appointments</h2>
    <a href="#" class="hidden-xs"><img src="images/user.jpg" class="header-img"></a>
    <a class="header-logout hidden-xs" href="#"><i class="fa fa-sign-out"></i><br>Logout</a>
</div>
<!-- End right side header -->

<div class="clearfix"></div>

<div class="main-content-frame">
    <!-- Requested Appointments -->
    <div class="container-fluid ">
        <form>
            <div class="row">

                <div class="col-md-12">

                    <div class="header-pager-panel mb-3">


                        <div class="date-wrap ml-auto">

                            <form class="form-inline date-range">
                                <label for="" class="mr-3">Date:</label>
                                <div class='input-group date mr-5'>
                                    <input type='text' class="form-control startDate" placeholder="From"/>
                                </div>
                                <div class='input-group'>
                                    <input type='text' class="form-control endDate" placeholder="To"/>
                                </div>
                            </form>

                        </div>

                    </div>

                    <div class="header-pager-panel">

                        <div class="download-btn">
                            <button class="btn btn-trans exportToExcel">Download As Excel</button>
                        </div>

                        <div class="search-wrap">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control" type="text" placeholder="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-wrapper">
                        <div class="table-responsive">
                            <table class="table table2excel table2excel_with_colors">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="wrap">ID</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Doctor Name</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Patient Name</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Date & Time</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Fees</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Payment ID</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Appt Status</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Doctor Status &<br>Screen Status</div>
                                        </th>
                                        <th>
                                            <div class="wrap">Patient Status &<br>Screen Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Radhu</td>
                                        <td>Jahar</td>
                                        <td>24/02/20</td>
                                        <td>2500</td>
                                        <td>56 <td>
                                        <td>Active</td>
                                        <td>On</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="footer-pager-panel">
                        <span class="entries-count">
                            Showing 0 to 0 of 0 entries
                        </span>
                        <div class="nav-btns">
                            <a href="" class="btn btn-trans">Previous</a>
                            <a href="" class="btn btn-trans">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end invite patient content -->
</div>



<?php include 'footer.php'; ?>