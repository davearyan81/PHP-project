<script src="assest/js/jquery.min.js"></script>
<script src="assest/js/bootstrap5.bundlemin.js"></script>
<script src="assest/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- jquery -->
<script src="https://cdnjs.cloudflarjquery-3.6.4.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Dependent cities and states -->

<script>
    $(document).ready(function () {
        $('.hello').click(function () {
            var id = $(this).val();
            // alert(id); 
            $.ajax({
                method: 'POST',
                url: './view.php',
                data: {
                    pid: id
                },
                success: function (result) {
                    // console.log(result);
                    $('.modal-body').html(result);
                }
            });
            // $('#exampleModal').show();
        });
        $('#states').change(function () {
            var state_id = this.value;
            console.log(state_id);
            $.ajax({
                url: "ajax/city.php",
                method: "POST",
                data: { state_id: state_id },
                success: function (result) {
                    // console.log(result);
                    $('#city').html(result);
                }
            });
        });
        $('#states1').change(function () {
            var state_id = this.value;
            // console.log(state_id);
            $.ajax({
                url: "ajax/city.php",
                method: "POST",
                data: { state_id: state_id },
                success: function (result1) {
                    // console.log(result1);
                    $('#city1').html(result1);
                }
            });
        });

    });
</script>

<!-- //   Dependent Cities and states -->




<!-- owl carousel -->
<script src="owl_carousel/owl.carousel.js"></script>
<script src="script.js"></script>
</body>

</html>