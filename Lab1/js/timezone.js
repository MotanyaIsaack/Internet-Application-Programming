$(document).ready(function(){
    // Returns the number of minutes ahead an behind the greenwhich meridian
    var offset = new Date().getTimezoneOffset();
    // Return the number of milliseconds since 1970/01/01
    var timestamp = new Date().getTime();
    
    // Convert our time to: Universal Coordinated time
    var utc_timestamp = timestamp + (60000 * offset);

    $('#time_zone_offset').val(offset);
    $('#utc_timestamp').val(utc_timestamp);

    console.log("offset: "+offset);
    console.log("utc_timestamp: "+utc_timestamp);
    
});