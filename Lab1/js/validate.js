function validateForm(){
    var fname = document.forms["user_details"]["first_name"].value;
    var lname = document.forms["user_details"]["last_name"].value;
    var city = document.forms["user_details"]["city_name"].value;

    if(fname=="" || lname == "" || city== ""){
        $('#form-error').html(
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
            '<strong>All Fields are required!</strong> You should check in on some of those fields below.'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
              '<span aria-hidden="true">&times;</span>'+
            '</button>'+
          '</div>'
        )
        return false;
    }
    return true;
}