var hvms = hvms || {};

hvms.flag = function(interestId) {
 var detailsDiv = $("#" + interestId);
 detailsDiv.addClass('loading');

 $.post("/hvms/interests/flag",
    { "interestId": interestId },
    function (data) {
        if (data == "1") {
            var detailsDiv = $("#" + interestId);
           $(".interest-link", detailsDiv).hide();
            $(".undo-interest-link", detailsDiv).show();
            detailsDiv.addClass('flagged');
            detailsDiv.removeClass('loading');
        }
    }
   );
 }
 
hvms.unflag = function(interestId) {
 var detailsDiv = $("#" + interestId);
 detailsDiv.addClass('loading');

 $.post("/hvms/interests/unflag",
    { "interestId": interestId },
    function (data) {
        if (data == "1") {
            $(".interest-link", detailsDiv).show();
            $(".undo-interest-link", detailsDiv).hide();
            detailsDiv.removeClass('loading');
            detailsDiv.removeClass('flagged');
        }
    }
   );
 }
