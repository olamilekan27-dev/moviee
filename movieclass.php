 <?php

//database connection class

class DatabaseConfig{

		// member variables

	public $dbcon; // database connection handler


	// member function/method

	public function __construct(){

		//create connection by instatiating MySQLi class

			$this->dbcon = new mysqli("localhost","root","","movieshowtimefounder");

			// check connection

			if($this->dbcon->connect_errno){

				die('connection failed' .$this->dbcon->connect_error);

			}



	}

}



// authentication class

class Authentication{

//member variables

	public $dbobj;


		public function __construct(){

				//create instance/object of DatabaseConfig class

			$this->dbobj = new DatabaseConfig;

		}




function register($customerfirstname,$customerlastname,$Username,$email_address,$gender,$customer_phonenumber,$password){


		$result=$this->dbobj->dbcon->query("INSERT INTO customer SET

	 		customer_firstname='$customerfirstname',customer_lastname='$customerlastname', Username='$Username', emailaddress='$email_address',gender='$gender',customer_phone_number='$customer_phonenumber',password='$password'");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $this->dbobj->dbcon->insert_id;

}



function registercinema($cinemaname,$Username,$cinemamanager,$cinemaaddress,$cinemaphone,$cinemaseatcapacity,$cinemaotherdetails,$password){


		$result=$this->dbobj->dbcon->query("INSERT INTO cinema SET

	 		cinema_name='$cinemaname',Username='$Username',cinema_manager='$cinemamanager', cinema_address='$cinemaaddress', cinema_phone='$cinemaphone',cinema_seat_capacity='$cinemaseatcapacity',cinema_other_details='$cinemaotherdetails',password='$password'");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $this->dbobj->dbcon->insert_id;

}


function registeradmin($adminname,$Username,$password){


		$result=$this->dbobj->dbcon->query("INSERT INTO admin SET

	 		admin_name='$adminname',Username='$Username',password='$password'");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $this->dbobj->dbcon->insert_id;

}







public function login($usn,$pwd){


		$pwd=md5($pwd);

		// write the query

$sql="SELECT * From customer WHERE Username='$usn' && password='$pwd' LIMIT 1";

//run the query

		$result = $this->dbobj->dbcon->query($sql);
		//var_dump($this->dbobj->dbcon->error); exit;
		//check if the number of row return is equal to one

		if ($this->dbobj->dbcon->affected_rows==1){

		// if($result->num_rows ==1){


			$output = $result->fetch_assoc();

				// var_dump($output);
				// exit();
			//create session variable

			$_SESSION['customerid'] = $output['customer_id'];

			$_SESSION['customername'] = $output['customer_firstname'];

			$_SESSION['Username'] = $output['Username'];

			$_SESSION['email'] = $output['emailaddress'];

			$_SESSION['phone'] = $output['customer_phone_number'];


			// redirect to dashboard

			header("Location: http://localhost/movie/visitor.php");



		}else{

			//display invalid login credential 

			$result ="<div class='alert alert-danger'>Invalid Username or password</div>";
		} 
  
		
			return $result;

	


}

public function logincinema($usnn,$pwdd){


		$pwdd=md5($pwdd);

		// write the query

$sql="SELECT * From cinema WHERE Username='$usnn' && password='$pwdd' LIMIT 1";

//run the query

		$result = $this->dbobj->dbcon->query($sql);
		//var_dump($this->dbobj->dbcon->error); exit;
		//check if the number of row return is equal to one

		if ($this->dbobj->dbcon->affected_rows==1){

		// if($result->num_rows ==1){


			$output = $result->fetch_assoc();


			//create session variable

			$_SESSION['cinemaid'] = $output['cinema_id'];

			$_SESSION['cinemaname'] = $output['cinema_name'];

			$_SESSION['Username'] = $output['Username'];

			$_SESSION['cinemaaddress']=$output['cinema_address'];

			$_SESSION['cinemaphone'] = $output['cinema_phone'];



			// redirect to dashboard

			header("Location: http://localhost/movie/admin/dashboard2.php");



		}else{

			//display invalid login credential 

			$result ="<div class='alert alert-danger'>Invalid Username or password</div>";
		} 
  
		
			return $result;

	


}




public function loginadmin($usnnn,$pwddd){


		$pwddd=md5($pwddd);

		// write the query

$sql="SELECT * From admin WHERE Username='$usnnn' && password='$pwddd' LIMIT 1";

//run the query

		$result = $this->dbobj->dbcon->query($sql);
		//var_dump($this->dbobj->dbcon->error); exit;
		//check if the number of row return is equal to one

		if ($this->dbobj->dbcon->affected_rows==1){

		// if($result->num_rows ==1){


			$output = $result->fetch_assoc();


			//create session variable

			$_SESSION['adminid'] = $output['admin_id'];

			$_SESSION['adminname'] = $output['admin_name'];

			$_SESSION['Username'] = $output['Username'];

		


			// redirect to dashboard

			header("Location: http://localhost/movie/admin/dashboard.php");



		}else{

			//display invalid login credential 

			$result ="<div class='alert alert-danger'>Invalid Username or password</div>";
		} 
  
		
			return $result;

	


}




}




class Movie{

//member variables

	public $dbobj;


		public function __construct(){

				//create instance/object of DatabaseConfig class

			$this->dbobj = new DatabaseConfig;

		}


function Addmovie($moviename,$moviedescription,$moviedirector,$movieyear,$picture){

	$result=['status'=>false,"message"=>"Unknown Error"];

				// check if global $_FILES has a value

				if($_FILES['photo']['error'] == 0) {

					$filetype=$_FILES['photo']['type'];

					//to check the property of the picture we uploaded

					// die("<pre>".print_r($_FILES['photo'],1)."</pre>");

					// this is an array of the file types we accept

					$imagetypes=['image/png','image/jpeg'];

					//in_array help us to check if this type of photo the user upload is among the type of picture will allowed in $imagetypes

					if(! in_array($filetype,$imagetypes)){

						//we are only changing the message in our first result

							$result["message"]="File type must be a .jpg or .png";

							return $result;
					}

						$filesize=$_FILES['photo']['size'];

						if($filesize > 1000000){

							$result['message']='Filesize must not be more than 100kb';

							return $result;
						}

						//so two people log in will be different, they will both have a unique name, we are generating name for the file

						$name="image".time();

						$filename = $_FILES['photo']['name'];

						//explode breaks string in to array 
						//here it explodes the $filename

						$fileparts=explode('.',$filename);

						$ext=end($fileparts);

						$newfilename=$name.'.'.$ext;

						//a file where i want store all my user uploaded pictures, userphotos

						$newlocation='moviephotos/';
						$destination=$newlocation.$newfilename;

						// the photo below here is the name given to our input= file, name=photo

						$filtempname = $_FILES['photo']['tmp_name'];

						if(move_uploaded_file($filtempname, $destination)){

							$result['status']=true;
							$result['message']="File successfully uploaded";
							//return $result;
						} else{

							$result['message']="Error uploading file. please retry";
						}

				}else{

					$result = "<div class='alert alert-danger'>No picture file was selected!</div>";
				}


				
			



		$result=$this->dbobj->dbcon->query("INSERT INTO movies SET

	 		movie_name='$moviename',movie_description='$moviedescription', movie_director='$moviedirector', movie_year='$movieyear',picture='$newfilename'");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $result;

}

function getMovieAssoc(){

	 	//query to select all

				$sql = "SELECT * FROM movies";
				$outputdata = array();


				//check if the query() runs the sql statement

			if($result = $this->dbobj->dbcon->query($sql)) {

				// $output = $result->fetch_all(MYSQLI_BOTH);

				 while($output =  $result->fetch_assoc()){

				 	$outputdata[] = $output;
				 }

			}else{

				echo "Error: ".$this->dbobj->dbcon->error;
			}


				return $outputdata;



			}


function get_movie_by_id($movies_id){

	 	$result=$this->dbobj->dbcon->query("SELECT * FROM movies WHERE 	movies_id='$movies_id' LIMIT 1");

	 	if($result->num_rows >0) {

	 		return $result->fetch_assoc();

	 	}else{

	 		return false;
	 	}



	 }



function updatemovie($moviename, $moviedescription, $moviedirector, $movieyear,$moviesid){


	$sql= "UPDATE movies SET movie_name='$moviename', movie_description='$moviedescription', movie_director='$moviedirector', movie_year='$movieyear' WHERE movies_id='$moviesid'";

	// die($sql);
	//run the query

		$this->dbobj->dbcon->query($sql);
		//var_dump($this->dbobj->dbcon->error); exit;
		//check if the number of row return is equal to one

		if ($this->dbobj->dbcon->affected_rows==1)
		{

	header("Location: http://localhost/movie/admin/movielistdashboard.php");

}else{

			//display invalid login credential 

			$result ="<div class='alert alert-danger'>Movie not Updated</div>";

			return $result;
		} 

	}


}



class movieshowtime{

	//member variables

	public $dbobj;


		public function __construct(){

				//create instance/object of DatabaseConfig class

			$this->dbobj = new DatabaseConfig;

		}


function Adddetails($cinemaid,$movieid,$cinemaname,$moviename,$showstartdate,$showenddate,$weekdays,$weekend,$bluckbluster,$movies3d){

		$result=$this->dbobj->dbcon->query("INSERT INTO movie_showings SET
			cinema_id='$cinemaid', movies_id='$movieid',cinema_name='$cinemaname', movie_name='$moviename', show_start_date='$showstartdate', show_end_date='$showenddate', weekdays='$weekdays', weekend = '$weekend', bluckbluster='$bluckbluster', movies3d='$movies3d'");


			return $result;

}



function getMovieshowingAssoc(){

	 	//query to select all

				$sql = "SELECT * FROM movie_showings";
				$outputdata = array();


				//check if the query() runs the sql statement

			if($result = $this->dbobj->dbcon->query($sql)) {

				// $output = $result->fetch_all(MYSQLI_BOTH);

				 while($output =  $result->fetch_assoc()){

				 	$outputdata[] = $output;
				 }

			}else{

				echo "Error: ".$this->dbobj->dbcon->error;
			}


				return $outputdata;



}






}


class timeslot{


//member variables

	public $dbobj;


		public function __construct(){

				//create instance/object of DatabaseConfig class

			$this->dbobj = new DatabaseConfig;

		}


function registertimeslot($time){


		$result=$this->dbobj->dbcon->query("INSERT INTO timeslot SET

	 		time='$time'");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $this->dbobj->dbcon->insert_id;

}



}



class showorder{



	function registershoworder($date,$movieName,$timeslot,$cinema,$ticket){


		$result=$this->dbobj->dbcon->query("INSERT INTO showorder SET

	 		date='$date',movie_name='$movieName',timeslot='$timeslot', cinema='$cinema', ticket='$ticket',");

		if(empty($this->dbobj->dbcon->insert_id)){
 
	 		//Show me the error please
	 		die($this->dbobj->dbcon->error);

	 	}

	 	return $this->dbobj->dbcon->insert_id;





	}







}



 //$admin=new authentication;


//$admin->registeradmin("Olamilekan Oludotun", "Lezkid27","3caa0d870edaf9a2e0da9a1df00f4c9b");

	