<?php
// **********************  1  **************************  
// Initialize variables to store input values and errors
$name = $email = $nim = $major= $faculty = "";
$nameErr = $emailErr = $nimErr = $majorErr = $facultyErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // **********************  2  **************************  
    // - Capture the name value from the HTML form (See Task 7)
    // - Validate that the name cannot be empty
    // - Validate that the name consists of letters only (Hint: use the preg_match function (or other functions) )
    // place your code below
    $name = $_POST["name"];
    if (empty($name)) {
        $nameErr = "Name is Required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }

    // **********************  3  **************************  
    // - Capture the email value from the HTML form (See Task 7)
    // - Check if the email is empty
    // - Check if the email format is valid (Hint: use the filter_var function)
    // place your code below
    $email = $_POST["email"];
    if (empty($email)) {
        $emailErr = "Name is Required";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
    }

    // **********************  4  **************************  
    // - Capture the NIM value from the HTML form (See Task 7)
    // - Ensure that NIM is filled and in numeric format
    // place your code below
    $nim = $_POST["nim"];
    if (empty($nim)) {
        $nimErr = "NIM is Required";
    }    
    elseif (!ctype_digit($nim)){
        $nimErr = "NIM Sould be in Numbers";
    }

    // **********************  5  **************************  
    // - Capture the major value from the HTML form (See Task 7)
    // - Validate that the major cannot be empty
    // - Validate that the major consists of letters only (Hint: use the preg_match function (or other functions) )
    // place your code below
    $major = $_POST["major"];
    if (empty($major)) {
        $majorErr = "Major is Required";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$major)) {
        $majorErr = "Only letters and white space allowed";
      }

    // **********************  6  **************************  
    // - Capture the faculty value from the HTML form (See Task 7)
    // - Validate that the faculty cannot be empty
    // - Validate that the faculty consists of letters only (Hint: use the preg_match function (or other functions) )
    // place your code below
    $faculty = $_POST["faculty"];
    if (empty($faculty)) {
        $facultyErr = "Faculty is Required";
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$faculty)) {
        $facultyErr = "Only letters and white space allowed";
      }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Registration Form</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>New Student Registration Form</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <?php if (!empty($nameErr) || !empty($emailErr) || !empty($nimErr) || !empty($majorErr) || !empty($facultyErr)) { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> Please correct the incorrect data.
            </div>
            <?php } else { ?>
            <div class="alert alert-success">
                <strong>Success!</strong> Registration data has been received.
            </div>
            <?php } ?>
        <?php } ?>

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <!-- **********************  7  ************************** -->
            <!-- Add value in each form-group/column to retain input data in the form after submit (retaining input) -->
            <!-- Hint: the value in the input form should contain the variable that stores the input data -->
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>">
            <span class="error"><?php echo $nameErr ? "* $nameErr" : ""; ?></span>
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email;?>">
            <span class="error"><?php echo $emailErr ? "* $emailErr" : ""; ?></span>
            </div>

            <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim"  value="<?php echo $nim;?>">
            <span class="error"><?php echo $nimErr ? "* $nimErr" : ""; ?></span>
            </div>

            <div class="form-group">
            <label for="major">Major</label>
            <input type="text" id="major" name="major"  value="<?php echo $major;?>">
            <span class="error"><?php echo $majorErr ? "* $majorErr" : ""; ?></span>
            </div>

            <div class="form-group">
            <label for="faculty">Faculty</label>
            <input type="text" id="faculty" name="faculty"  value="<?php echo $faculty;?>">
            <span class="error"><?php echo $facultyErr ? "* $facultyErr" : ""; ?></span>
            </div>

            <div class="button-container">
            <button type="submit">Register</button>
            </div>
        </form>
    </div>

    <!-- **********************  8  ************************** -->
    <!-- Call the variable that contains the error message (Hint: use if and post method) -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$nimErr && !$majorErr && !$facultyErr){ ?> 

    <div class="container">
        <h3>Registration Data</h3>
        <div class="table-container">
    <!-- **********************  9  ************************** -->
    <!-- Displays the newly entered registration data in a table format -->
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>nim</th>
                        <th>major</th>
                        <th>faculty</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $nim; ?></td>
                        <td><?php echo $major; ?></td>
                        <td><?php echo $faculty; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php } ?>
</body>
</html>
