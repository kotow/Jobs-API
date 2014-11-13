<?php
foreach( $candidates as $candidate )
    echo('<a href="'.DX_ROOT_URL.'candidates/review/'.$candidate["ID"].'">'.json_encode($candidate).'</a></br>');
