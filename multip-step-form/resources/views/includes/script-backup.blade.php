<!-- jquery-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap-5.0.2.min.js"></script>
{{-- <script src="intlTelInput/js/intlTelInput-jquery.min.js"></script> --}}
<!-- Plugin -->
<script src="assets/js/plugin.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{-- <script>
    $("#mobile-number").intlTelInput();
</script> --}}
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("multiStep-form");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 2)) { // x.length - 1
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }
    function nextPrev(n) {
        // This function will figure out which tab to display
        // var x = document.getElementsByClassName("multiStep-form");
        // // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && validateForm() == false) return false;
        // // Hide the current tab:
        // x[currentTab].style.display = "none";
        // // Increase or decrease the current tab by 1:
        // currentTab = currentTab + n;
        
        // submitForm(currentTab);
        // return false;

        // // Hide Next and Prev button when form submit
        // if(currentTab == 5){
        //     document.getElementById("nextBtn").style.display = "none";
        //     document.getElementById("prevBtn").style.display = "none";
        // }
    }

    function submitForm(currentTab) {
        let myObj = {};
        let getData = $('#form-step-'+currentTab).find(":input");

        $.each(getData, function (i, result) {
            if(result.name !== ''){
                myObj[result.name] = result.value;
                // if(result.name == 'phone_no'){
                //     $('#phone_no_code').val($('#phone_no').siblings()[0].children[0].childNodes[1].innerHTML);
                // }
            }
        });
        var step = currentTab;
        $.ajax( {
            dataType: 'json',
            url:"{{ route('jobs.store') }}",
            method: 'POST',
            data: {'step': step, 'data': myObj},
            success: function ( response ) {
                if(response.status == 1){
                    // showTab(currentTab);
                }
            },
            error: function (response) {
                if(response.status == 422){
                    $.each(response.responseJSON.errors, function (i, result) {
                        $('#error_'+i).removeClass('d-none').addClass('text-danger').html(result);
                    });
                }
            }
        });
    }

    function checkEmail(email){
        if(email){
            return true;
        } else {
            return false;
        }

    }
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("multiStep-form");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }
        z = x[currentTab].getElementsByTagName("select");
        // A loop that checks every input field in the current tab:
        if(z.length > 0){
            for (i = 0; i < z.length; i++) {
                // If a field is empty...
                if (z[i].value == "") {
                // add an "invalid" class to the field:
                z[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
                }
            }
        }
        
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }
    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<!-- Main js-->
<script src="assets/js/mian.js"></script>