<?php
include("./config.php");

$name = $marks = $grade = $city = "";
$id = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("SELECT * FROM student WHERE rollno = ?");
    $query->execute([$id]);
    $students = $query->fetchAll();

    if (count($students) > 0) {
        $name = $students[0]['name'];
        $marks = (int)$students[0]['marks'];
        $grade = $students[0]['grade'];
        $city = $students[0]['city'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $marks = $_POST['marks'];
    $grade = $_POST['grade'];
    $city = $_POST['city'];

    $update_query = $conn->prepare("UPDATE student SET name=?, marks=?, grade=?, city=? WHERE rollno=?");
    if ($update_query->execute([$name, $marks, $grade, $city, $id])) {
        echo "Update successful!";
    } else {
        echo "Update failed!";
    }
}
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    
    <input type="text" value="<?php echo $name; ?>" name="name" placeholder="Enter name">
    <br/><br/>
    
    <input type="number" value="<?php echo $marks; ?>" name="marks" placeholder="Enter marks">
    <br/><br/>
    
    <input type="text" value="<?php echo $grade; ?>" name="grade" placeholder="Enter grade">
    <br/><br/>
    
    <input type="text" value="<?php echo $city; ?>" name="city" placeholder="Enter city">
    <br/><br/>
    
    <button type="submit" name="update">Update</button>
</form>
