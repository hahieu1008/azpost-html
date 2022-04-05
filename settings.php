<?php include('inc/header.php'); ?>
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Settings</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <form>
        <fieldset disabled>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        </fieldset>
            <h5 class='mt-3'>Change your password</h5>
            <div class="form-group">
              <label for="exampleInputPassword1">Current Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">New password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
            <h5 class='mt-3'>New Note Default</h5>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Public Note</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Private Note</label>
                </div>

            <h5 class='mt-3'>Auto-Save Note</h5>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                <label class="form-check-label" for="exampleCheck1">Automatically save note during editing</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg mt-5">Update Settings</button>
          </form>
    </div>
<?php include('inc/footer.php'); ?>   