  $(document).ready(function(){
    $("#JobAddForm").validate( {
        rules: {
            "data[Profile][firstname]"  : "required",
            "data[Profile][lastname]"  : "required",
            "data[Profile][phone]"  : "required",
            "data[Profile][title]"  : "required"
        }
    });
  });