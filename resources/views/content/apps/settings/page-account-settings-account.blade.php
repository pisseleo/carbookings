@extends('layouts/contentLayoutMaster')

@section('title', 'Account')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
  <link rel='stylesheet' href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <ul class="nav nav-pills mb-2">
      <!-- Account -->
      <li class="nav-item">
        <a class="nav-link active" href="{{asset('page/account-settings-account')}}">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Account</span>
        </a>
      </li>
      <!-- security -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-security')}}">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Security</span>
        </a>
      </li>
      <!-- billing and plans -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-billing')}}">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>
      <!-- notification -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('page/account-settings-notifications')}}">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>
      <!-- connection -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin/settings-roles')}}">
          <i data-feather="link" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Cargos e Permissões</span>
        </a>
      </li>
    </ul>

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Profile Details</h4>
      </div>
      <div class="card-body py-2 my-25">
        <!-- header section -->
        <div class="d-flex">
          <a href="#" class="me-25">
            <img
              src="{{asset('images/portrait/small/avatar-s-11.jpg')}}"
              id="account-upload-img"
              class="uploadedAvatar rounded me-50"
              alt="profile image"
              height="100"
              width="100"
            />
          </a>
          <!-- upload and reset button -->
          <div class="d-flex align-items-end mt-75 ms-1">
            <div>
              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
              <input type="file" id="account-upload" hidden accept="image/*" />
              <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
              <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
            </div>
          </div>
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->

        <!-- form -->
        <form class="validate-form mt-2 pt-50">
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">First Name</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="John"
                value="John"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">Last Name</label>
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Doe"
                value="Doe"
                data-msg="Please enter last name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">Email</label>
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="email"
                placeholder="Email"
                value="johndoe@gmail.com"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountOrganization">Organization</label>
              <input
                type="text"
                class="form-control"
                id="accountOrganization"
                name="organization"
                placeholder="Organization name"
                value="PIXINVENT"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phoneNumber"
                placeholder="Phone Number"
                value="457 657 1237"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Address</label>
              <input type="text" class="form-control" id="accountAddress" name="address" placeholder="Your Address" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountState">State</label>
              <input type="text" class="form-control" id="accountState" name="state" placeholder="State" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountZipCode">Zip Code</label>
              <input
                type="text"
                class="form-control account-zip-code"
                id="accountZipCode"
                name="zipCode"
                placeholder="Code"
                maxlength="6"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select">
                <option value="">Select Country</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label for="language" class="form-label">Language</label>
              <select id="language" class="select2 form-select">
                <option value="">Select Language</option>
                <option value="en">English</option>
                <option value="fr">French</option>
                <option value="de">German</option>
                <option value="pt">Portuguese</option>
              </select>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label for="timeZones" class="form-label">Timezone</label>
              <select id="timeZones" class="select2 form-select">
                <option value="">Select Time Zone</option>
                <option value="-12">
                  (GMT-12:00) International Date Line West
                </option>
                <option value="-11">
                  (GMT-11:00) Midway Island, Samoa
                </option>
                <option value="-10">
                  (GMT-10:00) Hawaii
                </option>
                <option value="-9">
                  (GMT-09:00) Alaska
                </option>
                <option value="-8">
                  (GMT-08:00) Pacific Time (US & Canada)
                </option>
                <option value="-8">
                  (GMT-08:00) Tijuana, Baja California
                </option>
                <option value="-7">
                  (GMT-07:00) Arizona
                </option>
                <option value="-7">
                  (GMT-07:00) Chihuahua, La Paz, Mazatlan
                </option>
                <option value="-7">
                  (GMT-07:00) Mountain Time (US & Canada)
                </option>
                <option value="-6">
                  (GMT-06:00) Central America
                </option>
                <option value="-6">
                  (GMT-06:00) Central Time (US & Canada)
                </option>
                <option value="-6">
                  (GMT-06:00) Guadalajara, Mexico City, Monterrey
                </option>
                <option value="-6">
                  (GMT-06:00) Saskatchewan
                </option>
                <option value="-5">
                  (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                </option>
                <option value="-5">
                  (GMT-05:00) Eastern Time (US & Canada)
                </option>
                <option value="-5">
                  (GMT-05:00) Indiana (East)
                </option>
                <option value="-4">
                  (GMT-04:00) Atlantic Time (Canada)
                </option>
                <option value="-4">
                  (GMT-04:00) Caracas, La Paz
                </option>
                <option value="-4">
                  (GMT-04:00) Manaus
                </option>
                <option value="-4">
                  (GMT-04:00) Santiago
                </option>
                <option value="-3.5">
                  (GMT-03:30) Newfoundland
                </option>
              </select>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label for="currency" class="form-label">Currency</label>
              <select id="currency" class="select2 form-select">
                <option value="">Select Currency</option>
                <option value="usd">USD</option>
                <option value="euro">Euro</option>
                <option value="pound">Pound</option>
                <option value="bitcoin">Bitcoin</option>
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>

    <!-- deactivate account  -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Delete Account</h4>
      </div>
      <div class="card-body py-2 my-25">
        <div class="alert alert-warning">
          <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
          <div class="alert-body fw-normal">
            Once you delete your account, there is no going back. Please be certain.
          </div>
        </div>

        <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              name="accountActivation"
              id="accountActivation"
              data-msg="Please confirm you want to delete account"
            />
            <label class="form-check-label font-small-3" for="accountActivation">
              I confirm my account deactivation
            </label>
          </div>
          <div>
            <button type="submit" class="btn btn-danger deactivate-account mt-1">Deactivate Account</button>
          </div>
        </form>
      </div>
    </div>
    <!--/ profile -->
  </div>
</div>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/page-account-settings-account.js')) }}"></script>
@endsection
