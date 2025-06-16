<?php
    // initalize numbers as an empty string
    $result = 1;
    $counter = 1;

    // Setting the variables and validating input
    $userNum = $_POST['userNumber'];
    if (!ctype_digit($userNum)) {
    echo "Please enter a non-negative whole number without decimals.";
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