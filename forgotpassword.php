<?php include('inc/header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Reset Password</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
            <a href="login.php"><button class="btn btn-light">Back to Login</button></a>
          
    </div>
<?php include('inc/footer.php'); ?>   