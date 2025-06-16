<?php
    // initalize numbers as an empty string
    $result = 1;
    $counter = 1;

    // Setting the variables and validating input
    $userNum = $_POST['userNumber'];
    if ($userNum < 0) {
        echo "Please enter a non-negative integer.";
        exit;
    }

    do {
        $result = $result * $counter;
        $counter++;
    } while ($counter <= $userNum);

?>
	<!-- display the results -->
    <h4>Results:</h4>
    <?php echo $result ?>