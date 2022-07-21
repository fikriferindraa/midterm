<?php
    include_once("dbconnect.php");
    $sqlsubjects = "SELECT * FROM tbl_subjects ORDER BY subject_id DESC";
    $stmt = $conn->prepare($sqlsubjects);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>My Tutor</title>
</head>

<body>
    <div class="w3-header w3-display-container w3-green w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px+4vw); margin-bottom:0;">MyTutor</h1>
        <p style="font-size:calc(8px+1vw); margin-top:0;">Best to Help You Understanding</p>
    </div>

    <a href="index.php">Back to Home</a>

    <div class="w3-card w3-container w3-padding w3-margin w3-round">
        <h3>Product Search</h3>
        <form>
            <div class="w3-row">
                <div class="w3-half">
                    <input class="w3-input w3-block w3-round w3-border" type="search" name="search"
                        placeholder="Enter Search Term"></input>
                </div>
                <div class="w3-half">
                    <select class="w3-input w3-block w3-round w3-border" name="option">
                        <option value="name">By Product Name</option>
                        <option value="ic">By Type</option>
                    </select>
                </div>
            </div>
            <button class="w3-button w3-green w3-round w3-right" type="submit" name="search"
                value="search">Search</button>
        </form>
    </div>


    <div class="w3-grid-template w3-cell-middle" style="width:50%; margin:auto">
        <?php
        $i=0;
        foreach ($rows as $subject) {
            $i++;
            $id = $subject['subject_id'];
            $name = $subject['subject_name'];
            $description = $subject['subject_description'];
            $price = $subject['subject_price'];
            echo "<div class='w3-center w3-padding w3-margin'>";
            echo "<div class='w3-card-4 w3-dark-grey w3-cell-middle'>";
            echo "<header class='w3-container w3-blue'>";
            echo "<h5>$name</h5>";
            echo "</header>";
            echo "<img class='w3-image' src=assets/courses/$id.png" . 
                " onerror=this.onerror=null;this.src='assets/error/error-image.png'"
                . " style='width:100%;height:500px'>";
            echo "<div class='w3-container w3-left-align'><hr>";
            echo "<p><i class='fa fa-id-card' style='font-size:16px'></i>&nbsp&nbsp$id<br>
            <i class='fa fa-id-card' style='font-size:16px'></i>&nbsp&nbsp$description<br>
            <i class='fa fa-id-card' style='font-size:16px'></i>&nbsp&nbsp$price<br></p><hr>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        ?>
    </div>

    <footer class="w3-container w3-green w3-center">Copyright@2022 MyTutor</footer>
</body>

</html>