<?php 
header('Content-Type: application/json');
include("conn.php");
// Include connection
include("conn.php");

// Making Action
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if (function_exists($action)) {
        $action($conn);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Action Failed. Action is Required']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Action is Required']);
}

// Action End Here

// Insert Start Here
function insertF($conn) {
    if (isset($_POST['insertF']) && $_POST['insertF'] == 'nuurdiin') {
        extract($_POST);

        // Form validation
        if (empty($full_name) || empty($number) || empty($scourse) || empty($status)) {
            echo json_encode(['status' => 'error', 'message' => 'All Fields Are Required']);
        } else {
            $read_old = mysqli_query($conn, "SELECT * FROM students WHERE full_name='$full_name' AND number='$number'");
            if ($read_old && mysqli_num_rows($read_old) > 0) {
                echo json_encode(['status' => 'error', 'message' => 'This Student Already Exists']);
            } else {
                
                    $insert = mysqli_query($conn, "INSERT INTO students(`full_name`, `number`, `student_course`, `status`) VALUES('$full_name', '$number', '$scourse', '$status')");
                    if ($insert) {
                        echo json_encode(['status' => 'success', 'message' => 'Successfully Inserted']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Something Went Wrong When Making Insert']);
                    }
                }
            }
        } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid Insert. Insert Password is Required']);
    }
}

// Insert End Here

// Read Start Here 
function read($conn){
    if(isset($_POST['read']) && $_POST['read'] == 'nuurdiin'){
        $read = mysqli_query($conn, "SELECT * FROM students");
        if($read && mysqli_num_rows($read)>0){
            foreach($read as $row){
                ?>
                 <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['student_course']; ?></td>
                            <td><button data-bs-toggle="modal" data-bs-target="#viewModal" id="viewBtn"  student_id="<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-eye"></i></button></td>
                            <td><button data-bs-toggle="modal" data-bs-target="#updateModal" id="updateBtn"  student_id="<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></button></td>
                            <td><button id="btnDelete" student_id="<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                        </tr>
                <?php
            }
        }else{
            echo json_encode(['status' => 'error', 'message' => 'No Data Found']);
        }
    }else{
        echo json_encode(['status' => 'error', 'message' => 'Invalid Read. Read Password is Required']);
    }
}
// Read End Here 

// Delete Start Here
function delete($conn){
    if(isset($_POST['student_id'])){
        $student_id = $_POST['student_id'];
        $delete = mysqli_query($conn, "DELETE FROM students WHERE id = '$student_id'");
        if($delete){
            echo json_encode(['status' => 'success', 'message' => 'Successfully Deleted']);
        }else{
            echo json_encode(['status' => 'error', 'message' => 'Invalid Delete']);
        }

    }else{
        echo json_encode(['status' => 'error', 'message' => 'Student id is Required']);
    }
}
// Delete End Here


// ReadUpdate Start Here
function readupdate($conn){
    if(isset($_POST['student_id'])){
        $student_id = $_POST['student_id'];
        $readUpdate = mysqli_query($conn, "SELECT * FROM students WHERE id = '$student_id'");
        if($readUpdate && mysqli_num_rows($readUpdate)>0){
            foreach ($readUpdate as $row){
                ?>
                  <form id="updateForm" method="post">
                    <input type="text" name="id" id="id" value= "<?php echo $row['id'] ?>"  class="form-control" hidden >
                    <label>Full Name</label>
                    <input type="text" name="name" id="name" value= "<?php echo $row['full_name'] ?>"  class="form-control" >
                    <label>Number</label>
                    <input type="number" name="number" id="number" value= "<?php echo $row['number'] ?>"  class="form-control">
                    <label>Student Course</label>
                    <input type="text" name="scourse" id="scourse" value= "<?php echo $row['student_course'] ?>" class="form-control">
                    <label>Chooice Status</label>
                     <select class="form-control" name="status" id="status" >
                        <option value="<?php echo $row['status']  ?>"  selected><?php echo $row['status'] ?></option>
                        <option value="compleate">Compleate</option>
                        <option value="nocompleate">nocompleate</option>
                     </select>
                    
                 
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
                <?php
            }
        }else{
            echo json_encode(['status' => 'error', 'message' => 'No Data Found']);
        }
    }else{
        echo json_encode(['status' => 'error', 'message' => 'Student id is Required']);
    }
}
// ReadUpdate End Here


// update Start here
function update($conn) {
    if (isset($_POST['id'])) {
        $ID = $_POST['id'];
        extract($_POST);

        // Update query
        $update = mysqli_query($conn, "UPDATE students SET `full_name`='$name', `number`='$number', `student_course`='$scourse', `status`='$status' WHERE id = '$ID'");

        if ($update) {
            echo json_encode(['status' => 'success', 'message' => 'Successfully Updated']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to Update']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID is required']);
    }
}

// update end here
?>