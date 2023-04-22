<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html>

<head>

    <style type="text/css">

    </style>
</head>

<body>
    <div class="product-images">
        <img src="image\natrajan.jpg" alt="Product Image" class="active">
        <img src="image\natrajan2.png" alt="Product Image">
        <img src="image\natrajan2.png" alt="Product Image">
    </div>
    <div class="product-thumbnails">
        <img src="image1.jpg" alt="Product Image" class="active-thumbnail">
        <img src="image2.jpg" alt="Product Image" class="thumbnail">
        <img src="image3.jpg" alt="Product Image" class="thumbnail">
    </div>
    <script type="text/javascript">
        const images = document.querySelectorAll('.product-images img');
        const thumbnails = document.querySelectorAll('.product-thumbnails img');

        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                images.forEach(image => image.classList.remove('active'));
                thumbnails.forEach(thumbnail => thumbnail.classList.remove('active-thumbnail'));
                images[index].classList.add('active');
                thumbnail.classList.add('active-thumbnail');
            });
        });
    </script>
</body>

</html>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>