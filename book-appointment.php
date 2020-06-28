<?php include 'header.php'; ?>

<!-- Right side header -->
<div class="header">
    <h2>Book Appointment</h2>
    <a href="#" class="hidden-xs"><img src="images/user.jpg" class="header-img"></a>
    <a class="header-logout hidden-xs" href="#"><i class="fa fa-sign-out"></i><br>Logout</a>
</div>
<!-- End right side header -->

<div class="clearfix"></div>

<div class="main-content-frame">
    <!-- Invite patient content -->
    <div class="container-fluid invite-patient">
        <form>
            <div class="row">

                <div class="col-md-5">
                    <div class="frm-con-tag">
                        <label for="speciality">Choose Speciality</label>
                        <select name="refrence" id="speciality" aria-required="true" aria-invalid="false" class="frm-con effect-3" required>
                                    <option value="" selected disabled></option>
                            <option value="1">Cardiology</option>
                            <option value="1">Nephrology</option>
                            <option value="1">Dermatology</option>
                            <option value="1">Urlogy</option>
                            <option value="1">Gastroenterology</option>
                            <option value="1">Peadiatric</option>
                        </select>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag">
                        <label for="choose_doctor">Choose Doctor</label>
                        <select name="refrence" aria-required="true" id="choose_doctor" aria-invalid="false" class="frm-con effect-3" required>
                                    <option value="" selected disabled></option>
                            <option value="1">Anil Kumar</option>
                            <option value="1">MM Radha</option>
                            <option value="1">P Paul</option>
                            <option value="1">Alexander</option>
                        </select>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="mt-3 mb-4">
                        <div class="form-inline pl-3">
                            <h5 class="mb-0 mr-4">Appointment With : </h5>
                            <label for="mail" class="mr-4"><input type="radio" name="mode" id="mail" class="mr-2"> E-Mail</label>
                            <label for="mobile"><input type="radio" id="mobile" name="mode" class="mr-2"> Mobile</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag">
                        <label for="patient_Email">Patient E-Mail</label>
                        <input id="patient_Email" class="frm-con effect-3" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="frm-con-tag">
                        <label for="patient_name">Patient Name</label>
                        <input id="patient_name" class="frm-con effect-3" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag">
                        <label for="doctors_time_zone">Doctor's Time Zone</label>
                        <select name="refrence" id="doctors_time_zone" aria-required="true" aria-invalid="false" class="frm-con effect-3" required>
                                    <option value="" selected disabled></option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                            <option value="1">Doctor Name</option>
                        </select>
                        <span class="focus-border"></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="frm-con-tag ">
                                <label for="appntmnt_date">Appointment Date</label>
                                <select name="refrence" id="appntmnt_date" aria-required="true" aria-invalid="false" class="frm-con effect-3" required>
                                    <option value="" selected disabled></option>
                                    <option value="1">24/5/20</option>
                                    <option value="1">25/5/20</option>
                                    <option value="1">26/5/20</option>
                                </select>
                                <span class="focus-border"></span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="frm-con-tag">
                                <label for="appntmnt_time">Appointment Time</label>
                                <select id="appntmnt_time" name="refrence" aria-required="true" aria-invalid="false" class="frm-con effect-3" required>
                                    <option value="" selected disabled></option>
                                    <option value="1">22:10</option>
                                    <option value="1">22:11</option>
                                    <option value="1">22:12</option>
                                    <option value="1">22:13</option>
                                    <option value="1">22:14</option>
                                </select>
                                <span class="focus-border"></span>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-10 text-right">


                    <div class="btns-main">
                        <button class="btns" type="reset">Reset</button>
                        <button class="btns mr-0" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end invite patient content -->
</div>



<?php include 'footer.php'; ?>