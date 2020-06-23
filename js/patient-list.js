$(document).ready(function () {
    fetchPatientList();
});


//fetch data from server 
async function fetchPatientList() {
    var doctors;

    await $.getJSON('patientslist.json', function (data) {
        doctors = data;
    });
    populatePatients(doctors);
}

function populatePatients(doctors) {
    jQuery(".patients-list .row").empty();
    for (var i = 0; i < doctors.length; i++) {
        var appendRaw = '<div class="col-xl-3 col-md-6 profile_template_inList"><div class="wrap"><div class="image">'
        appendRaw += '<img src="' + doctors[i]['image_path'] + '" alt="" class="img-fluid"></div><div class="text">'
        appendRaw += '<p class="name">' + doctors[i]['name'] + '</p>'

        appendRaw += '<span class="admission-detail">Admitted on: ' + doctors[i]['date_and_time'] + '</span> </div>   </div>   </div>';

        jQuery(".patients-list .row").append(appendRaw);
    }
}