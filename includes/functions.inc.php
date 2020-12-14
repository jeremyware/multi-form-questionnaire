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
// Creating business form section

function bidExists($conn, $businessName)
{
	$sql = "SELECT businessName FROM PlatinumPaymentRetailInfo WHERE businessName = ? OR ownerTitle = ? Or ownerSocial = ? OR secondaryOwnerSocial = ?;";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Error:\n";
		print_r($stmt->error_list);
		echo "Error:\n";
		print_r($conn->error_list);
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ssii", $businessName, $ownerTitle, $ownerSocial, $secondaryOwnerSocial);
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

function createBusiness(
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
		header("location: ../home.php?error=createsucess");
		exit();
	}


	mysqli_stmt_bind_param(
		$stmt,
		"sssssssssssssssssssssssssssssssiiiiiiiiiiiii",
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

	echo "Error:\n";
	print_r($conn->error_list);
	echo "Error:\n";
	print_r($stmt->error_list);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	exit();
}
