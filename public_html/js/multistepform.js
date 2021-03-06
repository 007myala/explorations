// Source - https://www.w3schools.com/howto/howto_js_form_steps.asp
var currentTab;

$(document).ready(function() {
    currentTab = 0; // Current tab is set to be the first tab(0)
    showTab(currentTab); // Display the current tab
});

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // .... and fix the Previous/Next buttons:
    if (n == 0) {
        // If at the initial stage of the form then hide the previous button
        document.getElementById("prevBtn").style.display = "none";
    } else { 
        document.getElementById("prevBtn").style.display = "inline";
    }

    if (n == (x.length - 1)) {
        // If at the end of the steps display a submit button
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        // If not show a next button
        document.getElementById("nextBtn").innerHTML = "Next";
    }

    // ... run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // If you have reached the end of the form...
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("selfcare").submit();
        return false;
    }
    // Otherwise, display the correct tab
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields

    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == ""){
            // add an "invalid" class to the field
            y[i].className += " invalid";
            // and set the current vlaid status to false:
            valid = false;
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
    // and adds the "active" class to the current step:
    x[n].className += " active";
}

function auth(){
    var config = {
        'client_id': '1035453567448-gb8kb90sdk1b6q22lpgpnvdfuml02en2.apps.googleusercontent.com',
        'redirect_uri': 'http://explorations.dev/initialize.php',
        'scope': [
            'https://www.googleapis.com/auth/userinfo.profile',
            'https://www.googleapis.com/auth/glass.timeline',
            'https://www.googleapis.com/auth/glass.location'
            ]
    };

    gapi.auth.authorize(config, function(){
        console.log('completed login');
        console.log(gapi.auth.getToken());
        });
}









































