<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateForms.php");


$table = 'PlatPayMerchForm';


$id = '';
$mrcBusinessName = '';
$mrcBusinessStreetAdd = '';
$mrcBusinessStreetAdd2 = '';
$mrcBusinessCity = '';
$mrcBusinessState = '';
$mrcBusinessZip = '';
$mrcBusinessLegalName = '';
$mrcBusinessMailingRadio = '';
$mrcBusinessPhoneNumber = '';
$mrcBusinessFaxNumber = '';
$mrcCustomerServiceNumber = '';
$mrcBusinessSite = '';
$mrcContactPerson = '';
$mrcBusinessEmail = '';
$mrcProfileStructure = '';
$mrcProfileFederalTaxId = '';
$mrcProfileDateCreated = '';
$mrcProfileState = '';
$mrcProfileNumberOfEmployees = '';
$mrcProfileTradeReference1 = '';
$mrcProfileContactName1 = '';
$mrcProfileContactNumber1 = '';
$mrcProfileTradeReference2 = '';
$mrcProfileContactName2 = '';
$mrcProfileContactNumber2 = '';
$mrcOwnerPrimaryName = '';
$mrcOwnerTitle = '';
$mrcOwnershipAge = '';
$mrcOwnerSocial = '';
$mrcOwnerDateOfBirth = '';
$mrcOwnerMobileNumber = '';
$mrcOwnerStreetAddress = '';
$mrcOwnerStreetAddress2 = '';
$mrcOwnerCity = '';
$mrcOwnerState = '';
$mrcOwnerZip = '';
$mrcOwnerDriversLicense = '';
$mrcOwnerStateId = '';
$mrcOwnerYearResidence = '';
$mrcSecondOwnerName = '';
$mrcSecondOwnerTitle = '';
$mrcSecondOwnershipAge = '';
$mrcSecondOwnerSocial = '';
$mrcSecondOwnerDateOfBirth = '';
$mrcSecondOwnerMobileNumber = '';
$mrcSecondOwnerStreetAddress = '';
$mrcSecondOwnerStreetAddress2 = '';
$mrcSecondOwnerCity = '';
$mrcSecondOwnerState = '';
$mrcSecondOwnerZip = '';
$mrcSecondOwnerDriversLicense = '';
$mrcSecondOwnerStateId = '';
$mrcSecondOwnerYearResidence = '';
$mrcSiteOfficeStructure = '';
$mrcSiteFloorOccupy = '';
$mrcSiteApproxSqFt = '';
$mrcSiteBuildingZone = '';
$mrcSiteOwnLease = '';
$mrcProductProjectVolume = '';
$mrcProductAverageTicket = '';
$mrcProductHighTicket = '';
$mrcProductTicketDescription = '';
$mrcProductDescribeService = '';
$mrcProductRefundPolicy = '';
$mrcProductTransactionType = '';
$mrcProductCardSwipe = '';
$mrcProductMailTelephone = '';
$mrcProductInternetEcommerce = '';
$mrcProductConsumerSales = '';
$mrcProductBusinessSales = '';
$mrcAccountAcceptVMCD = '';
$mrcAccountAcceptAmex = '';
$mrcAccountNoAmex = '';
$mrcAccountCurrentProcessor = '';
$mrcAccountGateway = '';
$mrcAccountTerminated = '';
$mrcBankName = '';
$mrcBankAddress = '';
$mrcBankPhoneNumber = '';
$mrcBankContactName = '';
$mrcBankAccount = '';
$mrcBankRouting = '';
$mrcBankCheckingSaving = '';
$mrcCampaignDescribeProduct = '';
$mrcCampaignProductSold = '';
$mrcCampaignPricePoint = '';
$mrcCampaignProductFrontBack = '';
$mrcCampaignCrossProduct = '';
$mrcCampaignProductFreeTrial = '';
$mrcCampaignProductBilling = '';
$mrcCampaignProductMarketing = '';
$mrcCampaignMajorCPA = '';
$mrcCampaignLeadQuality = '';
$mrcCampaignProductWarrenty = '';
$mrcCampaignCustomerCancel = '';
$mrcFulfillmentSourcing = '';
$mrcFulfillmentShipment = '';
$mrcFulfillmentManufactures = '';
$mrcFulfillmentProductsSold = '';
$mrcFullfilmentFDA = '';
$mrcFulfillmentUnitsPerDay = '';
$mrcFulfillmentProductStock = '';
$mrcFulfillmentInventoryReport = '';
$mrcFulfillmentShippedTime = '';
$mrcFulfillmentOrderInfo = '';
$mrcFulfillmentProcessTime = '';
$mrcFulfillmentProductAvailability = '';
$mrcFulfillmentProductBackOrder = '';
$mrcCustomerSourced = '';
$mrcCustomerOutsourced = '';
$mrcCustomerTraining = '';
$mrcCustomerServiceSource = '';
$mrcCustomerServiceHours = '';
$mrcCustomerReturns = '';
$mrcCustomerFulfillment = '';
$mrcCustomerCommunication = '';
$mrcCustomerQualityControl = '';
$mrcCustomerCardStatement = '';
$mrcCustomerBankStatement = '';
$mrcCustomerSignature = '';

$mrcForms = selectAll($table);

if (isset($_POST['add-form'])) {
 unset($_POST['add-form']);
 dd($_POST);
 $mrcForm_id = create($table, $_POST);
 $_SESSION['message'] = 'Form created Successfully';
 $_SESSION['type'] = 'success';

 header('location: ' . BASE_URL . '/index.php');
 exit();
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $mrcForm = selectOne($table, ['id' => $id]);
 $id = $mrcForm['id'];
 $mrcBusinessName = $mrcForm['mrcBusinessName '];
 $mrcBusinessStreetAdd = $mrcForm['mrcBusinessStreetAdd'];
 $mrcBusinessStreetAdd2 = $mrcForm['mrcBusinessStreetAdd2'];
 $mrcBusinessCity = $mrcForm['mrcBusinessCity'];
 $mrcBusinessState = $mrcForm['mrcBusinessState'];
 $mrcBusinessZip = $mrcForm['mrcBusinessZip'];
 $mrcBusinessLegalName = $mrcForm['mrcBusinessLegalName'];
 $mrcBusinessMailingRadio = $mrcForm['mrcBusinessMailingRadio'];
 $mrcBusinessPhoneNumber = $mrcForm['mrcBusinessPhoneNumber'];
 $mrcBusinessFaxNumber = $mrcForm['mrcBusinessFaxNumber'];
 $mrcCustomerServiceNumber = $mrcForm['mrcCustomerServiceNumber'];
 $mrcBusinessSite = $mrcForm['mrcBusinessSite'];
 $mrcContactPerson = $mrcForm['mrcContactPerson'];
 $mrcBusinessEmail = $mrcForm['mrcBusinessEmail'];
 $mrcProfileStructure = $mrcForm['mrcProfileStructure'];
 $mrcProfileFederalTaxId = $mrcForm['mrcProfileFederalTaxId'];
 $mrcProfileDateCreated = $mrcForm['mrcProfileDateCreated'];
 $mrcProfileState = $mrcForm['mrcProfileState'];
 $mrcProfileNumberOfEmployees = $mrcForm['mrcProfileNumberOfEmployees'];
 $mrcProfileTradeReference1 = $mrcForm['mrcProfileTradeReference1'];
 $mrcProfileContactName1 = $mrcForm['mrcProfileContactName1'];
 $mrcProfileContactNumber1 = $mrcForm['mrc-profile-number1'];
 $mrcProfileTradeReference2 = $mrcForm['mrcProfileContactNumber1'];
 $mrcProfileContactName2 = $mrcForm['mrcProfileContactName2'];
 $mrcProfileContactNumber2 = $mrcForm['mrcProfileContactNumber2'];
 $mrcOwnerPrimaryName = $mrcForm['mrcOwnerPrimaryName'];
 $mrcOwnerTitle = $mrcForm['mrcOwnerTitle'];
 $mrcOwnershipAge = $mrcForm['mrcOwnershipAge'];
 $mrcOwnerSocial = $mrcForm['mrcOwnerSocial'];
 $mrcOwnerDateOfBirth = $mrcForm['mrcOwnerDateOfBirth'];
 $mrcOwnerMobileNumber = $mrcForm['mrcOwnerMobileNumber'];
 $mrcOwnerStreetAddress = $mrcForm['mrcOwnerStreetAddress'];
 $mrcOwnerStreetAddress2 = $mrcForm['mrcOwnerStreetAddress2'];
 $mrcOwnerCity = $mrcForm['mrcOwnerCity'];
 $mrcOwnerState = $mrcForm['mrc-owner-state'];
 $mrcOwnerZip = $mrcForm['mrcOwnerZip'];
 $mrcOwnerDriversLicense = $mrcForm['mrcOwnerDriversLicense'];
 $mrcOwnerStateId = $mrcForm['mrcOwnerStateId'];
 $mrcOwnerYearResidence = $mrcForm['mrcOwnerYearResidence'];
 $mrcSecondOwnerName = $mrcForm['mrcSecondOwnerName'];
 $mrcSecondOwnerTitle = $mrcForm['mrcSecondOwnerTitle'];
 $mrcSecondOwnershipAge = $mrcForm['mrc-second-ownership-age'];
 $mrcSecondOwnerSocial = $mrcForm['mrcSecondOwnerSocial'];
 $mrcSecondOwnerDateOfBirth = $mrcForm['mrcSecondOwnerDateOfBirth'];
 $mrcSecondOwnerMobileNumber = $mrcForm['mrcSecondOwnerMobileNumber'];
 $mrcSecondOwnerStreetAddress = $mrcForm['mrcSecondOwnerStreetAddress'];
 $mrcSecondOwnerStreetAddress2 = $mrcForm['mrcSecondOwnerStreetAddress2'];
 $mrcSecondOwnerCity = $mrcForm['mrcSecondOwnerCity'];
 $mrcSecondOwnerState = $mrcForm['mrcSecondOwnerState'];
 $mrcSecondOwnerZip = $mrcForm['mrcSecondOwnerZip'];
 $mrcSecondOwnerDriversLicense = $mrcForm['mrcSecondOwnerDriversLicense'];
 $mrcSecondOwnerStateId = $mrcForm['mrcSecondOwnerStateId'];
 $mrcSecondOwnerYearResidence = $mrcForm['mrcSecondOwnerYearResidence'];
 $mrcSiteOfficeStructure = $mrcForm['mrcSiteOfficeStructure'];
 $mrcSiteFloorOccupy = $mrcForm['mrcSiteFloorOccupy'];
 $mrcSiteApproxSqFt = $mrcForm['mrcSiteApproxSqFt'];
 $mrcSiteBuildingZone = $mrcForm['mrcSiteBuildingZone'];
 $mrcSiteOwnLease = $mrcForm['mrcSiteOwnLease'];
 $mrcProductProjectVolume =  $mrcForm['mrcProductProjectVolume'];
 $mrcProductAverageTicket = $mrcForm['mrcProductAverageTicket'];
 $mrcProductHighTicket = $mrcForm['mrcProductHighTicket'];
 $mrcProductTicketDescription = $mrcForm['mrcProductTicketDescription'];
 $mrcProductDescribeService = $mrcForm['mrcProductDescribeService'];
 $mrcProductRefundPolicy = $mrcForm['mrcProductRefundPolicy'];
 $mrcProductTransactionType = $mrcForm['mrcProductTransactionType'];
 $mrcProductCardSwipe = $mrcForm['mrcProductCardSwipe'];
 $mrcProductMailTelephone = $mrcForm['mrcProductMailTelephone'];
 $mrcProductInternetEcommerce = $mrcForm['mrcProductInternetEcommerce'];
 $mrcProductConsumerSales = $mrcForm['mrcProductConsumerSales'];
 $mrcProductBusinessSales = $mrcForm['mrcProductBusinessSales'];
 $mrcAccountAcceptVMCD = $mrcForm['mrcAccountAcceptVMCD'];
 $mrcAccountAcceptAmex = $mrcForm['mrcAccountAcceptAmex'];
 $mrcAccountNoAmex = $mrcForm['mrcAccountNoAmex'];
 $mrcAccountCurrentProcessor = $mrcForm['mrcAccountCurrentProcessor'];
 $mrcAccountGateway = $mrcForm['mrcAccountGateway'];
 $mrcAccountTerminated = $mrcForm['mrcAccountTerminated'];
 $mrcBankName = $mrcForm['mrcBankName'];
 $mrcBankAddress = $mrcForm['mrcBankAddress'];
 $mrcBankPhoneNumber = $mrcForm['mrcBankPhoneNumber'];
 $mrcBankContactName = $mrcForm['mrcBankContactName'];
 $mrcBankAccount = $mrcForm['mrcBankAccount'];
 $mrcBankRouting = $mrcForm['mrcBankRouting'];
 $mrcBankCheckingSaving = $mrcForm['mrcBankCheckingSaving'];
 $mrcCampaignDescribeProduct = $mrcForm['mrcCampaignDescribeProduct'];
 $mrcCampaignProductSold = $mrcForm['mrcCampaignProductSold'];
 $mrcCampaignPricePoint = $mrcForm['mrcCampaignPricePoint'];
 $mrcCampaignProductFrontBack = $mrcForm['mrcCampaignProductFrontBack'];
 $mrcCampaignCrossProduct = $mrcForm['mrcCampaignCrossProduct'];
 $mrcCampaignProductFreeTrial = $mrcForm['mrcCampaignProductFreeTrial'];
 $mrcCampaignProductBilling = $mrcForm['mrcCampaignProductBilling'];
 $mrcCampaignProductMarketing = $mrcForm['mrcCampaignProductMarketing'];
 $mrcCampaignMajorCPA = $mrcForm['mrcCampaignMajorCPA'];
 $mrcCampaignLeadQuality = $mrcForm['mrcCampaignLeadQuality'];
 $mrcCampaignProductWarrenty = $mrcForm['mrcCampaignProductWarrenty'];
 $mrcCampaignCustomerCancel = $mrcForm['mrcCampaignCustomerCancel'];
 $mrcFulfillmentSourcing = $mrcForm['mrcFulfillmentSourcing'];
 $mrcFulfillmentShipment = $mrcForm['mrcFulfillmentShipment'];
 $mrcFulfillmentManufactures = $mrcForm['mrcFulfillmentManufactures'];
 $mrcFulfillmentProductsSold = $mrcForm['mrcFulfillmentProductsSold'];
 $mrcFullfilmentFDA = $mrcForm['mrcFullfilmentFDA'];
 $mrcFulfillmentUnitsPerDay = $mrcForm['mrcFulfillmentUnitsPerDay'];
 $mrcFulfillmentProductStock = $mrcForm['mrcFulfillmentProductStock'];
 $mrcFulfillmentInventoryReport = $mrcForm['mrcFulfillmentInventoryReport'];
 $mrcFulfillmentShippedTime = $mrcForm['mrcFulfillmentShippedTime'];
 $mrcFulfillmentOrderInfo = $mrcForm['mrcFulfillmentOrderInfo'];
 $mrcFulfillmentProcessTime = $mrcForm['mrcFulfillmentProcessTime'];
 $mrcFulfillmentProductAvailability = $mrcForm['mrcFulfillmentProductAvailability'];
 $mrcFulfillmentProductBackOrder = $mrcForm['mrcFulfillmentProductBackOrder'];
 $mrcCustomerSourced = $mrcForm['mrcCustomerSourced'];
 $mrcCustomerOutsourced = $mrcForm['mrcCustomerOutsourced'];
 $mrcCustomerTraining = $mrcForm['mrcCustomerTraining'];
 $mrcCustomerServiceSource = $mrcForm['mrcCustomerServiceSource'];
 $mrcCustomerServiceHours = $mrcForm['mrcCustomerServiceHours'];
 $mrcCustomerReturns = $mrcForm['mrcCustomerReturns'];
 $mrcCustomerFulfillment = $mrcForm['mrcCustomerFulfillment'];
 $mrcCustomerCommunication = $mrcForm['mrcCustomerCommunication'];
 $mrcCustomerQualityControl = $mrcForm['mrcCustomerQualityControl'];
 $mrcCustomerCardStatement = $mrcForm['mrcCustomerCardStatement'];
 $mrcCustomerBankStatement = $mrcForm['mrcCustomerBankStatement'];
 $mrcCustomerSignature = $mrcForm['mrcCustomerSignature'];
}

if (isset($_GET['del_id'])) {
 $id = $_GET['del_id'];
 $count = delete($table, $id);
 $_SESSION['message'] = 'Form successfully deleted';
 $_SESSION['type'] = 'warning';
 header('location: ' . BASE_URL . '/index.php');
 exit();
}

if (isset($_POST['update-form'])) {
 $id = $_POST['id'];
 unset($_POST['update-form'], $_POST['id']);
 $mrcForm_id = update($table, $id, $_POST);
 $_SESSION['message'] = 'Form successfully updated';
 $_SESSION['type'] = 'success';
 header('location: ' . BASE_URL . '/index.php');
 exit();
}
