  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
      <div class="container-fluid clearfix">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
              bootstrapdash.com
              2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                  href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                  admin
                  templates</a> from Bootstrapdash.com</span>
      </div>
  </footer>
  <!-- plugins:js -->
  <script src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/js/shared/off-canvas.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/js/shared/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/js/shared/jquery.cookie.js" type="text/javascript"></script>
  <script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function() {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function() {
    $('.image-upload-wrap').removeClass('image-dropping');
});
  </script>
  <script>
$('.collapse').collapse()
CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: '<?php echo _WEB_ROOT ?>/admin-news/storeUpload',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
});
  </script>
  <!-- End custom js for this page-->