<?php

function validateForm($rtlForm)
{

 $formErrors = array();

 if (empty($rtlForm['rtlBusinessName'])) {
  array_push($formErrors, 'All fields required');
 }

 if (empty($rtlForm['rtlCompanyStreet'])) {
  array_push($formErrors, 'All fields required');
 }

 if (empty($rtlForm['rtlCompanyStreetLine2'])) {
  array_push($formErrors, 'Email is required');
 }

 if (empty($rtlForm['rtlCompanyCity'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlCompanyZip'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlCompanyPhoneNumber'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlCompanyWebsiteUrl'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlContactFirstName'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlContactLastName'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlBusinessStructurer'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlBusinessStructureOther'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlFederalTaxId'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlBusinessDateFormed'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlBusinessStateCreated'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerFirstName'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerLastName'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerTitle'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerAge'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerSocial'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerDateOfBirth'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyAddress'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyAddressLine2'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyCity'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyState'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyZip'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlOwnerCompanyDriversLicense'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlDescribeProductInfo'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlProductAnnualVolume'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlProductAverageTicket'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlProductHighTicket'])) {
  array_push($formErrors, 'All fields are required');
 }
 if (empty($rtlForm['rtlTransactionType'])) {
  array_push($formErrors, 'All fields are required');
 }


 $exstingForm = selectOne('PlatPayRetailForm', ['rtlBusinessName' => $rtlForm['rtlBusinessName']]);
 if ($exstingForm) {
  array_push($formErrors, 'Business Already Created');
 }


 return $formErrors;
}
