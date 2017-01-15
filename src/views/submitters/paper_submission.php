
<div class="container-content">
  <div class="container">
    <h2>Paper Submission</h2>
    <hr>
    <?php if(!empty($_GET['msg']) && $_GET['msg'] == 3): ?>
        <br>
    <?php elseif(!empty($_GET['msg']) && $_GET['msg'] == 1): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oops!</strong> Upload failed. Please try again in a few moments.
        </div>
    <?php elseif(!empty($_GET['msg']) && $_GET['msg'] == 2): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oops!</strong> The file you provided is not a pdf! Please try again using a proper file format.
        </div>
    <?php else: ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            File upload successful
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
      <div class="panel-heading"><h4><i class="fa fa-cloud-upload" aria-hidden="true"></i> Paper Submission Capability</h4></div>
        <div class="panel-body">
          <p class="welcome-text">Full paper <kbd class="invalid-color">CLOSED</kbd></p>
          <p class="welcome-text">Project & short paper <kbd class="invalid-color">CLOSED</kbd></p>
          <p class="welcome-text">Camera ready full papers <kbd class="valid-color">OPEN</kbd></p>
          <p class="welcome-text">Camera ready short papers <kbd class="valid-color">OPEN</kbd></p>
          <p class="welcome-text">Workshop paper <kbd class="valid-color">OPEN</kbd></p>
      </div>
    </div>
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
            <i class="fa fa-question-circle" aria-hidden="true"></i> Help me submit</a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body info-panel">
            <h4>
            <ol>
              <p class="link_style">
              <li>Check if your file agrees with the form requirements
              <a href="<?=PUBLIC_ROOT?>/submitters/GuidelinesInformation" class="btn btn btn-primary" role="button">Show me the requirements</a>
              </li>
              <li>Select the paper category of your file</li>
              <li>Click the (select file to upload) button</li>
              <li>Navigate to your computer and select your paper</li>
              <li>Press the submit button</li>
              <li>In case you are not logged in you will be prompt to,
              or to create an account if you have not</li>
              </p>
            </ol>
            </h4>  
          </div>
        </div>
      </div>
    </div>
    <form id="paper-submit-form" name="paper-submit-form" method="post" action="<?=PUBLIC_ROOT?>/submitters/PaperSubmission/submit" enctype="multipart/form-data">  
      <div class="form-group content" style="max-width:250px;">
          <label>Paper Category: </label>
          <select class="form-control input-type" type="text" class="form-control input-name" data-rule-required="true">
              <option value="default">(Default)Not selected</option>
              <option value="full">Full paper</option>
              <option value="short">Project & short paper</option>
              <option value="cameraFull">Camera ready full paper</option>
              <option value="cameraShort">Camera ready short papers</option>
              <option value="workshop">Workshop paper</option>
          </select>
      </div>
        <label class="btn btn-default" for="paper">
          <input type="file" id="paper" name="paper" style="display:none;" onchange="$('#uploaded_file_name').html($(this).val());">
          Select file to upload
        </label>
        <span class='label label-info' id="uploaded_file_name"></span>
        <input type="submit" id="paper-submit" class="btn btn-primary" value="Submit">
        <div id="submit-alert"></div>
    </form>
    <?php if ($show_prev): ?>
        <a href="<?=PUBLIC_ROOT?>/submitters/PaperSubmission/get">Download last submission (.pdf)</a>
    <?php endif ?>
  </div>
</div>
<br>
<script src="<?=PUBLIC_ROOT?>/assets/js/paper_submit.js" defer='defer'></script>
