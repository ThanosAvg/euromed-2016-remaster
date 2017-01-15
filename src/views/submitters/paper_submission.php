
<div class="container-content">
  <div class="container">
    <h2>Paper Submission</h2>
    <hr>
    <div class="panel panel-default">
      <div class="panel-heading"><h4><i class="fa fa-cloud-upload" aria-hidden="true"></i> Paper Submission Capability</h4></div>
        <div class="panel-body">
          <h4>Full paper <kbd class="invalid-color">CLOSED</kbd></h4>
          <h4>Project & short paper <kbd class="invalid-color">CLOSED</kbd></h4>
          <h4>Camera ready full papers <kbd class="valid-color">OPEN</kbd></h4>
          <h4>Camera ready short papers <kbd class="valid-color">OPEN</kbd></h4>
          <h4>Workshop paper <kbd class="valid-color">OPEN</kbd></h4>
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
              <li>Check if your file agrees with the form requirements</li>
              <li>Click the (select file to upload) button</li>
              <li>Navigate to your computer and select your paper</li>
              <li>Press the submit button</li>
              <li>In case you are not logged in you will be prompt to,
              or to create an account if you have not</li>
            </ol>
            </h4>  
          </div>
        </div>
      </div>
    </div>
    <?php if(!empty($_GET['msg']) && $_GET['msg'] == 0): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            File upload successful
        </div>
    <?php elseif(!empty($_GET['msg']) && $_GET['msg'] == 1): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oops!</strong> Upload failed. Please try again in a few moments.
        </div>
    <?php endif ?>
    <form id="paper-submit-form" name="paper-submit-form" method="post" action="<?=PUBLIC_ROOT?>/submitters/PaperSubmission/submit" enctype="multipart/form-data">  
      <div class="form-group">
        <label class="btn btn-default" for="paper">
          <input type="file" id="paper" name="paper" style="display:none;" onchange="$('#uploaded_file_name').html($(this).val());">
          Select file to upload
        </label>
        <span class='label label-info' id="uploaded_file_name"></span>
        <input type="submit" id="paper-submit" class="btn btn-primary" value="Submit">
        <div id="submit-alert"></div>
      </div>
    </form>
    <?php if ($show_prev): ?>
        <a href="get">Download last submission (.pdf)</a>
    <?php endif ?>
  </div>
</div>
<br>
<script src="<?=PUBLIC_ROOT?>/assets/js/paper_submit.js" defer='defer'></script>
