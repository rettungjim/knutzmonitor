<?php

	class realtimeVisu
	{
	    
	    include('db.class.php');
	    include('../config/db.class.php'); 
		
		//Init
		public function __construct(){ 
			$sql = new mysql($kzm['dbHost'],$kzm['dbUser'],$kzm['dbPass'] ,$kzm['dbName']);
		}


	    public function getAllValues() {
		    $res = $sql->query("SELECT * FROM `tabelle` ORDER BY `spalte` DESC;"); 
					while($row = $sql->array_result($res)) 
					{ 
					    echo($row['spalte']."<br />\n"); 
					} 
			$sql->free_result(); 

			$sql->close_connect();
	    }
	}

		
		?>