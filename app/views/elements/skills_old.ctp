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
    echo "<div id=\"$moduleElementId\" style=\"display:none\">";

    foreach ($vendorData['Module'] as $moduleData) {
        if (isset($moduleData['Version'])) {
            $module = $moduleData['modulename'];
            $moduleId = $moduleData['id'];
            $versionElementId = "versions$moduleId";
            $moduleOnclick = "\$('#$versionElementId').toggle()";
            echo "<fieldset class=\"module\"><legend onclick=\"$moduleOnclick\">$module</legend>";
            echo "<fieldset class=\"version\" id=\"$versionElementId\" style=\"display:none\">";
            
            $versionOptions = array();
            $moduleShown = false;

            foreach ($moduleData['Version'] as $versionData) {
                $version = $versionData['versionname'];
                $versionId = $versionData['id'];
?>

<cake:nocache>
<?php
                $checked = false;
                if ($selectedSkills && in_array($versionId, $selectedSkills)) {
                    $checked = true;
                    if (!$moduleShown) {
                        echo '<script type="text/javascript">';
                        echo "$(\"#$moduleElementId\").show();";
                        echo "$(\"#$versionElementId\").show();";
                        echo '</script>';
                        $moduleShown = true;
                    }
                }
?>
<cake:nocache>


<?php
                echo '<div class="skill">';
                echo $form->checkbox("Version.$versionId", array('value' => $versionId, 'hiddenField' => false, 'checked' => $checked));
                echo $version;
                echo '</div>';
            }

            //echo $form->select('skill', $versionOptions, array('multiple' => true));
                        
            echo '</fieldset>'; // version
            
            echo '</fieldset>'; // module
        }
    }
    echo '</div>';
    echo '</fieldset>'; // vendor
}
