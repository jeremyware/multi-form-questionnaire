<?php
include_once 'header.php';
?>
<h1>Merchant Info Questionnaire</h1>
<button class="btn-left">Business Information</button>

<form id="form-main-container" action="" method="POST">
    <label for="input-DBA">DBA(Name that will be on the card holders bill)</label>
    <br>
    <input type="text" id="mrcBusinessName" placeholder="DBA" name="mrc-businessname" />
    <label for="input-companyAddress">Location Address</label>
    <br>
    <input type="text" id="mrcBusinessStreet" placeholder="street address" name="mrc-buisiness-street-address" />

    <input type="text" id="mrcBusinessStreet2" placeholder="street address line 2" name="mrc-buisiness-street-address-line-2" />

    <input type="text" id="mrcBusinessCity" placeholder="City" name="company-city" />
    <br>
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

    <label for="input-legal-business-name">Legal Business Name(as it appears on tax return)</label>
    <input type="text" name="mrc-business-legal-name" id="mrcBusinessLegalName" />
    </div>
    <br>
    <label for="Mailing Address">Is the Mailing Address different from above?</label>
    <div class="form-group">
        <label for="mrcBusinessMailingY" class="radio-container"> Yes
            <input class="form-control" type="radio" name="mrc-business-mailing-radio" value="Yes" id="mrcBusinessMailingY">
            <span class="checkmark"></span>
        </label>
        <div class="form-group">
            <label for="mrcBusinessMailingN" class="radio-container"> No
                <input class="form-control" type="radio" name="mrc-business-mailing-radio" value="No" id="mrcBusinessMailingN">
                <span class="checkmark"></span>
            </label>



            <div class="form-number-merchant">
                <label for="input-companynumber">Company Phone Number</label>
                <br>
                <input type="text" name="mrc-business-phone" id="mrcBusinessPhoneNumber" placeholder="Phone Number" />
            </div>
            <label for="input-companynumber">Company Fax Number</label>
            <br>
            <input type="text" name="mrc-business-fax" id="mrcBusinessFaxNumber" placeholder="Company Fax Number" />
        </div>

        <br>
        <label for="mrcCustomerServiceNumber">Customer Service Number</label>
        <br>
        <input type="text" name="mrc-customer-service-number" id="mrcCustomerServiceNumber" placeholder="Customer Service Number" />
    </div>

    <div class="site-container">
        <label for="input-website">Website/URL</label>
        <br>
        <input type="text" name="mrc-business-site" id="mrcBusinessSite" placeholder="www.example.com" />
    </div>
    </div>

    <label for="input-website">Contact Person(if questions on the account)</label>
    <br>
    <input type="text" name="mrc-contact-person" id="mrcContactPerson" placeholder="" />
    </div>


    <label for="input-website">Contact Person's Email</label>
    <br>
    <input type="text" name="mrc-business-email" id="mrcBusinessEmail" placeholder="" />
    </div>
    <div class="business-profile-container">
        <br>
        <button class="btn-left">Business Profile</button>
        <br>



        <?php
        include_once 'header.php';
        ?>