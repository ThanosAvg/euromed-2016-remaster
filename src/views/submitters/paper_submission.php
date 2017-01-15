
<div class="container-content">
  <div class="container">
    <h1>Paper Submission</h1>
    <hr>
    <form id="paper-submit-form" name="paper-submit-form" method="post" action="<?=PUBLIC_ROOT?>/../models/paper_upload.php" enctype="multipart/form-data">  
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
  </div>
</div>
<br>
<script src="<?=PUBLIC_ROOT?>/assets/js/paper_submit.js" defer='defer'></script>