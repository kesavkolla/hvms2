$(document).ready(function(){
  $("#JobAddForm").validate( {
      rules: {
          "data[Profile][firstname]"  : "required",
          "data[Profile][lastname]"  : "required",
          "data[Profile][phone]"  : "required",
          "data[Profile][title]"  : "required"
      }
  });
        
  $( "#current-company" ).autocomplete({
          source: "/hvms/hospitals/hospNames/",
          minLength: 2
  });
});

var hvms = hvms || {};

hvms.viewProfile = function () {
   $.post("view",
    null,
    function (data) {
        if (data != "") {
            $("#profile-view-header").show();
            $("#profile-preview").html(data);
        }
    }
   );
}