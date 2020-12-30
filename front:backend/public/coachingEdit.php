<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/retailUserForm.php"); ?>


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
 <title>Home</title>
</head>

<body>


 <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

 <div class="admin-wrapper">

  <div class="left-sidebar">
   <ul>
    <li id="cchUNaVBi"><a href="#">Business Information</a></li>
    <li id="cchUNavBp"><a href="#">Business Profile</a></li>
    <li id="cchUNavOi"><a href="#">Authorization Information</a></li>
    <li id="cchUNavOi"><a href="#">Owner Information</a></li>
    <li id="cchUNavPi"><a href="#">Product Information</a></li>


   </ul>
  </div>


  <div class="admin-content">

   <div class="content">
    <div class="wrapper">
     <h2 class=" page-title">Retail Questionnaire</h2>
     <!-- <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?> -->

     <div class="row justify-content-center ">
      <div class="wrapper-container col-md-8 p-4 rounded mt-4 mb-5 bg-white rounde shadow-lg">
       <div class="progress mb-3" style="height:20px;">
        <div class="progress-bar bg-danger" role="progressbar" style="width:15%;" id="progressBar">
         <b class="lead" id="progressText"></b>
        </div>
       </div>
       <form action="retailForm.php" method="POST" id="form-data">


        <div id="cchUPq1">
         <h4 class="text-center bg-primary p-1 rounded text-light">Business Information</h4>

         <div class="form-group">
          <label for="businessName">Business Name</label>
          <input type="text" name="cchBusinessName" class="text-input" id="businessNameEdit">
         </div>
         <div class="form-group">
          <label for="businessStreet1">Street Address</label>
          <input class="text-input" type="text" id="businessStreet1" name="cchCompanyStreet" />
         </div>
         <div class="form-group">
          <label for="street2">Street Address Line 2</label>
          <input class="text-input" type="text" id="businessStreet2" name="cchCompanyStreetLine2" />
         </div>
         <div class="form-group">
          <label for="city">City</label>
          <input class="text-input" type="text" id="businessCity" name="cchCompanyCity" />
         </div>
         <div class="form-group">
          <label for="state">State</label>
          <select class="text-input" id="businessState" name="cchCompanyState">
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
          <label for="zipecode">Zipcode</label>
          <input class="text-input" type="text" id="businessZip" name="cchCompanyZip" />
         </div>
         <div class="form-group">
          <label for="phone">Company Phone Number</label>
          <input class="text-input" type="text" id="businessNumber" name="cchCompanyPhoneNumber" />
         </div>
         <div class="form-group">
          <label for="website">Company Website
          </label>
          <input class="text-input" type="text" id="businessSite" name="cchCompanyWebsiteUrl" />
         </div>
         <div class="form-group">
          <label for="fname">Contact First Name</label>
          <input class="text-input" type="text" id="contactFirst" name="cchContactFirstName" />
         </div>
         <div class="form-group">
          <label for="lname">Contact Last Name</label>
          <input class="text-input" type="text" id="contactLast" name="cchContactLastName" />
         </div>
         <br>
         <div class="form-group">
          <a href="index.php" class="btn btn-secondary">Back</a>
          <a href="#" class="btn btn-danger" id="cchUBtnN1">Next</a>

         </div>
        </div>
        <div id="cchUPq2">
         <h4 class="text-center bg-primary p-1 rounded text-light">Authorization Information</h4>
         <div class="form-group">
         </div>
         <div class="form-group">
          <label>Call Scripts</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>
         <div class="form-group">
          <label>Order Forms</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>
         <div class="form-group">
          <label>Authorization Forms</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>
         <div class="form-group">
          <label>Login for memberships sites</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>
         <div class="form-group">
          <label>Fulfillment Agreements (if outsourced)</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>
         <div class="form-group">
          <label>Customer Service Agreement (if outsourced)</label>
          <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
         </div>

         <div class="form-group">
          <a href="#" class="btn btn-danger" id="cchUBtnP2">Previous</a>
          <a href="#" class="btn btn-danger" id="cchUBtnN2">Next</a>
          <div id="cchUPq2">
           <h4 class="text-center bg-primary p-1 rounded text-light">Business Profile</h4>
           <div class="form-group">

           </div>
           <br>
           <fieldset class="form-group">
            <label for="businessStructure">Business Structure: </label>
            <br>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchBusinessStructure" id="businessCorporation" value="Corporation" />
             <label for="businessCorporation" class="form-check-label" for="flexRadioDefault1"> Corporation </label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchBusinessStructure" id="businessLLC" value="LLC" />
             <label for="businessLLC" class="form-check-label" for="flexRadioDefault1"> LLC </label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchBusinessStructure" id="businessSoleProprietor" value="Sole Proprietor" />
             <label for="businessSoleProprietor" class="form-check-label" for="flexRadioDefault1"> Sole Proprietor </label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchBusinessStructure" id="businessOther" value="Other" />
             <label for="businessOther" class="form-check-label" for="flexRadioDefault1"> Other </label>
             <textarea type="text" class="text-input" name="cchBusinessStructureOther" value="Other" id="businessOtherTxt"></textarea>
             <span class="checkmark"></span>
             </label>
            </div>
           </fieldset>
           <div class="form-group">
            <label>Federal Tax ID:</label>
            <input class="text-input" type="text" id="bussinessTaxId" name="cchFederalTaxId" />
           </div>
           <div class="form-group">
            <label>Date Business Created</label>
            <input class="text-input" type="date" id="businessCreated" name="cchBusinessDateFormed">
            <p class="form-text text-danger" id="businessCreatedError"></p>
           </div>
           <div class="form-group">
            <label>State Business Create</label><br>
            <select class="text-input" id="businessProfileState" name="cchBusinessStateCreated">
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
            <p class="form-text text-danger" id="businessProfileStateError"></p>
           </div>
           <br>
           <div class="form-group">
            <a href="#" class="btn btn-danger" id="cchUBtnP2">Previous</a>
            <a href="#" class="btn btn-danger" id="cchUBtnN2">Next</a>

           </div>
          </div>
          <div id="cchUPq3">
           <h4 class="text-center bg-primary p-1 rounded text-light">Owner Information</h4>
           <fieldset id="primaryOwner">
            <div class="form-group">
             <label for="ownerFirst">First Name</label>
             <input class="text-input" type="text" id="ownerFirst" name="cchOwnerFirstName" />
            </div>
            <div class="form-group">
             <label for="ownerLast">Last Name</label>
             <input class="text-input" type="text" id="ownerLast" name="cchOwnerLastName" />
            </div>
            <div class="form-group">
             <label for="ownerTitle">Title</label>
             <input class="text-input" type="text" id="ownerTitle" name="cchOwnerTitle" />

            </div>
            <div class="form-group">
             <label for="ownerStreet2">Ownership Age</label>
             <input class="text-input" type="text" id="ownerAge" name="cchOwnerAge" />
            </div>
            <div class="form-group">
             <label for="ownerFirst">Social Security Number</label>
             <input class="text-input" type="text" id="ownerSocial" name="cchOwnerSocial" />
            </div>
            <div class="form-group">
             <label for="ownerFirst">Date of Birth</label>
             <input class="text-input" type="date" id="ownerDateOfBirth" name="cchOwnerDateOfBirth">

            </div>
            <div class="form-group">
             <label for="ownerAddress">Home Address</label>
             <input class="text-input" type="text" id="ownerStreet1" name="cchOwnerCompanyAddress" />

            </div>
            <div class="form-group">
             <input class="text-input" type="text" id="ownerStreet2" name="cchOwnerCompanyAddressLine2" />
            </div>
            <div class="form-group">
             <input class="text-input" type="text" id="ownerCity" name="cchOwnerCompanyCity" />
            </div>
            <div class="form-group">
             <select class="text-input" id="ownerState" name="cchOwnerCompanyState">
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
             <input class="text-input" type="text" id="ownerZipcode" name="cchOwnerCompanyZip" />
            </div>
            <div class="form-group">
             <label for="ownerDriversLicense">Driver's Licenses Number</label>
             <input class="text-input" type="text" id="ownerDriversLicense" name="cchOwnerCompanyDriversLicense">
            </div>
            <br>
            <div class="form-group" id="formChkBx">
             <label class="checkbox-container" for="owner2">
              Add Second Owner:
              <input type="checkbox" id="secondaryCheck" value="yes" onchange="showHidden(this.checked)" name="owner2">
             </label>
            </div>
           </fieldset>

           <fieldset id="hiddenForm" style="display:none;">
            <br>
            <br>
            <div class="form-group">
             <label for="secondOwnerFirst">First Name</label>
             <input class="text-input" class="firstName" type="text" id="secondOwnerFirst" name="cchSecondaryOwnersFirstName" />
            </div>
            <div class="form-group">
             <label for="secondOwnerLast">Last Name</label>
             <input class="text-input" class="lastName" type="text" id="secondOwnerLast" name="cchSecondaryOwnersLastName">
            </div>
            <div class="form-group">
             <label for="secondOwnerTitle">Title</label>
             <input class="text-input" type="text" id="secondOwnerTitle" name="cchSecondaryOwnerTitle" />
            </div>
            <div class="form-group">
             <label for="secondOwnerAge">Ownership Age</label>
             <input class="text-input" type="text" id="secondOwnerAge" name="cchSecondaryOwnerAge" />
            </div>
            <div class="form-group">
             <label for="secondOwnerSocial">Social Security Number</label>
             <input class="text-input" type="text" id="secondOwnerSocial" name="cchSecondaryOwnerSocial" />
            </div>
            <div class="form-group">
             <label for="secondOwnerBirth">Date of Birth</label>
             <input class="text-input" type="date" id="secondDateOfBirth" name="cchSecondaryOwnerDateOfBirth">
            </div>
            <div class="form-group">
             <label for="secondOwnerNumber">Phone Number</label>
             <input class="text-input" type="text" id="secondOwnerNumber" name="cchSecondaryOwnerPhone" />
            </div>
            <div class="form-group">
             <label for="secondOwnerAddress">Home Address</label>
             <input class="text-input" type="text" id="secondOwnerStreet1" name="cchSecondaryOwnerAddress" />
            </div>
            <div class="form-group">
             <input class="text-input" type="text" id="seecondOwnerStreet2" name="cchSecondaryOwnerAddressLine2" />
            </div>
            <div class="form-group">
             <input class="text-input" type="text" id="secondOwnerCity" name="cchSecondaryOwnerCity" />
            </div>
            <div class="form-group">
             <select class="text-input" id="secondOwnerState" name="cchSecondaryOwnerState">
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
             <p class="form-text text-danger" id="Error"></p>
            </div>

            <div class="form-group">
             <input class="text-input" type="text" id="secondOwnerZipcode" name="cchSecondaryOwnerZip" />
            </div>
            <div class="form-group">
             <label for="secondOwnerDriversLicense">Driver's License Number</label>
             <input class="text-input" type="text" id="secondOwnerDriversLicense" name="cchSecondaryOwnerDriversLicense">
            </div>
           </fieldset>
           <br>
           <div class="form-group">
            <a href="#" class="btn btn-danger" id="cchUBtnP3">Previous</a>
            <a href="#" class="btn btn-danger" id="cchUBtnN3">Next</a>

           </div>
          </div>
          <div id="cchUPq4">
           <h4 class="text-center bg-primary p-1 rounded text-light">Product Info</h4>
           <div class="form-group">
            <label for="productDescription">Briefly describe product/service being sold:</label>
            <br>
            <textarea type="text" class="form-control rounded-0" name="cchDescribeProductInfo" cols="45" rows="5" id="productDescription"></textarea>
            <p class="form-text text-danger" id="productDescriptionError"></p>
           </div>
           <br>
           <div class="form-group">
            <label for="productVolume">Projected Annual Volume</label>
            <br>
            <input class="text-input" type="text" id="productVolume" name="cchProductAnnualVolume">
           </div>
           <br>
           <div class="form-group">
            <label for="productVolume">Average Ticket</label>
            <br>
            <input class="text-input" type="text" id="productAverageTicket" name="cchProductAverageTicket">
           </div>
           <br>
           <div class="form-group">
            <label for="productVolume">High Ticet</label>
            <br>
            <input class="text-input" type="text" id="productHighTicket" name="cchProductHighTicket">
           </div>
           <br>
           <fieldset class="transaction-input-radio" name="cchTransactionType" id="transactionType">
            <label for="transactionType">
             <h3> Transaction Type: </h3>
            </label>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchTransactionType" id="productCardSwipe" value="Card Swipe" />
             <label for="productCardSwipe" class="form-check-label" for="flexRadioDefault1"> Card Swipe </label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchTransactionType" id="productMailTele" value="Mail order / Telehone Order" />
             <label for="productMailTele" class="form-check-label" for="flexRadioDefault1"> Mail order / Telehone Order </label>
            </div>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="cchTransactionType" id="productIntEco" value="Internet / Ecommerce" />
             <label for="productIntEco" class="form-check-label" for="flexRadioDefault1"> Internet / Ecommerce </label>
            </div>
           </fieldset>
           <br>
           <div class="form-group">
            <a href="#" class="btn btn-danger" id="cchUBtnP4">Previous</a>
            <button type="submit" name="add-form" class="btn btn-big success">Submit</button>
           </div>
          </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <?php include(ROOT_PATH . "/app/includes/footer.php");
 ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script src="../assets/js/scripts.js"></script>
 <script src="../assets/js/userForms.js"></script>

</body>

</html>