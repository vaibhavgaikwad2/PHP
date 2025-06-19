<form action="" method="post">
    <input type ="text" name="search" placeholder ="enter name for search">
<br/>
<br/>

<button>Search</button>
</form>

<?php
include("./config.php");

if(isset($_POST['search'])){
    $search_name=$_POST['search'];

    //echo $search_name;
    $query = $conn->prepare("SELECT * FROM student WHERE name = '$search_name'");
    $query->execute();
    $result=$query->fetchAll();
    
    echo "<table border='1'>";
    foreach($result as $results){
        echo "<tr>
        <td>".$results['rollno']."</td>
        <td>".$results['name']."</td>
        <td>".$results['marks']."</td>
        <td>".$results['grade']."</td>
        <td>".$results['city']."</td>
        
        </tr>";

    }
    echo "</table>";
}



?>