
<?php

    // include("connect.php");
    // $query = "select * from registration";
    // $result = mysqli_query($con, $query);

    include("connect.php");
    include("functions.php");

    $result = display_data();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Successful Response</title>
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-1 text-center">Isikhalisezwe Database</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Index</td>
                                    <td>Timestamp</td>  
                                    <td>Grade Applied For: </td>
                                    <td>Highest Grade Passed: </td>
                                    <td>Year When Grade was Passed: </td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Initials </td>
                                    <td>Date of Birth</td>
                                    <td>ID Number</td>
                                    <td>Contact Number</td>
                                    <td>Race</td>
                                    <td>Province</td>
                                    <td>Gender</td>
                                    <td>Home Language</td>
                                    <td>Residential Address</td>
                                    <td>Residential Code</td>
                                    <td>Learner Email</td>
                                    <td>Preferred Language of Instruction</td>
                                    <td>Deceased Parent</td>
                                    <td>Dexterity of Learner</td>
                                    <td>Hearing Problem</td>
                                    <td>Parent First Names</td>
                                    <td>Parent Surname</td>
                                    <td>Parent Title</td>
                                    <td>Parent Initials</td>
                                    <td>Parent ID Number</td>
                                    <td>Parent Contact Number</td>
                                    <td>Parent Race</td>
                                    <td>Parent Gender</td>
                                    <td>Parent Home Language</td>
                                    <td>Parent Relationship</td>
                                    <td>Parent Residential Address</td>
                                    <td>Parent Residential Code</td>
                                    <td>Second Parent Title</td>
                                    <td>Second Parent Initials</td>
                                    <td>Second Parent First Names</td>
                                    <td>Second Parent Surname</td>
                                    <td>Second Parent ID Number</td>
                                    <td>Second Parent Relationship</td>
                                    <td>Second Parent Gender</td>
                                    <td>Second Parent Home Language</td>
                                    <td>Second Parent Race</td>
                                    <td>Second Parent Residential Address</td>
                                    <td>Second Parent Residential Code</td>
                                    <td>Second Parent Contact Number</td>
                                    <td>file Name</td>
                                    <td>File Path</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                    <?php

                                        while($row = mysqli_fetch_assoc($result))
                                        {

                                    ?>

                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['timestamp']; ?></td>
                                    <td><?php echo $row['gradeAppliedFor']; ?></td>
                                    <td><?php echo $row['highestGradePassed']; ?></td>
                                    <td><?php echo $row['yearWhenGradeWasPassed']; ?></td>
                                    <td><?php echo $row['firstName']; ?></td>
                                    <td><?php echo $row['lastName']; ?></td>
                                    <td><?php echo $row['initials']; ?></td>
                                    <td><?php echo $row['dateOfBirth']; ?></td>
                                    <td><?php echo $row['idNumber']; ?></td>
                                    <td><?php echo $row['contactNumber']; ?></td>
                                    <td><?php echo $row['race']; ?></td>
                                    <td><?php echo $row['province']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['homeLanguage']; ?></td>
                                    <td><?php echo $row['residentialAddress']; ?></td>
                                    <td><?php echo $row['residentialCode']; ?></td>
                                    <td><?php echo $row['learnerEmailAddress']; ?></td>
                                    <td><?php echo $row['preferredLanguageOfInstruction']; ?></td>
                                    <td><?php echo $row['deceasedParent']; ?></td>
                                    <td><?php echo $row['dexterityOfLearner']; ?></td>
                                    <td><?php echo $row['hearingProblem']; ?></td>
                                    <td><?php echo $row['parentFirstNames']; ?></td>
                                    <td><?php echo $row['parentSurname']; ?></td>
                                    <td><?php echo $row['parentTitle']; ?></td>
                                    <td><?php echo $row['parentInitials']; ?></td>
                                    <td><?php echo $row['parentIdNumber']; ?></td>
                                    <td><?php echo $row['parentContactNumber']; ?></td>
                                    <td><?php echo $row['parentRace']; ?></td>
                                    <td><?php echo $row['parentGender']; ?></td>
                                    <td><?php echo $row['parentHomeLanguage']; ?></td>
                                    <td><?php echo $row['parentRelationship']; ?></td>
                                    <td><?php echo $row['parentResidentialAddress']; ?></td>
                                    <td><?php echo $row['parentResidentialCode']; ?></td>
                                    <td><?php echo $row['secondParentTitle']; ?></td>
                                    <td><?php echo $row['secondParentInitials']; ?></td>
                                    <td><?php echo $row['secondParentFirstNames']; ?></td>
                                    <td><?php echo $row['secondParentSurname']; ?></td>
                                    <td><?php echo $row['secondParentIdNumber']; ?></td>
                                    <td><?php echo $row['secondParentRelationship']; ?></td>
                                    <td><?php echo $row['secondParentGender']; ?></td>
                                    <td><?php echo $row['secondParentHomeLanguage']; ?></td>
                                    <td><?php echo $row['secondParentRace']; ?></td>
                                    <td><?php echo $row['secondParentResidentialAddress']; ?></td>
                                    <td><?php echo $row['secondParentResidentialCode']; ?></td>
                                    <td><?php echo $row['secondParentContactNumber']; ?></td>
                                    <td><?php echo $row['filename']; ?></td>
                                    <td><?php echo $row['filePath']; ?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                  
                                </tr>
                                <?php
                                    
                                    }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>                                         