<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $course = $_POST['course'] ?? '';
    $grade = $_POST['grade'] ?? '';

    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $conn->prepare("INSERT INTO students (student_name, email, phone, course, grade) VALUES (:name, :email, :phone, :course, :grade)");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':course' => $course,
                ':grade' => $grade
            ]);
            echo '<div class="alert alert-success">Student added successfully!</div>';
        } catch (PDOException $e) {
            echo '<div class="alert alert-danger">Error: ' . $e->getMessage() . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Please fill all required fields correctly.</div>';
    }
}
?>

<h2>Add New Student</h2>
<form method="post" class="my-4">
    <div class="mb-3">
        <label for="name" class="form-label">Full Name *</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone">
    </div>
    <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <input type="text" class="form-control" id="course" name="course">
    </div>
    <div class="mb-3">
        <label for="grade" class="form-label">Grade</label>
        <select class="form-select" id="grade" name="grade">
            <option value="">Select Grade</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="F">F</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>

<?php require_once 'includes/footer.php'; ?>
