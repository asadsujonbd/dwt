<?php
	Class crudApp{
		private $conn;

		public function __construct()
		{
			#database host, database user, database pass, database name
			$dbhost = 'localhost';
			$dbuser = 'root';
			$dbpass = '';
			$dbname = 'first';

			$this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			if (!$this->conn) {
				die("Database Connection Error!!");
			}
		}
		public function add_data($data){
			$name = $data['std_name'];
			$roll = $data['std_roll'];
			$img = $_FILES['std_img']['name'];
			$tmp_name = $_FILES['std_img']['tmp_name'];

			$query = "INSERT INTO crud(name, roll, img) VALUES('$name', '$roll', '$img')";

			if (mysqli_query($this->conn, $query)) {
				move_uploaded_file($tmp_name, 'upload/'.$img);
				return "Information Submitted Successfully";
			}
		}
		public function display_data(){
			$query = "SELECT * FROM crud";
			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				return $return_data; 
			}
		}
		// Edit Data
		public function display_data_by_id($id){
			$query = "SELECT * FROM crud WHERE id = $id";
			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				$studentData = mysqli_fetch_assoc($return_data);
				return $studentData; 
			}
		}

		// Update Data
		public function update_data($data){
			$name = $data['e_std_name'];
			$roll = $data['e_std_roll'];
			$id = $data['id'];
			$img = $_FILES['e_std_img']['name'];
			$tmp_name = $_FILES['e_std_img']['tmp_name'];

			$query = "UPDATE crud SET name='$name', roll='$roll', img='$img' WHERE id=$id";

			if (mysqli_query($this->conn, $query)) {
				move_uploaded_file($tmp_name, 'upload/'.$img);
				return "Information Updated Successfully";
			}
		}

		// Delete data
		public function delete_data($id){
            $catch_img = "SELECT * FROM crud WHERE id=$id";
            $delete_std_info = mysqli_query($this->conn, $catch_img);
            $std_infoDle = mysqli_fetch_assoc($delete_std_info);
            $deleteImg_data = $std_infoDle['img'];
            $query = "DELETE FROM crud WHERE id=$id";
            if(mysqli_query($this->conn, $query)){
                unlink('upload/'.$deleteImg_data);
                return "Deleted Successfully";
            }
        }
	}

?>