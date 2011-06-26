<?php
/* array skills contains vendor, module and version in the form:
Array
(
    [0] => Array
        (
            [Vendor] => Array (...vendor data...)
            [Module] => Array
                [0] => (
                        [0] => Array(...module data...
                                     ...array of versions...
                                )
                        )
                )
                [1] => (
                        [0] => Array(...module data...
                                     ...array of versions...
                        )
                )
        )
    [1] => Array
        (
            [Vendor] => Array (...vendor data...)
            [Module] => Array (...module data as shown above ...)
        )
)

skills that are preselected are passed in $selectedSkills
*/

foreach ($data as $vendorData) {
    $vendor = $vendorData ['Vendor'] ['vendorname'];
    $vendorId = $vendorData['Vendor']['id'];
    $moduleElementId = "modules$vendorId";
    $vendorOnclick = "\$('#$moduleElementId').toggle()";
    echo '<fieldset class="vendor"><legend  onclick="' . $vendorOnclick . '"> ' . $vendor . '</legend>';
    echo "<div id=\"$moduleElementId\" style=\"display:none\" class=\"clearfix\">";
    $moduleShown = false;

    foreach ($vendorData['Module'] as $moduleData) {        
        $module = $moduleData['modulename'];
        $moduleId = $moduleData['id'];
?>       
        <cake:nocache>
<?php
        $checked = false;
        if ($selectedSkills && in_array($moduleId, $selectedSkills)) {
            $checked = true;
            if (!$moduleShown) {
                echo '<script type="text/javascript">';
                echo "$(\"#$moduleElementId\").show();";
                echo '</script>';
                $moduleShown = true;
            }
        }
?>
<cake:nocache>

<?php        
        echo '<div class="skill">';
        echo $form->checkbox("Module.$moduleId", array('value' => $moduleId, 'hiddenField' => false, 'checked' => $checked));
        echo "<label for=\"Module$moduleId\">$module</label>";
        echo '</div>';
        $moduleShown = false;
    }
    echo '</div>';
    echo '</fieldset>'; // vendor
}
