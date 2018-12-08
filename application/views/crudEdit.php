<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" value="<?php echo $row->birthdate; ?>" aria-describedby="emailHelp" placeholder="Enter birthdate">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact No</label>
                <input type="text" class="form-control" name="contactNo" value="<?php echo $row->contactNo; ?>" aria-describedby="emailHelp" placeholder="Enter contact no">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bio</label>
                <input type="text" class="form-control" name="bio" value="<?php echo $row->bio; ?>" aria-describedby="emailHelp" placeholder="Enter bio">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>