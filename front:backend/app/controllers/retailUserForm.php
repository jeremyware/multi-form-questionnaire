<?php
include(ROOT_PATH . "/app/database/db.php");
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
 unset($_POST['add-form']);
 $rtlForm_id = create($table, $_POST);
 // dd($_POST);

 $_SESSION['message'] = 'Form created Successfully';
 $_SESSION['type'] = 'success';

 header('location: ' . BASE_URL . '/index.php');
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

 header('location: ' . BASE_URL . '/admin/forms/index.php');
 exit();
}

if (isset($_POST['update-form'])) {
 $id = $_POST['id'];
 unset($_POST['update-form'], $_POST['id']);
 $rtlForm_id = update($table, $id, $_POST);
 $_SESSION['message'] = 'Form successfully updated';
 $_SESSION['type'] = 'success';
 header('location: ' . BASE_URL . '/index.php');
 exit();
}


// if (isset($_POST['register-btn'])) {
//  $errors = validateUsers($_POST);

//  if (count($errors) === 0) {
//   unset($_POST['register-btn'], $_POST['passwordConf']);
//   $_POST['admin'] = 0;

//   $form_id = createForms('PlatPayRetailForm', $_POST);
//   $formInput = selectOne('PlatPayRetailForm', ['id' => $form_id]);

//   dd($formInput);
//  } else {
//   $rtlBusinessName  = $_POST['rtlBusinessName'];
//   $rtlCompanyStreet = $_POST['rtlCompanyStreet'];
//   $rtlCompanyStreetLine2 = $_POST['rtlCompanyStreetLine2'];
//   $rtlCompanyCity = $_POST['rtlCompanyCity'];
//   $rtlCompanyState = $_POST['rtlCompanyState'];
//   $rtlCompanyZip = $_POST['rtlCompanyZip'];
//   $rtlCompanyPhoneNumber = $_POST['rtlCompanyPhoneNumber'];
//   $rtlCompanyWebsiteUrl = $_POST['rtlCompanyWebsiteUrl'];
//   $rtlContactFirstName = $_POST['rtlContactFirstName'];
//   $rtlContactLastName = $_POST['rtlContactLastName'];
//   $rtlBusinessStructure = $_POST['rtlBusinessStructure'];
//   $rtlBusinessStructureOther = $_POST['rtlBusinessStructureOther'];
//   $rtlFederalTaxId = $_POST['rtlFederalTaxId'];
//   $rtlBusinessDateFormed = $_POST['rtlBusinessDateFormed'];
//   $rtlBusinessStateCreated = $_POST['rtlBusinessStateCreated'];
//   $rtlOwnerFirstName = $_POST['rtlOwnerFirstName'];
//   $rtlOwnerLastName = $_POST['rtlOwnerLastName'];
//   $rtlOwnerTitle = $_POST['rtlOwnerTitle'];
//   $rtlOwnerAge = $_POST['rtlOwnerAge'];
//   $rtlOwnerSocial = $_POST['rtlOwnerSocial'];
//   $rtlOwnerDateOfBirth = $_POST['rtlOwnerDateOfBirth'];
//   $rtlOwnerCompanyAddress = $_POST['rtlOwnerCompanyAddress'];
//   $rtlOwnerCompanyAddressLine2 = $_POST['rtlOwnerCompanyAddressLine2'];
//   $rtlOwnerCompanyCity = $_POST['rtlOwnerCompanyCity'];
//   $rtlOwnerCompanyState = $_POST['rtlOwnerCompanyState'];
//   $rtlOwnerCompanyZip = $_POST['rtlOwnerCompanyZip'];
//   $rtlOwnerCompanyDriversLicense = $_POST['rtlOwnerCompanyDriversLicense'];
//   $rtlSecondaryOwnersFirstName = $_POST['rtlSecondaryOwnersFirstName'];
//   $rtlSecondaryOwnersLastName = $_POST['rtlSecondaryOwnersLastName'];
//   $rtlSecondaryOwnerTitle = $_POST['rtlSecondaryOwnerTitle'];
//   $rtlSecondaryOwnerAge = $_POST['rtlSecondaryOwnerAge'];
//   $rtlSecondaryOwnerSocial = $_POST['rtlSecondaryOwnerSocial'];
//   $rtlSecondaryOwnerDateOfBirth = $_POST['rtlSecondaryOwnerDateOfBirth'];
//   $rtlSecondaryOwnerPhone = $_POST['rtlSecondaryOwnerPhone'];
//   $rtlSecondaryOwnerAddress = $_POST['rtlSecondaryOwnerAddress'];
//   $rtlSecondaryOwnerAddressLine2 = $_POST['rtlSecondaryOwnerAddressLine2'];
//   $rtlSecondaryOwnerCity = $_POST['rtlSecondaryOwnerCity'];
//   $rtlSecondaryOwnerState = $_POST['rtlSecondaryOwnerState'];
//   $rtlSecondaryOwnerZip = $_POST['rtlSecondaryOwnerZip'];
//   $rtlSecondaryOwnerDriversLicense = $_POST['rtlSecondaryOwnerDriversLicense'];
//   $rtlDescribeProductInfo = $_POST['rtlDescribeProductInfo'];
//   $rtlProductAnnualVolume = $_POST['rtlProductAnnualVolume'];
//   $rtlProductAverageTicket = $_POST['rtlProductAverageTicket'];
//   $rtlProductHighTicket = $_POST['rtlProductHighTicket'];
//   $rtlTransactionType = $_POST['rtlTransactionType'];
//  }
// }
