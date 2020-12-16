<h1>Merchant Info Questionnaire</h1>
<button class="btn-left">Business Information</button>

<form id="form-main-container" action="" method="POST">
  <label for="input-DBA">DBA(Name that will be on the card holders bill)</label>

  <input type="text" id="mrcBusinessName" placeholder="DBA" name="mrc-businessname" />
  <label for="input-companyAddress">Location Address</label>

  <input type="text" id="mrcBusinessStreet" placeholder="street address" name="mrc-buisiness-street-address" />

  <input type="text" id="mrcBusinessStreet2" placeholder="street address line 2" name="mrc-buisiness-street-address-line-2" />

  <input type="text" id="mrcBusinessCity" placeholder="City" name="company-city" />

  </div>
  <label for="state">State</label>
  <select class="form-control" id="mrcBusinessState" name="mrc-business-state">
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

  <input type="text" id="mrcBusinessZip" placeholder="Zip Code" name="mrc-business-zip" />

  <label for="mrcBusinessLegalName">Legal Business Name(as it appears on tax return)</label>
  <input type="text" name="mrc-business-legal-name" id="mrcBusinessLegalName" />
  </div>

  <label for="Mailing Address">Is the Mailing Address different from above?</label>
  <div class="form-group">
    <label class="radio-container"> Yes
      <input class="form-control" type="radio" name="mrc-business-mailing-radio" value="Yes" id="mrcBusinessMailingY">
      <span class="checkmark"></span>
    </label>
    <div class="form-group">
      <label class="radio-container"> No
        <input class="form-control" type="radio" name="mrc-business-mailing-radio" value="No" id="mrcBusinessMailingY">
        <span class="checkmark"></span>
      </label>



      <label for="mrcBusinessPhoneNumber">Company Phone Number</label>

      <input type="text" name="mrc-business-phone" id="mrcBusinessPhoneNumber" placeholder="Phone Number" />

      <label for="mrcBusinessFaxNumber">Company Fax Number</label>

      <input type="text" nam="mrc-business-fax" id="mrcBusinessFaxNumber" placeholder="Company Fax Number" />
    </div>


    <label for="mrcCustomerServiceNumber">Company Service Number</label>

    <input type="text" name="mrc-customer-service-number" id="mrcCustomerServiceNumber" placeholder="Customer Service Number" />
  </div>

  <div class="site-container">
    <label for="mrcBusinessSite">Website/URL</label>

    <input type="text" name="mrc-business-site" id="mrcBusinessSite" placeholder="www.example.com" />
  </div>
  </div>

  <label for="mrcContactPerson">Contact Person(if questions on the account)</label>

  <input type="text" name="mrc-contact-person" id="mrcContactPerson" placeholder="" />
  </div>


  <label for="mrcBusinessEmail">Contact Person's Email</label>

  <input type="text" name="mrc-business-email" id="mrcBusinessEmail" placeholder="" />
  </div>

  <div class="business-profile-container">

    <button class="btn-left">Business Profile</button>


    <label for="mrcProfileStructure">Business Structure(corporation, LLC, Sole Prop, ect.)</label>

    <input type="text" name="mrc-business-structure" id="mrcProfileStructure" />
  </div>


  <label for="mrcProfileFederalTaxId">Federal Tax ID</label>

  <input type="text" name="mrc-federal-tax" id="mrcProfileFederalTaxId" />
  </div>
  <label for="input-owner">Date of Birth</label>

  <div class="form-group">
    <label for="mrcProfileDateCreated">Date Business Created</label>
    <input class="form-control" type="date" id="mrcProfileDateCreated" name="mrc-date-business-created">

  </div>

  <label for="mrcProfileState">State Business was Created in?</label>
  <select class="form-group" id="mrcProfileState" name="mrc-profile-state">
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

  <label for="mrcProfileNumberOfEmployees">Number of Employees</label>

  <input type="text" name="mrc-profile-number-of-employees" id="mrcProfileNumberOfEmployees" />
  </div>

  <div class="form-group">
    <label for="mrcProfileTradeReference1">Trade reference 1 - Business name</label>

    <input type="text" name="mrc-profile-trade-reference1" id="mrcProfileTradeReference" />
  </div>
  <div class="form-group">
    <label for="mrcProfileContactName1">Contact name (of reference 1)</label>
    <input type="text" name="mrc-profile-contact-name1" id="$mrcProfileContactName1" />
  </div>
  <div class="form-group">
    <label for="mrcProfileContactNumber1">Contact number (of reference 1)</label>
    <input type="text" name="mrc-profile-contact-number1" id="$mrcProfileContactNumber1" />
  </div>
  <div class="form-group">
    <label for="mrcProfileTradeReference2">Trade reference 2 - Business name</label>

    <input type="text" name="mrc-profile-trade-reference2" id="mrcProfileTradeReference" />
  </div>
  <div class="form-group">
    <label for="mrcProfileContactName1">Contact name (of reference 2)</label>
    <input type="text" name="mrc-profile-contact-name2" id="$mrcProfileContactName2" />
  </div>
  <div class="form-group">
    <label for="mrcProfileContactNumber1">Contact number (of reference 2)</label>
    <input type="text" name="mrc-profile-contact-number2" id="$mrcProfileContactNumber2" />
  </div>

  <fieldset>
    <div class="owner-info-container">
      <button class="btn-left">Owner/Officer</button>

      <label for="mrcOwnerPrimaryName">Primary Owner's Name</label>

      <input class="firstName" type="text" name="mrc-owner-primary-name" id="mrcOwnerPrimaryName" />

      <label for="mrcOwnerTitle">Title</label>

      <input type="text" name="mrc-owner-title" id="mrcOwnerTitle" />
    </div>

    <div class="form-goup">
      <label for="mrcOwnershipAge">Ownership</label>
      <input type="text" name="mrc-ownership-age" id="mrcOwnershipAge" />
    </div>
    <div class="form-group">
      <label for="mrcOwnerSocial">Social Security Number</label>
      <input type="text" id="mrcOwnerSocial" name="mrc-owner-social" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}">
    </div>

    <div class="form-group">
      <label for="mrcOwnerDateOfBirth">Date of Birth</label>
      <input class="form-control" type="date" id="mrcOwnerDateOfBirth" name="mrc-owner-dob">
      <p class="form-text text-danger" id="mrcOwnerDateOfBirthError"></p>

    </div>

    <label for="mrcOwnerMobileNumber">Mobile Number</label>

    <input type="tel" name="mrc-owner-mobile" id="mrcOwnerMobileNumber" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">

    <label for="input-companyAddress">Home Address</label>

    <input type="text" name="mrc-owner-street-address" id="mrcOwnerStreetAddress" placeholder="street address" />

    <input type="text" name="mrc-owner-street-address2" id="mrcOwnerStreetAddress2" placeholder="street address line 2" />

    <input type="text" name="mrc-owner-city" id="mrcOwnerCity" />

    <label for="mrcOwnerState">State</label>
    <select class="form-group" id="mrcOwnerState" name="mrc-owner-state">
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

    <input type="text" name="mrc-owner-zip" id="mrcOwnerZip" />

    <label for="mrcOwnerDriversLicense">Drivers License</label>

    <input type="text" name="mrc-owner-drivers-license" id="mrcOwnerDriversLicense">

    <label for="mrcOwnerStateId">State where ID is issued</label>

    <input type="text" name="mrc-owner-state-id" id="mrcOwnerStateId" placeholder="State ID">

    <label for="mrcOwnerYearResidence">Year at residence</label>

    <input type="text" name="mrc-owner-year-residence" id="mrcOwnerYearResidence">

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

    <label for="mrcSecondOwnerName"> Owner's Name</label>

    <input class="firstName" type="text" name="mrc-second-owner-name" id="mrcSecondOwnerName" />

    <label for="mrcSecondOwnerTitle">Title</label>

    <input type="text" name="mrc-second-owner-title" id="mrcSecondOwnerTitle" />
    </div>

    <div class="form-goup">
      <label for="mrcSecondOwnershipAge">Ownership</label>
      <input type="text" name="mrc-second-ownership-age" id="mrcSecondOwnershipAge" />
    </div>
    <div class="form-group">
      <label for="mrcSecondOwnerSocial">Social Security Number</label>
      <input type="text" id="mrcSecondOwnerSocial" name="mrc-second-owner-social" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}">
    </div>

    <div class="form-group">
      <label for="mrcSecondOwnerDateOfBirth">Date of Birth</label>
      <input class="form-control" type="date" id="mrcSecondOwnerDateOfBirth" name="mrc-second-owner-dob">
      <p class="form-text text-danger" id="mrcSecondOwnerDateOfBirthError"></p>

    </div>

    <label for="mrcSecondOwnerMobileNumber">Mobile Number</label>

    <input type="tel" name="mrc-second-owner-mobile" id="mrcSecondOwnerMobileNumber" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">

    <label for="input-companyAddress">Home Address</label>

    <input type="text" name="mrc-second-owner-street-address" id="mrcSecondOwnerStreetAddress" placeholder="street address" />

    <input type="text" name="mrc-second-owner-street-address2" id="mrcSecondOwnerStreetAddress2" placeholder="street address line 2" />

    <input type="text" name="mrc-second-owner-city" id="mrcSecondOwnerCity" />

    <label for="mrcSecondOwnerState">State</label>
    <select class="form-group" id="mrcSecondOwnerState" name="mrc-second-owner-state">
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

    <input type="text" name="mrc-second-owner-zip" id="mrcSecondOwnerZip" />

    <label for="mrcSecondOwnerDriversLicense">Drivers License</label>

    <input type="text" name="mrc-second-owner-drivers-license" id="mrcSecondOwnerDriversLicense">

    <label for="mrcSecondOwnerStateId">State where ID is issued</label>

    <input type="text" name="mrc-second-owner-state-id" id="mrcSecondOwnerStateId" placeholder="State ID">

    <label for="mrcSecondOwnerYearResidence">Year at residence</label>

    <input type="text" name="mrc-second-owner-year-residence" id="mrcSecondOwnerYearResidence">
  </fieldset>



  <div class="form-group">
    <label for="mrcProductOfficeStructure">Office Structure (Office, Residential)</label>
    <input type="text" name="mrc-site-office-structure" id="mrcProductOfficeStructure ">
  </div>
  <div class="form-group">
    <label for="mrcProductFloorOccupy">Floor you occupy & Number of floors in building</label>
    <input type="text" name="mrc-site-floor-occupy" id="mrcProductFloorOccupy ">
  </div>
  <div class="form-group">
    <label for="mrcProductApproxSqFt"> Approximate square footage</label> <input type="text" name="mrc-site-approx-sq-ft" id="mrcProductApproxSqFt ">
  </div>
  <div class="form-group">
    <label for="mrcProductBuildingZone"> Building area zone type</label> <input type="text" name="mrc-site-building-zone" id="mrcProductBuildingZone">
  </div>
  <div class="form-group">
    <label for="mrcProductOwnLease">Do you own or lease the building?</label>
    <input type="text" name="mrc-site-own-lease" id="mrcProductOwnLease">
  </div>

  <div class=" product-price">
    <button class="btn-left">Product Price Info</button>

    <div class="form-group">
      <label for="mrcProductProjectVolume">Projected annual volume</label>
      <input type="text" name="mrc-product-project-volume" id="mrcProductProjectVolume ">
    </div>

    <div class="form-group">
      <label for="mrcProductAverageTicket">Average ticket</label>
      <input type="text" name="mrc-product-average-ticket" id="mrcProductAverageTicket ">
    </div>

    <div class="form-group">
      <label for="mrcHighTicket">High ticket</label>
      <input type="text" name="mrc-product-high-ticket" id="mrcHighTicket ">
    </div>

    <div class="form-group">
      <label for="mrcProductTicketDescription"> High ticket description</label>
      <input type="text" name="mrc-product-ticket-description" id="mrcProductTicketDescription">
    </div>

    <div class="form-group">
      <label for="mrcDescribeService">Describe product/service in detail</label>
      <input type="text" name="mrc-product-describe-service" id="mrcDescribeService">
    </div>

    <div class="form-group">
      <label for="mrcProductRefundPolicy">Refund policy
      </label>
      <input type="text" name="mrc-product-refund-policy" id="mrcProductRefundPolicy ">
    </div>

    <div class="form-group">
      <label for="mrcTransactionType">Transaction Type (must equal 100%)
      </label>
      <input type="text" name="mrc-product-transaction-type" id="mrcTransactionType ">
    </div>

    <div class="form-group">
      <label for="mrcProductCardSwipe"> Card swipe %
      </label> <input type="text" name="mrc-product-card-swipe" id="mrcProductCardSwipe ">
    </div>

    <div class="form-group">
      <label for="mrcProductMailTelephone"> Mail Order / Telephone Order %</label> <input type="text" name="mrc-product-mail-telephone" id="mrcProductMailTelephone">
    </div>

    <div class="form-group">
      <label for="mrcProductInternetEcommerce">Internet - Ecommerce %
      </label>
      <input type="text" name="mrc-product-internet-ecommerce" id="mrcProductInternetEcommerce">
    </div>

    <div class="form-group">
      <label for="mrcProductConsumerSales"> % of Business to Consumer sales

      </label> <input type="text" name="mrc-product-consumer-sales" id="mrcProductConsumerSales">
    </div>

    <div class="form-group">
      <label for="mrcProductBusinessSales">% of Business to Consumer sales
      </label>
      <input type="text" name="mrc-product-Business-Sales" id="mrcProductBusinessSales">
    </div>


  </div>
  <div class="current-account-profile-container">

    <div class="form-group">
      <label for="mrcAccountAcceptVMCD">Do you currently accept V/MC/D?
      </label>
      <input type="text" name="mrc-account-accept-vmcd" id="mrcAccountAcceptVMCD">
    </div>
    <div class="form-group">
      <label for="mrcAccountAcceptAmex"> Do you currently accept AmEx?</label>
      <input type="text" name="mrc-account-accept-amex" id="mrcAccountAcceptAmex">
    </div>
    <div class="form-group">
      <label for="mrcAccountNoAmex">If not currently accepting AmEx, do you want to?
      </label>
      <input type="text" name="mrc-account-no-amex" id="mrcAccountNoAmex">
    </div>
    <div class="form-group">
      <label for="mrcAccountCurrentProcessor">Name of current Processor

      </label>
      <input type="text" name="mrc-account-current-processor" id="mrcAccountCurrentProcessor">
    </div>
    <div class="form-group">
      <label for="mrcAccountGateway ">Gateway using or would like to use

      </label>
      <input type="text" name="mrc-account-gateway" id="mrcAccountGateway ">
    </div>s
    <div class="form-group">
      <label for="mrcAccountTerminated">Have you ever been terminated by a Processor?
      </label>
      <input type="text" name="mrc-account-terminated" id="mrcAccountTerminated">
    </div>


    <div class="bank-info-container">

      <button class="btn-left">Bank Information</button>
      Name</label>

      <div class="form-group">
        <label for="mrcBankName">Bank Name
        </label>
        <input type="text" name="mrc-bank-name" id="mrcBankName">
      </div>

      <div class="form-group">
        <label for="mrcBankAddress">Bank Address
        </label>
        <input type="text" name="mrc-bank-address" id="mrcBankAddress">
      </div>

      <div class="form-group">
        <label for="mrcBankPhoneNumber">Bank Phone Number
        </label>
        <input type="text" name="mrc-bank-phone-number" id="mrcBankPhoneNumber">
      </div>

      <div class="form-group">
        <label for="mrcContactName">Contact Name
        </label>
        <input type="text" name="mrc-bank-contact-name" id="mrcContactName">
      </div>

      <div class="form-group">
        <label for="mrcBankAccount">Account #
        </label>
        <input type="text" name="mrc-bank-account" id="mrcBankAccount">
      </div>

      <div class="form-group">
        <label for="mrcBankRouting">Routing #
        </label>
        <input type="text" name="mrc-bank-routing" id="mrcBankRouting">
      </div>

      <div class="form-group">
        <label for="mrcBankCheckingSaving">Is this a checking or savings account?
        </label>
        <input type="text" name="mrc-bank-checking-saving" id="mrcBankCheckingSaving">
      </div>

    </div>




    <div class="offer-campaign-container">
      <div class="form-group">
        <label for="mrcCampaignDescribeProduct">Describe the product/service being sold.</label>
        <input type="text" name="mrc-campaign-Describe-Product" id="mrcCampaignDescribeProduct">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductSold">How is the product/service ordered or purchased?</label>
        <input type="text" name="mrc-campaign-product-sold" id="mrcCampaignProductSold">
      </div>

      <div class="form-group">
        <label for="mrcCampaignPricePoint">What are the price points for the product/service?</label>
        <input type="text" name="mrc-campaign-price-point" id="mrcCampaignPricePoint">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductFrontBack">Is the product/service being sold through a Front End or as an upsell offer? With any upsell offers, please list all applicable Front/Back end partners with the product/service being sold. </label>
        <input type="text" name="mrc-campaign-product-front-back'" id="mrcCampaignProductFrontBack">
      </div>

      <div class="form-group">
        <label for="mrcCampaignCrossProduct">Is the product/service being cross sold with any other product/service? If yes, explain.</label>
        <input type="text" name="mrc-campaign-cross-product" id="mrcCampaignCrossProduct">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductFreeTrial">Is there a free trial and/or auto ship program attached to the product/service? </label>
        <input type="text" name="mrc-campaign-product-free-trial" id="mrcCampaignProductFreeTrial">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductBilling">Is there recurring billing/continuity plan associated with the product/service?</label>
        <input type="text" name="mrc-campaign-product-billing" id="mrcCampaignProductBilling">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductMarketing">How is the product/service advertised, marketed, and/or promoted to support the projected volume/transaction estimates? (i.e. radio, print, affiliate networks, CPA, publishers, and/or other sources to support the transaction count per day)</label>
        <input type="text" name="mrc-campaign-product-marketing" id="mrcCampaignProductMarketing">
      </div>

      <div class="form-group">
        <label for="mrcCampaignMajorCPA">List all major affiliates (sub affiliates), CPA’s, and publishers used to generate sales.
        </label>
        <input type="text" name="mrc-campaign-major-cpa" id="mrcCampaignMajorCPA">
      </div>

      <div class="form-group">
        <label for="mrcCampaignLeadQuality">How do you track affiliate sales and monitor for lead quality?</label>
        <input type="text" name="mrc-campaign-lead-quality" id="mrcCampaignLeadQuality">
      </div>

      <div class="form-group">
        <label for="mrcCampaignProductWarrenty">What is the warranty, return, and refund policy?</label>
        <input type="text" name="mrc-campaign-product-warrenty" id="mrcCampaignProductWarrenty">
      </div>

      <div class="form-group">
        <label for="mrcCampaignCustomerCancel">How can a customer cancel from Auto Ship/Bill and/or continuity program?/label>
          <input type="text" name="mrc-campaign-customer-cancel" id="mrcCampaignCustomerCancel">
      </div>












      <div class="fulfillment">
        <button class="btn-left">Fulfillment</button>

        <div class="form-group">
          <label for="mrcFulfillmentSourcing">Is fulfillment handled In House or outsourced? If outsourced, with whom?
          </label>
          <input type="text" name="mrc-fulfillment-sourcing" id="mrcFulfillmentSourcing">
        </div>

        <fieldset class="transaction-input-radio" name="shippingconfirmation" id="shippingConfirmation">
          <label for="shippingConfirmation">
            <h3> Which of the following shipping confirmations do you use?</h3>
          </label>
          <div class="form-group">
            <label for="mrcFulfillmentDelivery" class="product-radio-container"> Delivery Confirmation
              <input class="form-control" type="radio" name="mrc-fulfillment-shipping" value="Delivery Confirmation" id="mrcFulfillmentDelivery">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label for="mrcFulfillmentSignature" class="product-radio-container"> Signature Confirmation
              <input class="form-control" type="radio" name="mrc-fulfillment-shipping" value="Signature Confirmation" id="mrcFulfillmentSignature">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label for="mrcFulfillmentNone" class="product-radio-container">None
              <input class="form-control" type="radio" name="mrc-fulfillment-shipping" value="None" id="mrcFulfillmentNone">
              <span class="checkmark"></span>
            </label>
          </div>
        </fieldset>


        <div class="form-group">
          <label for="mrcFulfillmentSourcing">Who manufactures/produces the product/service?</label>
          <input type="text" name="mrc-fulfillment-sourcing" id="mrcFulfillmentSourcing">
        </div>


        <fieldset class="transaction-input-radio" name="transactiontype" id="transactionType">
          <label for="mrcFulfillment">
            <h3> Transaction Type: </h3>
          </label>
          <div class="form-group">
            <label for="ProductsSoldY" class="product-radio-container"> Yes
              <input class="form-control" type="radio" name="mrcfulfillment-radio" value="Yes" id="ProductsSoldY">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label for="ProductsSoldN" class="product-radio-container"> No
              <input class="form-control" type="radio" name="mrcfulfillment-radio" value="No" id="ProductsSoldY">
              <span class="checkmark"></span>
            </label>
          </div>
        </fieldset>


        <div class="form-group">
          <label for="mrcFulfillmentUnitsPerDay">How many units per day is your manufacturer capable of producing should demand increase?</label>
          <input type="text" name="mrc-fulfillment-units" id="mrcFulfillmentUnitsPerDay">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentProductStock">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-fulfillment-product-stock" id="mrcFulfillmentProductStock">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentInventoryReport">Do you receive Inventory/Inventory Management Reports?</label>
          <input type="text" name="mrc-fulfillment-inventory-report" id="mrcFulfillmentInventoryReport">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentShippedTime">Will tangible products be shipped within 7 calendar days of sale capture?</label>
          <input type="text" name="mrc-fulfillment-shipped-time" id="mrcFulfillmentShippedTime">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentOrderInfo">Who is taking the order?</label>
          <input type="text" name="mrc-fulfillment-order-info" id="mrcFulfillmentOrderInfo">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentProcessTime">At what time or point during the ordering process does the merchant or the fulfillment center bill the cardholder (i.e at time of order, at time of shipping, etc…)?</label>
          <input type="text" name="mrc-fulfillment-process-time" id="mrcFulfillmentProcessTime">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentProductAvailability">
            What happens if the product is unavailable or if service cannot be rendered (i.e. cease billing customer, issue refund, or notify customer of delayed shipment)?</label>
          <input type="text" name="mrc-fulfillment-product-availability" id="mrcFulfillmentProductAvailability">
        </div>

        <div class="form-group">
          <label for="mrcFulfillmentBackOrder">Do you continue to accept sales if products/services are backorder/unavailable?</label>
          <input type="text" name="mrc-fulfillment-backorder" id="mrcFulfillmentBackOrder">
        </div>










      </div>
      <div class="customer-service-container">
        <button class="btn-left">Customer Service</button>


        <div class="form-group">
          <label for="mrcCustomerSourced">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-sourced" id="mrcCustomerSourced">
        </div>
        <div class="form-group">
          <label for="mrcCustomerOutsourced">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-outsourced" id="mrcCustomerOutsourced">
        </div>

        <div class="form-group">
          <label for="mrcCustomerTraining">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-training" id="mrcCustomerTraining">
        </div>

        <div class="form-group">
          <label for="mrcCustomerServiceSource">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-service-source" id="mrcCustomerServiceSource">
        </div>

        <div class="form-group">
          <label for="mrcCustomerServiceHours">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-service-hours" id="mrcCustomerServiceHours">
        </div>

        <div class="form-group">
          <label for="mrcCustomerReturns">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-returns" id="mrcCustomerReturns">
        </div>

        <div class="form-group">
          <label for="mrcCustomerFulfillment">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-fulfillment" id="mrcCustomerFulfillment">
        </div>

        <div class="form-group">
          <label for="mrcCustomerCommunication">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-communication" id="mrcCustomerCommunication">
        </div>

        <div class="form-group">
          <label for="mrcCustomerQualityControl">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-quality-control" id="mrcCustomerQualityControl">
        </div>
        <div class="form-group">
          <label for="mrcCustomerCardStatement">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-card-statement" id="mrcCustomerCardStatement">
        </div>

        <div class="form-group">
          <label for="mrcCustomerBankStatement">On average, how much product is maintained in stock, either in house or at your shipping facility?</label>
          <input type="text" name="mrc-customer-bank-statement" id="mrcCustomerBankStatement">
        </div>


        <div class="form-group">
          <label for="mrcCustomerSignature">Signature</label>
          <textarea name="mrc-customer-signature" id="mrcCustomerSignature" cols="30" rows="10">
          Signature Area
        </textarea>
        </div>
      </div>

      <div class="form-box">
        <button class="submit-btn" id="submit-btn">Submit</button>
      </div>
    </div>
</form>

<script src="./forms.js"></script>





</body>

</html>