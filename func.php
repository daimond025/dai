<?php
    function printInfo($info) //camelStyle
	{
	    $data = "<label>Name:</label>" .
		        "<strong>" . $info["name"] . "</strong>" .
				"<br>" .
				"<label>Age: </label>" .
				"<span>" . $info["age"] . "</span>";
		echo $data;
	}