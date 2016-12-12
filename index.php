<?php
	include 'header.php';
	date_default_timezone_set('America/New_York');
	$last_import = $dbh->prepare("SELECT last_import FROM meta WHERE id=1");
	$last_import->execute();
	$last_import_time = $last_import->fetchAll();
	

	// echo 'event happened '.humanTiming($time).' ago';

	function humanTiming ($time)
	{

	    $time = time() - $time; // to get the time since that moment
	    $time = ($time<1)? 1 : $time;
	    $tokens = array (
	        31536000 => 'year',
	        2592000 => 'month',
	        604800 => 'week',
	        86400 => 'day',
	        3600 => 'hour',
	        60 => 'minute',
	        1 => 'second'
	    );

	    foreach ($tokens as $unit => $text) {
	        if ($time < $unit) continue;
	        $numberOfUnits = floor($time / $unit);
	        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
	    }

}?>
<main>
<div class="row">
	<div class="col s12 m6">
	  <div class="card">
	    <div class="card-content white-text">
	      <span class="card-title">Import Asana Tasks</span>
	      <p>This will get all of the new Asana tasks and add them to our Database so that they can be added to Habitica.</p>
	    </div>
	    <div class="card-action">
	      <a href="#">IMPORT</a> <div class="last_import">Last import: <span class="time-since-update"><?php echo humanTiming(strtotime($last_import_time[0][0])); ?></span> ago</div> 
	    </div>
	  </div>
	</div>
	<div class="col s12 m6">
	  <div class="card">
	    <div class="card-content white-text">
	      <span class="card-title">Export Tasks to Habitica</span>
	      <p>This will export all new tasks to Habitica.</p>
	    </div>
	    <div class="card-action">
	      <a href="#">Export</a> <div class="last_export">Last export:  <span class="time-since-update"><?php echo humanTiming(strtotime($last_import_time[0][0])); ?></span> ago</div>
	    </div>
	  </div>
	</div>
</div>

</main>
<?php
	include 'footer.php';
?>