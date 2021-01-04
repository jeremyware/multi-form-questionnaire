<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/merchUserForm.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <link rel="stylesheet" href="../assets/css/form.css">
  <title>Merchant Questionnaire</title>
</head>

<body>


  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <div class="admin-wrapper">

    <div class="left-sidebar">
      <ul>
        <li id="mrcUBtnBi"><a href="#">Business Info</a></li>
        <li id="mrcUBtnBp"><a href="#">Business Profile</a></li>
        <li id="mrcUBtnOo"><a href="#">Owner / Officer</a></li>
        <li id="mrcUBtnSs"><a href="#">Site Survey</a></li>
        <li id="mrcUBtnPi"><a href="#">Product Price Information</a></li>
        <li id="mrcUBtnCp"><a href="#">Current Account Profile</a></li>
        <li id="mrcUBtnBa"><a href="#">Bank Information</a></li>
        <li id="mrcUBtnOc"><a href="#">Offer / Campaign Information</a></li>
        <li id="mrcUBtnFt"><a href="#">Fullfilment</a></li>
        <li id="mrcUBtnCs"><a href="#">Customer Serivce</a></li>

      </ul>
    </div>

  <div class="admin-content">

   <div class="content">
    <div class="wrapper">
     <h2 class=" page-title">Merchant Questionnaire</h2>
     <div class="row justify-content-center ">
      <div class="wrapper-container col-md-8 p-4 rounded mt-4 mb-5 bg-white rounde shadow-lg">
       <div class="progress mb-3" style="height:20px;">
        <div class="progress-bar bg-danger" role="progressbar" style="width:15%;" id="progressBar">
         <b class="lead" id="progressText"></b>
        </div>
       </div>
       <form action="merchantForm.php" method="post" id="form-data">
        <div id="mrcUPq1">
         <h4 class="text-center bg-primary p-1 rounded text-light">Business Information</h4>
         <br>
         <div class="form-group">
          <label for="mrcBusinessName">Business Name</label>
          <input class="text-input" type="text" name="mrcBusinessName" id="mrcBusinessName" required />
         </div>
         <div class="form-group">
          <label for="mrcBusinessStreet">Location Address</label>
          <input class="text-input" type="text" id="mrcBusinessStreet" placeholder="street address" name="mrcBusinessStreetAdd" />
         </div>
         <div class="form-group">
          <input class="text-input" type="text" id="mrcBusinessStreet2" placeholder="street address line 2" name="mrcBusinessStreetAdd2" />
         </div>
         <div class="form-group">
          <input class="text-input" type="text" id="mrcBusinessCity" placeholder="City" name="mrcBusinessCity" />
         </div>
         <div class="form-group">
          <label for="state">State</label>
          <select class="form-control" id="mrcBusinessState" name="mrcBusinessState">
           <option value="">Please Select</option>
           <option value="AK">Alaska</option>
           <option value="AL">Alabama</option>
           <option value="AR">Arkansas</option>
           <option value="AZ">Arizona</option>
           <option value="CA">California</option>
           <option value="CO">Colorado</option>
           <option value="CT">Connecticut</option>
           <option value="DC">District of Columbia</option>
           <option value="DE">Delaware</option>
           <option value="FL">Florida</option>
           <option value="GA">Georgia</option>
           <option value="HI">Hawaii</option>
           <option value="IA">Iowa</option>
           <option value="ID">Idaho</option>
           <option value="IL">Illinois</option>
           <option value="IN">Indiana</option>
           <option value="KS">Kansas</option>
           <option value="KY">Kentucky</option>
           <option value="LA">Louisiana</option>
           <option value="MA">Massachusetts</option>
           <option value="MD">Maryland</option>
           <option value="ME">Maine</option>
           <option value="MI">Michigan</option>
           <option value="MN">Minnesota</option>
           <option value="MO">Missouri</option>
           <option value="MS">Mississippi</option>
           <option value="MT">Montana</option>
           <option value="NC">North Carolina</option>
           <option value="ND">North Dakota</option>
           <option value="NE">Nebraska</option>
           <option value="NH">New Hampshire</option>
           <option value="NJ">New Jersey</option>
           <option value="NM">New Mexico</option>
           <option value="NV">Nevada</option>
           <option value="NY">New York</option>
           <option value="OH">Ohio</option>
           <option value="OK">Oklahoma</option>
           <option value="OR">Oregon</option>
           <option value="PA">Pennsylvania</option>
           <option value="PR">Puerto Rico</option>
           <option value="RI">Rhode Island</option>
           <option value="SC">South Carolina</option>
           <option value="SD">South Dakota</option>
           <option value="TN">Tennessee</option>
           <option value="TX">Texas</option>
           <option value="UT">Utah</option>
           <option value="VA">Virginia</option>
           <option value="VT">Vermont</option>
           <option value="WA">Washington</option>
           <option value="WI">Wisconsin</option>
           <option value="WV">West Virginia</option>
           <option value="WY">Wyoming</option>
          </select>
         </div>
         <div class="form-group">
          <input class="text-input" type="text" id="mrcBusinessZip" placeholder="Zip Code" name="mrcBusinessZip" />
         </div>
         <div class="form-grop">
          <label for="mrcBusinessLegalName">Legal Business Name(as it appears on tax return)</label>
          <input class="text-input" type="text" name="mrcBusinessLegalName" id="mrcBusinessLegalName" />
         </div>
         <fieldset class="transaction-input-radio" name="rtlTransactionTypeField" id="transactionType">
          <label for="transactionType">
           <p> Is the Mailing Address different from above?: </p>
          </label>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcBusinessMailingRadio" id="mrcBusinessMailingRadioY" value="Yes" />
           <label for="mrcBusinessMailingRadioY" class="form-check-label" for="flexRadioDefault1"> Yes </label>
          </div>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcBusinessMailingRadio" id="mrcBusinessMailingRadioN" value="No" />
           <label for="mrcBusinessMailingRadioN" class="form-check-label" for="flexRadioDefault1"> No </label>
          </div>
         </fieldset>
         <br>
         <div class="form-group">
          <label for="mrcBusinessPhoneNumber">Company Phone Number</label>
          <input class="text-input" type="text" name="mrcBusinessPhoneNumber" id="mrcBusinessPhoneNumber" placeholder="Phone Number" />
         </div>
         <div class="form-group">
          <label for="mrcBusinessFaxNumber">Company Fax Number</label>
          <input class="text-input" type="text" name="mrcBusinessFaxNumber" id="mrcBusinessFaxNumber" placeholder="Company Fax Number" />
         </div>

         <div class="form-group">
          <label for="mrcCustomerServiceNumber">Company Service Number</label>
          <input class="text-input" type="text" name="mrcCustomerServiceNumber" id="mrcCustomerServiceNumber" placeholder="Customer Service Number" />
         </div>

         <div class="form-group">
          <label for="mrcBusinessSite">Website/URL</label>
          <input class="text-input" type="text" name="mrcBusinessSite" id="mrcBusinessSite" placeholder="www.example.com" />
         </div>
         <div class="form-group">
          <label for="mrcContactPerson">Contact Person(if questions on the account)</label>
          <input class="text-input" type="text" name="mrcContactPerson" id="mrcContactPerson" />
         </div>
         <div class="form-group">
          <label for="mrcBusinessEmail">Contact Person's Email</label>
          <input class="text-input" type="text" name="mrcBusinessEmail" id="mrcBusinessEmail" />
         </div>
         <div class="form-group">
          <a href="index.php" class="btn btn-secondary">Back</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN1">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq2">
         <h4 class="text-center bg-primary p-1 rounded text-light">Business Profile</h4>
         <div class="form-group">
          <label for="mrcProfileStructure">Business Structure(corporation, LLC, Sole Prop, ect.)</label>
          <input class="text-input" type="text" name="mrcProfileStructure" id="mrcProfileStructure" />
         </div>
         <div class="form-group">
          <label for="mrcProfileFederalTaxId">Federal Tax ID</label>
          <input class="text-input" type="text" name="mrcProfileFederalTaxId" id="mrcProfileFederalTaxId" />
         </div>
         <div class="form-group">
          <label for="mrcProfileDateCreated">Date Business Created</label>
          <input class="text-input" class="form-control" type="date" id="mrcProfileDateCreated" name="mrcProfileDateCreated">
         </div>
         <div class="form-group">
          <label for="mrcProfileState">State Business was Created in?</label>
          <select class="form-control" id="mrcProfileState" name="mrcProfileState">
           <option value="">Please Select</option>
           <option value="AK">Alaska</option>
           <option value="AL">Alabama</option>
           <option value="AR">Arkansas</option>
           <option value="AZ">Arizona</option>
           <option value="CA">California</option>
           <option value="CO">Colorado</option>
           <option value="CT">Connecticut</option>
           <option value="DC">District of Columbia</option>
           <option value="DE">Delaware</option>
           <option value="FL">Florida</option>
           <option value="GA">Georgia</option>
           <option value="HI">Hawaii</option>
           <option value="IA">Iowa</option>
           <option value="ID">Idaho</option>
           <option value="IL">Illinois</option>
           <option value="IN">Indiana</option>
           <option value="KS">Kansas</option>
           <option value="KY">Kentucky</option>
           <option value="LA">Louisiana</option>
           <option value="MA">Massachusetts</option>
           <option value="MD">Maryland</option>
           <option value="ME">Maine</option>
           <option value="MI">Michigan</option>
           <option value="MN">Minnesota</option>
           <option value="MO">Missouri</option>
           <option value="MS">Mississippi</option>
           <option value="MT">Montana</option>
           <option value="NC">North Carolina</option>
           <option value="ND">North Dakota</option>
           <option value="NE">Nebraska</option>
           <option value="NH">New Hampshire</option>
           <option value="NJ">New Jersey</option>
           <option value="NM">New Mexico</option>
           <option value="NV">Nevada</option>
           <option value="NY">New York</option>
           <option value="OH">Ohio</option>
           <option value="OK">Oklahoma</option>
           <option value="OR">Oregon</option>
           <option value="PA">Pennsylvania</option>
           <option value="PR">Puerto Rico</option>
           <option value="RI">Rhode Island</option>
           <option value="SC">South Carolina</option>
           <option value="SD">South Dakota</option>
           <option value="TN">Tennessee</option>
           <option value="TX">Texas</option>
           <option value="UT">Utah</option>
           <option value="VA">Virginia</option>
           <option value="VT">Vermont</option>
           <option value="WA">Washington</option>
           <option value="WI">Wisconsin</option>
           <option value="WV">West Virginia</option>
           <option value="WY">Wyoming</option>
          </select>
         </div>
         <div class="form-group">
          <label for="mrcProfileNumberOfEmployees">Number of Employees</label>
          <input class="text-input" type="text" name="mrcProfileNumberOfEmployees" id="mrcProfileNumberOfEmployees" />
         </div>
         <div class="form-group">
          <label for="mrcProfileTradeReference1">Trade reference 1 - Business name</label>
          <input class="text-input" type="text" name="mrcProfileTradeReference1" id="mrcProfileTradeReference" />
         </div>
         <div class="form-group">
          <label for="mrcProfileContactName1">Contact name (of reference 1)</label>
          <input class="text-input" type="text" name="mrcProfileContactName1" id="$mrcProfileContactName1" />
         </div>
         <div class="form-group">
          <label for="mrcProfileContactNumber1">Contact number (of reference 1)</label>
          <input class="text-input" type="text" name="mrcProfileContactNumber1" id="$mrcProfileContactNumber1" />
         </div>
         <div class="form-group">
          <label for="mrcProfileTradeReference2">Trade reference 2 - Business name</label>
          <input class="text-input" type="text" name="mrcProfileTradeReference2" id="mrcProfileTradeReference" />
         </div>
         <div class="form-group">
          <label for="mrcProfileContactName1">Contact name (of reference 2)</label>
          <input class="text-input" type="text" name="mrcProfileContactName2" id="$mrcProfileContactName2" />
         </div>
         <div class="form-group">
          <label for="mrcProfileContactNumber1">Contact number (of reference 2)</label>
          <input class="text-input" type="text" name="mrcProfileContactNumber2" id="$mrcProfileContactNumber2" />
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP2">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN2">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq3">
         <h4 class="text-center bg-primary p-1 rounded text-light">Owner / Officer</h4>
         <fieldset id="primaryOwner">
          <div class="form-group">
           <label for="mrcOwnerPrimaryName">Primary Owner's Name</label>
           <input class="text-input" class="firstName" type="text" name="mrcOwnerPrimaryName" id="mrcOwnerPrimaryName" />
          </div>
          <div class="form-group">
           <label for="mrcOwnerTitle">Title</label>
           <input class="text-input" type="text" name="mrcOwnerTitle" id="mrcOwnerTitle" />
          </div>

          <div class="form-goup">
           <label for="mrcOwnershipAge">Ownership</label>
           <input class="text-input" type="text" name="mrcOwnershipAge" id="mrcOwnershipAge" />
          </div>
          <div class="form-group">
           <label for="mrcOwnerSocial">Social Security Number</label>
           <input class="text-input" type="text" id="mrcOwnerSocial" name="mrcOwnerSocial" placeholder="xxx-xx-xxxx" pattern="\d{3}-?\d{2}-?\d{4}">
          </div>

          <div class="form-group">
           <label for="mrcOwnerDateOfBirth">Date of Birth</label>
           <input class="text-input" class="form-control" type="date" id="mrcOwnerDateOfBirth" name="mrcOwnerDateOfBirth">
           <p class="form-text text-danger" id="mrcOwnerDateOfBirthError"></p>
          </div>
          <div class="form-group">
           <label for="mrcOwnerMobileNumber">Mobile Number</label>
           <input class="text-input" type="tel" name="mrcOwnerMobileNumber" id="mrcOwnerMobileNumber" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
          </div>
          <div class="form-group">
           <label for="input-companyAddress">Home Address</label>
           <input class="text-input" type="text" name="mrcOwnerStreetAddress" id="mrcOwnerStreetAddress" placeholder="street address" />
          </div>
          <div class="form-grou">
           <input class="text-input" type="text" name="mrcOwnerStreetAddress2" id="mrcOwnerStreetAddress2" placeholder="street address line 2" />
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcOwnerCity" id="mrcOwnerCity" />
          </div>
          <div class="form-group">
           <label for="mrcOwnerState">State</label>
           <select class="form-control" id="mrcOwnerState" name="mrcOwnerState">
            <option value="">Please Select</option>
            <option value="AK">Alaska</option>
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="AZ">Arizona</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DC">District of Columbia</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="IA">Iowa</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MA">Massachusetts</option>
            <option value="MD">Maryland</option>
            <option value="ME">Maine</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MO">Missouri</option>
            <option value="MS">Mississippi</option>
            <option value="MT">Montana</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="NE">Nebraska</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NV">Nevada</option>
            <option value="NY">New York</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="PR">Puerto Rico</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VA">Virginia</option>
            <option value="VT">Vermont</option>
            <option value="WA">Washington</option>
            <option value="WI">Wisconsin</option>
            <option value="WV">West Virginia</option>
            <option value="WY">Wyoming</option>
           </select>
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcOwnerZip" id="mrcOwnerZip" />
          </div>
          <div class="form-group">
           <label for="mrcOwnerDriversLicense">Drivers License</label>
           <input class="text-input" type="text" name="mrcOwnerDriversLicense" id="mrcOwnerDriversLicense">
          </div>
          <div class="form-group">
           <label for="mrcOwnerStateId">State where ID is issued</label>
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcOwnerStateId" id="mrcOwnerStateId" placeholder="State ID">
          </div>
          <div class="form-group">
           <label for="mrcOwnerYearResidence">Year at residence</label>
           <input class="text-input" type="text" name="mrcOwnerYearResidence" id="mrcOwnerYearResidence">
          </div>
          <div class="form-group">
           <label class="checkbox-container" for="owner2">
            Add Second Owner:
            <input class="form-check-input" type="checkbox" id="secondaryCheck" value="yes" onchange="showHidden(this.checked)" name="owner2">
           </label>
          </div>
         </fieldset>

         <fieldset id="hiddenForm" style="display:none;">
          <br>
          <h4 class="text-center bg-primary p-1 rounded text-light">Second Owner Information</h4>
          <br>
          <div class="form">
           <label for="mrcSecondOwnerName"> Owner's Name</label>
           <input class="text-input" class="firstName" type="text" name="mrcSecondOwnerName" id="mrcSecondOwnerName" />
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerTitle">Title</label>
           <input class="text-input" type="text" name="mrcSecondOwnerTitle" id="mrcSecondOwnerTitle" />
          </div>
          <div class="form-goup">
           <label for="mrcSecondOwnershipAge">Ownership</label>
           <input class="text-input" type="text" name="mrcSecondOwnershipAge" id="mrcSecondOwnershipAge" />
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerSocial">Social Security Number</label>
           <input class="text-input" type="text" id="mrcSecondOwnerSocial" name="mrcSecondOwnerSocial" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}">
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerDateOfBirth">Date of Birth</label>
           <input class="text-input" class="form-control" type="date" id="mrcSecondOwnerDateOfBirth" name="mrcSecondOwnerDateOfBirth">
           <p class="form-text text-danger" id="mrcSecondOwnerDateOfBirthError"></p>

          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerMobileNumber">Mobile Number</label>
           <input class="text-input" type="tel" name="mrcSecondOwnerMobileNumber" id="mrcSecondOwnerMobileNumber" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
          </div>
          <div class="form-group">
           <label for="input-companyAddress">Home Address</label>
           <input class="text-input" type="text" name="mrcSecondOwnerStreetAddress" id="mrcSecondOwnerStreetAddress" placeholder="street address" />
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcSecondOwnerStreetAddress2" id="mrcSecondOwnerStreetAddress2" placeholder="street address line 2" />
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcSecondOwnerCity" id="mrcSecondOwnerCity" />
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerState">State</label>
           <select class="form-control" id="mrcSecondOwnerState" name="mrcSecondOwnerState">
            <option value="">Please Select</option>
            <option value="AK">Alaska</option>
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="AZ">Arizona</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DC">District of Columbia</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="IA">Iowa</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MA">Massachusetts</option>
            <option value="MD">Maryland</option>
            <option value="ME">Maine</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MO">Missouri</option>
            <option value="MS">Mississippi</option>
            <option value="MT">Montana</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="NE">Nebraska</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NV">Nevada</option>
            <option value="NY">New York</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="PR">Puerto Rico</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VA">Virginia</option>
            <option value="VT">Vermont</option>
            <option value="WA">Washington</option>
            <option value="WI">Wisconsin</option>
            <option value="WV">West Virginia</option>
            <option value="WY">Wyoming</option>
           </select>
          </div>
          <div class="form-group">
           <input class="text-input" type="text" name="mrcSecondOwnerZip" id="mrcSecondOwnerZip" />
          </div>
          <div class="form">
           <label for="mrcSecondOwnerDriversLicense">Drivers License</label>
           <input class="text-input" type="text" name="mrcSecondOwnerDriversLicense" id="mrcSecondOwnerDriversLicense">
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerStateId">State where ID is issued</label>
           <input class="text-input" type="text" name="mrcSecondOwnerStateId" id="mrcSecondOwnerStateId" placeholder="State ID">
          </div>
          <div class="form-group">
           <label for="mrcSecondOwnerYearResidence">Year at residence</label>
           <input class="text-input" type="text" name="mrcSecondOwnerYearResidence" id="mrcSecondOwnerYearResidence">
          </div>
         </fieldset>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP3">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN3">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq4">
         <h4 class="text-center bg-primary p-1 rounded text-light">Site Survey</h4>
         <div class="form-group">
          <label for="mrcProductOfficeStructure">Office Structure (Office, Residential)</label>
          <input class="text-input" type="text" name="mrcSiteOfficeStructure" id="mrcProductOfficeStructure ">
         </div>
         <div class="form-group">
          <label for="mrcProductFloorOccupy">Floor you occupy & Number of floors in building</label>
          <input class="text-input" type="text" name="mrcSiteFloorOccupy" id="mrcProductFloorOccupy ">
         </div>
         <div class="form-group">
          <label for="mrcProductApproxSqFt"> Approximate square footage</label> <input class="text-input" type="text" name="mrcSiteApproxSqFt" id="mrcProductApproxSqFt ">
         </div>
         <div class="form-group">
          <label for="mrcProductBuildingZone"> Building area zone type</label> <input class="text-input" type="text" name="mrcSiteBuildingZone" id="mrcSiteOwnLease">
         </div>
         <div class="form-group">
          <label for="mrcProductOwnLease">Do you own or lease the building?</label>
          <input class="text-input" type="text" name="mrcSiteOwnLease" id="mrcProductOwnLease">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP4">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN4">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq5">
         <h4 class="text-center bg-primary p-1 rounded text-light">Product Price Information</h4>

         <div class="form-group">
          <label for="mrcProductProjectVolume">Projected annual volume</label>
          <input class="text-input" type="text" name="mrcProductProjectVolume" id="mrcProductProjectVolume ">
         </div>

         <div class="form-group">
          <label for="mrcProductAverageTicket">Average ticket</label>
          <input class="text-input" type="text" name="mrcProductAverageTicket" id="mrcProductAverageTicket ">
         </div>

         <div class="form-group">
          <label for="mrcHighTicket">High ticket</label>
          <input class="text-input" type="text" name="mrcProductHighTicket" id="mrcHighTicket ">
         </div>

         <div class="form-group">
          <label for="mrcProductTicketDescription"> High ticket description</label>
          <input class="text-input" type="text" name="mrcProductTicketDescription" id="mrcProductTicketDescription">
         </div>

         <div class="form-group">
          <label for="mrcDescribeService">Describe product/service in detail</label>
          <input class="text-input" type="text" name="mrcProductDescribeService" id="mrcDescribeService">
         </div>

         <div class="form-group">
          <label for="mrcProductRefundPolicy">Refund policy
          </label>
          <input class="text-input" type="text" name="mrcProductRefundPolicy" id="mrcProductRefundPolicy ">
         </div>

         <div class="form-group">
          <label for="mrcTransactionType">Transaction Type (must equal 100%)
          </label>
          <input class="text-input" type="text" name="mrcProductTransactionType" id="mrcTransactionType ">
         </div>

         <div class="form-group">
          <label for="mrcProductCardSwipe"> Card swipe %
          </label> <input class="text-input" type="text" name="mrcProductCardSwipe" id="mrcProductCardSwipe ">
         </div>

         <div class="form-group">
          <label for="mrcProductMailTelephone"> Mail Order / Telephone Order %</label> <input class="text-input" type="text" name="mrcProductMailTelephone" id="mrcProductMailTelephone">
         </div>

         <div class="form-group">
          <label for="mrcProductInternetEcommerce">Internet - Ecommerce %
          </label>
          <input class="text-input" type="text" name="mrcProductInternetEcommerce" id="mrcProductInternetEcommerce">
         </div>

         <div class="form-group">
          <label for="mrcProductConsumerSales"> % of Business to Consumer sales

          </label> <input class="text-input" type="text" name="mrcProductConsumerSales" id=" mrcProductConsumerSales">
         </div>

         <div class="form-group">
          <label for="mrcProductBusinessSales">% of Business to Consumer sales
          </label>
          <input class="text-input" type="text" name="mrcProductBusinessSales" id="mrcProductBusinessSales">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP5">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN5">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq6">
         <h4 class="text-center bg-primary p-1 rounded text-light">Current Account Profile</h4>

         <div class="form-group">
          <label for="mrcAccountAcceptVMCD">Do you currently accept V/MC/D?
          </label>
          <input class="text-input" type="text" name="mrcAccountAcceptVMCD" id="mrcAccountAcceptVMCD">
         </div>
         <div class="form-group">
          <label for="mrcAccountAcceptAmex"> Do you currently accept AmEx?</label>
          <input class="text-input" type="text" name="mrcAccountAcceptAmex" id="mrcAccountAcceptAmex">
         </div>
         <div class="form-group">
          <label for="mrcAccountNoAmex">If not currently accepting AmEx, do you want to?
          </label>
          <input class="text-input" type="text" name="mrcAccountNoAmex" id="mrcAccountNoAmex">
         </div>
         <div class="form-group">
          <label for="mrcAccountCurrentProcessor">Name of current Processor

          </label>
          <input class="text-input" type="text" name="mrcAccountCurrentProcessor" id="mrcAccountCurrentProcessor">
         </div>
         <div class="form-group">
          <label for="mrcAccountGateway ">Gateway using or would like to use

          </label>
          <input class="text-input" type="text" name="mrcAccountGateway" id="mrcAccountGateway ">
         </div>
         <div class="form-group">
          <label for="mrcAccountTerminated">Have you ever been terminated by a Processor?
          </label>
          <input class="text-input" type="text" name="mrcAccountTerminated" id="mrcAccountTerminated">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP6">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN6">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>


        <div id="mrcUPq7">
         <h4 class="text-center bg-primary p-1 rounded text-light">Bank Information</h4>
         <div class="form-group">
          <label for="mrcBankName">Bank Name
          </label>
          <input class="text-input" type="text" name="mrcBankName" id="mrcBankName">
         </div>

         <div class="form-group">
          <label for="mrcBankAddress">Bank Address
          </label>
          <input class="text-input" type="text" name="mrcBankAddress" id="mrcBankAddress">
         </div>

         <div class="form-group">
          <label for="mrcBankPhoneNumber">Bank Phone Number
          </label>
          <input class="text-input" type="text" name="mrcBankPhoneNumber" id="mrcBankPhoneNumber">
         </div>

         <div class="form-group">
          <label for="mrcContactName">Contact Name
          </label>
          <input class="text-input" type="text" name="mrcBankContactName" id="mrcContactName">
         </div>

         <div class="form-group">
          <label for="mrcBankAccount">Account #
          </label>
          <input class="text-input" type="text" name="mrcBankAccount" id="mrcBankAccount">
         </div>

         <div class="form-group">
          <label for="mrcBankRouting">Routing #
          </label>
          <input class="text-input" type="text" name="mrcBankRouting" id="mrcBankRouting">
         </div>

         <div class="form-group">
          <label for="mrcBankCheckingSaving">Is this a checking or savings account?
          </label>
          <input class="text-input" type="text" name="mrcBankCheckingSaving" id="mrcBankCheckingSaving">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP7">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN7">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>




        <div id="mrcUPq8">
         <h4 class="text-center bg-primary p-1 rounded text-light">Offer / Campaign Information</h4>
         <div class="form-group">
          <label for="mrcCampaignDescribeProduct">Describe the product/service being sold.</label>
          <input class="text-input" type="text" name="mrcCampaignDescribeProduct" id="mrcCampaignDescribeProduct">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductSold">How is the product/service ordered or purchased?</label>
          <input class="text-input" type="text" name="mrcCampaignProductSold" id="mrcCampaignProductSold">
         </div>

         <div class="form-group">
          <label for="mrcCampaignPricePoint">What are the price points for the product/service?</label>
          <input class="text-input" type="text" name="mrcCampaignPricePoint" id="mrcCampaignPricePoint">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductFrontBack">Is the product/service being sold through a Front End or as an upsell offer? With any upsell offers, please list all applicable Front/Back end partners with the product/service being sold. </label>
          <input class="text-input" type="text" name="mrcCampaignProductFrontBack" id="mrcCampaignProductFrontBack">
         </div>

         <div class="form-group">
          <label for="mrcCampaignCrossProduct">Is the product/service being cross sold with any other product/service? If yes, explain.</label>
          <input class="text-input" type="text" name="mrcCampaignCrossProduct" id="mrcCampaignCrossProduct">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductFreeTrial">Is there a free trial and/or auto ship program attached to the product/service? </label>
          <input class="text-input" type="text" name="mrcCampaignProductFreeTrial" id="mrcCampaignProductFreeTrial">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductBilling">Is there recurring billing/continuity plan associated with the product/service?</label>
          <input class="text-input" type="text" name="mrcCampaignProductBilling" id="mrcCampaignProductBilling">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductMarketing">How is the product/service advertised, marketed, and/or promoted to support the projected volume/transaction estimates? (i.e. radio, print, affiliate networks, CPA, publishers, and/or other sources to support the transaction count per day)</label>
          <input class="text-input" type="text" name="mrcCampaignProductMarketing" id="mrcCampaignProductMarketing">
         </div>

         <div class="form-group">
          <label for="mrcCampaignMajorCPA">List all major affiliates (sub affiliates), CPA’s, and publishers used to generate sales.
          </label>
          <input class="text-input" type="text" name="mrcCampaignMajorCPA" id="mrcCampaignMajorCPA">
         </div>

         <div class="form-group">
          <label for="mrcCampaignLeadQuality">How do you track affiliate sales and monitor for lead quality?</label>
          <input class="text-input" type="text" name="mrcCampaignLeadQuality" id="mrcCampaignLeadQuality">
         </div>

         <div class="form-group">
          <label for="mrcCampaignProductWarrenty">What is the warranty, return, and refund policy?</label>
          <input class="text-input" type="text" name="mrcCampaignProductWarrenty" id="mrcCampaignProductWarrenty">
         </div>

         <div class="form-group">
          <label for="mrcCampaignCustomerCancel">How can a customer cancel from Auto Ship/Bill and/or continuity program?</label>
          <input class="text-input" type="text" name="mrcCampaignCustomerCancel" id="mrcCampaignCustomerCancel">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP8">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN8">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq9">
         <h4 class="text-center bg-primary p-1 rounded text-light">Fulfillment</h4>

         <div class="form-group">
          <label for="mrcFulfillmentSourcing">Is fulfillment handled In House or outsourced? If outsourced, with whom?
          </label>
          <input class="text-input" type="text" name="mrcFulfillmentSourcing" id="mrcFulfillmentSourcing">
         </div>

         <fieldset class="fulfillmentRadio" name="shippingconfirmation" id="shippingConfirmation">
          <label for="shippingConfirmation">
           <h3> Which of the following shipping confirmations do you use?</h3>
          </label>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcFulfillmentShipment" id="FulfillmentShipment" value="Delivery Confirmation" />
           <label for="mrcFulfillmentShipmentDC" class="form-check-label" for="flexRadioDefault1"> Delivery Confirmantion </label>
          </div>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcFulfillmentShipment" id="FulfillmentShipment" value="Signature Confirmation" />
           <label for="mrcFulfillmentShipmentSC" class="form-check-label" for="flexRadioDefault1"> Signature Confirmation </label>
          </div>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcFulfillmentShipment" id="FulfillmentShipment" value="None" />
           <label for="mrcFulfillmentShipmentNO" class="form-check-label" for="flexRadioDefault1"> None </label>
          </div>
         </fieldset>


         <div class="form-group">
          <label for="mrcFulfillmentManufactures">Who manufactures/produces the product/service?</label>
          <input class="text-input" type="text" name="mrcFulfillmentManufactures" id="mrcFulfillmentManufactures">
         </div>


         <fieldset class="transaction-input-radio" name="transactiontype" id="transactionType">
          <label for="mrcFulfillment">
           <b> Do you sell digestibles, supplements, etc. ? </b>
          </label>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcFulfillmentProductsSold" id="mrcFulfillmentProductsSoldY" value="Yes" />
           <label for="mrcFulfillmentProductsSoldN" class="form-check-label" for="flexRadioDefault1"> Yes</label>
          </div>
          <div class="form-check">
           <input class="form-check-input" type="radio" name="mrcFulfillmentProductsSold" id="mrcFulfillmentProductsSoldN" value="No" />
           <label for="mrcFulfillmentProductsSoldN" class="form-check-label" for="flexRadioDefault1"> No </label>
          </div>


          <div class="form-group">
           <label for="mrcFullfilmentFDA">Have your products been evaluated/regulated by the FDA.
           </label>
           <input class="text-input" type="text" name="mrcFullfilmentFDA" id="mrcFullfilmentFDA">
          </div>
         </fieldset>
         <div class="form-group">
          <label for="mrcFulfillmentUnitsPerDay">How many units per day is your manufacturer capable of producing should demand increase?</label>
          <input class="text-input" type="text" name="mrcFulfillmentUnitsPerDay" id="mrcFulfillmentUnitsPerDay">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentProductStock">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcFulfillmentProductStock" id="mrcFulfillmentProductStock">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentInventoryReport">Do you receive Inventory/Inventory Management Reports?</label>
          <input class="text-input" type="text" name="mrcFulfillmentInventoryReport" id="mrcFulfillmentInventoryReport">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentShippedTime">Will tangible products be shipped within 7 calendar days of sale capture?</label>
          <input class="text-input" type="text" name="mrcFulfillmentShippedTime" id="mrcFulfillmentShippedTime">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentOrderInfo">Who is taking the order?</label>
          <input class="text-input" type="text" name="mrcFulfillmentOrderInfo" id="mrcFulfillmentOrderInfo">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentProcessTime">At what time or point during the ordering process does the merchant or the fulfillment center bill the cardholder (i.e at time of order, at time of shipping, etc…)?</label>
          <input class="text-input" type="text" name="mrcFulfillmentProcessTime" id="mrcFulfillmentProcessTime">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentProductAvailability">
           What happens if the product is unavailable or if service cannot be rendered (i.e. cease billing customer, issue refund, or notify customer of delayed shipment)?</label>
          <input class="text-input" type="text" name="mrcFulfillmentProductAvailability" id="mrcFulfillmentProductAvailability">
         </div>

         <div class="form-group">
          <label for="mrcFulfillmentBackOrder">Do you continue to accept sales if products/services are backorder/unavailable?</label>
          <input class="text-input" type="text" name="mrcFulfillmentProductBackOrder" id="mrcFulfillmentBackOrder">
         </div>
         <div class="form-group">
          <a href="#" class="btn btn-danger" id="mrcUBtnP9">Previous</a>
          <a href="#" class="btn btn-danger" id="mrcUBtnN9">Next</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>

         </div>
        </div>

        <div id="mrcUPq10">
         <h4 class="text-center bg-primary p-1 rounded text-light">Customer Service</h4>
         <div class="form-group">
          <label for="mrcCustomerSourced">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerSourced" id="mrcCustomerSourced">
         </div>
         <div class="form-group">
          <label for="mrcCustomerOutsourced">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerOutsourced" id="mrcCustomerOutsourced">
         </div>

         <div class="form-group">
          <label for="mrcCustomerTraining">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerTraining" id="mrcCustomerTraining">
         </div>

         <div class="form-group">
          <label for="mrcCustomerServiceSource">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerServiceSource" id="mrcCustomerServiceSource">
         </div>

         <div class="form-group">
          <label for="mrcCustomerServiceHours">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerServiceHours" id="mrcCustomerServiceHours">
         </div>

         <div class="form-group">
          <label for="mrcCustomerReturns">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerReturns" id="mrcCustomerReturns">
         </div>

         <div class="form-group">
          <label for="mrcCustomerFulfillment">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerFulfillment" id="mrcCustomerFulfillment">
         </div>

         <div class="form-group">
          <label for="mrcCustomerCommunication">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerCommunication" id="mrcCustomerCommunication">
         </div>

         <div class="form-group">
          <label for="mrcCustomerQualityControl">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerQualityControl" id="mrcCustomerQualityControl">
         </div>
         <div class="form-group">
          <label for="mrcCustomerCardStatement">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerCardStatement" id="mrcCustomerCardStatement">
         </div>

         <div class="form-group">
          <label for="mrcCustomerBankStatement">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input class="text-input" type="text" name="mrcCustomerBankStatement" id="mrcCustomerBankStatement">
         </div>


         <div class="form-group">
          <label for="mrcCustomerSignature">Signature
           <textarea class="form-control" name="mrcCustomerSignature" id="mrcCustomerSignature" cols="40" rows="5"> Signature Area </textarea>
          </label>
         </div>
         <div class="col-12">
          <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
           <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
           </label>
           <div class="invalid-feedback">
            You must agree to <a href="https://platpay.com/privacy-policy/">terms & conditions</a>
           </div>
          </div>
         </div>
         <div class="col-12">
          <a href="#" class="btn btn-danger" id="mrcUBtnP10">Previous</a>
          <button type="submit" name="update-form" class="btn btn-big success">Update</button>
         </div>
        </div>
      </div>
     </div>
    </div>
    </form>
   </div>
  </div>
 </div>
 </div>
 </div>
 </div>
 <div class="form-footer">
  &copy; platinumpayments.com | Designed by Epype
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script src="../assets/js/scripts.js"></script>
 <script src="../assets/js/userForms.js"></script>

</body>

</html>