<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'includes/header.php';
?>

<div class="text-center">
    <h2>Welcome to the Student Portal</h2>
    <p class="lead">Choose an action below:</p>

    <div class="d-grid gap-3 col-6 mx-auto my-4">
        <a href="add_student.php" class="btn btn-success btn-lg">Add New Student</a>
        <a href="view_students.php" class="btn btn-primary btn-lg">View All Students</a>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
