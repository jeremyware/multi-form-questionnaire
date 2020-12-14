<?php

if (isset($_POST["submit"])) {

 require_once "dbh.inc.php";
 require_once 'functions.inc.php';

 $businessName = $_POST['businessname'];
 $companyStreet   = $_POST['company-street-address'];
 $companyStreetLine2  = $_POST['company-street-address-line-2'];
 $companyState  = $_POST['company-state'];
 $companyCity = $_POST['company-city'];
 $companyZip  = $_POST['company-zip'];
 $companyPhoneNumber = $_POST['company-phone-number'];
 $companyWebsiteUrl = $_POST['company-website-url'];
 $contactFirstName = $_POST['contact-first-name'];
 $contactLastName = $_POST['contact-last-name'];
 $businessStructure = $_POST['businessstructure-radio'];
 $businessStructureOther = $_POST['businessstructure-other-text'];
 $federalTaxId = $_POST['federal-tax-id'];
 $businessDateFormed = $_POST['date-business-formed'];
 $businessStateCreated = $_POST['state-business-created'];
 $ownerFirstName = $_POST['owner-information-first-name'];
 $ownerLastName = $_POST['owner-information-last-name'];
 $ownerTitle = $_POST['owner-title'];
 $ownerAge = $_POST['owner-age'];
 $ownerSocial  = $_POST['owner-social'];
 $ownerDateOfBirth = $_POST['owner-date-of-birth'];
 $ownerCompanyAddress = $_POST['owner-company-address'];
 $ownerCompanyAddressLine2 = $_POST['owner-company-address-line-2'];
 $ownerCompanyCity = $_POST['owner-company-city'];
 $ownerCompanyState = $_POST['owner-company-state'];
 $ownerCompanyZip = $_POST['owner-company-zip'];
 $ownerCompanyDriversLicense = $_POST['owner-company-drivers-license'];
 $secondaryOwnersFirstName = $_POST['secondary-owner-first-name'];
 $secondaryOwnersLastName = $_POST['secondary-owner-last-name'];
 $secondaryOwnerTitle = $_POST['secondary-owner-title'];
 $secondaryOwnerAge = $_POST['secondary-owner-age'];
 $secondaryOwnerSocial = $_POST['secondary-owner-social'];
 $secondaryOwnerAddress = $_POST['secondary-owner-address'];
 $secondaryOwnerAddressLine2 = $_POST['secondary-owner-address-line-2'];
 $secondaryOwnerCity = $_POST['secondary-owner-city'];
 $secondaryOwnerState = $_POST['secondary-owner-state'];
 $secondaryOwnerZip = $_POST['secondary-owner-zip'];
 $secondaryOwnerDateOfBirth = $_POST['secondary-owner-date-of-birth'];
 $secondaryOwnerDriversLicense = $_POST['secondary-owner-drivers-license'];
 $describeProductInfo = $_POST['describe-product-info'];
 $productAnnualVolume = $_POST['product-annual-volume'];
 $productAverageTicket = $_POST['product-average-ticket'];
 $productHighTicket = $_POST['product-high-ticket'];
 $transactionType = $_POST['transactiontype-radio'];


 if (bidExists($conn, $businessName, $ownerTitle, $ownerSocial, $secondaryOwnerSocial) !== false) {
  header("location: ../retailquestionnaire.php?error=businessidtaken");
  exit();
 }
 echo "Error:\n";
 print_r($conn->error_list);

 createBusiness(
  $conn,
  $businessName,
  $companyStreet,
  $companyStreetLine2,
  $companyState,
  $companyCity,
  $companyZip,
  $companyPhoneNumber,
  $companyWebsiteUrl,
  $contactFirstName,
  $contactLastName,
  $businessStructure,
  $businessStructureOther,
  $federalTaxId,
  $businessDateFormed,
  $businessStateCreated,
  $ownerFirstName,
  $ownerLastName,
  $ownerTitle,
  $ownerAge,
  $ownerSocial,
  $ownerDateOfBirth,
  $ownerCompanyAddress,
  $ownerCompanyAddressLine2,
  $ownerCompanyCity,
  $ownerCompanyState,
  $ownerCompanyZip,
  $ownerCompanyDriversLicense,
  $secondaryOwnersFirstName,
  $secondaryOwnersLastName,
  $secondaryOwnerTitle,
  $secondaryOwnerAge,
  $secondaryOwnerSocial,
  $secondaryOwnerAddress,
  $secondaryOwnerAddressLine2,
  $secondaryOwnerCity,
  $secondaryOwnerState,
  $secondaryOwnerZip,
  $secondaryOwnerDateOfBirth,
  $secondaryOwnerDriversLicense,
  $describeProductInfo,
  $productAnnualVolume,
  $productAverageTicket,
  $productHighTicket,
  $transactionType
 );
} else {
 header("location: ../retailquestionnaire.php=error/connectionfailed");
 exit();
}
