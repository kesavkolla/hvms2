<?php
list ($schedule1, $schedule2) = $this->Inputs->getJobSchedules();
?>
<div class="input schedule">
    <label for="schedule1">Work Schedule</label>
<?php
    echo $this->Form->select('schedule1', $schedule1, null, array('empty' => false));
    echo $this->Form->select('schedule2', $schedule2, null, array('empty' => '---- select % of remote time ----'));

?>
</div>
<script type="text/javascript">
    $('#JobSchedule1').change(function () {
        var scheduleElem = $('#JobSchedule1');
        var remoteElem = $('#JobSchedule2');
        if (scheduleElem.val() == 'Remote') {
            remoteElem.hide();
        }
        else {
            remoteElem.show();
        }
    });
</script>
    