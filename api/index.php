<?php 


class Gets
{



	function getsched()
	{
		echo "getall";
	}

	function getlatlng()
	{
		echo "getlatlang";
	}

	function setsched()
	{
		echo "setsched";
	}
	
	function aggreesched()
	{
		if (aggre)
		{
			
		}
	}

}


$g = new Gets();

	if (isset($_GET['api'])) 
	{
		$g->$_GET['api']();
		
	}
 ?>