<?php

class redirect {
	
	public function r($Str_Location, $Bln_Replace = 1, $Int_HRC = NULL) {
		if(!headers_sent())
			{
				header('location: ' . urldecode($Str_Location), $Bln_Replace, $Int_HRC);
				exit;
			}

		    exit('<meta http-equiv="refresh" content="0; url=' . urldecode($Str_Location) . '"/>');
		    return;
		
	}
	
}

?>