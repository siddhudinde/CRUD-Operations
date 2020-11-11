    <!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
<body>
                          
    <fieldset>  
    
        <form action="" method="post">
        <br>
        <br>
            <div class="form-group">
            <label for="User Name"><b>UserName :-</b></label>
            <input required type="text" name="U_name" id="" placeholder="Please enter your name"><br>
            <br>
            <br>
            </div>
            <div class="form-group">
            <form action="">
            <label for="User Email"><b>Email :-</b></label>
            <input required type="email" class="form-control" name="U_email" id="" placeholder="email@example.com "><br>
            <br>
            <br>
            </div>
            
            
            <form action="">
            <label for="User Password"><b>Password :-</b></label>
            <input required type="password" name="U_password" id="" placeholder="Please enter your password"><br>
            <br>
            <br>
            <br>
            
            <label for="Education "><b>Highest Education :-</b></label>
            <input type="checkbox" name="U_education[]" value="10th" id="">10<sup>th</sup>   
            <input type="checkbox" name="U_education[]" value="12th" id="">12<sup>th</sup>
            <input type="checkbox" name="U_education[]" value="BE" id="">Graduation   
            <br>
            <br>
            <br>

            <label for="Gender"><b>Gender :-</b></label>
            <input required type="radio" name="U_gender" value="Female" id="">Female   
            <input required type="radio" name="U_gender" value="Male" id="">Male   
            <br>
            <br>
            <br>

            <label for="DOB"><b>DOB :-</b></label>
            <input required type="date" name="U_dob" id="">
            <br>
            <br>
            <br>

            <label for="Mobile No"><b>Mobile No :-</b></label>
            <input required type="number" name="U_mobile" id="" placeholder="0123456789">    
            <br><br>
            <br>

            <label for="file"><b>Upload File :-</b></label>
            <input  type="file" name="U_file" id="" placeholder="Enter your file">    
            <br><br>
            <br>
            <button class="btn" type="submit" name="register_btn"> 
            Register
            </button>
        
        
            </form>
    </fieldset>
                        
        <?php
            if(isset($_POST['register_btn']))
            {
                
                $name=$_POST['U_name'];
                $email=$_POST['U_email'];
                $password=$_POST['U_password'];
                $education= implode(", ", $_POST['U_education']);
                $gender=$_POST['U_gender'];
                $dob=$_POST['U_dob'];
                $mobile=$_POST['U_mobile'];
                $file=$_POST['U_file'];

                $connection = mysqli_connect('localhost','root','',my_project);
                if($connection)
                {
                    $create_query = "INSERT INTO crud(user_name,user_email,user_password,user_education,user_gender,user_dob,user_mobile,user_file) VALUES('$name','$email','$password','$education','$gender','$dob','$mobile','$file')";
    
                    $result = mysqli_query($connection,$create_query);
                    
                    
                    if($result)
                    {
                        echo "Data Inserted Scessfully";
                    }
                    else
                    {
                        echo "Error in code";
                    }
                }
                else
                {
                    echo "ERROR"; 
                }
            }
        ?>
                    
</body>
</html>