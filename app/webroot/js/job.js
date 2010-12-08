  $(document).ready(function(){
    $("#JobAddForm").validate( {
        rules: {
            "data[Job][title]"  : "required",
            "data[Job][ratemin]": "number",
            "data[Job][ratemax]": "number",
            "data[Job][openings]": "number"
        }
    });
  });
