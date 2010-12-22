var hvms = hvms || {};

hvms.flag = function(interestId) {
 $.post("/hvms/interests/flag",
    { "interestId": interestId },
    function (data) {
        if (data == "1") {
            var detailsDiv = $("#" + interestId);
           $(".interest-link", detailsDiv).hide();
            $(".undo-interest-link", detailsDiv).show();
            detailsDiv.addClass('flagged');
        }
    }
   );
 }
 
hvms.unflag = function(interestId) {
 $.post("/hvms/interests/unflag",
    { "interestId": interestId },
    function (data) {
        if (data == "1") {
            var detailsDiv = $("#" + interestId);
            $(".interest-link", detailsDiv).show();
            $(".undo-interest-link", detailsDiv).hide();
            detailsDiv.removeClass('flagged');
        }
    }
   );
 }