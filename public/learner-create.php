<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js/"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <title>Isikhalisezwe Registration</title>
    </head>
    <body>
        <div class="container mt-5">

            <?php include('message.php'); ?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Learner Add
                                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="post">
                                <div class="mb-3">
                                    <label>Grade Applied for</label>
                                    <input type="text" name="gradeAppliedFor" class="form-control" placeholder="Enter Grade" >
                                </div>
                                <div class="mb-3">
                                    <label>highest Grade Passed</label>
                                    <input type="text" name="highestGradePassed" placeholder="Enter highest Grade passed" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Year Grade Passed</label>
                                    <input type="text" name="yearWhenGradeWasPassed" placeholder="Enter year grade passed" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <h2>Learner Identity Information</h2>
                                </div>
                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input type="text" name="firstName" placeholder="Enter Grade" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <input type="text" name="lastName" placeholder="Enter Grade" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Initials</label>
                                    <input type="text" name="initials" placeholder="Enter Grade" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dateOfBirth" placeholder="Enter your date of birth" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>ID Number</label>
                                    <input type="text" name="idNumber" placeholder="Enter your ID number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="text" name="contactNumber" placeholder="Enter your Contact number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Race</label>
                                    <input type="text" name="race" placeholder="Enter your race" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Province</label>
                                    <input type="text" name="province" placeholder="Enter your province" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Gender</label>
                                    <input type="text" name="gender" placeholder="Enter your gender" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Home Language</label>
                                    <input type="text" name="homeLanguage" placeholder="Enter your home language" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Address</label>
                                    <input type="text" name="residentialAddress" placeholder="Residential address" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Code</label>
                                    <input type="text" name="residentialCode" placeholder="Residential code" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Learner Email Address</label>
                                    <input type="email" name="learnerEmailAddress" placeholder="Enter your email address" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Preferred Language of Instruction</label>
                                    <input type="text" name="preferredLanguageOfInstruction" placeholder="Preferred language of instruction" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Deceased Parent</label>
                                    <input type="text" name="deceasedParent" placeholder="Enter deceased parent, if any" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Dexterity of Learner</label>
                                    <input type="text" name="dexterityOfLearner" placeholder="left or right-handed or both" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Hearing Problem</label>
                                    <input type="text" name="hearingProblem" placeholder="Enter yes or no" class="form-control" >
                                </div>

                                <!-- Parent or Guardian Information -->
                                <div class="mb-3">
                                    <h2>Parent or Guardian Information</h2>
                                </div>

                                <div class="mb-3">
                                    <label>First Names</label>
                                    <input type="text" name="parentFirstNames" placeholder="firstnames" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Surname</label>
                                    <input type="text" name="parentSurname" placeholder="surname" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="parentTitle" placeholder="title" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Initials</label>
                                    <input type="text" name="parentInitials" placeholder="initials" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>ID Number</label>
                                    <input type="text" name="parentIdNumber" placeholder="ID number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="text" name="parentContactNumber" placeholder="contact number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Race</label>
                                    <input type="text" name="parentRace" placeholder="race" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Gender</label>
                                    <input type="date" name="parentGender" placeholder="gender" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Home Language</label>
                                    <input type="text" name="parentHomeLanguage" placeholder="home language" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Relationship</label>
                                    <input type="text" name="parentRelationship" placeholder="relationship" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Address</label>
                                    <input type="text" name="parentResidentialAddress" placeholder="residence address" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Code</label>
                                    <input type="text" name="parentResidentialCode" placeholder="residence code" class="form-control" >
                                </div>

                                <!-- Second parent/ Guardian Information -->
                                <div class="md-3">
                                    <h2>Second parent / Guardian Information</h2>
                                </div>
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="secondParentTitle" placeholder="title" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Initials</label>
                                    <input type="text" name="secondParentInitials" placeholder="initials" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>First Names</label>
                                    <input type="text" name="secondParentFirstNames" placeholder="Residential code" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Surname</label>
                                    <input type="text" name="secondParentSurname" placeholder="surname" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>ID Number</label>
                                    <input type="text" name="secondParentIdNumber" placeholder="ID number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Relationship</label>
                                    <input type="text" name="secondParentRelationship" placeholder="relationship" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Gender</label>
                                    <input type="text" name="secondParentGender" placeholder="gender" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Home Language</label>
                                    <input type="text" name="secondParentHomeLanguage" placeholder="home language" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Race</label>
                                    <input type="text" name="secondParentRace" placeholder="race" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Address</label>
                                    <input type="text" name="secondParentResidentialAddress" placeholder="residential address" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Residential Code</label>
                                    <input type="text" name="secondParentResidentialCode" placeholder="residential code" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="text" name="secondParentContactNumber" placeholder="contact number" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label>Upload File</label>
                                    <input type="file" name="files" placeholder="Upload File" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_learner" class="btn btn-primary">Save Learner</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>