<?php
   	     

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
	   //Get form data
	   $formdata = array(
	      'userName'=> $_POST["userName"],
	      'email'=> $_POST["email"],
	      'password'=>$_POST["password"],
          'company'=> $_POST["company"],
          'address'=> $_POST["address"]
		 
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "";
	    }
	   else 
	        echo "No data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	// echo "my value: ".$mydata[1]->name;
	/* foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}*/
	
}
?>