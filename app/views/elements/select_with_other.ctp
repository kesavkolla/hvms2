<div class="input other-select">
    <label for="schedule1"><?php echo $label ?></label>
<?php
    $options['Other'] = 'Other';
    $selectId = "{$this->params['controller']}-$fieldName";
    $textId = "{$this->params['controller']}-$fieldName-other";

    $selectConfig = array('id' => "$selectId");
    
    if (isset($size)) {
        $selectConfig['size'] = $size;
    }
    
    if (isset($multiple)) {
        $selectConfig['multiple'] = $multiple;
    }  
    
    echo $this->Form->select("$fieldName", $options, null, $selectConfig);
    echo $this->Form->text("$fieldName-other" , array('id' => "$textId", 'style' => 'display:none'));
    
    if (isset($afterText)) {
        echo "<span id=\"$textId-hint\" class=\"hint\" style=\"display:none\">$afterText</span>";
    }
?>
</div>
<script type="text/javascript">
    if ($('#<?php echo $selectId ?>').val().indexOf('Other') >= 0 ) {
        $('#<?php echo $textId ?>').show();
        $('#<?php echo $textId ?>-hint').show();

    }
    
    $('#<?php echo $selectId ?>').change(function () {
        var selectElem = $('#<?php echo $selectId ?>');
        var textElem = $('#<?php echo $textId ?>');
        var hintElem = $('#<?php echo $textId ?>-hint');
        if (selectElem.val().indexOf('Other') >= 0) {
            textElem.show();
            hintElem.show();
        }
        else {
            textElem.hide();
            textElem.val('');
            hintElem.hide();
        }
    });
</script>