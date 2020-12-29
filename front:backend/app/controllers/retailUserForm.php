<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateForms.php");

$table = 'PlatPayRetailForm';

$id = '';
$rtlBusinessName = '';
$rtlCompanyStreet = '';
$rtlCompanyStreetLine2 = '';
$rtlCompanyCity = '';
$rtlCompanyState = '';
$rtlCompanyZip = '';
$rtlCompanyPhoneNumber = '';
$rtlCompanyWebsiteUrl = '';
$rtlContactFirstName = '';
$rtlContactLastName = '';
$rtlBusinessStructure = '';
$rtlBusinessStructureOther = '';
$rtlFederalTaxId = '';
$rtlBusinessDateFormed = '';
$rtlBusinessStateCreated = '';
$rtlOwnerFirstName = '';
$rtlOwnerLastName = '';
$rtlOwnerTitle = '';
$rtlOwnerAge = '';
$rtlOwnerSocial = '';
$rtlOwnerDateOfBirth = '';
$rtlOwnerCompanyAddress = '';
$rtlOwnerCompanyAddressLine2 = '';
$rtlOwnerCompanyCity = '';
$rtlOwnerCompanyState = '';
$rtlOwnerCompanyZip = '';
$rtlOwnerCompanyDriversLicense = '';
$rtlSecondaryOwnersFirstName = '';
$rtlSecondaryOwnersLastName = '';
$rtlSecondaryOwnerTitle = '';
$rtlSecondaryOwnerAge = '';
$rtlSecondaryOwnerSocial = '';
$rtlSecondaryOwnerDateOfBirth = '';
$rtlSecondaryOwnerPhone = '';
$rtlSecondaryOwnerAddress = '';
$rtlSecondaryOwnerAddressLine2 = '';
$rtlSecondaryOwnerCity = '';
$rtlSecondaryOwnerState = '';
$rtlSecondaryOwnerZip = '';
$rtlSecondaryOwnerDriversLicense = '';
$rtlDescribeProductInfo = '';
$rtlProductAnnualVolume = '';
$rtlProductAverageTicket = '';
$rtlProductHighTicket = '';
$rtlTransactionType = '';

$rtlForms = selectAll($table);

if (isset($_POST['add-form'])) {
 $errors = validateForm($_POST);
}

if (isset($_POST['add-form'])) {
 unset($_POST['add-form']);
 $rtlForm_id = create($table, $_POST);
 // dd($_POST);
 $_SESSION['message'] = 'Form created Successfully';
 $_SESSION['type'] = 'success';

 header('location: ' . BASE_URL . '/public/rtlhome.php');
 exit();
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $rtlForm = selectOne($table, ['id' => $id]);
 $id = $rtlForm['id'];
 $rtlBusinessName = $rtlForm['rtlBusinessName'];
 $rtlCompanyStreet = $rtlForm['rtlCompanyStreet'];
 $rtlCompanyStreetLine2 = $rtlForm['rtlCompanyStreetLine2'];
 $rtlCompanyCity = $rtlForm['rtlCompanyCity'];
 $rtlCompanyState = $rtlForm['rtlCompanyState'];
 $rtlCompanyZip = $rtlForm['rtlCompanyZip'];
 $rtlCompanyPhoneNumber = $rtlForm['rtlCompanyPhoneNumber'];
 $rtlCompanyWebsiteUrl = $rtlForm['rtlCompanyWebsiteUrl'];
 $rtlContactFirstName = $rtlForm['rtlContactFirstName'];
 $rtlContactLastName = $rtlForm['rtlContactLastName'];
 $rtlBusinessStructure = $rtlForm['rtlBusinessStructure'];;
 $rtlBusinessStructureOther = $rtlForm['rtlBusinessStructureOther'];
 $rtlFederalTaxId = $rtlForm['rtlFederalTaxId'];
 $rtlBusinessDateFormed = $rtlForm['rtlBusinessDateFormed'];
 $rtlBusinessStateCreated = $rtlForm['rtlBusinessStateCreated'];
 $rtlOwnerFirstName = $rtlForm['rtlOwnerFirstName'];
 $rtlOwnerLastName = $rtlForm['rtlOwnerLastName'];;
 $rtlOwnerTitle = $rtlForm['rtlOwnerTitle'];
 $rtlOwnerAge = $rtlForm['rtlOwnerAge'];
 $rtlOwnerSocial = $rtlForm['rtlOwnerSocial'];
 $rtlOwnerDateOfBirth = $rtlForm['rtlOwnerDateOfBirth'];;
 $rtlOwnerCompanyAddress = $rtlForm['rtlOwnerCompanyAddress'];
 $rtlOwnerCompanyAddressLine2 = $rtlForm['rtlOwnerCompanyAddressLine2'];
 $rtlOwnerCompanyCity = $rtlForm['rtlOwnerCompanyCity'];
 $rtlOwnerCompanyState = $rtlForm['rtlOwnerCompanyState'];
 $rtlOwnerCompanyZip = $rtlForm['rtlOwnerCompanyZip'];
 $rtlOwnerCompanyDriversLicense = $rtlForm['rtlOwnerCompanyDriversLicense'];
 $rtlSecondaryOwnersFirstName = $rtlForm['rtlSecondaryOwnersFirstName'];
 $rtlSecondaryOwnersLastName = $rtlForm['rtlSecondaryOwnersLastName'];
 $rtlSecondaryOwnerTitle = $rtlForm['rtlSecondaryOwnerTitle'];
 $rtlSecondaryOwnerAge = $rtlForm['rtlSecondaryOwnerAge'];
 $rtlSecondaryOwnerSocial = $rtlForm['rtlSecondaryOwnerSocial'];
 $rtlSecondaryOwnerDateOfBirth = $rtlForm['rtlSecondaryOwnerDateOfBirth'];
 $rtlSecondaryOwnerPhone = $rtlForm['rtlSecondaryOwnerPhone'];
 $rtlSecondaryOwnerAddress = $rtlForm['rtlSecondaryOwnerAddress'];
 $rtlSecondaryOwnerAddressLine2 = $rtlForm['rtlSecondaryOwnerAddressLine2'];
 $rtlSecondaryOwnerCity = $rtlForm['rtlSecondaryOwnerCity'];
 $rtlSecondaryOwnerState = $rtlForm['rtlSecondaryOwnerState'];
 $rtlSecondaryOwnerZip = $rtlForm['rtlSecondaryOwnerZip'];
 $rtlSecondaryOwnerDriversLicense = $rtlForm['rtlSecondaryOwnerDriversLicense'];
 $rtlDescribeProductInfo = $rtlForm['rtlDescribeProductInfo'];
 $rtlProductAnnualVolume = $rtlForm['rtlProductAnnualVolume'];
 $rtlProductAverageTicket = $rtlForm['rtlProductAverageTicket'];
 $rtlProductHighTicket = $rtlForm['rtlProductHighTicket'];
 $rtlTransactionType = $rtlForm['rtlTransactionType'];
}

if (isset($_GET['del_id'])) {
 $id = $_GET['del_id'];
 $count = delete($table, $id);

 $_SESSION['message'] = 'Form successfully deleted';
 $_SESSION['type'] = 'warning';

 header('location: ' . BASE_URL . '/public/rtlhome.php');
 exit();
}

if (isset($_POST['update-form'])) {
 $id = $_POST['id'];
 unset($_POST['update-form'], $_POST['id']);
 $rtlForm_id = update($table, $id, $_POST);
 $_SESSION['message'] = 'Form successfully updated';
 $_SESSION['type'] = 'success';
 header('location: ' . BASE_URL . '/public/rtlhome.php');
 exit();
}
