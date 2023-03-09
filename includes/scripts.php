<script src="assest/js/jquery.min.js"></script>
<script src="assest/js/bootstrap5.bundlemin.js"></script>
<script src="assest/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

<!-- Dependent cities and states -->

<script>
    $(document).ready(function () {
        $('#states').change(function () {
            var state_id = this.value;
            // console.log(state_id);
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
  <!-- Dependent Cities and states -->
</script>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- owl carousel -->
<script src="owl_carousel/owl.carousel.js"></script>
<script src="script.js"></script>
</body>

</html>