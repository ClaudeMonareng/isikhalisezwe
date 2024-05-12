<?php
    session_start();
    include("connect.php");
?>

    <?php include('includes/header.php'); ?>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Learner Details
                            <a href="learner-create.php" class="btn btn-primary float-end">Add Learner</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Index</td>
                                    <td>Timestamp</td>  
                                    <td>Grade Applied For: </td>
                                    <td style="display:none">Highest Grade Passed: </td>
                                    <td style="display:none">Year When Grade was Passed: </td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td style="display:none">Initials </td>
                                    <td style="display:none">Date of Birth</td>
                                    <td>ID Number</td>
                                    <td>Contact Number</td>
                                    <td style="display:none">Race</td>
                                    <td style="display:none">Province</td>
                                    <td style="display:none">Gender</td>
                                    <td style="display:none">Home Language</td>
                                    <td style="display:none">Residential Address</td>
                                    <td style="display:none">Residential Code</td>
                                    <td style="display:none">Learner Email</td>
                                    <td style="display:none">Preferred Language of Instruction</td>
                                    <td style="display:none">Deceased Parent</td>
                                    <td style="display:none">Dexterity of Learner</td>
                                    <td style="display:none">Hearing Problem</td>
                                    <td style="display:none">Parent First Names</td>
                                    <td style="display:none">Parent Surname</td>
                                    <td style="display:none">Parent Title</td>
                                    <td style="display:none">Parent Initials</td>
                                    <td style="display:none">Parent ID Number</td>
                                    <td style="display:none">Parent Contact Number</td>
                                    <td style="display:none">Parent Race</td>
                                    <td style="display:none">Parent Gender</td>
                                    <td style="display:none">Parent Home Language</td>
                                    <td style="display:none">Parent Relationship</td>
                                    <td style="display:none">Parent Residential Address</td>
                                    <td style="display:none">Parent Residential Code</td>
                                    <td style="display:none">Second Parent Title</td>
                                    <td style="display:none">Second Parent Initials</td>
                                    <td style="display:none">Second Parent First Names</td>
                                    <td style="display:none">Second Parent Surname</td>
                                    <td style="display:none">Second Parent ID Number</td>
                                    <td style="display:none">Second Parent Relationship</td>
                                    <td style="display:none">Second Parent Gender</td>
                                    <td style="display:none">Second Parent Home Language</td>
                                    <td style="display:none">Second Parent Race</td>
                                    <td style="display:none">Second Parent Residential Address</td>
                                    <td style="display:none">Second Parent Residential Code</td>
                                    <td style="display:none">Second Parent Contact Number</td>
                                    <td style="display:none">File Name</td>
                                    <td style="display:none">File Path</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM registration";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $learner){
                                            ?>
                                                <tr>
                                                    <td><?=$learner['id']; ?></td>
                                                    <td><?=$learner['timestamp']; ?></td>
                                                    <td><?=$learner['gradeAppliedFor']; ?></td>
                                                    <td style="display:none"><?=$learner['highestGradePassed']; ?></td>
                                                    <td style="display:none"><?=$learner['yearWhenGradeWasPassed']; ?></td>
                                                    <td><?=$learner['firstName']; ?></td>
                                                    <td><?=$learner['lastName']; ?></td>
                                                    <td style="display:none"><?=$learner['initials']; ?></td>
                                                    <td style="display:none"><?=$learner['dateOfBirth']; ?></td>
                                                    <td><?=$learner['idNumber']; ?></td>
                                                    <td><?=$learner['contactNumber']; ?></td>
                                                    <td style="display:none"><?=$learner['race']; ?></td>
                                                    <td style="display:none"><?=$learner['province']; ?></td>
                                                    <td style="display:none"><?=$learner['gender']; ?></td>
                                                    <td style="display:none"><?=$learner['homeLanguage']; ?></td>
                                                    <td style="display:none"><?=$learner['residentialAddress']; ?></td>
                                                    <td style="display:none"><?=$learner['residentialCode']; ?></td>
                                                    <td style="display:none"><?=$learner['learnerEmailAddress']; ?></td>
                                                    <td style="display:none"><?=$learner['preferredLanguageOfInstruction']; ?></td>
                                                    <td style="display:none"><?=$learner['deceasedParent']; ?></td>
                                                    <td style="display:none"><?=$learner['dexterityOfLearner']; ?></td>
                                                    <td style="display:none"><?=$learner['hearingProblem']; ?></td>
                                                    <td style="display:none"><?=$learner['parentFirstNames']; ?></td>
                                                    <td style="display:none"><?=$learner['parentSurname']; ?></td>
                                                    <td style="display:none"><?=$learner['parentTitle']; ?></td>
                                                    <td style="display:none"><?=$learner['parentInitials']; ?></td>
                                                    <td style="display:none"><?=$learner['parentIdNumber']; ?></td>
                                                    <td style="display:none"><?=$learner['parentContactNumber']; ?></td>
                                                    <td style="display:none"><?=$learner['parentRace']; ?></td>
                                                    <td style="display:none"><?=$learner['parentGender']; ?></td>
                                                    <td style="display:none"><?=$learner['parentHomeLanguage']; ?></td>
                                                    <td style="display:none"><?=$learner['parentRelationship']; ?></td>
                                                    <td style="display:none"><?=$learner['parentResidentialAddress']; ?></td>
                                                    <td style="display:none"><?=$learner['parentResidentialCode']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentTitle']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentInitials']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentFirstNames']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentSurname']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentIdNumber']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentRelationship']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentGender']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentHomeLanguage']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentRace']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentResidentialAddress']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentResidentialCode']; ?></td>
                                                    <td style="display:none"><?=$learner['secondParentContactNumber']; ?></td>
                                                    <td style="display:none"><?=$learner['fileName']; ?></td>
                                                    <td style="display:none"><?=$learner['filePath']; ?></td>
                                                    <td>
                                                        <a href="learner-view.php?id=<?= $learner['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a href="learner-edit.php?id=<?= $learner['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="code.php" method="post" class="d-inline">
                                                            <button type="submit" name="delete_learner" value="<?=$learner['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }else{
                                        echo"<h5>No Record Found</h5>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>