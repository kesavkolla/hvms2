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

var hvms = hvms || {};

hvms.viewJob= function (jobId) {
   $.post("jobs/view/" + jobId,
    null,
    function (data) {
        if (data != "") {
            $("#job-view-header").show();
            $("#job-preview").html(data);
	    scroll(50, 0);
        }
    }
   );
}
