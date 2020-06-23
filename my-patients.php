<?php include 'header.php'; ?>

<!-- Right side header -->
<div class="header">
    <h2>Requested Appointments</h2>
    <a href="#" class="hidden-xs"><img src="images/user.jpg" class="header-img"></a>
    <a class="header-logout hidden-xs" href="#"><i class="fa fa-sign-out"></i><br>Logout</a>
</div>
<!-- End right side header -->

<div class="clearfix"></div>

<div class="main-content-frame">
    <!-- Patients List -->
    <div class="container-fluid my-patients">
        <form>
            <div class="row">

                <div class="col-md-12">
                    <div class="header-pager-panel pb-5">


                        <div class="search-wrap">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control" type="text" placeholder="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="patients-list">
                        <div class="row">

                            <!-- <div class="col-xl-3 col-md-6 profile_template_inList">
                                <div class="wrap">
                                    <div class="image">
                                        <img src="images/profile.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <p class="name">Ramesh Krishna</p>
                                        <span class="admission-detail">Admitted on: 27-April-2020, 07:44 AM</span>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end invite patient content -->
</div>


<?php include 'footer.php'; ?>

<script src="js/patient-list.js"></script>