$(document).ready(function() {
    
    $("#username").change ( function() {
                            var email = $("#username").val();
                            if ($("#register-type").val() == 'hosp') {
                                $.post("checkEmail",
                                       { "email": email },
                                       function (data) {
                                        if (data != 'null') {
                                            var hosp = $.parseJSON(data);
                                            var hospName = hosp.name;
                                            var hospId = hosp.id;
                                            var hospitalInfo = "You work at "
                                            hospitalInfo += hospName + ".";
                                            hospitalInfo += " If this is not correct, please use another email.";
                                            $("#userinfo").removeClass('error');
                                            $("#hospital_id").val(hospId);
                                           
                                        }
                                        else {
                                            hospitalInfo = 'Please use your hospital-affiliated work email to register.';
                                            $("#userinfo").addClass('error');
                                        }
                                            $("#userinfo").html(hospitalInfo);
                                       }
                                      );
                            }

                            });
    
    $("#register-type").change ( function () {
        $("#username").val('');

        if ($("#register-type").val() == 'hosp') {
            $("#userinfo").html("Please use your work email to register");
            $("#userinfo").show();
        }
        else {
            $("#userinfo").html('');
            $("#userinfo").removeClass('error');
            $("#userinfo").hide();
            $("#hospital_id").val('');
        }
    });
});