<?php include('inc/header.php'); ?>
<style>
.editor{
	display: none;
}
.editoractive{
	display: block;
}
.permission-modal {
    display: inline;
}
.password-protected-note {
  display: none;
}
</style>
      <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Create post</h1>
        </div>
      </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <form>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            <label class="form-check-label" for="inlineRadio1">Only Text</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Full Editor</label>
        </div>


        <div class="form-group">
          <label></label>
          <input type="text" class="form-control" placeholder="Title">
        </div>
        <div class="form-group editor editor1 editoractive">
          <label></label>
          <textarea class="form-control" rows="18" placeholder="Write Content"></textarea>
        </div>
        <div class="form-group editor editor2">
            <label></label>
            <div>
          <textarea id="tiny"></textarea>
        </div>

        
        </div>

        
        

        <div class="row">
          
          <div class="col">
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#uploadfilemodal"><strong><i class="fa fa-solid fa-file"></i> Attach Files (image / video / file)</strong></button>

            <!-- Modal -->
            <div class="modal fade" id="uploadfilemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Attach Files to Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="alert alert-warning">This feature is available in Premium plan only. <a href="#">Upgrade Now</a> to access more great features.</div>
                    
                    <link href="css/file.css" rel="stylesheet">
                    <div class="fileuploader fileuploader-theme-dragdrop ">
                      <input type="hidden" name="fileuploader-list-attachFiles" value="[]">
                      <input id="theFile" type="file" name="attachFiles" style="position: absolute; z-index: -9999; height: 0px; width: 0px; padding: 0px; margin: 0px; line-height: 0; outline: 0px; border: 0px; opacity: 0;">
                      <div class="fileuploader-input" onclick="performClick('theFile');">
                        <div class="fileuploader-input-inner">
                          <div class="fileuploader-icon-main"></div>
                          <h3 class="fileuploader-input-caption">
                            <span>Drag and drop files here</span>
                          </h3>
                          <p>or</p>
                          <button type="button" class="fileuploader-input-button">
                            <span>Browse files</span>
                          </button>
                        </div>
                      </div>
                      <div class="fileuploader-items">
                        <ul class="fileuploader-items-list"></ul>
                      </div>
                    </div>

                    <script type="text/javascript">
                    function performClick(elemId) {
                      var elem = document.getElementById(elemId);
                      if(elem && document.createEvent) {
                          var evt = document.createEvent("MouseEvents");
                          evt.initEvent("click", true, false);
                          elem.dispatchEvent(evt);


                      }
                    }
                    </script>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
              <div class="form-group">
                <label></label>
                <input type="text" class="form-control mb-2" placeholder="Find Category">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Default Category
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Category A
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Category B
                  </label>
                </div>
            </div>
          </div>
        </div>

        <h6>
          <button class="btn btn-lg btn-primary btn-save-post mr-3" type="submit">Save Post</button>
          <div class="permission-modal">
            <i class="fa fa-unlock" style="font-size:28px;"></i>
            Public Note (<a href="register.php">Register</a> for private notes)
          </div>
          /
          <div class="permission-modal" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-unlock" style="font-size:28px;"></i>
            Public Note <i class="fa fa-caret-down"></i> </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Note Read Permission</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioz1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadioz1">Public Note</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioz2" value="option2">
                      <label class="form-check-label" for="inlineRadioz2">Private Note</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioz3" value="option3">
                      <label class="form-check-label" for="inlineRadioz3">Password Protected Note</label>
                  </div>
                  <input type="text" class="form-control mt-2 password-protected-note" placeholder="Password Protected">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </h6>
      </form>
    </div>
    <script>
	$('input[type=radio][name=inlineRadioOptions]').change(function() {
		if($('.editor1').hasClass('editoractive')){
			$('.editor1').removeClass('editoractive');
			$('.editor2').addClass('editoractive');
		}else{
			$('.editor2').removeClass('editoractive');
			$('.editor1').addClass('editoractive');
		}
	});

  $('input[type=radio][name=inlineRadioOptions2]').change(function() {
		if($('input[type=radio][name=inlineRadioOptions2]:checked').attr('value') == "option3"){
      $('.password-protected-note').show();
		}else{
			$('.password-protected-note').hide();
		}
	});
	</script>
<?php include('inc/footer.php'); ?>   