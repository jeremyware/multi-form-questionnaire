<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateForms.php");

$table = 'PlatPayCoachForm';

$id = '';
$cchBusinessName = '';
$cchCompanyStreet = '';
$cchCompanyStreetLine2 = '';
$cchCompanyCity = '';
$cchCompanyState = '';
$cchCompanyZip = '';
$cchCompanyPhoneNumber = '';
$cchCompanyWebsiteUrl = '';
$cchContactFirstName = '';
$cchContactLastName = '';
$cchBusinessStructure = '';
$cchBusinessStructureOther = '';
$cchFederalTaxId = '';
$cchBusinessDateFormed = '';
$cchBusinessStateCreated = '';
$cchCallScripts = '';
$cchOrderForms = '';
$cchAuthForms = '';
$cchLoginMemb = '';
$cchFulfillment = '';
$cchCustomerServ = '';
$cchOwnerFirstName = '';
$cchOwnerLastName = '';
$cchOwnerTitle = '';
$cchOwnerAge = '';
$cchOwnerSocial = '';
$cchOwnerDateOfBirth = '';
$cchOwnerCompanyAddress = '';
$cchOwnerCompanyAddressLine2 = '';
$cchOwnerCompanyCity = '';
$cchOwnerCompanyState = '';
$cchOwnerCompanyZip = '';
$cchOwnerCompanyDriversLicense = '';
$cchSecondaryOwnersFirstName = '';
$cchSecondaryOwnersLastName = '';
$cchSecondaryOwnerTitle = '';
$cchSecondaryOwnerAge = '';
$cchSecondaryOwnerSocial = '';
$cchSecondaryOwnerDateOfBirth = '';
$cchSecondaryOwnerPhone = '';
$cchSecondaryOwnerAddress = '';
$cchSecondaryOwnerAddressLine2 = '';
$cchSecondaryOwnerCity = '';
$cchSecondaryOwnerState = '';
$cchSecondaryOwnerZip = '';
$cchSecondaryOwnerDriversLicense = '';
$cchDescribeProductInfo = '';
$cchProductAnnualVolume = '';
$cchProductAverageTicket = '';
$cchProductHighTicket = '';
$cchTransactionType = '';

$cchForms = selectAll($table);

if (isset($_POST['add-form'])) {
 $errors = validateForm($_POST);
}

if (isset($_POST['add-form'])) {
 unset($_POST['add-form']);
 $cchForm_id = create($table, $_POST);
 // dd($_POST);
 $_SESSION['message'] = 'Form created Successfully';
 $_SESSION['type'] = 'success';
 header('location: ' . BASE_URL . '/public/cchhome.php');
 exit();
}



if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $cchForm = selectOne($table, ['id' => $id]);
 $id = $cchForm['id'];
 $cchBusinessName = $cchForm['cchBusinessName'];
 $cchCompanyStreet = $cchForm['cchCompanyStreet'];
 $cchCompanyStreetLine2 = $cchForm['cchCompanyStreetLine2'];
 $cchCompanyCity = $cchForm['cchCompanyCity'];
 $cchCompanyState = $cchForm['cchCompanyState'];
 $cchCompanyZip = $cchForm['cchCompanyZip'];
 $cchCompanyPhoneNumber = $cchForm['cchCompanyPhoneNumber'];
 $cchCompanyWebsiteUrl = $cchForm['cchCompanyWebsiteUrl'];
 $cchContactFirstName = $cchForm['cchContactFirstName'];
 $cchContactLastName = $cchForm['cchContactLastName'];
 $cchBusinessStructure = $cchForm['cchBusinessStructure'];;
 $cchBusinessStructureOther = $cchForm['cchBusinessStructureOther'];
 $cchFederalTaxId = $cchForm['cchFederalTaxId'];
 $cchBusinessDateFormed = $cchForm['cchBusinessDateFormed'];
 $cchBusinessStateCreated = $cchForm['cchBusinessStateCreated'];
 $cchCallScripts = $cchForm['cchBusinessStateCreated'];
 $cchOrderForms = $cchForm['cchBusinessStateCreated'];
 $cchAuthForms = $cchForm['cchBusinessStateCreated'];
 $cchLoginMemb = $cchForm['cchBusinessStateCreated'];
 $cchFulfillment = $cchForm['cchBusinessStateCreated'];
 $cchCustomerServ = $cchForm['cchBusinessStateCreated'];
 $cchOwnerFirstName = $cchForm['cchOwnerFirstName'];
 $cchOwnerLastName = $cchForm['cchOwnerLastName'];;
 $cchOwnerTitle = $cchForm['cchOwnerTitle'];
 $cchOwnerAge = $cchForm['cchOwnerAge'];
 $cchOwnerSocial = $cchForm['cchOwnerSocial'];
 $cchOwnerDateOfBirth = $cchForm['cchOwnerDateOfBirth'];;
 $cchOwnerCompanyAddress = $cchForm['cchOwnerCompanyAddress'];
 $cchOwnerCompanyAddressLine2 = $cchForm['cchOwnerCompanyAddressLine2'];
 $cchOwnerCompanyCity = $cchForm['cchOwnerCompanyCity'];
 $cchOwnerCompanyState = $cchForm['cchOwnerCompanyState'];
 $cchOwnerCompanyZip = $cchForm['cchOwnerCompanyZip'];
 $cchOwnerCompanyDriversLicense = $cchForm['cchOwnerCompanyDriversLicense'];
 $cchSecondaryOwnersFirstName = $cchForm['cchSecondaryOwnersFirstName'];
 $cchSecondaryOwnersLastName = $cchForm['cchSecondaryOwnersLastName'];
 $cchSecondaryOwnerTitle = $cchForm['cchSecondaryOwnerTitle'];
 $cchSecondaryOwnerAge = $cchForm['cchSecondaryOwnerAge'];
 $cchSecondaryOwnerSocial = $cchForm['cchSecondaryOwnerSocial'];
 $cchSecondaryOwnerDateOfBirth = $cchForm['cchSecondaryOwnerDateOfBirth'];
 $cchSecondaryOwnerPhone = $cchForm['cchSecondaryOwnerPhone'];
 $cchSecondaryOwnerAddress = $cchForm['cchSecondaryOwnerAddress'];
 $cchSecondaryOwnerAddressLine2 = $cchForm['cchSecondaryOwnerAddressLine2'];
 $cchSecondaryOwnerCity = $cchForm['cchSecondaryOwnerCity'];
 $cchSecondaryOwnerState = $cchForm['cchSecondaryOwnerState'];
 $cchSecondaryOwnerZip = $cchForm['cchSecondaryOwnerZip'];
 $cchSecondaryOwnerDriversLicense = $cchForm['cchSecondaryOwnerDriversLicense'];
 $cchDescribeProductInfo = $cchForm['cchDescribeProductInfo'];
 $cchProductAnnualVolume = $cchForm['cchProductAnnualVolume'];
 $cchProductAverageTicket = $cchForm['cchProductAverageTicket'];
 $cchProductHighTicket = $cchForm['cchProductHighTicket'];
 $cchTransactionType = $cchForm['cchTransactionType'];
}

if (isset($_GET['del_id'])) {
 $id = $_GET['del_id'];
 $count = delete($table, $id);
 $_SESSION['message'] = 'Form successfully deleted';
 $_SESSION['type'] = 'warning';
 header('location: ' . BASE_URL . '/public/cchhome.php');
 exit();
}

if (isset($_POST['update-form'])) {
 $id = $_POST['id'];
 unset($_POST['update-form'], $_POST['id']);
 $cchForm_id = update($table, $id, $_POST);
 $_SESSION['message'] = 'Form successfully updated';
 $_SESSION['type'] = 'success';
 header('location: ' . BASE_URL . '/public/cchhome.php');
 exit();
}
