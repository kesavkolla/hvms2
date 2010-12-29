<div class="input other-select">
    <label for="schedule1"><?php echo $label ?></label>
<?php
    $options['Other'] = 'Other';
    $selectId = "{$this->params['controller']}-$fieldName";
    $textId = "{$this->params['controller']}-$fieldName-other";
    
    echo $this->Form->select("$fieldName", $options, null, array('id' => "$selectId" ));
    echo $this->Form->text("$fieldName-other" , array('id' => "$textId", 'style' => 'display:none' ));
?>
</div>
<script type="text/javascript">
    if ($('#<?php echo $selectId ?>').val() == 'Other') {
        $('#<?php echo $textId ?>').show();
    }
    
    $('#<?php echo $selectId ?>').change(function () {
        var selectElem = $('#<?php echo $selectId ?>');
        var textElem = $('#<?php echo $textId ?>');
        if (selectElem.val() == 'Other') {
            textElem.show();
        }
        else {
            textElem.hide();
            textElem.val('');
        }
    });
</script>