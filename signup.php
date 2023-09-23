<?php
session_start();


    require_once "ClassAutoLoad.php";
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
// Assuming you have a table named 'users' with a column 'username' for user names

    
$sql = "SELECT username FROM users ORDER BY email_address ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) > 0) {
    echo "<ol>"; 
    foreach ($users as $index => $user) {
        echo "<li>" . ($index + 1) . ". " . $user['username'] . "</li>";
    }
    echo "</ol>";
} else {
    echo "No users have signed up yet.";
}

        $OBJ_Layout->headers($conf);
        $OBJ_Layout->logo($conf);
        $OBJ_Layout->navigation();
        $OBJ_Layout->banner();
        $OBJ_Forms->sign_up_form();
        $OBJ_Layout->footer($conf);

    

