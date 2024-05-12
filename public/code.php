<?php
     session_start();
     include("connect.php");

     $targetDir = "uploads/";

     if(isset($_FILES['file']) && $_FILES['file']['error'] === 0){
         $fileName = basename($_FILES["file"]["name"]);
         $targetPath = $targetDir . $fileName;
 
         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){
             $sql = "INSERT INTO registration(fileName, filePath) VALUES ('$fileName', '$targetPath')";
             if($con->query($sql) == true){
                 echo"File uploaded and saved to Database";
             }else{
                 echo"Error: ".$sql. "Error Details: ".$con->error;            
             }
         }else{
             echo"Error Moving the file";
         }
     }else{
        echo"";
     }

     if(isset($_POST['user_register'])){

          // Learner Personal Details

          $gradeAppliedFor = mysqli_real_escape_string($con, $_POST['gradeAppliedFor']);
          $highestGradePassed = mysqli_real_escape_string($con, $_POST['highestGradePassed']);
          $yearWhenGradeWasPassed = mysqli_real_escape_string($con, $_POST['yearWhenGradeWasPassed']);
          
          $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
          $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
          $initials = mysqli_real_escape_string($con, $_POST['initials']);
          
          // Learner Identity details
          
          $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
          $idNumber = mysqli_real_escape_string($con, $_POST['idNumber']);
          $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']); //check this
          
          $race = mysqli_real_escape_string($con, $_POST['race']);
          $province = mysqli_real_escape_string($con, $_POST['province']);
          $gender = mysqli_real_escape_string($con, $_POST['gender']);
          
          $homeLanguage = mysqli_real_escape_string($con, $_POST['homeLanguage']);
          $residentialAddress = mysqli_real_escape_string($con, $_POST['residentialAddress']); //check this
          $residentialCode = mysqli_real_escape_string($con, $_POST['residentialCode']);
          
          $learnerEmailAddress = mysqli_real_escape_string($con, $_POST['learnerEmailAddress']);
          $preferredLanguageOfInstruction = mysqli_real_escape_string($con, $_POST['preferredLanguageOfInstruction']);
          $deceasedParent = mysqli_real_escape_string($con, $_POST['deceasedParent']);
          
          // Learner Disability details

          $dexterityOfLearner = mysqli_real_escape_string($con, $_POST['dexterityOfLearner']);
          $hearingProblem = mysqli_real_escape_string($con, $_POST['hearingProblem']); //check this
          
          // Parent or Guardian Information

          $parentFirstNames = mysqli_real_escape_string($con, $_POST['parentFirstNames']);
          $parentSurname = mysqli_real_escape_string($con, $_POST['parentSurname']);
          $parentTitle = mysqli_real_escape_string($con, $_POST['parentTitle']);
          
          $parentInitials = mysqli_real_escape_string($con, $_POST['parentInitials']);
          $parentIdNumber = mysqli_real_escape_string($con, $_POST['parentIdNumber']);
          $parentContactNumber = mysqli_real_escape_string($con, $_POST['parentContactNumber']);
          
          $parentRace = mysqli_real_escape_string($con, $_POST['parentRace']);
          $parentGender = mysqli_real_escape_string($con, $_POST['parentGender']);
          $parentHomeLanguage = mysqli_real_escape_string($con, $_POST['parentHomeLanguage']);
          
          $parentRelationship = mysqli_real_escape_string($con, $_POST['parentRelationship']);
          $parentResidentialAddress = mysqli_real_escape_string($con, $_POST['parentResidentialAddress']);
          $parentResidentialCode = mysqli_real_escape_string($con, $_POST['parentResidentialCode']);
          
          // Second Parent/ Guardian Information

          $secondParentTitle = mysqli_real_escape_string($con, $_POST['secondParentTitle']);
          $secondParentInitials = mysqli_real_escape_string($con, $_POST['secondParentInitials']);
          $secondParentFirstNames = mysqli_real_escape_string($con, $_POST['secondParentFirstNames']);
          
          $secondParentSurname = mysqli_real_escape_string($con, $_POST['secondParentSurname']);
          $secondParentIdNumber = mysqli_real_escape_string($con, $_POST['secondParentIdNumber']);
          $secondParentRelationship = mysqli_real_escape_string($con, $_POST['secondParentRelationship']);
          
          $secondParentGender = mysqli_real_escape_string($con, $_POST['secondParentGender']);
          $secondParentHomeLanguage = mysqli_real_escape_string($con, $_POST['secondParentHomeLanguage']);
          $secondParentRace = mysqli_real_escape_string($con, $_POST['secondParentRace']);

          $secondParentResidentialAddress = mysqli_real_escape_string($con, $_POST['secondParentResidentialAddress']);
          $secondParentResidentialCode = mysqli_real_escape_string($con, $_POST['secondParentResidentialCode']);
          $secondParentContactNumber = mysqli_real_escape_string($con, $_POST['secondParentContactNumber']);

          $fileName = mysqli_real_escape_string($con, $_POST['fileName']);
          $filePath = mysqli_real_escape_string($con, $_POST['filePath']);
          
          $query = "INSERT INTO registration(gradeAppliedFor, highestGradePassed, yearWhenGradeWasPassed, firstName, lastName, initials,
                              dateOfBirth, idNumber, contactNumber, race, province, gender, homeLanguage, residentialAddress,
                              residentialCode, learnerEmailAddress, preferredLanguageOfInstruction, deceasedParent, dexterityOfLearner,
                              hearingProblem, parentFirstNames, parentSurname, parentTitle, parentInitials, parentIdNumber, parentContactNumber,
                              parentRace, parentGender, parentHomeLanguage, parentRelationship,parentResidentialAddress, parentResidentialCode,
                              secondParentTitle, secondParentInitials, secondParentFirstNames, secondParentSurname, secondParentIdNumber,
                              secondParentRelationship, secondParentGender, secondParentHomeLanguage, secondParentRace,
                              secondParentResidentialAddress, secondParentResidentialCode, secondParentContactNumber,
                              fileName, filePath)
                              VALUES (  '$gradeAppliedFor', '$highestGradePassed', '$yearWhenGradeWasPassed',
                                        '$firstName', '$lastName', '$initials', '$dateOfBirth', '$idNumber', '$contactNumber', 
                                        '$race', '$province', '$gender', '$homeLanguage','$residentialAddress', '$residentialCode', 
                                        '$learnerEmailAddress', '$preferredLanguageOfInstruction', '$deceasedParent','$dexterityOfLearner', 
                                        '$hearingProblem', '$parentFirstNames', '$parentSurname', '$parentTitle', '$parentInitials', 
                                        '$parentIdNumber','$parentContactNumber', '$parentRace', '$parentGender', '$parentHomeLanguage', 
                                        '$parentRelationship', '$parentResidentialAddress','$parentResidentialCode','$secondParentTitle', 
                                        '$secondParentInitials', '$secondParentFirstNames', '$secondParentSurname','$secondParentIdNumber', 
                                        '$secondParentRelationship', '$secondParentGender', '$secondParentHomeLanguage','$secondParentRace',
                                        '$secondParentResidentialAddress', '$secondParentResidentialCode', '$secondParentContactNumber',
                                        '$fileName', '$filePath')";
          $query_run = mysqli_query($con, $query);
          
          if($query_run){
               $_SESSION['message'] = "Learner Created Successfully";
               header("Location: registration-form.php");
               exit(0);
          }else{
               $_SESSION['message'] = "Learner Not Created";
               header("Location: registration-form.php");
               exit(0);
          }
     }

     if(isset($_POST['save_learner'])){
          
          // Learner Personal Details

          $gradeAppliedFor = mysqli_real_escape_string($con, $_POST['gradeAppliedFor']);
          $highestGradePassed = mysqli_real_escape_string($con, $_POST['highestGradePassed']);
          $yearWhenGradeWasPassed = mysqli_real_escape_string($con, $_POST['yearWhenGradeWasPassed']);
          
          $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
          $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
          $initials = mysqli_real_escape_string($con, $_POST['initials']);

          // Learner Identity details
          
          $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
          $idNumber = mysqli_real_escape_string($con, $_POST['idNumber']);
          $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']); //check this
          
          $race = mysqli_real_escape_string($con, $_POST['race']);
          $province = mysqli_real_escape_string($con, $_POST['province']);
          $gender = mysqli_real_escape_string($con, $_POST['gender']);
          
          $homeLanguage = mysqli_real_escape_string($con, $_POST['homeLanguage']);
          $residentialAddress = mysqli_real_escape_string($con, $_POST['residentialAddress']); //check this
          $residentialCode = mysqli_real_escape_string($con, $_POST['residentialCode']);
          
          $learnerEmailAddress = mysqli_real_escape_string($con, $_POST['learnerEmailAddress']);
          $preferredLanguageOfInstruction = mysqli_real_escape_string($con, $_POST['preferredLanguageOfInstruction']);
          $deceasedParent = mysqli_real_escape_string($con, $_POST['deceasedParent']);
          
          // Learner Disability details

          $dexterityOfLearner = mysqli_real_escape_string($con, $_POST['dexterityOfLearner']);
          $hearingProblem = mysqli_real_escape_string($con, $_POST['hearingProblem']); //check this
          
          // Parent or Guardian Information

          $parentFirstNames = mysqli_real_escape_string($con, $_POST['parentFirstNames']);
          $parentSurname = mysqli_real_escape_string($con, $_POST['parentSurname']);
          $parentTitle = mysqli_real_escape_string($con, $_POST['parentTitle']);
          
          $parentInitials = mysqli_real_escape_string($con, $_POST['parentInitials']);
          $parentIdNumber = mysqli_real_escape_string($con, $_POST['parentIdNumber']);
          $parentContactNumber = mysqli_real_escape_string($con, $_POST['parentContactNumber']);
          
          $parentRace = mysqli_real_escape_string($con, $_POST['parentRace']);
          $parentGender = mysqli_real_escape_string($con, $_POST['parentGender']);
          $parentHomeLanguage = mysqli_real_escape_string($con, $_POST['parentHomeLanguage']);
          
          $parentRelationship = mysqli_real_escape_string($con, $_POST['parentRelationship']);
          $parentResidentialAddress = mysqli_real_escape_string($con, $_POST['parentResidentialAddress']);
          $parentResidentialCode = mysqli_real_escape_string($con, $_POST['parentResidentialCode']);
          
          // Second Parent/ Guardian Information

          $secondParentTitle = mysqli_real_escape_string($con, $_POST['secondParentTitle']);
          $secondParentInitials = mysqli_real_escape_string($con, $_POST['secondParentInitials']);
          $secondParentFirstNames = mysqli_real_escape_string($con, $_POST['secondParentFirstNames']);
          
          $secondParentSurname = mysqli_real_escape_string($con, $_POST['secondParentSurname']);
          $secondParentIdNumber = mysqli_real_escape_string($con, $_POST['secondParentIdNumber']);
          $secondParentRelationship = mysqli_real_escape_string($con, $_POST['secondParentRelationship']);

          $secondParentGender = mysqli_real_escape_string($con, $_POST['secondParentGender']);
          $secondParentHomeLanguage = mysqli_real_escape_string($con, $_POST['secondParentHomeLanguage']);
          $secondParentRace = mysqli_real_escape_string($con, $_POST['secondParentRace']);

          $secondParentResidentialAddress = mysqli_real_escape_string($con, $_POST['secondParentResidentialAddress']);
          $secondParentResidentialCode = mysqli_real_escape_string($con, $_POST['secondParentResidentialCode']);
          $secondParentContactNumber = mysqli_real_escape_string($con, $_POST['secondParentContactNumber']);

          $fileName = mysqli_real_escape_string($con, $_POST['fileName']);
          $filePath = mysqli_real_escape_string($con, $_POST['filePath']);
          
          $query = "INSERT INTO registration(gradeAppliedFor, highestGradePassed, yearWhenGradeWasPassed, firstName, lastName, initials,
                              dateOfBirth, idNumber, contactNumber, race, province, gender, homeLanguage, residentialAddress,
                              residentialCode, learnerEmailAddress, preferredLanguageOfInstruction, deceasedParent, dexterityOfLearner,
                              hearingProblem, parentFirstNames, parentSurname, parentTitle, parentInitials, parentIdNumber, parentContactNumber,
                              parentRace, parentGender, parentHomeLanguage, parentRelationship,parentResidentialAddress, parentResidentialCode,
                              secondParentTitle, secondParentInitials, secondParentFirstNames, secondParentSurname, secondParentIdNumber,
                              secondParentRelationship, secondParentGender, secondParentHomeLanguage, secondParentRace,
                              secondParentResidentialAddress, secondParentResidentialCode, secondParentContactNumber,
                              fileName, filePath)
                              VALUES (  '$gradeAppliedFor', '$highestGradePassed', '$yearWhenGradeWasPassed',
                                        '$firstName', '$lastName', '$initials', '$dateOfBirth', '$idNumber', '$contactNumber', 
                                        '$race', '$province', '$gender', '$homeLanguage','$residentialAddress', '$residentialCode', 
                                        '$learnerEmailAddress', '$preferredLanguageOfInstruction', '$deceasedParent','$dexterityOfLearner', 
                                        '$hearingProblem', '$parentFirstNames', '$parentSurname', '$parentTitle', '$parentInitials', 
                                        '$parentIdNumber','$parentContactNumber', '$parentRace', '$parentGender', '$parentHomeLanguage', 
                                        '$parentRelationship', '$parentResidentialAddress','$parentResidentialCode','$secondParentTitle', 
                                        '$secondParentInitials', '$secondParentFirstNames', '$secondParentSurname','$secondParentIdNumber', 
                                        '$secondParentRelationship', '$secondParentGender', '$secondParentHomeLanguage','$secondParentRace',
                                        '$secondParentResidentialAddress', '$secondParentResidentialCode', '$secondParentContactNumber',
                                        '$fileName', '$filePath')";
          $query_run = mysqli_query($con, $query);
          
          if($query_run){
               $_SESSION['message'] = "Learner Created Successfully";
               header("Location: learner-create.php");
               exit(0);
          }else{
               $_SESSION['message'] = "Learner Not Created";
               header("Location: learner-create.php");
               exit(0);
          }
     }

     if(isset($_POST['edit_learner'])){

          $learner_id = mysqli_real_escape_string($con, $_POST['learner_id']);

         // Learner Personal Details

          $gradeAppliedFor = mysqli_real_escape_string($con, $_POST['gradeAppliedFor']);
          $highestGradePassed = mysqli_real_escape_string($con, $_POST['highestGradePassed']);
          $yearWhenGradeWasPassed = mysqli_real_escape_string($con, $_POST['yearWhenGradeWasPassed']);
          
          $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
          $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
          $initials = mysqli_real_escape_string($con, $_POST['initials']);

          // Learner Identity Details
          
          $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
          $idNumber = mysqli_real_escape_string($con, $_POST['idNumber']);
          $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']);
          
          $race = mysqli_real_escape_string($con, $_POST['race']);
          $province = mysqli_real_escape_string($con, $_POST['province']);
          $gender = mysqli_real_escape_string($con, $_POST['gender']);
          
          $homeLanguage = mysqli_real_escape_string($con, $_POST['homeLanguage']);
          $residentialAddress = mysqli_real_escape_string($con, $_POST['residentialAddress']);
          $residentialCode = mysqli_real_escape_string($con, $_POST['residentialCode']);
          
          $learnerEmailAddress = mysqli_real_escape_string($con, $_POST['learnerEmailAddress']);
          $preferredLanguageOfInstruction = mysqli_real_escape_string($con, $_POST['preferredLanguageOfInstruction']);
          $deceasedParent = mysqli_real_escape_string($con, $_POST['deceasedParent']);
          
          // Learner Disability Details

          $dexterityOfLearner = mysqli_real_escape_string($con, $_POST['dexterityOfLearner']);
          $hearingProblem = mysqli_real_escape_string($con, $_POST['hearingProblem']);
          
          // Parent or Guardian Information

          $parentFirstNames = mysqli_real_escape_string($con, $_POST['parentFirstNames']);
          $parentSurname = mysqli_real_escape_string($con, $_POST['parentSurname']);
          $parentTitle = mysqli_real_escape_string($con, $_POST['parentTitle']);
          
          $parentInitials = mysqli_real_escape_string($con, $_POST['parentInitials']);
          $parentIdNumber = mysqli_real_escape_string($con, $_POST['parentIdNumber']);
          $parentContactNumber = mysqli_real_escape_string($con, $_POST['parentContactNumber']);
          
          $parentRace = mysqli_real_escape_string($con, $_POST['parentRace']);
          $parentGender = mysqli_real_escape_string($con, $_POST['parentGender']);
          $parentHomeLanguage = mysqli_real_escape_string($con, $_POST['parentHomeLanguage']);
          
          $parentRelationship = mysqli_real_escape_string($con, $_POST['parentRelationship']);
          $parentResidentialAddress = mysqli_real_escape_string($con, $_POST['parentResidentialAddress']);
          $parentResidentialCode = mysqli_real_escape_string($con, $_POST['parentResidentialCode']);
          
          // Second Parent/ Guardian Information

          $secondParentTitle = mysqli_real_escape_string($con, $_POST['secondParentTitle']);
          $secondParentInitials = mysqli_real_escape_string($con, $_POST['secondParentInitials']);
          $secondParentFirstNames = mysqli_real_escape_string($con, $_POST['secondParentFirstNames']);
          
          $secondParentSurname = mysqli_real_escape_string($con, $_POST['secondParentSurname']);
          $secondParentIdNumber = mysqli_real_escape_string($con, $_POST['secondParentIdNumber']);
          $secondParentRelationship = mysqli_real_escape_string($con, $_POST['secondParentRelationship']);
          
          $secondParentGender = mysqli_real_escape_string($con, $_POST['secondParentGender']);
          $secondParentHomeLanguage = mysqli_real_escape_string($con, $_POST['secondParentHomeLanguage']);
          $secondParentRace = mysqli_real_escape_string($con, $_POST['secondParentRace']);

          $secondParentResidentialAddress = mysqli_real_escape_string($con, $_POST['secondParentResidentialAddress']);
          $secondParentResidentialCode = mysqli_real_escape_string($con, $_POST['secondParentResidentialCode']);
          $secondParentContactNumber = mysqli_real_escape_string($con, $_POST['secondParentContactNumber']);

          $fileName = mysqli_real_escape_string($con, $_POST['fileName']);
          $filePath = mysqli_real_escape_string($con, $_POST['filePath']);

          $query = "UPDATE registration SET  gradeAppliedFor='$gradeAppliedFor', highestGradePassed='$highestGradePassed', 
                                             yearWhenGradeWasPassed='$yearWhenGradeWasPassed',
                                             firstName='$firstName', lastName='$lastName', initials='$initials',
                                             dateOfBirth='$dateOfBirth', idNumber='$idNumber', contactNumber='$contactNumber', race='$race',
                                             province='$province', gender='$gender', homeLanguage='$homeLanguage', 
                                             residentialAddress='$residentialAddress',
                                             residentialCode='$residentialCode', learnerEmailAddress='$learnerEmailAddress', 
                                             preferredLanguageOfInstruction='$preferredLanguageOfInstruction', 
                                             deceasedParent='$deceasedParent', dexterityOfLearner='$dexterityOfLearner',
                                             hearingProblem='$hearingProblem', parentFirstNames='$parentFirstNames', parentSurname='$parentSurname', 
                                             parentTitle='$parentTitle', parentInitials='$parentInitials', parentIdNumber='$parentIdNumber', 
                                             parentContactNumber='$parentContactNumber', parentRace='$parentRace', parentGender='$parentGender', 
                                             parentHomeLanguage='$parentHomeLanguage', parentRelationship='$parentRelationship',
                                             parentResidentialAddress='$parentResidentialAddress', parentResidentialCode='$parentResidentialCode',
                                             secondParentTitle='$secondParentTitle', secondParentInitials= '$secondParentInitials', 
                                             secondParentFirstNames='$secondParentFirstNames', secondParentSurname='$secondParentSurname',
                                             secondParentIdNumber='$secondParentIdNumber', secondParentRelationship='$secondParentRelationship', 
                                             secondParentGender='$secondParentGender', secondParentHomeLanguage='$secondParentHomeLanguage', 
                                             secondParentRace='$secondParentRace', secondParentResidentialAddress='$secondParentResidentialAddress', 
                                             secondParentResidentialCode='$secondParentResidentialCode', secondParentContactNumber='$secondParentContactNumber',
                                             fileName='$fileName', filePath='$filePath'
                                             WHERE id='$learner_id' ";
          $query_run = mysqli_query($con, $query);
          
          if($query_run){
               $_SESSION['message'] = "Learner Updated Successfully";
               header("Location: index.php");
               exit(0);
          }else{
               $_SESSION['message'] = "Learner Not Updated";
               header("Location: index.php");
               exit(0);
          }
     }

     if(isset($_POST['delete_learner'])){
          $learner_id = mysqli_real_escape_string($con, $_POST['delete_learner']);

          $query = "DELETE FROM registration WHERE id='$learner_id' ";
          $query_run = mysqli_query($con, $query);

          if($query_run){
               $_SESSION['message'] = "Learner Deleted Successfully";
               header("Location: index.php");
               exit(0);
          }else{
               $_SESSION['message'] = "Learner Not Deleted";
               header("Location: index.php");
               exit(0);
          }
     }
?>