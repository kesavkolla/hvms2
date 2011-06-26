<?php
	$interestStyle = $userFlagged ? 'display: none' : '';
	$undoInterestStyle = $userFlagged ? '' : 'display:none';
?>
	<div class="undo-interest-link" style="<?php echo $undoInterestStyle ?>">
        <a href="javascript:void(0)" onclick="hvms.unflag(<?php echo $interestId ?>); return false;">Not interested anymore</a>
	</div>


	<div class="interest-link" style="<?php echo $interestStyle ?>">
        <a href="javascript:void(0)" onclick="hvms.flag(<?php echo $interestId ?>); return false;">I'm interested</a>
    </div>
