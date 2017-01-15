
<div class="container-content">
  <div class="container">
    <h1>Paper Submission</h1>
    <hr>
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
        <div id="submit-alert"></div>
        <label class="btn btn-default" for="paper">
          <input type="file" id="paper" name="paper" style="display:none;" onchange="$('#uploaded_file_name').html($(this).val());">
          Select file to upload
        </label>
        <span class='label label-info' id="uploaded_file_name"></span>
        <input type="submit" id="paper-submit" class="btn btn-primary" value="Submit">
      </div>
    </form>
    <?php if ($show_prev): ?>
        <a href="get">Download last submission (.pdf)</a>
    <?php endif ?>
  </div>
</div>
<br>
<script src="<?=PUBLIC_ROOT?>/assets/js/paper_submit.js" defer='defer'></script>
