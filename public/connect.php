<?php

// $gradeAppliedFor = $_POST['gradeAppliedFor'];
// $highestGradePassed = $_POST['highestGradePassed'];
// $yearWhenGradeWasPassed = $_POST['yearWhenGradeWasPassed'];

// $firstName = $_POST['firstName'],
// $lastName = $_POST['lastName'];
// $initials = $_POST['initials'];

// $dateOfBirth = $_POST['dateOfBirth'];
// $idNumber = $_POST['idNumber'];
// $contactNumber = $_POST['contactNumber'];

// $race = $_POST['race'];
// $province = $_POST['province'];
// $gender = $_POST['gender'];

// $homeLanguage = $_POST['homeLanguage'];
// $residentialAddress = $_POST['residentialAddress'];
// $residentialCode = $_POST['residentialCode'];

// $learnerEmailAddress = $_POST['learnerEmailAddress'];
// $preferredLanguageOfInstruction = $_POST['preferredLanguageOfInstruction'];
// $deceasedParent = $_POST['deceasedParent'];

// $dexterityOfLearner = $_POST['dexterityOfLearner'];
// $hearingProblem = $_POST['hearingProblem'];

// $parentFirstNames = $_POST['parentFirstNames'];
// $parentSurname = $_POST['parentSurname'];
// $parentTitle = $_POST['parentTitle'];

// $parentInitials = $_POST['parentInitials'];
// $parentIdNumber = $_POST['parentIdNumber'];
// $parentContactNumber = $_POST['parentContactNumber'];

// $parentRace = $_POST['parentRace'];
// $parentGender = $_POST['parentGender'];
// $parentHomeLanguage = $_POST['parentHomeLanguage'];

// $parentRelationship = $_POST['parentRelationship'];
// $parentResidentialAddress = $_POST['parentResidentialAddress'];
// $parentResidentialCode = $_POST['parentResidentialCode'];

// $secondParentTitle = $_POST['secondParentTitle'];
// $secondParentInitials = $_POST['secontParentInitials'];
// $secondParentFirstNames = $_POST['secondParentFirstNames'];

// $secondParentSurname = $_POST['secondParentSurname'];
// $secondParentIdNumber = $_POST['secondParentIdNumber'];
// $secondParentRelationship = $_POST['secondParentRelationship'];

// $secondParentGender = $_POST['secondParentGender'];
// $secondParentHomeLanguage = $_POST['secondParentHomeLanguage'];
// $secondParentRace = $_POST['secondParentRace'];

// $secondParentResidentialAddress = $_POST['secondParentResidentialAddress'];
// $secondParentResidentialCode = $_POST['secondParentResidentialCode'];
// $secondParentContactNumber = $_POST['secondParentContactNumber'];

// DATABASE CONNECTION

// $connection = new mysqli('localhost', 'root', '', 'isikhalisezwe');

$con = mysqli_connect("localhost", "root", "", "isikhalisezwe") or die("Couldn't connect");

// if($connection->connect_error){
//     die('Connection Failed : '.$connection->connect_error);
// }else{
//         $stmt = $connection->prepare("insert into registration(
//             gradeAppliedFor, highestGradePassed, yearWhenGradeWasPassed, firstName, lastName, initials,
//             dateOfBirth, idNumber, contactNumber, race, province, gender, homeLanguage, residentialAddress,
//             residentialCode, learnerEmailAddress, preferredLanguageOfInstruction, deceasedParent, dexterityOfLearner,
//             hearingProblem, parentFirstNames, parentSurname, parentTitle, parentInitials, parentIdNumber, parentContactNumber,
//             parentRace, parentGender, parentHomeLanguage, parentRelationship,parentResidentialAddress, parentResidentialCode,
//             secondParentTitle, secontParentInitials, secondParentFirstNames, secondParentSurname, secondParentIdNumber,
//             secondParentRelationship, secondParentGender, secondParentHomeLanguage, secondParentRace,
//             secondParentResidentialAddress, secondParentResidentialCode, secondParentContactNumber
//             )values(
//             ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
//             ?, ?, ?, ?, ?, ?, ?, ?, ?, 
//             ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
//             ?, ?, ?, ?, ?, ?
//         )");
//         $stmt->bind_param("ssssssssissssssssssssssssisssssissssssssssss", $gradeAppliedFor, $highestGradePassed, $yearWhenGradeWasPassed,
//             $firstName, $lastName, $initials, $dateOfBirth, $idNumber, $contactNumber, $race, $province, $gender, $homeLanguage,
//             $residentialAddress, $residentialCode, $learnerEmailAddress, $preferredLanguageOfInstruction, $deceasedParent,
//             $dexterityOfLearner, $hearingProblem, $parentFirstNames, $parentSurname, $parentTitle, $parentInitials, $parentIdNumber,
//             $parentContactNumber, $parentRace, $parentGender, $parentHomeLanguage, $parentRelationship, $parentResidentialAddress,
//             $parentResidentialCode, $secondParentTitle, $secondParentInitials, $secondParentFirstNames, $secondParentSurname,
//             $secondParentIdNumber, $secondParentRelationship, $secondParentGender, $secondParentHomeLanguage, $secondParentRace,
//             $secondParentResidentialAddress, $secondParentResidentialCode, $secondParentContactNumber);
//         $stmt->execute();
//         echo "registration successful...";
//         $stmt->close();
//         $stmt->close();
//     }

?>