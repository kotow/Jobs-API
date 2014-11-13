<?php
foreach( $jobs as $job )
    echo('<a href="'.DX_ROOT_URL.'jobs/find/'.$job["ID"].'">'.json_encode($job).'</a></br>');
