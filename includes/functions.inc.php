<?php

// Creating users section

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{

	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function invalidUid($username)
{

	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email)
{

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{

	if ($pwd !== $pwdrepeat) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $username)
{
	$sql = "SELECT * FROM PlatinumPaymentUsers WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $userEmail);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
	$sql = "INSERT INTO PlatinumPaymentUsers (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../home.php?error=none");
	exit();
}

function emptyInputLogin($username, $pwd)
{

	if (empty($username) || empty($pwd)) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd)
{
	$uidExists = uidExists($conn, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	} elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../home.php?error=none");
		exit();
	}
}
// Creating retail questionnaire form

function rtlbidExists($conn, $businessName)
{
	$sql = "SELECT businessName FROM PlatinumPaymentRetailInfo WHERE businessName = ? ";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Error:\n";
		print_r($stmt->error_list);
		echo "Error:\n";
		print_r($conn->error_list);
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $businessName);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createRtlForm(
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
) {
	$sql = "INSERT Into PlatinumPaymentRetailInfo (businessName, companyStreet, companyStreetLine2, companyState, companyCity, companyZip, companyPhoneNumber, companyWebsiteUrl, contactFirstName, contactLastName, businessStructure, businessStructureOther, federalTaxId, businessDateFormed, businessStateCreated, ownerFirstName, ownerLastName, ownerTitle, ownerAge, ownerSocial, ownerDateOfBirth, ownerCompanyAddress, ownerCompanyAddressLine2, ownerCompanyCity, ownerCompanyState, ownerCompanyZip, ownerCompanyDriversLicense, secondaryOwnersFirstName, secondaryOwnersLastName, secondaryOwnerTitle, secondaryOwnerAge, secondaryOwnerSocial, secondaryOwnerAddress, secondaryOwnerAddressLine2, secondaryOwnerCity, secondaryOwnerState, secondaryOwnerZip, secondaryOwnerDateOfBirth, secondaryOwnerDriversLicense, describeProductInfo, productAnnualVolume, productAverageTicket, productHighTicket, transactionType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../retailquestionnaire.php?error=stmtfailed");
		exit();
	}


	mysqli_stmt_bind_param(
		$stmt,
		"sssssiisssssisssssiisssssissssiissssisssiiis",
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

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../index.php?error=none");
	exit();
}

// Creating merch questionnaire form

function mrcBidExists($conn, $mrcBusinessName)
{
	$sql = "SELECT businessName FROM PlatPayMerchForm WHERE mrcBusinessName = ? ";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Error:\n";
		print_r($stmt->error_list);
		echo "Error:\n";
		print_r($conn->error_list);
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $mrcBusinessName);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createMrcQuestionnaire(
	$conn,
	$mrcBusinessName,
	$mrcBusinessStreetAdd,
	$mrcBusinessStreetAdd2,
	$mrcBusinessCity,
	$mrcBusinessState,
	$mrcBusinessZip,
	$mrcBusinessLegalName,
	$mrcBusinessMailingRadio,
	$mrcBusinessPhoneNumber,
	$mrcBusinessFaxNumber,
	$mrcCustomerServiceNumber,
	$mrcBusinessSite,
	$mrcContactPerson,
	$mrcBusinessEmail,
	$mrcProfileStructure,
	$mrcProfileFederalTaxId,
	$mrcProfileDateCreated,
	$mrcProfileState,
	$mrcProfileNumberOfEmployees,
	$mrcProfileTradeReference1,
	$mrcProfileContactName1,
	$mrcProfileContactNumber1,
	$mrcProfileTradeReference2,
	$mrcProfileContactName2,
	$mrcProfileContactNumber2,
	$mrcOwnerPrimaryName,
	$mrcOwnerTitle,
	$mrcOwnershipAge,
	$mrcOwnerSocial,
	$mrcOwnerDateOfBirth,
	$mrcOwnerMobileNumber,
	$mrcOwnerStreetAddress,
	$mrcOwnerStreetAddress2,
	$mrcOwnerCity,
	$mrcOwnerState,
	$mrcOwnerZip,
	$mrcOwnerDriversLicense,
	$mrcOwnerStateId,
	$mrcOwnerYearResidence,
	$mrcSecondOwnerName,
	$mrcSecondOwnerTitle,
	$mrcSecondOwnershipAge,
	$mrcSecondOwnerSocial,
	$mrcSecondOwnerDateOfBirth,
	$mrcSecondOwnerMobileNumber,
	$mrcSecondOwnerStreetAddress,
	$mrcSecondOwnerStreetAddress2,
	$mrcSecondOwnerCity,
	$mrcSecondOwnerState,
	$mrcSecondOwnerZip,
	$mrcSecondOwnerDriversLicense,
	$mrcSecondOwnerStateId,
	$mrcSecondOwnerYearResidence,
	$mrcSiteOfficeStructure,
	$mrcSiteFloorOccupy,
	$mrcSiteApproxSqFt,
	$mrcSiteBuildingZone,
	$mrcSiteOwnLease,
	$mrcProductProjectVolume,
	$mrcProductAverageTicket,
	$mrcProductHighTicket,
	$mrcProductTicketDescription,
	$mrcProductDescribeService,
	$mrcProductRefundPolicy,
	$mrcProductTransactionType,
	$mrcProductCardSwipe,
	$mrcProductMailTelephone,
	$mrcProductInternetEcommerce,
	$mrcProductConsumerSales,
	$mrcProductBusinessSales,
	$mrcAccountAcceptVMCD,
	$mrcAccountAcceptAmex,
	$mrcAccountNoAmex,
	$mrcAccountCurrentProcessor,
	$mrcAccountGateway,
	$mrcAccountTerminated,
	$mrcBankName,
	$mrcBankAddress,
	$mrcBankPhoneNumber,
	$mrcBankContactName,
	$mrcBankAccount,
	$mrcBankRouting,
	$mrcBankCheckingSaving,
	$mrcCampaignDescribeProduct,
	$mrcCampaignProductSold,
	$mrcCampaignPricePoint,
	$mrcCampaignProductFrontBack,
	$mrcCampaignCrossProduct,
	$mrcCampaignProductFreeTrial,
	$mrcCampaignProductBilling,
	$mrcCampaignProductMarketing,
	$mrcCampaignMajorCPA,
	$mrcCampaignLeadQuality,
	$mrcCampaignProductWarrenty,
	$mrcCampaignCustomerCancel,
	$mrcFulfillmentSourcing,
	$mrcFulfillmentShipment,
	$mrcFulfillmentManufactures,
	$mrcFulfillmentProductsSold,
	$mrcFulfillmentUnitsPerDay,
	$mrcFulfillmentProductStock,
	$mrcFulfillmentInventoryReport,
	$mrcFulfillmentShippedTime,
	$mrcFulfillmentOrderInfo,
	$mrcFulfillmentProcessTime,
	$mrcFulfillmentProductAvailability,
	$mrcFulfillmentProductBackOrder,
	$mrcCustomerSourced,
	$mrcCustomerOutsourced,
	$mrcCustomerTraining,
	$mrcCustomerServiceSource,
	$mrcCustomerServiceHours,
	$mrcCustomerReturns,
	$mrcCustomerFulfillment,
	$mrcCustomerCommunication,
	$mrcCustomerQualityControl,
	$mrcCustomerCardStatement,
	$mrcCustomerBankStatement,
	$mrcCustomerSignature
) {
	$sql = "INSERT Into PlatPayMerchForm(
mrcBusinessName, mrcBusinessStreetAdd, mrcBusinessStreetAdd2, mrcBusinessCity, mrcBusinessState, mrcBusinessZip, mrcBusinessLegalName, mrcBusinessMailingRadio, mrcBusinessPhoneNumber, mrcBusinessFaxNumber, mrcCustomerServiceNumber, mrcBusinessSite, mrcContactPerson, mrcBusinessEmail, mrcProfileStructure, mrcProfileFederalTaxId, mrcProfileDateCreated, mrcProfileState, mrcProfileNumberOfEmployees, mrcProfileTradeReference1, mrcProfileContactName1, mrcProfileContactNumber1, mrcProfileTradeReference2, mrcProfileContactName2, mrcProfileContactNumber2, mrcOwnerPrimaryName, mrcOwnerTitle, mrcOwnershipAge, mrcOwnerSocial, mrcOwnerDateOfBirth, mrcOwnerMobileNumber, mrcOwnerStreetAddress, mrcOwnerStreetAddress2, mrcOwnerCity, mrcOwnerState, mrcOwnerZip, mrcOwnerDriversLicense, mrcOwnerStateId, mrcOwnerYearResidence, mrcSecondOwnerName, mrcSecondOwnerTitle, mrcSecondOwnershipAge, mrcSecondOwnerSocial, mrcSecondOwnerDateOfBirth, mrcSecondOwnerMobileNumber, mrcSecondOwnerStreetAddress, mrcSecondOwnerStreetAddress2, mrcSecondOwnerCity, mrcSecondOwnerState, mrcSecondOwnerZip, mrcSecondOwnerDriversLicense, mrcSecondOwnerStateId, mrcSecondOwnerYearResidence, mrcSiteOfficeStructure, mrcSiteFloorOccupy, mrcSiteApproxSqFt, mrcSiteBuildingZone, mrcSiteOwnLease, mrcProductProjectVolume, mrcProductAverageTicket, mrcProductHighTicket, mrcProductTicketDescription, mrcProductDescribeService, mrcProductRefundPolicy, mrcProductTransactionType, mrcProductCardSwipe, mrcProductMailTelephone, mrcProductInternetEcommerce, mrcProductConsumerSales, mrcProductBusinessSales, mrcAccountAcceptVMCD, mrcAccountAcceptAmex, mrcAccountNoAmex, mrcAccountCurrentProcessor, mrcAccountGateway, mrcAccountTerminated, mrcBankName, mrcBankAddress, mrcBankPhoneNumber, mrcBankContactName, mrcBankAccount, mrcBankRouting, mrcBankCheckingSaving, mrcCampaignDescribeProduct, mrcCampaignProductSold, mrcCampaignPricePoint, mrcCampaignProductFrontBack, mrcCampaignCrossProduct, mrcCampaignProductFreeTrial, mrcCampaignProductBilling, mrcCampaignProductMarketing, mrcCampaignMajorCPA, mrcCampaignLeadQuality,mrcCampaignProductWarrenty, mrcCampaignCustomerCancel, mrcFulfillmentSourcing, mrcFulfillmentShipment, mrcFulfillmentManufactures, mrcFulfillmentProductsSold, mrcFulfillmentUnitsPerDay, mrcFulfillmentProductStock, mrcFulfillmentInventoryReport, mrcFulfillmentShippedTime,mrcFulfillmentOrderInfo, mrcFulfillmentProcessTime, mrcFulfillmentProductAvailability, mrcFulfillmentProductBackOrder, mrcCustomerSourced, mrcCustomerOutsourced, mrcCustomerTraining, mrcCustomerServiceSource, mrcCustomerServiceHours, mrcCustomerReturns, mrcCustomerFulfillment, mrcCustomerCommunication, mrcCustomerQualityControl, mrcCustomerCardStatement, mrcCustomerBankStatement, mrcCustomerSignature) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../merchantquestionnaire.php?error=stmtfailed");
		exit();
	}


	mysqli_stmt_bind_param(
		$stmt,
		"sssssissiiissssissississisiiisissssisssssiisissssissssssssiiisssssssssssssssssiiiisssisssssssssssssssssssssssssssssssss",
		$conn,
		$mrcBusinessName,
		$mrcBusinessStreetAdd,
		$mrcBusinessStreetAdd2,
		$mrcBusinessCity,
		$mrcBusinessState,
		$mrcBusinessZip,
		$mrcBusinessLegalName,
		$mrcBusinessMailingRadio,
		$mrcBusinessPhoneNumber,
		$mrcBusinessFaxNumber,
		$mrcCustomerServiceNumber,
		$mrcBusinessSite,
		$mrcContactPerson,
		$mrcBusinessEmail,
		$mrcProfileStructure,
		$mrcProfileFederalTaxId,
		$mrcProfileDateCreated,
		$mrcProfileState,
		$mrcProfileNumberOfEmployees,
		$mrcProfileTradeReference1,
		$mrcProfileContactName1,
		$mrcProfileContactNumber1,
		$mrcProfileTradeReference2,
		$mrcProfileContactName2,
		$mrcProfileContactNumber2,
		$mrcOwnerPrimaryName,
		$mrcOwnerTitle,
		$mrcOwnershipAge,
		$mrcOwnerSocial,
		$mrcOwnerDateOfBirth,
		$mrcOwnerMobileNumber,
		$mrcOwnerStreetAddress,
		$mrcOwnerStreetAddress2,
		$mrcOwnerCity,
		$mrcOwnerState,
		$mrcOwnerZip,
		$mrcOwnerDriversLicense,
		$mrcOwnerStateId,
		$mrcOwnerYearResidence,
		$mrcSecondOwnerName,
		$mrcSecondOwnerTitle,
		$mrcSecondOwnershipAge,
		$mrcSecondOwnerSocial,
		$mrcSecondOwnerDateOfBirth,
		$mrcSecondOwnerMobileNumber,
		$mrcSecondOwnerStreetAddress,
		$mrcSecondOwnerStreetAddress2,
		$mrcSecondOwnerCity,
		$mrcSecondOwnerState,
		$mrcSecondOwnerZip,
		$mrcSecondOwnerDriversLicense,
		$mrcSecondOwnerStateId,
		$mrcSecondOwnerYearResidence,
		$mrcSiteOfficeStructure,
		$mrcSiteFloorOccupy,
		$mrcSiteApproxSqFt,
		$mrcSiteBuildingZone,
		$mrcSiteOwnLease,
		$mrcProductProjectVolume,
		$mrcProductAverageTicket,
		$mrcProductHighTicket,
		$mrcProductTicketDescription,
		$mrcProductDescribeService,
		$mrcProductRefundPolicy,
		$mrcProductTransactionType,
		$mrcProductCardSwipe,
		$mrcProductMailTelephone,
		$mrcProductInternetEcommerce,
		$mrcProductConsumerSales,
		$mrcProductBusinessSales,
		$mrcAccountAcceptVMCD,
		$mrcAccountAcceptAmex,
		$mrcAccountNoAmex,
		$mrcAccountCurrentProcessor,
		$mrcAccountGateway,
		$mrcAccountTerminated,
		$mrcBankName,
		$mrcBankAddress,
		$mrcBankPhoneNumber,
		$mrcBankContactName,
		$mrcBankAccount,
		$mrcBankRouting,
		$mrcBankCheckingSaving,
		$mrcCampaignDescribeProduct,
		$mrcCampaignProductSold,
		$mrcCampaignPricePoint,
		$mrcCampaignProductFrontBack,
		$mrcCampaignCrossProduct,
		$mrcCampaignProductFreeTrial,
		$mrcCampaignProductBilling,
		$mrcCampaignProductMarketing,
		$mrcCampaignMajorCPA,
		$mrcCampaignLeadQuality,
		$mrcCampaignProductWarrenty,
		$mrcCampaignCustomerCancel,
		$mrcFulfillmentSourcing,
		$mrcFulfillmentShipment,
		$mrcFulfillmentManufactures,
		$mrcFulfillmentProductsSold,
		$mrcFulfillmentUnitsPerDay,
		$mrcFulfillmentProductStock,
		$mrcFulfillmentInventoryReport,
		$mrcFulfillmentShippedTime,
		$mrcFulfillmentOrderInfo,
		$mrcFulfillmentProcessTime,
		$mrcFulfillmentProductAvailability,
		$mrcFulfillmentProductBackOrder,
		$mrcCustomerSourced,
		$mrcCustomerOutsourced,
		$mrcCustomerTraining,
		$mrcCustomerServiceSource,
		$mrcCustomerServiceHours,
		$mrcCustomerReturns,
		$mrcCustomerFulfillment,
		$mrcCustomerCommunication,
		$mrcCustomerQualityControl,
		$mrcCustomerCardStatement,
		$mrcCustomerBankStatement,
		$mrcCustomerSignature
	);

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../merchantquestionnaire.php?error=none");
	exit();
}
