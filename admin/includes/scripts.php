<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
    <script>window.history.forward();</script>
    <script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../admin/js/datatables-simple-demo.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script> -->
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
    });
    // $(document).ready(function () {
    //     // $("#your_summernote").summernote();
    //     $('#your_summernote1').summernote({
    //         height: 150
    //     });
    //     $('.dropdown-toggle').dropdown();
    // });
</script>
<!-- //Summernote JS - CDN Link -->
<script>
    function mydelete(){
        return confirm("Are you Sure you want to delete daa ...");
    }
</script>
</body>

</html>