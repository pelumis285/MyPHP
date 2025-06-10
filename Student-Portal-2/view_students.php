<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<h2>Student Records</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Grade</th>
            <th>Registered</th>
        </tr>
    </thead>
    <tbody>
        <?php
        try {
            $stmt = $conn->query("SELECT * FROM students ORDER BY registration_date DESC");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['student_name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                echo '<td>' . htmlspecialchars($row['phone']) . '</td>';
                echo '<td>' . htmlspecialchars($row['course']) . '</td>';
                echo '<td>' . htmlspecialchars($row['grade']) . '</td>';
                echo '<td>' . htmlspecialchars($row['registration_date']) . '</td>';
                echo '</tr>';
            }
        } catch(PDOException $e) {
            echo '<tr><td colspan="7" class="text-danger">Error loading student records: ' . $e->getMessage() . '</td></tr>';
        }
        ?>
    </tbody>
</table>

<?php require_once 'includes/footer.php'; ?>
