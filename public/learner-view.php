<?php
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
        <title>Learner View Details</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Learner View Details
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
                                            <div class="mb-3">
                                                <label>Grade Applied for</label>
                                                    <p class="form-control">
                                                    <?=$learner['gradeAppliedFor']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>highest Grade Passed</label>
                                                <p class="form-control">
                                                    <?=$learner['highestGradePassed']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Year Grade Passed</label>
                                                <p class="form-control">
                                                    <?=$learner['yearWhenGradeWasPassed']; ?>
                                                </p>
                                            </div>

                                            <div class="mb-3">
                                                <h2>Learner Identity Information</h2>
                                            </div>
                                            <div class="mb-3">
                                                <label>First Name</label>
                                                <p class="form-control">
                                                    <?=$learner['firstName']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Last Name</label>
                                                <p class="form-control">
                                                    <?=$learner['lastName']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <p class="form-control">
                                                    <?=$learner['initials']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Date of Birth</label>
                                                <p class="form-control">
                                                    <?=$learner['dateOfBirth']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <p class="form-control">
                                                    <?=$learner['idNumber']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <p class="form-control">
                                                    <?=$learner['race']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Province</label>
                                                <p class="form-control">
                                                    <?=$learner['province']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <p class="form-control">
                                                    <?=$learner['gender']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <p class="form-control">
                                                    <?=$learner['homeLanguage']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <p class="form-control">
                                                    <?=$learner['residentialCode']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <p class="form-control">
                                                    <?=$learner['residentialCode']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Learner Email Address</label>
                                                <p class="form-control">
                                                    <?=$learner['learnerEmailAddress']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Preferred Language of Instruction</label>
                                                <p class="form-control">
                                                    <?=$learner['preferredLanguageOfInstruction']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Deceased Parent</label>
                                                <p class="form-control">
                                                    <?=$learner['deceasedParent']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Dexterity of Learner</label>
                                                <p class="form-control">
                                                    <?=$learner['dexterityOfLearner']; ?>
                                                </p>
                                            </div>

                                            <!-- Parent or Guardian Information -->
                                            
                                            <div class="mb-3">
                                                <h2>Parent or Guardian Information</h2>
                                            </div>

                                            <div class="mb-3">
                                                <label>First Names</label>
                                                <p class="form-control">
                                                    <?=$learner['parentFirstNames']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Surname</label>
                                                <p class="form-control">
                                                    <?=$learner['parentSurname']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <p class="form-control">
                                                    <?=$learner['parentTitle']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <p class="form-control">
                                                    <?=$learner['parentInitials']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <p class="form-control">
                                                    <?=$learner['parentIdNumber']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Contact Number</label>
                                                <p class="form-control">
                                                    <?=$learner['parentContactNumber']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <p class="form-control">
                                                    <?=$learner['parentRace']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <p class="form-control">
                                                    <?=$learner['parentGender']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <p class="form-control">
                                                    <?=$learner['parentHomeLanguage']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Relationship</label>
                                                <p class="form-control">
                                                    <?=$learner['parentRelationship']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <p class="form-control">
                                                    <?=$learner['parentResidentialAddress']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <p class="form-control">
                                                    <?=$learner['residentialCode']; ?>
                                                </p>
                                            </div>

                                            <!-- Second parent/ Guardian Information -->

                                            <div class="md-3">
                                                <h2>Second parent / Guardian Information</h2>
                                            </div>
                                            <div class="mb-3">
                                                <label>Title</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentTitle']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Initials</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentInitials']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>First Names</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentFirstNames']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Surname</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentSurname']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>ID Number</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentIdNumber']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Relationship</label> 
                                                <p class="form-control">
                                                    <?=$learner['secondParentRelationship']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Gender</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentGender']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Home Language</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentHomeLanguage']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Race</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentRace']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Address</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentResidentialAddress']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Residential Code</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentResidentialCode']; ?>
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Contact Number</label>
                                                <p class="form-control">
                                                    <?=$learner['secondParentContactNumber']; ?>
                                                </p>
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label>File Name</label>
                                                <p class="form-control">
                                                    <?=$learner['fileName']; ?>
                                                </p>
                                            </div> -->
                                            <div class="mb-3">
                                                <label>File</label>
                                                <p class="form-control">
                                                    <?=$learner['filePath']; ?>
                                                </p>
                                            </div>
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