<?php

function validateForm($form)
{

 $errors = array();

 if (empty($form['rtlBusinessName'])) {
  array_push($errors, 'Name is required');
 }

 if (empty($form['rtlCompanyStreet'])) {
  array_push($errors, 'Username is required');
 }

 if (empty($form['rtlCompanyStreetLine2'])) {
  array_push($errors, 'Email is required');
 }

 if (empty($form['rtlCompanyCity'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlCompanyZip'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlCompanyPhoneNumber'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlCompanyWebsiteUrl'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlContactFirstName'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlContactLastName'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlBusinessStructurer'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlBusinessStructureOther'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlFederalTaxId'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlBusinessDateFormed'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlBusinessStateCreated'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerFirstName'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerLastName'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerTitle'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerAge'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerSocial'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerDateOfBirth'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyAddress'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyAddressLine2'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyCity'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyState'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyZip'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlOwnerCompanyDriversLicense'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlDescribeProductInfo'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlProductAnnualVolume'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlProductAverageTicket'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlProductHighTicket'])) {
  array_push($errors, 'Password is required');
 }
 if (empty($form['rtlTransactionType'])) {
  array_push($errors, 'Password is required');
 }


 $exstingForm = selectOne('PlatPayUsers', ['rtlBusinessName' => $form['rtlBusinessName']]);
 if (isset($exstingForm)) {
  array_push($errors, 'Business Already Created');
 }


 return $errors;
}
