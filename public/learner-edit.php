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
        <title>learner-edit</title>
    </head>
    <body>
        <div class="container mt-5">
            
            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Learner Edit
                                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <?php
                                if(isset($_GET['id'])){
                                    $learner_id = mysqli_real_escape_string($con, $_GET['id']);
                                    $query = "SELECT * FROM registration WHERE id='$learner_id' ";
                                    $query_run = mysqli_query($con, $query);
                                    
                                    if(mysqli_num_rows($query_run) > 0){ 

                                        $learner = mysqli_fetch_array($query_run);
                                    
                                        ?>
                                       
                                        <form action="code.php" method="post">
                                        
                                            <input type="hidden" name="learner_id" value="<?= $learner_id; ?>">

                                            <div class="mb-3">
                                                <label>Grade Applied for</label>
                                                <input type="text" name="gradeAppliedFor" value="<?=$learner['gradeAppliedFor']; ?>" class="form-control" placeholder="Enter Grade" >
                                            </div>
                                            <div class="mb-3">
                                                <label>highest Grade Passed</label>
                                                <input type="text" name="highestGradePassed" value="<?=$learner['highestGradePassed']; ?>" placeholder="Enter highest Grade passed" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Year Grade Passed</label>
                                                <input type="text" name="yearWhenGradeWasPassed" value="<?=$learner['yearWhenGradeWasPassed']; ?>" placeholder="Enter year grade passed" class="form-control" >
                                            </div>

                                            <div class="mb-3">
                                                <h2>Learner Identity Information</h2>
                                            </div>
                                            <div class="mb-3">
                                                <label>First Name</label>
                                                <input type="text" name="firstName" value="<?=$learner['firstName']; ?>" placeholder="Enter Grade" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Last Name</label>
                                                <input type="text" name="lastName" value="<?=$learner['lastName']; ?>" placeholder="Enter Grade" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <input type="text" name="initials" value="<?=$learner['initials']; ?>" placeholder="Enter Grade" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Date of Birth</label>
                                                <input type="date" name="dateOfBirth" value="<?=$learner['dateOfBirth']; ?>" placeholder="Enter your date of birth" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <input type="text" name="idNumber" value="<?=$learner['idNumber']; ?>" placeholder="Enter your ID number" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <input type="text" name="race" value="<?=$learner['race']; ?>" placeholder="Enter your race" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Province</label>
                                                <input type="text" name="province" value="<?=$learner['province']; ?>" placeholder="Enter your province" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <input type="text" name="gender" value="<?=$learner['gender']; ?>" placeholder="Enter your gender" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <input type="text" name="homeLanguage" value="<?=$learner['homeLanguage']; ?>" placeholder="Enter your home language" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <input type="text" name="residentialCode" value="<?=$learner['residentialCode']; ?>" placeholder="Residential address" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <input type="text" name="residentialCode" value="<?=$learner['residentialCode']; ?>" placeholder="Residential code" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Learner Email Address</label>
                                                <input type="email" name="learnerEmailAddress" value="<?=$learner['learnerEmailAddress']; ?>" placeholder="Enter your email address" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Preferred Language of Instruction</label>
                                                <input type="text" name="preferredLanguageOfInstruction" value="<?=$learner['preferredLanguageOfInstruction']; ?>" placeholder="Preferred language of instruction" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Deceased Parent</label>
                                                <input type="text" name="deceasedParent" value="<?=$learner['deceasedParent']; ?>" placeholder="Enter deceased parent, if any" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Dexterity of Learner</label>
                                                <input type="text" name="dexterityOfLearner" value="<?=$learner['dexterityOfLearner']; ?>" placeholder="left or right-handed or both" class="form-control" >
                                            </div>

                                            <!-- Parent or Guardian Information -->
                                            
                                            <div class="mb-3">
                                                <h2>Parent or Guardian Information</h2>
                                            </div>

                                            <div class="mb-3">
                                                <label>First Names</label>
                                                <input type="text" name="parentFirstNames" value="<?=$learner['parentFirstNames']; ?>" placeholder="firstnames" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Surname</label>
                                                <input type="text" name="parentSurname" value="<?=$learner['parentSurname']; ?>" placeholder="surname" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input type="text" name="parentTitle" value="<?=$learner['parentTitle']; ?>" placeholder="title" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <input type="text" name="parentInitials" value="<?=$learner['parentInitials']; ?>" placeholder="initials" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <input type="text" name="parentIdNumber" value="<?=$learner['parentIdNumber']; ?>" placeholder="ID number" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Contact Number</label>
                                                <input type="text" name="parentContactNumber" value="<?=$learner['parentContactNumber']; ?>" placeholder="contact number" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <input type="text" name="parentRace" value="<?=$learner['parentRace']; ?>" placeholder="race" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <input type="text" name="parentGender" value="<?=$learner['parentGender']; ?>" placeholder="gender" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <input type="text" name="parentHomeLanguage" value="<?=$learner['parentHomeLanguage']; ?>" placeholder="home language" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Relationship</label>
                                                <input type="text" name="parentRelationship" value="<?=$learner['parentRelationship']; ?>" placeholder="relationship" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <input type="text" name="parentResidentialAddress" value="<?=$learner['parentResidentialAddress']; ?>" placeholder="residence address" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <input type="text" name="residentialCode" value="<?=$learner['residentialCode']; ?>" placeholder="residence code" class="form-control" >
                                            </div>

                                            <!-- Second parent/ Guardian Information -->

                                            <div class="md-3">
                                                <h2>Second parent / Guardian Information</h2>
                                            </div>
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input type="text" name="secondParentTitle" value="<?=$learner['secondParentTitle']; ?>" placeholder="title" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <input type="text" name="secondParentInitials" value="<?=$learner['secondParentInitials']; ?>" placeholder="initials" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>First Names</label>
                                                <input type="text" name="secondParentFirstNames" value="<?=$learner['secondParentFirstNames']; ?>" placeholder="Residential code" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Surname</label>
                                                <input type="text" name="secondParentSurname" value="<?=$learner['secondParentSurname']; ?>" placeholder="surname" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <input type="text" name="secondParentIdNumber" value="<?=$learner['secondParentIdNumber']; ?>" placeholder="ID number" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Relationship</label>
                                                <input type="text" name="secondParentRelationship" value="<?=$learner['secondParentRelationship']; ?>" placeholder="relationship" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <input type="text" name="secondParentGender" value="<?=$learner['secondParentGender']; ?>" placeholder="gender" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <input type="text" name="secondParentHomeLanguage" value="<?=$learner['secondParentHomeLanguage']; ?>" placeholder="home language" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <input type="text" name="secondParentRace" value="<?=$learner['secondParentRace']; ?>" placeholder="race" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <input type="text" name="secondParentResidentialAddress" value="<?=$learner['secondParentResidentialAddress']; ?>" placeholder="residential address" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <input type="text" name="secondParentResidentialCode" value="<?=$learner['secondParentResidentialCode']; ?>" placeholder="residential code" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>Contact Number</label>
                                                <input type="text" name="secondParentContactNumber" value="<?=$learner['secondParentContactNumber']; ?>" placeholder="contact number" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>File Name</label>
                                                <input type="file" name="fileName" placeholder="Upload File" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label>File Path</label>
                                                <input type="file" name="filePath" placeholder="Upload File" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" name="edit_learner" class="btn btn-primary">Update Learner</button>
                                            </div>
                                        </form>

                                        <?php

                                    }else{
                                        echo"<h4> No Such File Found </h4>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>