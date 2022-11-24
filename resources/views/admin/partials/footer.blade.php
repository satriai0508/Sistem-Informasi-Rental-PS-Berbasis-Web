    <!-- BJquery tether Core JavaScript -->
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/sidebarmenu.js"></script>
    <script>
    function showPreview(objFileInput) {
        if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            $("#targetLayer").html('<img src="' + e.target.result + '" class="img-fluid w-50 h-50 m-md-2" />');
            $("#targetLayer").css('opacity', '0.7');
            $(".icon-choose-image").css('opacity', '0.5');
        }
        fileReader.readAsDataURL(objFileInput.files[0]);
        }
    }
    </script>
    </body>
    </html>
