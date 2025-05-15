<?php
$pageDesc= "This is the second Page";
$pageTitle= "Page Two | week 2";
require './includes/header.php';
?>

<section class="main-masthead">
    <div class="mask">
        <h1>Week 2 - Page Two</h1>
    </div>

</section>
<div class = "row" >
<?php
require './includes/sidebar.php';
?>

<main class="col-sm-12 col-md-9 col-lg-8">
    
        <?php
        include './includes/templateTwo.php';
        include './includes/templateOne.php';
        ?>

    </main>

</div>


<?php
require './includes/footer.php';
?>