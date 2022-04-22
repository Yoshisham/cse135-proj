<?php
    $env_vars = getenv();
    echo "<h1>All environment variables with values:</h1>";
    foreach($env_array as $key=>$value)
    {
        echo "$key => $value <br />";
    }
?>