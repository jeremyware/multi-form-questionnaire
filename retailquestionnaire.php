<?php
include_once 'header.php';
include_once 'formnavigation.php';
?>

<div class="bg-light">
  <div class="container shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row justify-content-center ">
      <div class="col-md-6 bg-light p-4 rounded mt-5 shadow-lg p-3 mb-5 bg-white rounded">
        <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello World</h5>
        <div class="progress mb-3" style="height:40px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width:25%;" id="progressBar">
            <b class="lead" id="progressText">Step - 1</b>
          </div>
        </div>
        <form action="includes/retailsubmit.inc.php" method="post" id="form-data">
          <div id="first">
            <h4 class="text-center bg-primary p-1 rounded text-light">Business Information</h4>
            <div class="form-group">
              <label for="businessName">Business Name</label>
              <input type="text" name="businessname" class="form-control" id="businessName" placeholder="Business Name">
              <p class="form-text text-danger" id="businessNameError"></p>
            </div>
            <div class="form-group">
              <label for="businessStreet1">Street Address</label>
              <input class="form-control" type="text" id="businessStreet1" name="company-street-address" placeholder="Street Address" />
              <p class="form-text text-danger" id="businessStreet1Error"></p>
            </div>
            <div class="form-group">
              <label for="street2">Street Address Line 2</label>
              <input class="form-control" type="text" id="businessStreet2" name="company-street-address-line-2" placeholder="street address line 2" required />
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input class="form-control" type="text" id="businessCity" name="company-city" placeholder="City" required />
              <p class="form-text text-danger" id="businessCityError"></p>
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <select class="form-control" id="businessState" name="company-state">
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
              <p class="form-text text-danger" id="businessStateError"></p>
            </div>
            <div class="form-group">
              <label for="zipecode">Zipcode</label>
              <input class="form-control" type="text" id="businessZip" name="company-zip" placeholder="Zip Code" />
              <p class="form-text text-danger" id="businessZipError"></p>
            </div>
            <div class="form-group">
              <label for="phone">Company Phone Number</label>
              <input class="form-control" type="text" id="businessNumber" name="company-phone-number" placeholder="Phone Number" />
              <p class="form-text text-danger" id="businessNumberError"></p>
            </div>
            <div class="form-group">
              <label for="website">Company Website
              </label>
              <input class="form-control" type="text" id="businessSite" name="company-website-url" placeholder="www.example.com" />
              <p class="form-text text-danger" id="businessSiteError"></p>
            </div>
            <div class="form-group">
              <label for="fname">Contact First Name</label>
              <input class="form-control" type="text" id="contactFirst" name="contact-first-name" placeholder="First Name" />
              <p class="form-text text-danger" id="contactFirstError"></p>
            </div>
            <div class="form-group">
              <label for="lname">Contact Last Name</label>
              <input class="form-control" type="text" id="contactLast" name="contact-last-name" placeholder="Last Name" />
              <p class="form-text text-danger" id="contactLastError"></p>
            </div>
            <br>
            <div class="form-group">
              <a href="#" class="btn btn-danger" id="next-1">Next</a>
            </div>
          </div>
          <div id="second">
            <h4 class="text-center bg-primary p-1 rounded text-light">Business Profile</h4>
            <div class="form-group">

            </div>
            <br>
            <fieldset class="form-group">
              <label for="businessStructure">Business Structure: </label>
              <br>
              <div class="form-group">
                <label class="radio-container">Corporation
                  <input class="form-control" type="radio" name="businessStructure-radio" value="Corporation" id="businessCorp">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="form-group">
                <label class="radio-container"> LLC
                  <input class="form-control" type="radio" name="businessStructure-radio" value="LLC" id="businessLlc">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="form-group">
                <label class="radio-container">Sole Propietor
                  <input class="form-control" type="radio" name="businessStructure-radio" value="Sole Proprietor" id="businessProprietor" />
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="form-group">
                <label for="businessOther" class="radio-container">
                  <input class="form-control" type="radio" name="businessstructure-radio" id="businessOther" />
                  <textarea type="text" placeholder="Other" name="businessstructure-radio" id="businessOtherText"></textarea>
                  <span class="checkmark"></span>
                </label>
              </div>
              <p class="form-text text-danger" id="businesStructureError"></p>
            </fieldset>
            <div class="form-group">
              <label>Federal Tax ID:</label>
              <input class="form-control" type="text" id="bussinessTaxId" name="federal-tax-id" placeholder="fed tax id" />
              <p class="form-text text-danger" id="businessTaxIdError"></p>
            </div>
            <div class="form-group">
              <label>Date Business Created</label>
              <input class="form-control" type="date" id="businessCreated" name="date-business-formed">
              <p class="form-text text-danger" id="businessCreatedError"></p>
            </div>
            <div class="form-group">
              <label>State Business Create</label><br>
              <select class="form-control" id="businessProfileState" name="state-business-created">
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
              <a href="#" class="btn btn-danger" id="prev-2">Previous</a>
              <a href="#" class="btn btn-danger" id="next-2">Next</a>
            </div>
          </div>
          <div id="third">
            <h4 class="text-center bg-primary p-1 rounded text-light">Owner Information</h4>
            <fieldset id="primaryOwner">
              <div class="form-group">
                <label for="ownerFirst">First Name</label>
                <input class="form-control" type="text" id="ownerFirst" placeholder="First Name" name="owner-information-first-name" />
                <p class="form-text text-danger" id="ownerFirstError"></p>
              </div>
              <div class="form-group">
                <label for="ownerLast">First lame</label>
                <input class="form-control" type="text" id="ownerLast" placeholder="Last Name" name="owner-information-last-name" />
                <p class="form-text text-danger" id="ownerLastError"></p>
              </div>
              <div class="form-group">
                <label for="ownerTitle">Title</label>
                <input class="form-control" type="text" id="ownerTitle" placeholder="Title" name="owner-title" />
                <p class="form-text text-danger" id="ownerTitleError"></p>

              </div>
              <div class="form-group">
                <label for="ownerStreet2">Ownership Age</label>
                <input class="form-control" type="text" id="ownerAge" placeholder="Ownership Age" name="owner-age" />
                <p class="form-text text-danger" id="ownerAgeError"></p>
              </div>
              <div class="form-group">
                <label for="ownerFirst">Social Security Number</label>
                <input class="form-control" type="password" id="ownerSocial" placeholder="Social Security Number" name="owner-social" />
                <p class="form-text text-danger" id="ownerSocialError"></p>
              </div>
              <div class="form-group">
                <label for="ownerFirst">Date of Birth</label>
                <input class="form-control" type="date" id="ownerDateOfBirth" name="owner-date-of-birth">
                <p class="form-text text-danger" id="ownerDateOfBirthError"></p>

              </div>
              <div class="form-group">
                <label for="ownerAddress">Home Address</label>
                <input class="form-control" type="text" id="ownerStreet1" placeholder="Street Address" name="owner-company-address" />
                <p class="form-text text-danger" id="ownerStreet1Error"></p>

              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="ownerStreet2" placeholder="Street Address Line 2" name="owner-company-address-line-2" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="ownerCity" placeholder="City" name="owner-company-city" />
                <p class="form-text text-danger" id="ownerCityError"></p>
              </div>
              <div class="form-group">
                <select class="form-control" id="ownerState" name="owner-company-state">
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
                <p class="form-text text-danger" id="ownersStateError"></p>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="ownerZipcode" placeholder="Zip Code" name="owner-company-zip" />
                <p class="form-text text-danger" id="ownerZipcodeError"></p>
              </div>
              <div class="form-group">
                <label for="ownerDriversLicense">Driver's Licenses Number</label>
                <input class="form-control" type="text" id="ownerDriversLicense" name="owner-company-drivers-license">
                <p class="form-text text-danger" id="OwnerLicenseError"></p>
              </div>
              <br>
              <div class="form-group">
                <label class="checkbox-container" for="owner2">
                  Add Second Owner:
                  <input class="form-check-input" type="checkbox" id="secondaryCheck" value="yes" onchange="showHidden(this.checked)" name="owner2">
                </label>
              </div>
            </fieldset>

            <fieldset id="hiddenForm" style="display:none;">
              <br>
              <label for="secondOnwerInfo">

                <h3>Second Owner Info</h3>
              </label>
              <br>
              <br>
              <div class="form-group">
                <label for="secondOwnerFirst">First Name</label>
                <input class="form-control" class="firstName" type="text" id="secondOwnerFirst" placeholder="First Name" name="secondary-owner-first-name" />
              </div>
              <div class="form-group">
                <label for="secondOwnerLast">Last Name</label>
                <input class="form-control" class="lastName" type="text" id="secondOwnerLast" placeholder="Last Name" name="secondary-owner-last-name">
              </div>
              <div class="form-group">
                <label for="secondOwnerTitle">Title</label>
                <input class="form-control" type="text" id="secondOwnerTitle" name="secondary-owner-title" />
              </div>
              <div class="form-group">
                <label for="secondOwnerAge">Ownership Age</label>

                <input class="form-control" type="text" id="secondOwnerAge" placeholder="ownership" name="secondary-owner-age" />
              </div>
              <div class="form-group">
                <label for="secondOwnerSocial">Social Security Number</label>
                <input class="form-control" type="password" id="secondOwnerSocial" placeholder="ssn" name="secondary-owner-social" />
              </div>
              <div class="form-group">
                <label for="secondOwnerBirth">Date of Birth</label>
                <input class="form-control" type="date" id="secondDateOfBirth" name="secondary-owner-date-of-birth">
              </div>
              <div class="form-group">
                <label for="secondOwnerNumber">Phone Number</label>
                <input class="form-control" type="text" id="secondOwnerNumber" placeholder="" name="secondary-owner-phone-number" />
              </div>
              <div class="form-group">
                <label for="secondOwnerAddress">Home Address</label>
                <input class="form-control" type="text" id="secondOwnerStreet1" placeholder="Street Address" name="secondary-owner-address" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="seecondOwnerStreet2" placeholder="Street Address Line 2" name="secondary-owner-address-line-2" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="secondOwnerCity" placeholder="City" name="secondary-owner-city" />
              </div>
              <div class="form-group">
                <select class="form-control" id="secondOwnerState" name="secondary-owner-state">
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
                <input class="form-control" type="text" id="secondOwnerZipcode" placeholder="Zip Code" name="secondary-owner-zip" />
              </div>
              <div class="form-group">
                <label for="secondOwnerDriversLicense">Driver's License Number</label>
                <input class="form-control" type="text" id="secondOwnerDriversLicense" placeholder="" name="secondary-owner-drivers-license">
              </div>
            </fieldset>
            <br>
            <div class="form-group">
              <a href="#" class="btn btn-danger" id="prev-3">Previous</a>
              <a href="#" class="btn btn-danger" id="next-3">Next</a>
            </div>
          </div>
          <div id="fourth">
            <h4 class="text-center bg-primary p-1 rounded text-light">Product Info</h4>
            <div class="form-group">
              <label for="productDescription">Briefly describe product/service being sold:</label>
              <br>
              <input type="text" class="form-control rounded-0" name="describe-product-info" cols="45" rows="5" id="productDescription" />
              <p class="form-text text-danger" id="productDescriptionError"></p>
            </div>
            <br>
            <div class="form-group">
              <label for="productVolume">Projected Annual Volume</label>
              <br>
              <input class="form-control" type="text" id="productVolume" placeholder="" name="product-annual-volume">
            </div>
            <br>
            <div class="form-group">
              <label for="productVolume">Average Ticket</label>
              <br>
              <input class="form-control" type="text" id="productAverageTicket" name="product-average-ticket">
            </div>
            <br>
            <div class="form-group">
              <label for="productVolume">High Ticet</label>
              <br>
              <input class="form-control" type="text" id="productHighTicket" name="product-high-ticket">
            </div>
            <br>
            <fieldset class="transaction-input-radio" name="transactiontype" id="transactionType">
              <label for="transactionType">
                <h3> Transaction Type: </h3>
              </label>
              <div class="form-group">
                <label for="productCardSwipe" class="product-radio-container"> Card Swipe
                  <input class="form-control" type="radio" name="transactiontype-radio" value="Card Swipe" id="productCardSwipe">
                  <span class="checkmark"></span>
                </label>

              </div>

              <div class="form-group">
                <label for="productMailTelephone" class="product-radio-container"> Mail order/Telephone Order
                  <input class="form-control" type="radio" name="transactiontype-radio" value="Mail order/Telephone order" id="productMailTelephone">
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="form-group">
                <label for="productInternetEcommerce" class="product-radio-container">Internet/Ecommerce
                  <input class="form-control" type="radio" name="transactiontype-radio" value="Internet/Ecommerce" id="productInternetEcommerce">
                  <span class="checkmark"></span>
                </label>
              </div>
              <p class="form-text text-danger" id="productTransactionError"></p>

            </fieldset>
            <br>
            <div class="form-group">
              <a href="#" class="btn btn-danger" id="prev-4">Previous</a>
              <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
            </div>
          </div>
      </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>

    </script>

    <?php
    include_once 'footer.php';
    ?>