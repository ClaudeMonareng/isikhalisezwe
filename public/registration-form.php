<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registration.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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

    include("C:/xampp/htdocs/isikhalisezwe/public/connect.php");
    if(isset($_POST['submit'])){

        $gradeAppliedFor = $_POST['gradeAppliedFor'];
        $highestGradePassed = $_POST['highestGradePassed'];
        $yearWhenGradeWasPassed = $_POST['yearWhenGradeWasPassed'];

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $initials = $_POST['initials'];

        $dateOfBirth = $_POST['dateOfBirth'];
        $idNumber = $_POST['idNumber'];
        $contactNumber = $_POST['contactNumber'];

        $race = $_POST['race'];
        $province = $_POST['province'];
        $gender = $_POST['gender'];

        $homeLanguage = $_POST['homeLanguage'];
        $residentialAddress = $_POST['residentialAddress'];
        $residentialCode = $_POST['residentialCode'];

        $learnerEmailAddress = $_POST['learnerEmailAddress'];
        $preferredLanguageOfInstruction = $_POST['preferredLanguageOfInstruction'];
        $deceasedParent = $_POST['deceasedParent'];

        $dexterityOfLearner = $_POST['dexterityOfLearner'];
        $hearingProblem = $_POST['hearingProblem'];

        $parentFirstNames = $_POST['parentFirstNames'];
        $parentSurname = $_POST['parentSurname'];
        $parentTitle = $_POST['parentTitle'];

        $parentInitials = $_POST['parentInitials'];
        $parentIdNumber = $_POST['parentIdNumber'];
        $parentContactNumber = $_POST['parentContactNumber'];

        $parentRace = $_POST['parentRace'];
        $parentGender = $_POST['parentGender'];
        $parentHomeLanguage = $_POST['parentHomeLanguage'];

        $parentRelationship = $_POST['parentRelationship'];
        $parentResidentialAddress = $_POST['parentResidentialAddress'];
        $parentResidentialCode = $_POST['parentResidentialCode'];

        $secondParentTitle = $_POST['secondParentTitle'];
        $secondParentInitials = $_POST['secontParentInitials'];
        $secondParentFirstNames = $_POST['secondParentFirstNames'];

        $secondParentSurname = $_POST['secondParentSurname'];
        $secondParentIdNumber = $_POST['secondParentIdNumber'];
        $secondParentRelationship = $_POST['secondParentRelationship'];

        $secondParentGender = $_POST['secondParentGender'];
        $secondParentHomeLanguage = $_POST['secondParentHomeLanguage'];
        $secondParentRace = $_POST['secondParentRace'];

        $secondParentResidentialAddress = $_POST['secondParentResidentialAddress'];
        $secondParentResidentialCode = $_POST['secondParentResidentialCode'];
        $secondParentContactNumber = $_POST['secondParentContactNumber'];
        
        // verifying the unique email

        // $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
        // if(mysqli_num_rows($verify_query) !=0){
        //     echo "<div class='message'>
        //             <p>This email is used, Try another One Please!</p>
        //           </div> <br>"
        //     echo "<a href='Javascript:self.history.back()'><button class='btn'>Go Back </button>";
        // }else{
        //     mysqli_query($con, "INSERT INTO registration( 
        //                  gradeAppliedFor, highestGradePassed, yearWhenGradeWasPassed, firstName, lastName, initials,
        //                  dateOfBirth, idNumber, contactNumber, race, province, gender, homeLanguage, residentialAddress,
        //                  residentialCode, learnerEmailAddress, preferredLanguageOfInstruction, deceasedParent, dexterityOfLearner,
        //                  hearingProblem, parentFirstNames, parentSurname, parentTitle, parentInitials, parentIdNumber, parentContactNumber,
        //                  parentRace, parentGender, parentHomeLanguage, parentRelationship,parentResidentialAddress, parentResidentialCode,
        //                  secondParentTitle, secontParentInitials, secondParentFirstNames, secondParentSurname, secondParentIdNumber,
        //                  secondParentRelationship, secondParentGender, secondParentHomeLanguage, secondParentRace,
        //                  secondParentResidentialAddress, secondParentResidentialCode, secondParentContactNumber) VALUES (
        //                 '$gradeAppliedFor', '$highestGradePassed', '$yearWhenGradeWasPassed',
        //                 '$firstName', '$lastName', '$initials', '$dateOfBirth', '$idNumber', '$contactNumber', '$race', '$province', '$gender', '$homeLanguage',
        //                 '$residentialAddress', '$residentialCode', '$learnerEmailAddress', '$preferredLanguageOfInstruction', '$deceasedParent',
        //                 '$dexterityOfLearner', '$hearingProblem', '$parentFirstNames', '$parentSurname', '$parentTitle', '$parentInitials', '$parentIdNumber',
        //                 '$parentContactNumber', '$parentRace', '$parentGender', '$parentHomeLanguage', '$parentRelationship', '$parentResidentialAddress',
        //                 '$parentResidentialCode', '$secondParentTitle', '$secondParentInitials', '$secondParentFirstNames', '$secondParentSurname',
        //                 '$secondParentIdNumber', '$secondParentRelationship', '$secondParentGender', '$secondParentHomeLanguage', '$secondParentRace',
        //                 '$secondParentResidentialAddress', '$secondParentResidentialCode', '$secondParentContactNumber')") or die("error Occurred");

        //                 echo "<div class='message'>
        //                         <p>Registration Successful</p>
        //                     </div> <br>"
        //                 echo "<a href='index.php'><button class='btn'>Registration</button>";

        // }
        
    }else{

    ?>

        <header>Online Registration</header>

        <form action="connect.php" method="post">
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
                    </div>
                </div>
                <div class="buttons">
                    <div class="backBtn">
                        <span class="btnText">Back</span>
                        <i class="uil uil-navigator"></i>
                    </div>
                    <div class="submitBtn">
                        <input type="submit" class="btnText" name="submit" value="Send">
                        <i class="uil uil-navigator"></i>
                    </div>
                </div>
            </div>
        </form>        
    </div>
    <?php }  ?>
    <script src="index.js"></script>
</body>
</html>