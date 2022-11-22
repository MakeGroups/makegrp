<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['fname'];
        $phnumber = $_POST['phnumber'];
        $course = $_POST['ccourse'];
        $district = $_POST['ddistrict'];
    }
?>
<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['fname'];
        $phnumber = $_POST['phnumber'];
        
        $course = $_POST['ccourse'];
        $district = $_POST['ddistrict'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "formdb_user";
        $password = "abc123";
        $dbname = "form_entriesdb";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO contactform_entries (id, name_fld, phnumber_fld, course_fld, district_fld) VALUES ('0', '$name', '$phnumber', '$course', '$district')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            header("Location:http://localhost/make%20web1/?");
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
       

        mysqli_close($con);
    }
?>