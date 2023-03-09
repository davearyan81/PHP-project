<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script>window.history.forward();</script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../admin/js/datatables-simple-demo.js"></script>

<!-- Summernote JS - CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function () {
        // $("#your_summernote").summernote();
        $('#summernote').summernote({
            height: 150
        });
        $('.dropdown-toggle').dropdown();
        $('#summernote1').summernote({
            height: 150
        });
        $('.dropdown-toggle').dropdown();
        $('select').selectpicker();
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<!-- //Summernote JS - CDN Link -->

<!-- Custom Confirm box -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function mydelete(){
        return confirm("Are you sure u want to delete data");
    }
</script>
</body>

</html>