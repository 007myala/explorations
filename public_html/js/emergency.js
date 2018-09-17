var x = document.getElementById("emergency");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Lat: " + position.coords.latitude + "<br>Long: " + position.coords.longitude;
}
