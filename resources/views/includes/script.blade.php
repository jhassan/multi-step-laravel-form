
    <!-- jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.0.2.min.js"></script>
    <script src="intlTelInput/js/intlTelInput-jquery.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>    
    <script>
        $("#mobile-number").intlTelInput();
    </script>
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
                // $('#nextBtn').attr('type', 'submit');
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }
        function nextPrev(n) {
            setTimeout(() => {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("multiStep-form");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && validateForm() == false) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                
                // if you have reached the end of the form...
                if (currentTab >= (x.length - 1)) {
                    // ... the form gets submitted:
                    // Check Email
                    var email = document.getElementById("email");    
                    var email_status = checkEmail(email);  
                    if(!email_status){
                        // document.getElementById("jobForm").submit();
                        $.ajax( {
                            dataType: 'json',
                            url:"{{ route('jobs.store') }}",
                            method: 'POST',
                            data: {'data': $("#jobForm").serializeArray()},
                            success: function ( response ) {
                                if(response.status == 1){
                                    $('#show-message').addClass('d-none');
                                    $('#success-box').removeClass('d-none');
                                }
                            }
                        });
                    } else {
                        alert("Invalid Email");
                        return false;
                    }
                    
                }
                
                // Otherwise, display the correct tab:
                showTab(currentTab);

                // Hide Next and Prev button when form submit
                if(currentTab == 5){
                    document.getElementById("nextBtn").style.display = "none";
                    document.getElementById("prevBtn").style.display = "none";
                }
            }, 200);
        }
        function checkEmail(email){
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
            return pattern.test(email) ? true : false;
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