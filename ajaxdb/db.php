<?php
$link = mysqli_connect("localhost", "root", "", "design");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error($link));
}
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM register WHERE name LIKE ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_term); 
        $param_term = $_REQUEST["term"] . '%';
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<table border='2'>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>

                        </tr>"; 
                    echo "<tr>" ;
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Number'] . "</td>";
                    echo "</tr>" ;
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    if (!isset($check1_res)) {
        printf("Error: %s\n", mysqli_error($link));
        exit();
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($link);
?>
