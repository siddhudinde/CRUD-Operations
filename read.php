<!DOCTYPE html>
<?php ob_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>User Data</title>
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <h1>User Data</h1>
    <table class="table table-bordered table-hover table-striped">
    <thead>

            <tr>
                <td>Sr.No </td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Education</td>
                <td>Gender</td>
                <td>Date of Birth </td>
                <td>Mobile No.</td>
                <td>Uploaded File </td>
                <td>Update Data</td>
                <td>Delete Data </td>
            </tr>
        </thead>

        
   
   
    <?php
     $connection = mysqli_connect('localhost','root','','php');

     if($connection)
     {
         $read_query = "SELECT * FROM CRUD";
         $result = mysqli_query($connection,$read_query);

         if($result)
         { 
            $i=1;   
            while($row = mysqli_fetch_array($result))
            {
             
                 $id = $row['id'];
                 $name = $row['user_name'];
                 $email = $row['user_email'];
                 $password = $row['user_password'];
                 $education = $row['user_education'];
                 $gender = $row['user_gender'];
                 $dob = $row['user_dob'];
                 $mobile = $row['user_mobile'];
                 $file = $row['user_file'];
     
            ?>
            <tbody>
                <tr>
                    <td><?php echo $id ; ?></td>
                    <td><?php echo $name ; ?></td>
                    <td><?php echo $email ; ?></td>
                    <td><?php echo $password ; ?></td>
                    <td><?php echo $education ; ?></td>
                    <td><?php echo $gender ; ?></td>
                    <td><?php echo $dob ; ?></td>
                    <td><?php echo $mobile ; ?></td>
                    <td><?php echo $file ; ?></td>
                    <td>
                    
                     <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $id ; ?>">
            Update
            </button>
            
            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $id ; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-grup">
                                    <form action="" method ="POST">

                                        <label for="name">Name</label>
                                        <input type="text" value="<?php echo $name; ?>" class="form-control" name="U_name" >
                                        <input type="hidden" value="<?php echo $id; ?>" class="form-control" name="U_id">
                                        </div>
                
                                        <div class="form-grup">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?php echo $email; ?>" class="form-control" name="U_email" >
                                        </div>

                                        <div class="form-grup">
                                        <label for="password">Password</label>
                                        <input type="text" value="<?php echo $password; ?>" class="form-control" name="U_password" >
                                        </div>

                                        <div class="form-grup">
                                        <label for="education">Highest Education</label>
                                        <input type="text" value="<?php echo  $education; ?>" class="form-control" name="U_education" >
                                        </div> 

                                        <div class="form-grup">
                                        <label for="gender">Gender</label>
                                        <input type="text" value="<?php echo  $gender; ?>" class="form-control" name="U_gender" >
                                        </div>

                                        <div class="form-grup">
                                        <label for="dob">DOB</label>
                                        <input type="text" value="<?php echo  $dob; ?>" class="form-control" name="U_dob" >
                                        </div>

                                        <div class="form-grup">
                                        <label for="mobile">Mobile No.</label>
                                        <input type="text" value="<?php echo  $mobile; ?>" class="form-control" name="U_mobile" >
                                        </div>

                                        <div class="form-grup">
                                        <label for="file">Uploaded File</label>
                                        <input type="text" value="<?php echo  $file; ?>" class="form-control" name="U_file" >
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" name="update_btn" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            
                                </td>

                    <td>
                                                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $id ; ?>">
                            Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal<?php echo $id ; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="POST">
                                <div class="modal-body">        
                                Are you sure want to Delete <?php echo $name; ?> User ??
                                <input type="hidden" value="<?php echo $id; ?>" name="delete_id">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    <button type="submit" name="delete_btn" class="btn btn-danger">YES</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                    </td>
                </tr>
              
            
            <?php
            $i++ ;    
        }
         }
         else
         {
             echo "Error :".mysqli_error($connection);
         }
     }
    
    ?>
                    <?php
                        if(isset($_POST['update_btn']))
                        {
                            $id = $_POST['U_id'];
                            $name = $_POST['U_name'];
                            $email = $_POST['U_email'];
                            $password = $_POST['U_password'];
                            $education = $_POST['U_education'];
                            $gender = $_POST['U_gender'];
                            $dob = $_POST['U_dob'];
                            $mobile = $_POST['U_mobile'];
                            $file = $_POST['U_file'];

                            $update_query = "UPDATE crud SET user_name ='$name' ,user_email ='$email' ,user_password='$password' ,user_education='$education' ,user_gender='$gender' ,user_dob='$dob' ,user_mobile='$mobile' ,user_file='$file' WHERE id='$id'";
                            $result = mysqli_query($connection,$update_query);
                            if($result)
                            {
                                header("Location:read.php");
                            }
                            else
                            {
                                echo "Error :".mysqli_error($connection);
                            }
                        }


                        if(isset($_POST['delete_btn']))
                        {
                            $id = $_POST['delete_id'];
                          

                            $delete_query = "DELETE FROM crud WHERE id='$id' ";
                            $result_del = mysqli_query($connection,$delete_query);
                            if($result_del)
                            {
                                header("Location:read.php");
                            }
                            else
                            {
                                echo "Error :".mysqli_error($connection);
                            }
                        }
                    ?>
                   <tfoot>
                        <tr>
                            <td>
                                <a href="create.php">
                                    <button class="btn btn-primary">
                                        Insert Data
                                    </button>
                                </a>
                            </td>
                        </tr>
                   </tfoot>

            </tbody>
    </table>
        
</body>
</html>