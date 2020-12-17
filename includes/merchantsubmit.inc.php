<?php
if (isset($_POST["submit"])) {

 require_once "dbh.inc.php";
 require_once 'functions.inc.php';

 $mrcBusinessName = $_POST['mrc-businessname'];
 $mrcBusinessStreetAdd = $_POST['mrc-buisiness-street-address'];
 $mrcBusinessStreetAdd2 = $_POST['mrc-business-street-address-line-2'];
 $mrcBusinessCity = $_POST['mrc-business-city'];
 $mrcBusinessState = $_POST['mrc-business-state'];
 $mrcBusinessZip = $_POST['mrc-business-zip'];
 $mrcBusinessLegalName = $_POST['mrc-business-legal-name'];
 $mrcBusinessMailingRadio = $_POST['mrc-business-mailing-radio'];
 $mrcBusinessPhoneNumber = $_POST['mrc-business-phone'];
 $mrcBusinessFaxNumber = $_POST['mrc-business-fax'];
 $mrcCustomerServiceNumber = $_POST['mrc-customer-service-number'];
 $mrcBusinessSite = $_POST['mrc-business-site'];
 $mrcContactPerson = $_POST['mrc-contact-person'];
 $mrcBusinessEmail = $_POST['mrc-business-email'];
 $mrcProfileStructure = $_POST['mrc-profile-structure'];
 $mrcProfileFederalTaxId = $_POST['mrc-profile-federal-tax'];
 $mrcProfileDateCreated = $_POST['mrc-profile-date-business-created'];
 $mrcProfileState = $_POST['mcr-profile-state'];
 $mrcProfileNumberOfEmployees = $_POST['mrc-profile-number-of-employees'];
 $mrcProfileTradeReference1 = $_POST['mrc-profile-trade-refernce1'];
 $mrcProfileContactName1 = $_POST['mrc-profile-name1'];
 $mrcProfileContactNumber1 = $_POST['mrc-profile-number1'];
 $mrcProfileTradeReference2 = $_POST['mrc-profile-trade-refernce1'];
 $mrcProfileContactName2 = $_POST['mrc-profile-name1'];
 $mrcProfileContactNumber2 = $_POST['mrc-profile-number1'];
 $mrcOwnerPrimaryName = $_POST['mrc-ower-primary-name'];
 $mrcOwnerTitle = $_POST['mrc-owner-title'];
 $mrcOwnershipAge = $_POST['mrc-ownership-age'];
 $mrcOwnerSocial = $_POST['mrc-owner-social'];
 $mrcOwnerDateOfBirth = $_POST['mrc-owner-dob'];
 $mrcOwnerMobileNumber = $_POST['mrc-owner-mobile'];
 $mrcOwnerStreetAddress = $_POST['mrc-owner-street-address'];
 $mrcOwnerStreetAddress2 = $_POST['mrc-owner-street-address2'];
 $mrcOwnerCity = $_POST['mrc-owner-city'];
 $mrcOwnerState = $_POST['mrc-owner-state'];
 $mrcOwnerZip = $_POST['mrc-owner-zip'];
 $mrcOwnerDriversLicense = $_POST['mrc-owner-drivers-license'];
 $mrcOwnerStateId = $_POST['mrc-owner-state-id'];
 $mrcOwnerYearResidence = $_POST['mrc-owner-year-residence'];
 $mrcSecondOwnerName = $_POST['mrc-second-owner-primary-name'];
 $mrcSecondOwnerTitle = $_POST['mrc-second-owner-title'];
 $mrcSecondOwnershipAge = $_POST['mrc-second-ownership-age'];
 $mrcSecondOwnerSocial = $_POST['mrc-second-owner-social'];
 $mrcSecondOwnerDateOfBirth = $_POST['mrc-second-owner-dob'];
 $mrcSecondOwnerMobileNumber = $_POST['mrc-second-owner-mobile'];
 $mrcSecondOwnerStreetAddress = $_POST['mrc-second-owner-street-address'];
 $mrcSecondOwnerStreetAddress2 = $_POST['mrc-second-owner-street-address2'];
 $mrcSecondOwnerCity = $_POST['mrc-second-owner-city'];
 $mrcSecondOwnerState = $_POST['mrc-second-owner-state'];
 $mrcSecondOwnerZip = $_POST['mrc-second-owner-zip'];
 $mrcSecondOwnerDriversLicense = $_POST['mrc-second-owner-drivers-license'];
 $mrcSecondOwnerStateId = $_POST['mrc-second-owner-state-id'];
 $mrcSecondOwnerYearResidence = $_POST['mrc-second-owner-year-residence'];
 $mrcSiteOfficeStructure = $_POST['mrc-site-office-structure'];
 $mrcSiteFloorOccupy = $_POST['mrc-site-floor-occupy'];
 $mrcSiteApproxSqFt = $_POST['mrc-site-approx-sq-ft'];
 $mrcSiteBuildingZone = $_POST['mrc-site-building-zone'];
 $mrcSiteOwnLease = $_POST['mrc-site-own-lease'];
 $mrcProductProjectVolume =  $_POST['mrc-product-project-volume'];
 $mrcProductAverageTicket = $_POST['mrc-product-average-ticket'];
 $mrcProductHighTicket = $_POST['mrc-product-high-ticket'];
 $mrcProductTicketDescription = $_POST['mrc-product-ticket-description'];
 $mrcProductDescribeService = $_POST['mrc-product-describe-serivce'];
 $mrcProductRefundPolicy = $_POST['mrc-product-refund'];
 $mrcProductTransactionType = $_POST['mrc-product-transaction-type'];
 $mrcProductCardSwipe = $_POST['mrc-product-card-swipe'];
 $mrcProductMailTelephone = $_POST['mrc-product-mail-telephone'];
 $mrcProductInternetEcommerce = $_POST['mrc-product-internet-ecommerce'];
 $mrcProductConsumerSales = $_POST['mrc-product-consumer-sales'];
 $mrcProductBusinessSales = $_POST['mrc-product-business-sales'];
 $mrcAccountAcceptVMCD = $_POST['mrc-account-accept-vmcd'];
 $mrcAccountAcceptAmex = $_POST['mrc-account-accept-amex'];
 $mrcAccountNoAmex = $_POST['mrc-account-no-amex'];
 $mrcAccountCurrentProcessor = $_POST['mrc-account-current-processor'];
 $mrcAccountGateway = $_POST['mrc-account-gateway'];
 $mrcAccountTerminated = $_POST['mrc-account-terminated'];
 $mrcBankName = $_POST['mrc-bank-name'];
 $mrcBankAddress = $_POST['mrc-bank-address'];
 $mrcBankPhoneNumber = $_POST['mrc-bank-phone-number'];
 $mrcBankContactName = $_POST['mrc-bank-contact-name'];
 $mrcBankAccount = $_POST['mrc-bank-account'];
 $mrcBankRouting = $_POST['mrc-bank-routing'];
 $mrcBankCheckingSaving = $_POST['mrc-bank-checking-saving'];
 $mrcCampaignDescribeProduct = $_POST['mrc-campaign-describe-product'];
 $mrcCampaignProductSold = $_POST['mrc-campaign-product-sold'];
 $mrcCampaignPricePoint = $_POST['mrc-campaign-price-point'];
 $mrcCampaignProductFrontBack = $_POST['mrc-compaign-product-front-back'];
 $mrcCampaignCrossProduct = $_POST['mrc-campaign-cross-product'];
 $mrcCampaignProductFreeTrial = $_POST['mrc-campaign-product-free-trial'];
 $mrcCampaignProductBilling = $_POST['mrc-campaign-product-billing'];
 $mrcCampaignProductMarketing = $_POST['mrc-campaign-product-marketing'];
 $mrcCampaignMajorCPA = $_POST['mrc-campaign-major-cpa'];
 $mrcCampaignLeadQuality = $_POST['mrc-campaign-lead-quality'];
 $mrcCampaignProductWarrenty = $_POST['mrc-campaign-product-warrenty'];
 $mrcCampaignCustomerCancel = $_POST['mrc-campaign-custom-cancel'];
 $mrcFulfillmentSourcing = $_POST['mrc-fulfillment-sourcing'];
 $mrcFulfillmentShipment = $_POST['mrc-fulfillment-shipping'];
 $mrcFulfillmentManufactures = $_POST['mrc-fulfillment-manufactures'];
 $mrcFulfillmentProductsSold = $_POST['mrc-fulfillment-products-sold'];
 $mrcFulfillmentUnitsPerDay = $_POST['mrc-fulfillment-units'];
 $mrcFulfillmentProductStock = $_POST['mrc-fulfillment-products-stock'];
 $mrcFulfillmentInventoryReport = $_POST['mrc-fulfillment-inventory-report'];
 $mrcFulfillmentShippedTime = $_POST['mrc-fulfillment-shipped-time'];
 $mrcFulfillmentOrderInfo = $_POST['mrc-fulfillment-order-info'];
 $mrcFulfillmentProcessTime = $_POST['mrc-fulfillment-process-time'];
 $mrcFulfillmentProductAvailability = $_POST['mrc-fulfillment-product-availability'];
 $mrcFulfillmentProductBackOrder = $_POST['mrc-fulfillment-product-backorder'];
 $mrcCustomerSourced = $_POST['mrc-customer-sourced'];
 $mrcCustomerOutsourced = $_POST['mrc-customer-outsourced'];
 $mrcCustomerTraining = $_POST['mrc-customer-training'];
 $mrcCustomerServiceSource = $_POST['mrc-customer-service-source'];
 $mrcCustomerServiceHours = $_POST['mrc-customer-service-hours'];
 $mrcCustomerReturns = $_POST['mrc-customer-returns'];
 $mrcCustomerFulfillment = $_POST['mrc-customer-fulfillment'];
 $mrcCustomerCommunication = $_POST['mrc-customer-communication'];
 $mrcCustomerQualityControl = $_POST['mrc-customer-quality-control'];
 $mrcCustomerCardStatement = $_POST['mrc-customer-card-statement'];
 $mrcCustomerBankStatement = $_POST['mrc-customer-bank-statement'];
 $mrcCustomerSignature = $_POST['mrc-customer-signature'];

 if (mrcBidExists($conn, $mrcBusinessName) !== false) {
  header("location: ../merchantquestionnaire.php?error=businessidtaken");
  exit();
 }

 createMrcQuestionnaire(
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
} else {
 header("location: ../merchantquestionnaire.php?reviewform");
 exit();
}
