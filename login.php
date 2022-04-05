<?php include('inc/header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Login</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="form-group mt-3">
              <label class="form-check-label" for="exampleCheck1"><a href="forgotpassword.php">Forgot Password</a></label>
            </div>
          </form>
    </div> 
	
<?php include('inc/footer.php'); ?>   