
		
  <link href="../Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Resources/vendor/bootstrap/css/bootstrap-themev3.0.0.css" rel="stylesheet">
  <link href="../Resources/vendor/elegant/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../Resources/css/dashboard.css" rel="stylesheet">    
    <!-- Modal -->
        <div class="modal fade" id="ModalAddVersion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ffffffffff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="loginForm">
                  <div class="form-group">
                    <label for="versionCode" class="control-label">Version Code</label>
                    <input type="text" class="form-control" name="versionCode" id="versionCode"  placeholder="Example 0.1.0.203443">
                    <span class="help-block"></span>                  
                  </div>
                  <div class="form-group">
                    <label for="versionCode" class="control-label">Version Date</label>
                    <input class="form-control"  type="date"  id="VersionDate" name="VersionDate" type="text"  />
                    <span class="help-block"></span>
                  </div>
                  <div class="form-group">
                      <label for="VersionComment" class="control-label">Version Comment:</label>                   
                    <textarea class="form-control" id="VersionComment" name="VersionComment" placeholder="Description">
                    </textarea>
                  <span class="help-block"></span>
                  </div>
                  <div class="modal-footer">					 
                    <button type="button" class="btn btn-primary" id="BtnAddVersion32">Send message</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                
             	 </div>
				      </form>
              </div> 
            </div>
          </div>
		    </div>	  
 

  <script src="../Resources/js/script.js"></script>
	<script type="text/javascript">	
	document.getElementById("BtnAddVersion32").onclick = AddVersion32;
  </script>