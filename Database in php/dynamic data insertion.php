
<form action="" method="post">
<input type ="number" placeholder ="enter roll no" name="rollno">
<br/>
<br/>
<input type ="text" placeholder ="enter name" name="name">
<br/>
<br/>
<input type ="number" placeholder ="enter your marks" name="marks">
<br/>
<br/>
<input type ="text" placeholder ="enter your grade" name="grade">
<br/>
<br/>
<input type ="text" placeholder ="enter city name" name="city">
<br/>
<br/>
<input type ="number" placeholder ="enter age" name="age">
<br/>
<br/>
<button>submit</button>


</form>


<?php
include("./config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Basic validation: check if all fields are set and not empty
    if (
        !empty($_POST['rollno']) &&
        !empty($_POST['name']) &&
        isset($_POST['marks']) && $_POST['marks'] !== '' &&
        !empty($_POST['grade']) &&
        !empty($_POST['city']) &&
        isset($_POST['age']) && $_POST['age'] !== ''
    ) {
        $query = $conn->prepare("
            INSERT INTO `student` (`rollno`, `name`, `marks`, `grade`, `city`, `age`) 
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $result = $query->execute([
            (int)$_POST['rollno'],
            $_POST['name'],
            (int)$_POST['marks'],
            $_POST['grade'],
            $_POST['city'],
            (int)$_POST['age']
        ]);

        if ($result) {
            echo "✅ Data inserted successfully.";
        } else {
            echo "❌ Failed to insert data.";
        }
    } else {
        echo "⚠️ Please fill in all fields correctly.";
    }
}
?>
