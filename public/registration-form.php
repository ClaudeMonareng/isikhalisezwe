
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style-registration.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js/"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></script>
        <title>Isikhalisezwe Registration</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="index.html"><img src="images/logo2.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="subjects.html">Subjects</a></li>
                        <li><a href="https://claudemonareng.github.io/fine-point/">Blog</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </header>

        <div class="container">

            <?php
                include("connect.php");
                include("upload.php");
            ?>

            <header>Online Registration</header>

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method= "post" enctype= "multipart/form-data">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Learner Personal Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Grade Applied for</label>
                                <input type="text" name="gradeAppliedFor" placeholder="Enter Grade" required >
                            </div>
                            <div class="input-field">
                                <label>Highest Grade Passed</label>
                                <input type="text" name="highestGradePassed" placeholder="Enter Highest Grade Passed" required >
                            </div>
                            <div class="input-field">
                                <label>Year Grade Passed</label>
                                <input type="text" name="yearWhenGradeWasPassed" placeholder="Enter year when Grade was Passed: " required >
                            </div>
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" name="firstName" placeholder="Enter your first name" required >
                            </div>
                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="lastName" placeholder="Enter your last name" required >
                            </div>
                            <div class="input-field">
                                <label>Initials</label>
                                <input type="text" name="initials" placeholder="Enter your initials" required >
                            </div>
                        </div>
                    </div>
                    <div class="details id">
                        <span class="title">Learner Identity Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dateOfBirth" placeholder="Enter your date of birth" required >
                            </div>
                            <div class="input-field">
                                <label>ID Number</label>
                                <input type="text" name="idNumber" placeholder="Enter your ID number" required >
                            </div>
                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="text" name="contactNumber" placeholder="Enter your contact number" required >
                            </div>
                            <div class="input-field">
                                <label>Race</label>
                                <input type="text" name="race" placeholder="Enter your race" required >
                            </div>
                            <div class="input-field">
                                <label>Province</label>
                                <input type="text" name="province" placeholder="Enter your province" required >
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                <input type="text" name="gender" placeholder="Enter your gender" required >
                            </div>
                            <div class="input-field">
                                <label>Home Language</label>
                                <input type="text" name="homeLanguage" placeholder="Enter your home language" required >
                            </div>
                            <div class="input-field">
                                <label>Residential Address</label>
                                <input type="text" name="residentialAddress" placeholder="Residential address" required >
                            </div>
                            <div class="input-field">
                                <label>Residential Code</label>
                                <input type="text" name="residentialCode" placeholder="Residential code" required >
                            </div>
                            <div class="input-field">
                                <label>Learner Email Address</label>
                                <input type="email" name="learnerEmailAddress" placeholder="Enter your email address" required >
                            </div>
                            <div class="input-field">
                                <label>Preferred Language of Instruction</label>
                                <input type="text" name="preferredLanguageOfInstruction" placeholder="Preferred language of instruction" required >
                            </div>
                            <div class="input-field">
                                <label>Deceased Parent</label>
                                <input type="text" name="deceasedParent" placeholder="Enter deceased parent, if any" required >
                            </div>
                        </div>
                    </div>
                    <div class="details address">
                        <span class="title">Learner Identity Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Dexterity of Learner</label>
                                <input type="text" name="dexterityOfLearner" placeholder="left or right-handed or both" required >
                            </div>
                            <div class="input-field">
                                <label>Do you have a hearing problem?</label>
                                <input type="text" name="hearingProblem" placeholder="Yes or No" required >
                            </div>
                        </div>
                    </div>
                    <div class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </div>
                </div>
                <div class="form second">
                    <div class="parent details id">
                        <span class="title">Parent or Guardian Information</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>First Names</label>
                                <input type="text" name="parentFirstNames" placeholder="Enter your firstnames" required >
                            </div>
                            <div class="input-field">
                                <label>Surname</label>
                                <input type="text`" name="parentSurname" placeholder="Enter your surname" required >
                            </div>
                            <div class="input-field">
                                <label>Title</label>
                                <input type="text" name="parentTitle" placeholder="Enter your title" required >
                            </div>
                            <div class="input-field">
                                <label>Initials</label>
                                <input type="text" name="parentInitials" placeholder="Enter your initials" required >
                            </div>
                            <div class="input-field">
                                <label>ID Number</label>
                                <input type="text" name="parentIdNumber" placeholder="Enter your ID Number" required >
                            </div>
                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="text" name="parentContactNumber" placeholder="Enter your contact number" required >
                            </div>
                            <div class="input-field">
                                <label>Race</label>
                                <input type="text" name="parentRace" placeholder="Race" required >
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                <input type="text" name="parentGender" placeholder="Enter your gender" required >
                            </div>
                            <div class="input-field">
                                <label>Home Language</label>
                                <input type="text" name="parentHomeLanguage" placeholder="Home Language" required >
                            </div>
                            <div class="input-field">
                                <label>Relationship</label>
                                <input type="text" name="parentRelationship" placeholder="Relationship" required >
                            </div>
                            <div class="input-field">
                                <label>Residential Address</label>
                                <input type="text" name="parentResidentialAddress" placeholder="Residence Address" required >
                            </div>
                            <div class="input-field">
                                <label>Residential Code</label>
                                <input type="text" name="parentResidentialCode" placeholder="Residence Code" required >
                            </div>
                        </div>
                    </div>
                    <div class="second parent details id">
                        <span class="title">Second Parent/ Guardian Information</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Title</label>
                                <input type="text" name="secondParentTitle" placeholder="Enter your title" required >
                            </div>
                            <div class="input-field">
                                <label>Initials</label>
                                <input type="text" name="secondParentInitials" placeholder="Enter your initials" required >
                            </div>
                            <div class="input-field">
                                <label>First Names</label>
                                <input type="text" name="secondParentFirstNames" placeholder="Enter your first name(s)" required >
                            </div>
                            <div class="input-field">
                                <label>Surname</label>
                                <input type="text" name="secondParentSurname" placeholder="Enter your surname" required >
                            </div>
                            <div class="input-field">
                                <label>ID Number</label>
                                <input type="text" name="secondParentIdNumber" placeholder="Enter your ID Number" required >
                            </div>
                            <div class="input-field">
                                <label>Relationship</label>
                                <input type="text" name="secondParentRelationship" placeholder="Enter your relationship" required >
                            </div>
                            <div class="input-field">
                                <label>Gender</label>
                                <input type="text" name="secondParentGender" placeholder="gender" required >
                            </div>
                            <div class="input-field">
                                <label>Home Language</label>
                                <input type="text" name="secondParentHomeLanguage" placeholder="Enter your home language" required >
                            </div>
                            <div class="input-field">
                                <label>Race</label>
                                <input type="text" name="secondParentRace" placeholder="race" required >
                            </div>
                            <div class="input-field">
                                <label>Residential Address</label>
                                <input type="text" name="secondParentResidentialAddress" placeholder="Residence Address" required >
                            </div>
                            <div class="input-field">
                            <label>Residential Code</label>
                                <input type="text" name="secondParentResidentialCode" placeholder="Residence Code" required >
                            </div>
                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="text" name="secondParentContactNumber" placeholder="contactNumber" required >
                            </div>
                            <div class="input-field">
                                <label>Upload File</label>
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="backBtn">
                            <span class="btnText">Back</span>
                            <i class="uil uil-navigator"></i>
                        </div>
                        <div class="submitBtn">
                            <input type="submit" name="submit">
                            <i class="uil uil-envelope-send"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="index.js"></script>
    </body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $gradeAppliedFor = filter_input(INPUT_POST, "gradeAppliedFor", FILTER_SANITIZE_SPECIAL_CHARS);
        $highestGradePassed = filter_input(INPUT_POST, "highestGradePassed", FILTER_SANITIZE_SPECIAL_CHARS);
        $yearWhenGradeWasPassed = filter_input(INPUT_POST, "yearWhenGradeWasPassed", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $firstName = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
        $lastName = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);
        $initials = filter_input(INPUT_POST, "initials", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $dateOfBirth = filter_input(INPUT_POST, "dateOfBirth", FILTER_SANITIZE_SPECIAL_CHARS);
        $idNumber = filter_input(INPUT_POST, "idNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        $contactNumber = filter_input(INPUT_POST, "contactNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $race = filter_input(INPUT_POST, "race", FILTER_SANITIZE_SPECIAL_CHARS);
        $province = filter_input(INPUT_POST, "province", FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $homeLanguage = filter_input(INPUT_POST, "homeLanguage", FILTER_SANITIZE_SPECIAL_CHARS);
        $residentialAddress = filter_input(INPUT_POST, "residentialAddress", FILTER_SANITIZE_SPECIAL_CHARS);
        $residentialCode = filter_input(INPUT_POST, "residentialCode", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $learnerEmailAddress = filter_input(INPUT_POST, "learnerEmailAddress", FILTER_SANITIZE_SPECIAL_CHARS);
        $preferredLanguageOfInstruction = filter_input(INPUT_POST, "preferredLanguageOfInstruction", FILTER_SANITIZE_SPECIAL_CHARS);
        $deceasedParent = filter_input(INPUT_POST, "deceasedParent", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $dexterityOfLearner = filter_input(INPUT_POST, "dexterityOfLearner", FILTER_SANITIZE_SPECIAL_CHARS);
        $hearingProblem = filter_input(INPUT_POST, "hearingProblem", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $parentFirstNames = filter_input(INPUT_POST, "parentFirstNames", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentSurname = filter_input(INPUT_POST, "parentSurname", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentTitle = filter_input(INPUT_POST, "parentTitle", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $parentInitials = filter_input(INPUT_POST, "parentInitials", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentIdNumber = filter_input(INPUT_POST, "parentIdNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentContactNumber = filter_input(INPUT_POST, "parentContactNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $parentRace = filter_input(INPUT_POST, "parentRace", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentGender = filter_input(INPUT_POST, "parentGender", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentHomeLanguage = filter_input(INPUT_POST, "parentHomeLanguage", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $parentRelationship = filter_input(INPUT_POST, "parentRelationship", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentResidentialAddress = filter_input(INPUT_POST, "parentResidentialAddress", FILTER_SANITIZE_SPECIAL_CHARS);
        $parentResidentialCode = filter_input(INPUT_POST, "parentResidentialCode", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $secondParentTitle = filter_input(INPUT_POST, "secondParentTitle", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentInitials = filter_input(INPUT_POST, "secondParentInitials", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentFirstNames = filter_input(INPUT_POST, "secondParentFirstNames", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $secondParentSurname = filter_input(INPUT_POST, "secondParentSurname", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentIdNumber = filter_input(INPUT_POST, "secondParentIdNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentRelationship = filter_input(INPUT_POST, "secondParentRelationship", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $secondParentGender = filter_input(INPUT_POST, "secondParentGender", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentHomeLanguage = filter_input(INPUT_POST, "secondParentHomeLanguage", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentRace = filter_input(INPUT_POST, "secondParentRace", FILTER_SANITIZE_SPECIAL_CHARS);

        $secondParentResidentialAddress = filter_input(INPUT_POST, "secondParentResidentialAddress", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentResidentialCode = filter_input(INPUT_POST, "secondParentResidentialCode", FILTER_SANITIZE_SPECIAL_CHARS);
        $secondParentContactNumber = filter_input(INPUT_POST, "secondParentContactNumber", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($gradeAppliedFor)){
            echo"please enter grade applied for";
        }elseif(empty($highestGradePassed)){
            echo"Please enter a password";
        }
        $sql = "INSERT INTO registration(gradeAppliedFor, highestGradePassed, yearWhenGradeWasPassed, firstName, lastName, initials,
                            dateOfBirth, idNumber, contactNumber, race, province, gender, homeLanguage, residentialAddress,
                            residentialCode, learnerEmailAddress, preferredLanguageOfInstruction, deceasedParent, dexterityOfLearner,
                            hearingProblem, parentFirstNames, parentSurname, parentTitle, parentInitials, parentIdNumber, parentContactNumber,
                            parentRace, parentGender, parentHomeLanguage, parentRelationship,parentResidentialAddress, parentResidentialCode,
                            secondParentTitle, secondParentInitials, secondParentFirstNames, secondParentSurname, secondParentIdNumber,
                            secondParentRelationship, secondParentGender, secondParentHomeLanguage, secondParentRace,
                            secondParentResidentialAddress, secondParentResidentialCode, secondParentContactNumber)
                            VALUES ('$gradeAppliedFor', '$highestGradePassed', '$yearWhenGradeWasPassed',
                                    '$firstName', '$lastName', '$initials', '$dateOfBirth', '$idNumber', '$contactNumber', 
                                    '$race', '$province', '$gender', '$homeLanguage','$residentialAddress', '$residentialCode', 
                                    '$learnerEmailAddress', '$preferredLanguageOfInstruction', '$deceasedParent','$dexterityOfLearner', 
                                    '$hearingProblem', '$parentFirstNames', '$parentSurname', '$parentTitle', '$parentInitials', 
                                    '$parentIdNumber','$parentContactNumber', '$parentRace', '$parentGender', '$parentHomeLanguage', 
                                    '$parentRelationship', '$parentResidentialAddress','$parentResidentialCode','$secondParentTitle', 
                                    '$secondParentInitials', '$secondParentFirstNames', '$secondParentSurname','$secondParentIdNumber', 
                                    '$secondParentRelationship', '$secondParentGender', '$secondParentHomeLanguage','$secondParentRace',
                                    '$secondParentResidentialAddress', '$secondParentResidentialCode', '$secondParentContactNumber')";
        try{
            mysqli_query($con, $sql);
        }catch(mysqli_sql_exception){
            echo"Sorry you could not register. Please try later";
        }
    }
    // mysqli_close($con);
?>