<?php header('Access-Control-Allow-Origin: *'); ?>

<input id="transaction_symbol" name="transaction[symbol]" size="30" type="text" list="list" placeholder='請選擇你的投資組合' required='true'>
    <datalist id="list">
	<?php
	$i=1;
	while($i<count($temp))
	{?>

		<option value="<?php echo $temp[$i][2]; ?>"><?php echo $temp[$i][1]; ?>
		<option value="<?php echo $temp[$i][1]; ?>"><?php echo $temp[$i][2]; ?>
	<?php
	$i++;
	}
	?>

</datalist>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
<script type='text/javascript' src="app/webroot/js/jquery-1.7.1.min.js"></script>
<script type='text/javascript' src="app/webroot/js/main.js"></script>