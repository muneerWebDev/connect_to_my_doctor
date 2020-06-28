<?php include 'header.php'; ?>

<!-- Right side header -->
<div class="header">
    <h2>Invite A Patient From Clinic</h2>
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

                <div class="col-md-12">
                    <h4>Great! Go ahead and invite your patient to connect with you in Connect2MyDoctor.</h4>
                    <h5>Patient Details</h5>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag"><input placeholder="Your Name*" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Your Name*'" class="frm-con effect-3" type="text" oninvalid="this.setCustomValidity('Enter Your First Name')" oninput="this.setCustomValidity('')" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag"><input placeholder="Last Name" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Last Name'" class="frm-con effect-3" type="text" oninvalid="this.setCustomValidity('Enter Your Last Name')" oninput="this.setCustomValidity('')" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag"><input placeholder="Email" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Email'" class="frm-con effect-3" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" oninvalid="this.setCustomValidity('Enter Your Valid Email Address')" oninput="this.setCustomValidity('')" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="frm-con-tag">
                        <select name="refrence" aria-required="true" aria-invalid="false" class="frm-con effect-3" oninvalid="this.setCustomValidity('Select Your Country Code')" oninput="this.setCustomValidity('')" required>
                            <option value="">+91</option>
                            <option value="">+92</option>
                            <option value="">+93</option>
                            <option value="">+94</option>
                            <option value="">+95</option>
                            <option value="">+96</option>
                            <option value="">+97</option>
                            <option value="">+98</option>
                            <option value="">+99</option>
                        </select>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="frm-con-tag"><input placeholder="Mobile" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Mobile'" class="frm-con effect-3" type="number" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" oninvalid="this.setCustomValidity('Enter Your Mobile No. Max 10 Digits')" oninput="this.setCustomValidity('')" required>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="frm-con-tag">
                        <select name="refrence" aria-required="true" aria-invalid="false" class="frm-con effect-3" oninvalid="this.setCustomValidity('Select Your Doctor')" oninput="this.setCustomValidity('')" required>
                            <option value="">Choose Doctor*</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                            <option value="">Doctor Name</option>
                        </select>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5>Proposed Date & Time for the Appointment</h5>
                </div>

                <div class='col-md-5'>
                    <div class="frm-con-tag input-group date" data-date-format="dd MM yyyy" data-link-format="yyyy-mm-dd">
                        <input placeholder="Date" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Date'" class="frm-con effect-3 arrow-bg dateOnly" type="text" required>
                        <span class="focus-border"></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>

                <div class='col-md-2'>
                    <div class="frm-con-tag input-group date" data-date-format="hh:ii" data-link-format="hh:ii">
                        <input placeholder="Time" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Time'" class="frm-con effect-3 arrow-bg timeOnly" type="text" required>
                        <span class="focus-border"></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <p>This appointment will be blocked in the calender once the patient confirms the appointment and makes a payment.</p>
                    <p>* Mandatory fields<br>
                        * Kindly provide email id or mobile number for invitation</p>

                    <div class="btns-main">
                        <button class="btns" type="reset">Reset</button>
                        <button class="btns" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end invite patient content -->
</div>



<?php include 'footer.php'; ?>