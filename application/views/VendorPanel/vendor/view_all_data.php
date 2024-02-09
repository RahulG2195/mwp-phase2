<?php $this->load->view('VendorPanel/layout/header'); ?>

<?php $this->load->view('VendorPanel/layout/sidebar'); ?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor_form.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php
    // pr($vendor_data, '');
    foreach ($vendor_data as $val) {
        $bw_idc = !empty($val['bw_idc']) ? $val['bw_idc'] : 'N/A';
        $vin_id = !empty($val['vin_id']) ? $val['vin_id'] : 'N/A';
        $shop_type = !empty($val['shop_type']) ? $val['shop_type'] : 'N/A';
        $prod_offer = !empty($val['prod_offer']) ? $val['prod_offer'] : 'N/A';
        $start_price = !empty($val['start_price']) ? $val['start_price'] : 'N/A';
        $exp_since = !empty($val['exp_since']) ? $val['exp_since'] : 'N/A';
        $app_req = !empty($val['app_req']) ? $val['app_req'] : 'N/A';
        $occations = !empty($val['occations']) ? explode(',', $val['occations']) : 'N/A';
        $fabric_used = !empty($val['fabric_used']) ? explode(',', $val['fabric_used']) : 'N/A';
        $prod_type = !empty($val['prod_type']) ? explode(',', $val['prod_type']) : 'N/A';
        $emblishments = !empty($val['emblishments']) ? explode(',', $val['emblishments']) : 'N/A';
        $collection_type = !empty($val['collection_type']) ? explode(',', $val['collection_type']) : 'N/A';
        $design_style = !empty($val['design_style']) ? explode(',', $val['design_style']) : 'N/A';
        $customize_avail = !empty($val['customize_avail']) ? $val['customize_avail'] : 'N/A';
        $lead_time = !empty($val['lead_time']) ? $val['lead_time'] : 'N/A';
        $ship_out = !empty($val['ship_out']) ? $val['ship_out'] : 'N/A';
        $availability = !empty($val['availability']) ? explode(',', $val['availability']) : 'N/A';
        $dv_id = !empty($val['dv_id']) ? $val['dv_id'] : 'N/A';
        $vendor_name = !empty($val['vendor_name']) ? $val['vendor_name'] : 'N/A';
        $vendor_email = !empty($val['vendor_email']) ? $val['vendor_email'] : 'N/A';
        $vendor_prof_mobile = !empty($val['vendor_prof_mobile']) ? $val['vendor_prof_mobile'] : 'N/A';
        $user_name = !empty($val['user_name']) ? $val['user_name'] : 'N/A';
        $password = !empty($val['password']) ? $val['password'] : 'N/A';
        $city = !empty($val['city']) ? $val['city'] : 'N/A';
        $area = !empty($val['area']) ? $val['area'] : 'N/A';
        $phone_no = !empty($val['phone_no']) ? $val['phone_no'] : 'N/A';
        $address = !empty($val['address']) ? $val['address'] : 'N/A';
        $website = !empty($val['website']) ? $val['website'] : 'N/A';
        $category = !empty($val['category']) ? $val['category'] : 'N/A';
        $sub_category = !empty($val['sub_category']) ? $val['sub_category'] : 'N/A';
        $price_range = !empty($val['price_range']) ? $val['price_range'] : 'N/A';
        $end_price = !empty($val['end_price']) ? $val['end_price'] : 'N/A';
        $business_day = !empty($val['business_day']) ? explode(',', $val['business_day']) : 'N/A';
        $business_hr = !empty($val['business_hr']) ? explode(',', $val['business_hr']) : 'N/A';
        $social_media = !empty($val['social_media']) ? explode(',', $val['social_media']) : 'N/A';
        $social_link = !empty($val['social_link']) ? explode(',', $val['social_link']) : 'N/A';
        $about = !empty($val['about']) ? $val['about'] : 'N/A';
        $images = !empty($val['images']) ? $val['images'] : 'N/A';
        $comp_logo = !empty($val['comp_logo']) ? $val['comp_logo'] : 'N/A';
        $service_offer = !empty($val['service_offer']) ? $val['service_offer'] : 'N/A';
        $payment_opt = !empty($val['payment_opt']) ? explode(',', $val['payment_opt']) : 'N/A';
        $advance_per = !empty($val['advance_per']) ? $val['advance_per'] : 'N/A';
        $cancel_policy = !empty($val['cancel_policy']) ? $val['cancel_policy'] : 'N/A';
        $vendor_status = !empty($val['vendor_status']) ? $val['vendor_status'] : 'N/A';
        $created_on = !empty($val['created_on']) ? $val['created_on'] : 'N/A';
        $category_id = !empty($val['category_id']) ? $val['category_id'] : 'N/A';
        $cat_name = !empty($val['cat_name']) ? $val['cat_name'] : 'N/A';
        $sub_category_id = !empty($val['sub_category_id']) ? $val['sub_category_id'] : 'N/A';
        $name = !empty($val['name']) ? $val['name'] : 'N/A';
        $city_id = !empty($val['city_id']) ? $val['city_id'] : 'N/A';
        $city_name = !empty($val['city_name']) ? $val['city_name'] : 'N/A';
    }


    ?>

    <section class="vendor_form_section common_section">
        <div class="container" id="form_cont">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url() . 'Vendor/Insert_Data' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="vendor_count" value="<?php echo isset($dv_id) ? $dv_id : '' ?>">
                        <div class="card px-3 py-1">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">Primary Listing details</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="text" class="form-label vendor-form-label">Vendor Name<span class="text text-danger p-0">*</span></label>
                                    <input type="text" class="form-control" id="vendor_name" placeholder="Your Business name" name="vendor_name" value="<?php echo isset($vendor_name) ? $vendor_name : '' ?>" Required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="vendor_email" class="form-label vendor-form-label">Email<span class="text text-danger p-0">*</span></label>
                                    <input type="email" class="form-control" id="vendor_email" placeholder="Profession Email" name="vendor_email" value="<?php echo isset($vendor_email) ? $vendor_email : '' ?>" Required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="phone_no" class="form-label vendor-form-label" Required>Phone<span class="text text-danger p-0">*</span></label>
                                    <input type="text" class="form-control" id="phone_no" placeholder="Phone" name="phone_no" value="<?php echo isset($phone_no) ? $phone_no : '' ?>">
                                </div>
                                <!-- <div class="col-md-4 form-group">
                                <label for="vendor_prof_mobile" class="form-label vendor-form-label">Professional Pnone No</label>
                                <input type="text" class="form-control" id="vendor_prof_mobile" placeholder="Professional Mobile No" name="vendor_prof_mobile">
                            </div> -->
                                <div class="col-md-4 form-group">
                                    <label for="website" class="form-label vendor-form-label">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="Website" name="website" value="<?php echo isset($website) ? $website : '' ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="user_name" class="form-label vendor-form-label">User Name<span class="text text-danger p-0">*</span></label>
                                    <input type="text" class="form-control" id="user_name" placeholder="User Name" name="user_name" value="<?php echo isset($user_name) ? $user_name : '' ?>" Required>
                                </div>
                                <!-- <div class="col-md-6 form-group">
                                <label for="password" class="form-label vendor-form-label">Password<span class="text text-danger p-0">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo isset($password) ? $password : '' ?>" readonly>
                                <span id="passwordMessage" class="message"></span>
                            </div> -->
                                <!-- <div class="col-md-6 form-group">
                                <label for="cpassword" class="form-label vendor-form-label">Confirm password<span class="text text-danger p-0">*</span></label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Confirm password" name="cpassword" value="<?php echo isset($password) ? $password : '' ?>" readonly>
                                <span id="confirmPasswordMessage" class="message"></span>
                            </div> -->
                                <div class="col-md-6 form-group">
                                    <label for="city" class="form-label vendor-form-label">City<span class="text text-danger p-0">*</span></label>
                                    <select name="city" class="form-control" id="city" Required>
                                        <option value="">Select City</option>
                                        <?php
                                        // foreach ($sub_city as $value) {
                                        if (isset($city) && $city == $value['city_id']) {
                                            echo '<option value="' . $value['city_id'] . '" selected>' . $value['name'] . '</option>';
                                        } else {
                                            echo '<option value="' . $value['city_id'] . '">' . $value['name'] . '</option>';
                                        }
                                        // }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="area" class="form-label vendor-form-label">Area<span class="text text-danger p-0">*</span></label>
                                    <input type="text" class="form-control" id="area" placeholder="Your Area" name="area" value="<?php echo isset($area) ? $area : '' ?>">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="address" class="form-label vendor-form-label">Full Address<span class="text text-danger p-0">*</span></label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="2"><?php echo isset($address) ? $address : '' ?></textarea>
                                </div>

                                <!-- <div class="col-md-4 form-group">
                                <label for="pwd" class="form-label">Website</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Website" name="website">
                            </div> -->
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">CATEGORY</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="category" class="form-label vendor-form-label">Category</label>
                                    <input type="hidden" name="default_cat" id="selected_cat" value="<?php echo isset($categorys) ? $categorys : '' ?>">

                                    <select name="main_category" class="form-control cat_dropdown" id="category" <?php echo isset($categorys) ? 'disabled' : '' ?> required>
                                        <option value="">Select Category</option>
                                        <?php
                                        foreach ($category as $val) {
                                            if (isset($categorys) && $categorys == $val['category_id']) {
                                                echo '<option value="' . $val['category_id'] . '" selected>' . $val['name'] . '</option>';
                                            } else {
                                                echo '<option value="' . $val['category_id'] . '">' . $val['name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>

                                </div>
                                <!-- <div class="col-md-6 form-group">
                                <label for="sub_category" class="form-label vendor-form-label">Sub Category</label>
                                <select name="sub_category" class="form-control" id="sub_category">
                                    <option value="">Please select sub category</option>
                                </select>
                            </div> -->
                            </div>
                        </div>


                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">PRICE RANGE</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="price_range" class="form-label vendor-form-label">Price Details</label>
                                    <select name="price_range" class="form-control" id="price_range" required>
                                        <option value="">Not To Say</option>
                                        <option value="₹" <?php echo ($price_range == '₹') ? 'selected' : '' ?>>₹ - Inexpensive</option>
                                        <option value="₹₹" <?php echo ($price_range == '₹₹') ? 'selected' : '' ?>>₹₹ - Moderate</option>
                                        <option value="₹₹₹" <?php echo ($price_range == '₹₹₹') ? 'selected' : '' ?>>₹₹₹ - Pricey</option>
                                        <option value="₹₹₹₹" <?php echo ($price_range == '₹₹₹₹') ? 'selected' : '' ?>>₹₹₹₹ - Ultra High</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="start_price" class="form-label vendor-form-label">Price From</label>
                                    <input type="text" class="form-control" id="start_price" placeholder="Price From" name="start_price" value="<?php echo isset($start_price) ? $start_price : '' ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="end_price" class="form-label vendor-form-label">Price To</label>
                                    <input type="text" class="form-control" id="end_price" placeholder="Price To" name="end_price" value="<?php echo isset($end_price) ? $end_price : '' ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">Payment Options</h4>
                            </div>
                            <div class="row">
                                <?php $payment_opt = isset($payment_opt) ? $payment_opt : array() ?>
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Cash"> <span>Cash</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Cheque/ DD" <?php echo in_array('Cheque/ DD', $payment_opt) ? "checked" : '' ?>><span>Cheque/ DD</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Debit/ Credit Cards" <?php echo in_array('Debit/ Credit Cards', $payment_opt) ? "checked" : '' ?>><span>Credit/ Debit card</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Net Banking" <?php echo in_array('Net Banking', $payment_opt) ? "checked" : '' ?>><span>Net banking</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="UPI" <?php echo in_array('UPI', $payment_opt) ? "checked" : '' ?>><span>UPI</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Mobile Wallets" <?php echo in_array('Mobile Wallets', $payment_opt) ? "checked" : '' ?>><span>Mobile Wallets</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">payment policy</h4>
                            </div>
                            <div class="row">
                                <!-- <div class="col-4 form-group">
                                <label for="service_offer" class="form-label vendor-form-label">Services Offered</label>
                                <input type="text" class="form-control" id="service_offer" placeholder="Services Offered" name="service_offer">
                            </div> -->
                                <div class="col-md-6 form-group">
                                    <label for="advance_per" class="form-label vendor-form-label">Percentage advance</label>
                                    <input type="text" class="form-control" id="advance_per" placeholder="Percentage advance" name="advance_per" value="<?php echo isset($advance_per) ? $advance_per : '' ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="cancel_policy" class="form-label vendor-form-label">Cancellation Policy</label>
                                    <input type="text" class="form-control" id="cancel_policy" placeholder="Cancellation Policy" name="cancel_policy" value="<?php echo isset($cancel_policy) ? $cancel_policy : '' ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">BUSINESS HOURS</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="default_time" id="dataDisplay">
                                        <?php
                                        $business_day = isset($business_day) ? $business_day : array();
                                        for ($i = 0; $i < count($business_day); $i++) {
                                            $val1 = $business_day[$i];
                                            $val2 = $business_hr[$i];
                                        ?>
                                            <div class="day_div">
                                                <strong>
                                                    <p><input class="form-control" id="pwd" name="business_day[]" value="<?php echo $val1 ?>"></p>
                                                </strong>
                                                <p>
                                                    <input class="form-control" id="pwd" name="business_hr[]" value="<?php echo $val2 ?>">
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row busin_row">
                                        <div class="col-lg-2 col-xs-6 col-sm-6 col-md-4 business_hr">
                                            <select name="" id="day">
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-xs-6 col-sm-6 col-md-4 business_hr">
                                            <select name="" id="start_time" class="form-control start_time">
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04.00 AM">04.00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM" selected>09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04.00 PM">04.00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-xs-6 col-sm-6 col-md-4 business_hr">
                                            <select name="" id="end_time" class="form-control end_time">
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04.00 AM">04.00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04.00 PM">04.00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM" selected>05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-xs-6 col-sm-6 col-md-4 business_hr">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="24hr" id="tfhr">&nbsp; 24 hours
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-xs-6 col-sm-6 col-md-4 business_hr">
                                            <div class="add_div">
                                                <i class="fa fa-plus" id="addButton"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">SOCIAL MEDIA</h4>
                            </div>
                            <div class="row busin_row">
                                <div class="col-12">
                                    <div class="social_display" id="social_display">
                                        <?php
                                        if (!empty($social_media) && isset($social_media) && $social_media !== 'N/A') {
                                            for ($i = 0; $i < count($social_media); $i++) {
                                                $val1 = $social_media[$i];
                                                $val2 = $social_link[$i];
                                                echo '<div class="day_div">
                                                <strong><p><input class="form-control" id="pwd" name="social_media[]" value="' . $val1 . '" readonly></p></strong>
                                                <p>
                                                <input class="form-control" id="pwd" name="social_link[]" value="' . $val2 . '" readonly></p>
                                                </p>
                                            </div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-2 business_hr">
                                    <label for="" class="vendor-form-label">Social Media</label>
                                </div>
                                <div class="col-md-3 business_hr">
                                    <select name="" id="media_type">
                                        <option value="">Please Select Social</option>
                                        <option value="FaceBook">FaceBook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Pinterest">Pinterest</option>
                                    </select>
                                </div>
                                <div class="col-md-3 business_hr">
                                    <input type="url" name="" id="social_link" class="form-control" placeholder="Please add social link">
                                </div>
                                <div class="col-1 business_hr">
                                    <div class="add_div">
                                        <i class="fa fa-plus" id="addSocialButton"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-uppercase primary-form-heading">MORE INFO</h4>
                            </div>
                            <div class="common_about">
                                <div class="col-12 form-group">
                                    <label for="about vendor-form-label">About</label>
                                    <textarea name="about" id="about" class="form-control" cols="30" rows="10" required><?php echo isset($about) ? $about : '' ?></textarea>
                                </div>
                            </div>


                            <!-- venue  -->
                            <?php
                            if ($category == 1) {
                                $price_per_plate = $val['price_per_plate'];

                                $general_cap = explode('-', $val['general_cap']);
                                $gcs = $general_cap[0];
                                $gce = $general_cap[1];

                                $event_spaces = array();
                                if (isset($val['event_spaces'])) {
                                    $event_spaces =  explode(',', $val['event_spaces']);
                                }
                                $inhouse_vendor = array();
                                if (isset($val['inhouse_vendor'])) {
                                    $inhouse_vendor =  explode(',', $val['inhouse_vendor']);
                                }
                                $external_vendor = array();
                                if (isset($val['external_vendor'])) {
                                    $external_vendor =  explode(',', $val['external_vendor']);
                                }
                                $cuisines = array();
                                if (isset($val['cuisines'])) {
                                    $cuisines =  explode(',', $val['cuisines']);
                                }
                                $service_avail = array();
                                if (isset($val['service_avail'])) {
                                    $service_avail =  explode(',', $val['service_avail']);
                                }

                                $veg_menu = array();
                                if (isset($val['veg_menu_range'])) {
                                    $veg_menu = explode('-', $val['veg_menu_range']);
                                    $vegMin = $veg_menu[0];
                                    $vegMax = $veg_menu[1];
                                }

                                $Nonveg_menu = array();
                                if (isset($val['non_veg_range'])) {
                                    $Nonveg_menu = explode('-', $val['non_veg_range']);
                                    $NonvegMin = $Nonveg_menu[0];
                                    $NonvegMax = $Nonveg_menu[1];
                                }

                            ?>
                                <div class="venue_sec vendor_cat_inputs" id="venue_sec">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="service_offer vendor-form-label">Service Offered</label>
                                            <textarea name="venue_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                        <!-- <div class="col-md-4 form-group">
                                    <label for="" class="vendor-form-label">Price per Plate</label>
                                </div> -->
                                        <div class="col-md-12 form-group">
                                            <label for="price_per_plate" class="form-label vendor-form-label">Price per Plate: </label>
                                            <input type="text" class="form-control" id="price_per_plate" placeholder="Price Per plate" name="price_per_plate" value="<?php echo isset($price_per_plate) ? $price_per_plate : '' ?>">
                                        </div>
                                        <!-- <div class="col-md-4 form-group">
                                    <label for="price_per_plate_max" class="form-label vendor-form-label">Price To</label>
                                    <input type="text" class="form-control" id="price_per_plate_max" placeholder="Price To" name="price_per_plate_max">
                                </div> -->

                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">General Capacity: </label>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="general_cap" class="form-label vendor-form-label">Min Guest Allowed</label>
                                            <input type="text" class="form-control" id="general_cap" placeholder="Min Guest Allowed" name="general_cap_min" value="<?php echo isset($gcs) ? $gcs : '' ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="general_cap_max" class="form-label vendor-form-label">Max Guest Allowed</label>
                                            <input type="text" class="form-control" id="general_cap_max" placeholder="Max Guest Allowed" name="general_cap_max" value="<?php echo isset($gce) ? $gce : '' ?>">
                                        </div>
                                        <div class="col-6">
                                            <label for="fac_cap" class="form-label vendor-form-label">Facilities and Capacity</label>
                                            <input type="text" class="form-control" id="fac_cap" placeholder="Facilities and capacity" name="fac_cap" value="<?php echo isset($val['fac_cap']) ? $val['fac_cap'] : '' ?>">
                                        </div>
                                        <div class="col-6">
                                            <label for="fn_size_allow" class="form-label vendor-form-label">Function Size Allowed</label>
                                            <select name="fn_size_allow" class="form-control" id="fn_size_allow">
                                                <option value="">Select Function size</option>
                                                <option value="0-99" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '0-99') ? 'selected' : '' ?>>0-99</option>
                                                <option value="100-199" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '100-199') ? 'selected' : '' ?>>100-199</option>
                                                <option value="200-299" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '200-299') ? 'selected' : '' ?>>200-299</option>
                                                <option value="300-399" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '300-399') ? 'selected' : '' ?>>300-399</option>
                                                <option value="400-499" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '400-499') ? 'selected' : '' ?>>400-499</option>
                                                <option value="500-599" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '500-599') ? 'selected' : '' ?>>500-599</option>
                                                <option value="600-699" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '600-699') ? 'selected' : '' ?>>600-699</option>
                                                <option value="700-799" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '700-799') ? 'selected' : '' ?>>700-799</option>
                                                <option value="800 and more" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '800 and more') ? 'selected' : '' ?>>800 and more</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="rental_price" class="form-label vendor-form-label">Rental Price</label>
                                            <input type="text" class="form-control" id="rental_price" placeholder="Rental Price" name="rental_price" value="<?php echo isset($val['rental_price']) ? $val['rental_price'] : '' ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="alcohol_policy" class="form-label vendor-form-label">Alcohol Policy Permitted</label>
                                            <select name="alcohol_policy" class="form-control" id="alcohol_policy">
                                                <option value="Yes" <?php echo (isset($val['alcohol_policy']) && $val['alcohol_policy'] == 'Yes') ? 'selected' : '' ?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['alcohol_policy']) && $val['alcohol_policy'] == 'No') ? 'selected' : '' ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 my-2">
                                            <label for="">Event Spaces</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Banquet Halls" <?php echo in_array('Banquet Halls', $event_spaces) ? 'checked' : '' ?> Banquet Halls </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Lawns & Farmhouse" <?php echo in_array('Lawns & Farmhouse', $event_spaces) ? 'checked' : '' ?> Lawns & Farmhouse </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Resorts" <?php echo in_array('Resorts', $event_spaces) ? 'checked' : '' ?> Resorts </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Hotels" <?php echo in_array('Hotels', $event_spaces) ? 'checked' : '' ?> Hotels </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Destination Feels" <?php echo in_array('Destination Feels', $event_spaces) ? 'checked' : '' ?> Destination Feels </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Marriage Garden" <?php echo in_array('Marriage Garden', $event_spaces) ? 'checked' : '' ?> Marriage Garden </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Palace/ Fort" <?php echo in_array('Palace/ Fort', $event_spaces) ? 'checked' : '' ?> Palace/ Fort </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="space_avail" class="form-label vendor-form-label">Number of Spaces Available</label>
                                            <input type="text" class="form-control" id="space_avail" placeholder="Number of Spaces Available" name="space_avail" value="<?php echo isset($val['space_avail']) ? $val['space_avail'] : '' ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="guest_accom" class="form-label vendor-form-label">Guest Accommodation (People)</label>
                                            <input type="text" class="form-control" id="guest_accom" placeholder="Guest Accommodation (People)" name="guest_accom" value="<?php echo isset($val['guest_accom']) ? $val['guest_accom'] : '' ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="no_room" class="form-label vendor-form-label">Number Of Rooms</label>
                                            <input type="text" class="form-control" id="no_room" placeholder="Number Of Rooms" name="no_room" value="<?php echo isset($val['no_room']) ? $val['no_room'] : '' ?>">
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="inhouse_vendor vendor-form-label">Inhouse Vendors Available</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="inhouse_vendor[]" value="Catering" <?php echo in_array('Catering', $inhouse_vendor) ? 'checked' : '' ?>> Catering
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="inhouse_vendor[]" value="Decorators" <?php echo in_array('Decorators', $inhouse_vendor) ? 'checked' : '' ?>>Decorators
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="inhouse_vendor[]" value="DJ" <?php echo in_array('DJ', $inhouse_vendor) ? 'checked' : '' ?>> DJ
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="inhouse_vendor[]" value="Others" <?php echo in_array('Others', $inhouse_vendor) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="external_vendor">External vendors Allowed</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="external_vendor[]" value="Catering" <?php echo in_array('Catering', $external_vendor) ? 'checked' : '' ?>> Catering
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="external_vendor[]" value="Decorators" <?php echo in_array('Decorators', $external_vendor) ? 'checked' : '' ?>>Decorators
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="external_vendor[]" value="DJ" <?php echo in_array('DJ', $external_vendor) ? 'checked' : '' ?>> DJ
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="external_vendor[]" value="Others" <?php echo in_array('Others', $external_vendor) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="Cuisines">Cuisines</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="North Indian / Mughlai" <?php echo in_array('North Indian / Mughlai', $cuisines) ? 'checked' : '' ?>> North Indian / Mughlai
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="South Indian" <?php echo in_array('South Indian', $cuisines) ? 'checked' : '' ?>> South Indian
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Chinese/Thai/Oriental" <?php echo in_array('Chinese/Thai/Oriental', $cuisines) ? 'checked' : '' ?>> Chinese / Thai / Oriental
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Italian / European / Continental" <?php echo in_array('Italian / European / Continental', $cuisines) ? 'checked' : '' ?>> Italian / European / Continental
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Garlic Free / Onion Free" <?php echo in_array('Garlic Free / Onion Free', $cuisines) ? 'checked' : '' ?>> Garlic Free / Onion Free
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Live Food Counters" <?php echo in_array('Live Food Counters', $cuisines) ? 'checked' : '' ?>> Live Food Counters
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Chaat & Indian Street Food" <?php echo in_array('Chaat & Indian Street Food', $cuisines) ? 'checked' : '' ?>> Chaat & Indian Street Food
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Drinks (Non-Alcoholic)" <?php echo in_array('Drinks (Non-Alcoholic)', $cuisines) ? 'checked' : '' ?>> Drinks (Non-Alcoholic)
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Seafood" <?php echo in_array('Seafood', $cuisines) ? 'checked' : '' ?>> Seafood
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Others" <?php echo in_array('Others', $cuisines) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group mt-2">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Veg Menu range (250Pax)</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="veg_menu_range_start" class="form-label vendor-form-label">Min Price</label>
                                                    <input type="text" class="form-control" id="veg_menu_range_start" placeholder="Min Price" name="veg_menu_range_start" value="<?php echo isset($vegMin) ? $vegMin : '' ?>">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="veg_menu_range_end" class="form-label vendor-form-label">Max Price</label>
                                                    <input type="text" class="form-control" id="veg_menu_range_end" placeholder="Max Price" value="<?php echo isset($vegMax) ? $vegMax : '' ?>" name="veg_menu_range_end">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Non Veg Menu range (250Pax)</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="non_veg_range_start" class="form-label vendor-form-label">Min Price</label>
                                                    <input type="text" class="form-control" id="non_veg_range_start" placeholder="Min Price" value="<?php echo isset($NonvegMin) ? $NonvegMin : '' ?>" name="non_veg_range_start">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="non_veg_range_end" class="form-label vendor-form-label">Max Price</label>
                                                    <input type="text" class="form-control" id="non_veg_range_end" placeholder="Max Price" value="<?php echo isset($NonvegMax) ? $NonvegMax : '' ?>" name="non_veg_range_end">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <div class="card-header">
                                                <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Multiple Event Spaces Available" <?php echo in_array('Multiple Event Spaces Available', $val['features']) ? 'checked' : '' ?>> Multiple Event Spaces Available
                                            </label>
                                        </div>
                                        <div class="col-md-3"><label>
                                                <input type="checkbox" name="venue_features[]" value="Varied Size Events Possible" <?php echo in_array('Varied Size Events Possible', $val['features']) ? 'checked' : '' ?>> Varied Size Events Possible
                                            </label></div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Indoor & Outdoor Spaces Available" <?php echo in_array('Indoor & Outdoor Spaces Available', $val['features']) ? 'checked' : '' ?>> Indoor & Outdoor Spaces Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Indoor Spaces Only" <?php echo in_array('Indoor Spaces Only', $val['features']) ? 'checked' : '' ?>> Indoor Spaces Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Outdoor Spaces Only" <?php echo in_array('Outdoor Spaces Only', $val['features']) ? 'checked' : '' ?>> Outdoor Spaces Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse Catering Only" <?php echo in_array('Inhouse Catering Only', $val['features']) ? 'checked' : '' ?>> Inhouse Catering Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse and External Catering Allowed" <?php echo in_array('Inhouse and External Catering Allowed', $val['features']) ? 'checked' : '' ?>> Inhouse and External Catering Allowed
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="External Catering Only" <?php echo in_array('External Catering Only', $val['features']) ? 'checked' : '' ?>> External Catering Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse Decorators Only" <?php echo in_array('Inhouse Decorators Only', $val['features']) ? 'checked' : '' ?>> Inhouse Decorators Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse and External Decorators Allowed" <?php echo in_array('Inhouse and External Decorators Allowed', $val['features']) ? 'checked' : '' ?>> Inhouse and External Decorators Allowed
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="External Decorators Only" <?php echo in_array('External Decorators Only', $val['features']) ? 'checked' : '' ?>> External Decorators Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse DJ Only" <?php echo in_array('Inhouse DJ Only', $val['features']) ? 'checked' : '' ?>> Inhouse DJ Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Inhouse and External DJ Allowed" <?php echo in_array('Inhouse and External DJ Allowed', $val['features']) ? 'checked' : '' ?>> Inhouse and External DJ Allowed
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="External DJ Only" <?php echo in_array('External DJ Only', $val['features']) ? 'checked' : '' ?>> External DJ Only
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Multi-Cuisine Expertise" <?php echo in_array('Multi-Cuisine Expertise', $val['features']) ? 'checked' : '' ?>> Multi-Cuisine Expertise
                                            </label><br>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Alcohol Allowed" <?php echo in_array('Alcohol Allowed', $val['features']) ? 'checked' : '' ?>> Alcohol Allowed
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Alcohol Not Allowed" <?php echo in_array('Alcohol Not Allowed', $val['features']) ? 'checked' : '' ?>> Alcohol Not Allowed
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Bridal/Groom Suite Not Available" <?php echo in_array('Bridal/Groom Suite Not Available', $val['features']) ? 'checked' : '' ?>> Bridal/Groom Suite Not Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Bridal/Groom Suite Available" <?php echo in_array('Bridal/Groom Suite Available', $val['features']) ? 'checked' : '' ?>> Bridal/Groom Suite Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Guest Accommodation Avaiable" <?php echo in_array('Guest Accommodation Avaiable', $val['features']) ? 'checked' : '' ?>> Guest Accommodation Avaiable
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Guest Accommodation Not Avaiable" <?php echo in_array('Guest Accommodation Not Avaiable', $val['features']) ? 'checked' : '' ?>> Guest Accommodation Not Avaiable
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Has Swimming Pool" <?php echo in_array('Has Swimming Pool', $val['features']) ? 'checked' : '' ?>> Has Swimming Pool
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Has Inhouse Restaurant" <?php echo in_array('Has Inhouse Restaurant', $val['features']) ? 'checked' : '' ?>> Has Inhouse Restaurant
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Ample Parking Space facility" <?php echo in_array('Ample Parking Space facility', $val['features']) ? 'checked' : '' ?>> Ample Parking Space facility
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Valet Parking Facility Available" <?php echo in_array('Valet Parking Facility Available', $val['features']) ? 'checked' : '' ?>> Valet Parking Facility Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Has Gym Facilities" <?php echo in_array('Has Gym Facilities', $val['features']) ? 'checked' : '' ?>> Has Gym Facilities
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Has Bar and NightClub Area" <?php echo in_array('Has Bar and NightClub Area', $val['features']) ? 'checked' : '' ?>> Has Bar and NightClub Area
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Transporation Services Available" <?php echo in_array('Transporation Services Available', $val['features']) ? 'checked' : '' ?>> Transporation Services Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Back-Up Plan (in-case of rain) Available" <?php echo in_array('Back-Up Plan (in-case of rain) Available', $val['features']) ? 'checked' : '' ?>> Back-Up Plan (in-case of rain) Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Sound System facilities Available" <?php echo in_array('Sound System facilities Available', $val['features']) ? 'checked' : '' ?>> Sound System facilities Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Wifi Services Available" <?php echo in_array('Wifi Services Available', $val['features']) ? 'checked' : '' ?>> Wifi Services Available
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Provides Customised Decor Lighting Facilities" <?php echo in_array('Provides Customised Decor Lighting Facilities', $val['features']) ? 'checked' : '' ?>> Provides Customised Décor Lighting Facilities
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="checkbox" name="venue_features[]" value="Multiple Payment Options Accepted" <?php echo in_array('Multiple Payment Options Accepted', $val['features']) ? 'checked' : '' ?>> Multiple Payment Options Accepted
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 2) {
                            ?>
                                <!-- Bridal wear  -->
                                <div class="bridal_sec vendor_cat_inputs" id="bridal_sec">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                            <textarea name="bridal_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="type" class="vendor-form-label">Shop Type</label>
                                            <select name="shop_types" class="form-control" id="type">
                                                <option value="">Select shop Type</option>
                                                <option value="Boutique" <?php echo ($shop_type == 'Boutique' ? 'selected' : '') ?>>Boutique</option>
                                                <option value="Retail Store" <?php echo ($shop_type == 'Retail Store' ? 'selected' : '') ?>>Retail Store</option>
                                                <option value="Others" <?php echo ($shop_type == 'Others' ? 'selected' : '') ?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="design" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="bridal_start_price" value="<?php echo isset($start_price) ? $start_price : '' ?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="app_req" class="vendor-form-label">Appointment Required</label>
                                            <select name="app_req" class="form-control" id="app_req">
                                                <option value="">Appointment Required</option>
                                                <option value="1" <?php echo ($app_req == '1') ? 'Selected' : '' ?>>Yes</option>
                                                <option value="0" <?php echo ($app_req == '0') ? 'Selected' : '' ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="wear_price_start" class="form-label">Min Price Range </label>
                                                    <input type="number" class="form-control" id="wear_price_start" placeholder="Min Price Range" name="wear_price_start">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="wear_price_end" class="form-label">Max Price Range </label>
                                                    <input type="number" class="form-control" id="wear_price_end" placeholder="Max Price Range" name="wear_price_end">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                            <!-- <div class="row"> -->
                                            <div class="col-12 form-group">
                                                <label for="exp_since" class="form-label">Experience Since</label>
                                                <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                            </div>
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Occassions</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Engagement" <?php echo (in_array('Engagement', $occations)) ? 'checked' : '' ?>> Engagement
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Wedding" <?php echo (in_array('Wedding', $occations)) ? 'checked' : '' ?>> Wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Haldi" <?php echo (in_array('Haldi', $occations)) ? 'checked' : '' ?>> Haldi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Mehendi" <?php echo (in_array('Mehendi', $occations)) ? 'checked' : '' ?>> Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Sangeet" <?php echo (in_array('Sangeet', $occations)) ? 'checked' : '' ?>> Sangeet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Reception" <?php echo (in_array('Reception', $occations)) ? 'checked' : '' ?>> Reception
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Cocktail" <?php echo (in_array('Cocktail', $occations)) ? 'checked' : '' ?>> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Others" <?php echo (in_array('Others', $occations)) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Fabrics used</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Cotton" <?php echo (in_array('Cotton', $fabric_used)) ? 'checked' : '' ?>> Cotton
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Silk" <?php echo (in_array('Silk', $fabric_used)) ? 'checked' : '' ?>> Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Satin" <?php echo (in_array('Satin', $fabric_used)) ? 'checked' : '' ?>> Satin
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Raw silk" <?php echo (in_array('silk', $fabric_used)) ? 'checked' : '' ?>> Raw silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Net fabric" <?php echo (in_array('fabric', $fabric_used)) ? 'checked' : '' ?>> Net fabric
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Velvet" <?php echo (in_array('Velvet', $fabric_used)) ? 'checked' : '' ?>> Velvet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Georgette" <?php echo (in_array('Georgette', $fabric_used)) ? 'checked' : '' ?>> Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Jacquard" <?php echo (in_array('Jacquard', $fabric_used)) ? 'checked' : '' ?>> Jacquard
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Organza" <?php echo (in_array('Organza', $fabric_used)) ? 'checked' : '' ?>> Organza
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Gaji" <?php echo (in_array('Gaji', $fabric_used)) ? 'checked' : '' ?>> Gaji
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Crepe" <?php echo (in_array('Crepe', $fabric_used)) ? 'checked' : '' ?>> Crepe
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Chanderi" <?php echo (in_array('Chanderi', $fabric_used)) ? 'checked' : '' ?>> Chanderi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Faux Georgette" <?php echo (in_array('Faux Georgette', $fabric_used)) ? 'checked' : '' ?>> Faux Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Pure Georgette" <?php echo (in_array('Pure Georgette', $fabric_used)) ? 'checked' : '' ?>> Pure Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Viscose Georgette" <?php echo (in_array('Viscose Georgette', $fabric_used)) ? 'checked' : '' ?>> Viscose Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Tussar Silk" <?php echo (in_array('Tussar Silk', $fabric_used)) ? 'checked' : '' ?>> Tussar Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Ghicha Silk" <?php echo (in_array('Ghicha Silk', $fabric_used)) ? 'checked' : '' ?>> Ghicha Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Tissue" <?php echo (in_array('Tissue', $fabric_used)) ? 'checked' : '' ?>> Tissue
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Modal" <?php echo (in_array('Modal', $fabric_used)) ? 'checked' : '' ?>> Modal
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Mulmul" <?php echo (in_array('Mulmul', $fabric_used)) ? 'checked' : '' ?>> Mulmul
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Rayon" <?php echo (in_array('Rayon', $fabric_used)) ? 'checked' : '' ?>> Rayon
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Product Types</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Lehenga" <?php echo (in_array('Bridal Lehenga', $prod_type)) ? 'checked' : '' ?>> Bridal Lehenga
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Saree" <?php echo (in_array('Bridal Saree', $prod_type)) ? 'checked' : '' ?>> Bridal Saree
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Cocktail Dresses" <?php echo (in_array('Cocktail Dresses', $prod_type)) ? 'checked' : '' ?>> Cocktail Dresses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Indo-western Dresses" <?php echo (in_array('Indo-western Dresses', $prod_type)) ? 'checked' : '' ?>> Indo-western Dresses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Dress fabrics" <?php echo (in_array('Dress fabrics', $prod_type)) ? 'checked' : '' ?>> Dress fabrics
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Suits" <?php echo (in_array('Bridal Suits', $prod_type)) ? 'checked' : '' ?>> Bridal Suits
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Gowns" <?php echo (in_array('Gowns', $prod_type)) ? 'checked' : '' ?>> Gowns
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="prod_type[]" placeholder="Other" <?php echo (in_array('Other', $prod_type)) ? 'checked' : '' ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Embellishments</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Gota patti" <?php echo (in_array('Gota patti', $emblishments)) ? 'checked' : '' ?>> Gota patti
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Mirror work" <?php echo (in_array('Mirror work', $emblishments)) ? 'checked' : '' ?>> Mirror work
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Zardosi" <?php echo (in_array('Zardosi', $emblishments)) ? 'checked' : '' ?>> Zardosi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Embellished" <?php echo (in_array('Embellished', $emblishments)) ? 'checked' : '' ?>> Embellished
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Benarasi" <?php echo (in_array('Benarasi', $emblishments)) ? 'checked' : '' ?>> Benarasi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Threadwork" <?php echo (in_array('Threadwork', $emblishments)) ? 'checked' : '' ?>> Threadwork
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Brocade" <?php echo (in_array('Brocade', $emblishments)) ? 'checked' : '' ?>> Brocade
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Embroidery" <?php echo (in_array('Embroidery', $emblishments)) ? 'checked' : '' ?>> Embroidery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kanjivaram" <?php echo (in_array('Kanjivaram', $emblishments)) ? 'checked' : '' ?>> Kanjivaram
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Zari" <?php echo (in_array('Zari', $emblishments)) ? 'checked' : '' ?>> Zari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Sequins" <?php echo (in_array('Sequins', $emblishments)) ? 'checked' : '' ?>> Sequins
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Pearls" <?php echo (in_array('Pearls', $emblishments)) ? 'checked' : '' ?>> Pearls
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kardana" <?php echo (in_array('Kardana', $emblishments)) ? 'checked' : '' ?>> Kardana
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Chikankari" <?php echo (in_array('Chikankari', $emblishments)) ? 'checked' : '' ?>> Chikankari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Nakshi" <?php echo (in_array('Nakshi', $emblishments)) ? 'checked' : '' ?>> Nakshi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kundan" <?php echo (in_array('Kundan', $emblishments)) ? 'checked' : '' ?>> Kundan
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Dabka" <?php echo (in_array('Dabka', $emblishments)) ? 'checked' : '' ?>> Dabka
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Muqaish" <?php echo (in_array('Muqaish', $emblishments)) ? 'checked' : '' ?>> Muqaish
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kamdani" <?php echo (in_array('Kamdani', $emblishments)) ? 'checked' : '' ?>> Kamdani
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="emblishments[]" placeholder="Others" <?php echo (in_array('Others', $emblishments)) ? 'checked' : '' ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Collection Type</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Mens" <?php echo (in_array('Mens', $collection_type)) ? 'checked' : '' ?>> Mens
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Womens" <?php echo (in_array('Womens', $collection_type)) ? 'checked' : '' ?>> Womens
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Kids" <?php echo (in_array('Kids', $collection_type)) ? 'checked' : '' ?>> Kids
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Design Styles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Flare" <?php echo (in_array('Flare', $design_style)) ? 'checked' : '' ?>> Flare
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Double Flare" <?php echo (in_array('Double Flare', $design_style)) ? 'checked' : '' ?>> Double Flare
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Mermaid" <?php echo (in_array('Mermaid', $design_style)) ? 'checked' : '' ?>> Mermaid
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="A-line" <?php echo (in_array('line', $design_style)) ? 'checked' : '' ?>> A-line
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Printed Simple" <?php echo (in_array('Printed Simple', $design_style)) ? 'checked' : '' ?>> Printed Simple
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Sharara" <?php echo (in_array('Sharara', $design_style)) ? 'checked' : '' ?>> Sharara
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Trail" <?php echo (in_array('Trail', $design_style)) ? 'checked' : '' ?>> Trail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Panelled" <?php echo (in_array('Panelled', $design_style)) ? 'checked' : '' ?>> Panelled
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="design_style[]" placeholder="Other" <?php echo (in_array('Other', $design_style)) ? 'checked' : '' ?>>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Customising Available</label>
                                            <select name="customize_avail" class="form-control">
                                                <option value="Yes" <?php echo ($customize_avail == 'Yes') ? 'selected' : '' ?>>Yes</option>
                                                <option value="No" <?php echo ($customize_avail == 'No') ? 'selected' : '' ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Lead Time</label>
                                            <select name="lead_time" class="form-control">
                                                <option value="Within 1 Week" <?php echo ($lead_time == 'Within 1 Week') ? 'selected' : '' ?>>Within 1 Week</option>
                                                <option value="7-15 days" <?php echo ($lead_time == '7-15 days') ? 'selected' : '' ?>>7-15 days</option>
                                                <option value="15-30 Days" <?php echo ($lead_time == '15-30 Days') ? 'selected' : '' ?>>15-30 Days</option>
                                                <option value="30-45 days" <?php echo ($lead_time == '30-45 days') ? 'selected' : '' ?>>30-45 days</option>
                                                <option value="45-60 days" <?php echo ($lead_time == '45-60 days') ? 'selected' : '' ?>>45-60 days</option>
                                                <option value="More than 60 days" <?php echo ($lead_time == 'More than 60 days') ? 'selected' : '' ?>>More than 60 days</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Ship Outstation</label>
                                            <select name="ship_out" class="form-control">
                                                <option value="Yes" <?php echo ($ship_out == 'Yes') ? 'selected' : '' ?>>Yes</option>
                                                <option value="No" <?php echo ($ship_out == 'No') ? 'selected' : '' ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <div class="card-header">
                                                <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group exp">
                                            <label for="app_req" class="vendor-form-label">Experience</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="1+ years of Experience" <?php echo (in_array('1+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>1 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="5+ years of Experience" <?php echo (in_array('5+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>5 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="10+ years of Experience" <?php echo (in_array('10+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>10 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="15+ years of Experience" <?php echo (in_array('15+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>15 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="20+ years of Experience" <?php echo (in_array('20+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>20 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="30+ years of Experience" <?php echo (in_array('30+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>30 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="50+ years of Experience" <?php echo (in_array('50+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>50 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="100+ years of Experience" <?php echo (in_array('100+ years of Experience', $val['no_of_yrs'])) ? 'selected' : '' ?>>100 years+ of Experience</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Appointment Required to visit the shop" <?php echo (in_array('Appointment Required to visit the shop', $val['features'])) ? 'checked' : '' ?>>
                                                        Appointment Required to visit the shop
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Multiple Payment Options Accepted" <?php echo (in_array('Multiple Payment Options Accepted', $val['features'])) ? 'checked' : '' ?>>
                                                        Multiple Payment Options Accepted
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Multi-Occasion Attires Available" <?php echo (in_array('Multi-Occasion Attires Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Multi-Occasion Attires Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Multiple Fabric Options Available" <?php echo (in_array('Multiple Fabric Options Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Multiple Fabric Options Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Customization Services Available" <?php echo (in_array('Customization Services Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Customization Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Lightning Fast Delivery Time" <?php echo (in_array('Lightning Fast Delivery Time', $val['features'])) ? 'checked' : '' ?>>
                                                        Lightning Fast Delivery Time
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Quick Delivery Time" <?php echo (in_array('Quick Delivery Time', $val['features'])) ? 'checked' : '' ?>>
                                                        Quick Delivery Time
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Standard Delivery Time" <?php echo (in_array('Standard Delivery Time', $val['features'])) ? 'checked' : '' ?>>
                                                        Standard Delivery Time
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Ships Outstation" <?php echo (in_array('Ships Outstation', $val['features'])) ? 'checked' : '' ?>>
                                                        Ships Outstation
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Does not Ship Outstation" <?php echo (in_array('Does not Ship Outstation', $val['features'])) ? 'checked' : '' ?>>
                                                        Does not Ship Outstation
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Multiple Handwork/Designs/Prints Available" <?php echo (in_array('Multiple Handwork/Designs/Prints Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Multiple Handwork/Designs/Prints Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Men's Wear Also Available" <?php echo (in_array('Men\'s Wear Also Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Men's Wear Also Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Men's and Kids Wear Also Available" <?php echo (in_array('Men\'s and Kids Wear Also Available', $val['features'])) ? 'checked' : '' ?>>
                                                        Men's and Kids Wear Also Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Boutique type Store experience" <?php echo (in_array('Boutique type Store experience', $val['features'])) ? 'checked' : '' ?>>
                                                        Boutique type Store experience
                                                    </label>
                                                </div>
                                                <label>
                                                    <input type="checkbox" name="wear_feature[]" value="Retail Store type Experience" <?php echo (in_array('Retail Store type Experience', $val['features'])) ? 'checked' : '' ?>>
                                                    Retail Store type Experience
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Styling Services Available" <?php echo (in_array('Styling Services Available', $val['features'])) ? 'checked' : '' ?>> Styling Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_featurey[]" value="Trial Availability Possible" <?php echo (in_array('Trial Availability Possible', $val['features'])) ? 'checked' : '' ?>> Trial Availability Possible
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Alteration Services Available" <?php echo (in_array('Alteration Services Available', $val['features'])) ? 'checked' : '' ?>> Alteration Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Rental Options Available" <?php echo (in_array('Rental Options Available', $val['features'])) ? 'checked' : '' ?>> Rental Options Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="Bridal Accessories Available" <?php echo (in_array('Bridal Accessories Available', $val['features'])) ? 'checked' : '' ?>> Bridal Accessories Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="wear_feature[]" value="International Shipping Available" <?php echo (in_array('International Shipping Available', $val['features'])) ? 'checked' : '' ?>> International Shipping Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 3) {
                                $prod_type = array();
                                if (isset($val['prod_type'])) {
                                    $prod_type =  explode(',', $val['prod_type']);
                                }

                                $occation = array();
                                if (isset($val['occation'])) {
                                    $occation =  explode(',', $val['occation']);
                                }

                                $col_type = array();
                                if (isset($val['col_type'])) {
                                    $col_type =  explode(',', $val['col_type']);
                                }

                                $design_type = array();
                                if (isset($val['design_type'])) {
                                    $design_type =  explode(',', $val['design_type']);
                                }

                                $print_opt = array();
                                if (isset($val['print_opt'])) {
                                    $print_opt =  explode(',', $val['print_opt']);
                                }

                                $fabric = array();
                                if (isset($val['fabric'])) {
                                    $fabric =  explode(',', $val['fabric']);
                                }

                                $ser_avail = array();
                                if (isset($val['ser_avail'])) {
                                    $ser_avail =  explode(',', $val['ser_avail']);
                                }
                            ?>
                                <!-- groom wear  -->
                                <div class="groom_sec vendor_cat_inputs" id="groom_sec">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                            <textarea name="groom_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="shop_type" class="vendor-form-label">Shop Type</label>
                                            <select name="groom_shop_type" class="form-control" id="shop_type">
                                                <option value="">Select shop type</option>
                                                <option value="Boutique">Boutique</option>
                                                <option value="Retail Store">Retail Store</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="start_price" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="groom_start_price">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ap_require vendor-form-label">Appointment Required</label>
                                            <select name="ap_require" class="form-control" id="ap_require">
                                                <option value="0">Appointment Required</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group exp">
                                            <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                            <div class="col-12 form-group">
                                                <label for="exp_since" class="form-label">Experience Since</label>
                                                <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                            </div>
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="occation" class="vendor-form-label">Occassions</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Engagement"> Engagement
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Wedding"> Wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Haldi"> Haldi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Mehendi"> Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Sangeet"> Sangeet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Reception"> Reception
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Cocktail"> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Others"> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="prod_type" class="vendor-form-label">Product Types</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Sherwani"> Sherwani
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Suits & tuxedos"> Suits & tuxedos
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bandhgala"> Bandhgala
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Indo-western"> Indo-western
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Kurta Pyjamas"> Kurta Pyjamas
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Waistcoat sets"> Waistcoat sets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Designer wear"> Designer wear
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Custom Made Wear"> Custom Made Wear
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Jackets"> Jackets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Jodhpuri"> Jodhpuri
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="prod_type[]" placeholder="Other">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="col_type" class="vendor-form-label">Collection Type</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Mens"> Men
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Womens"> Women
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Kids"> Kid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="design_type" class="vendor-form-label">Design Styles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Indo-western"> Indo-western
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Jodhpuri"> Jodhpuri
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Angrakha"> Angrakha
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Chipkan style"> Chipkan style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Achkan"> Achkan
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Jacket style"> Jacket style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Printed modern"> Printed modern
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Anarkali style"> Anarkali style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Nawabi"> Nawabi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Designer"> Designer
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Assymetrical"> Assymetrical
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Bandi"> Bandi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Cocktail"> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="design_type[]" placeholder="Other">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="custom_order" class="vendor-form-label">Custom order</label>
                                            <select name="custom_order" class="form-control" id="custom_order">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="lead_time">Lead Time</label>
                                            <select name="lead_time" class="form-control" id="lead_time">
                                                <option value="Within 1 Week">Within 1 Week</option>
                                                <option value="7-15 days">7-15 days</option>
                                                <option value="15-30 Days">15-30 Days</option>
                                                <option value="30-45 days">30-45 days</option>
                                                <option value="45-60 days">45-60 days</option>
                                                <option value="More than 60 days">More than 60 days</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ship_out" class="vendor-form-label">Ship Outstation</label>
                                            <select name="ship_out" class="form-control" id="ship_out">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="print_opt" class="vendor-form-label">Print/Handwork</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Cutbeads"> Cutbeads
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Block print"> Block print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Zari"> Zari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Digital print"> Digital print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Embroidery"> Embroidery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Hand work"> Hand work
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Floral print"> Floral print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Zardosi"> Zardosi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Others"> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="fabric" class="vendor-form-label">Fabrics</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Silk">Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Satin">Satin

                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Others"> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-5">
                                            <div class="card-header">
                                                <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group exp">
                                            <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                                </div>

                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Appointment Required to visit the shop">
                                                    Appointment Required
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Multiple Payment Options Accepted">
                                                    Multiple Payment Options
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Multi-Occasion Attires Available">
                                                    Multi-Occasion Attires
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Multiple Fabric Options Available">
                                                    Multiple Fabric Options
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Customization Services Available">
                                                    Customization Services
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Lightning Fast Delivery Time">
                                                    Lightning Fast Delivery
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Quick Delivery Time">
                                                    Quick Delivery
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Standard Delivery Time">
                                                    Standard Delivery
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Ships Outstation">
                                                    Ships Outstation
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Does not Ship Outstation">
                                                    Does not Ship Outstation
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Multiple Handwork/Designs/Prints Available">
                                                    Multiple Handwork/Designs/Prints
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Men's Wear Also Available">
                                                    Men's Wear
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Men's and Kids Wear Also Available">
                                                    Men's and Kids Wear
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Boutique type Store experience">
                                                    Boutique Store Experience
                                                </label>

                                                <label class="col-md-3">
                                                    <input type="checkbox" name="groom_feature[]" value="Retail Store type Experience">
                                                    Retail Store Experience
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="Styling Services Available"> Styling Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="Trial Availability Possible"> Trial Availability Possible
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="Alteration Services Available"> Alteration Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="Rental Options Available"> Rental Options Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="Bridal Accessories Available"> Bridal Accessories Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_feature[]" value="International Shipping Available"> International Shipping Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <!-- Photography  -->
                            <div class="photo_sec vendor_cat_inputs" id="photo_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="photo_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label vendor-form-label">Starting Price Per Day</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Starting Price Per Day" name="photo_start_price">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="package1" class="form-label vendor-form-label">Package 1: 1-day pre-wedding photoshoot</label>
                                        <input type="text" class="form-control" id="package1" placeholder="Price for 1-day pre-wedding photoshoot" name="photo_package1">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="package2" class="form-label vendor-form-label">Package 2: Price for 2 days wedding photoshoot</label>
                                        <input type="text" class="form-control" id="package2" placeholder="Price for 2 days wedding photoshoot" name="photo_package2">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="package3" class="form-label vendor-form-label">Package 3: Price for 3 days wedding photoshoot</label>
                                        <input type="text" class="form-control" id="package3" placeholder="Price for 3 days wedding photoshoot" name="photo_package3">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Package 1: 1-day pre-wedding photoshoot</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range1_start" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="photo_package_range1_start" placeholder="Min Price" name="photo_package_range1_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range1_end" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="photo_package_range1_end" placeholder="Max Price" name="photo_package_range1_end">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Package 2: Price for 2 days wedding photoshoot</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range2_start" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="photo_package_range2_start" placeholder="Min Price" name="photo_package_range2_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range2_end" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="photo_package_range2_end" placeholder="Max Price" name="photo_package_range2_end">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Package 3: Price for 3 days wedding photoshoot</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range3_start" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="photo_package_range3_start" placeholder="Min Price" name="photo_package_range3_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range3_end" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="photo_package_range3_end" placeholder="Max Price" name="photo_package_range3_end">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Package 4: Price for 4 days wedding photoshoot</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range4_start" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="photo_package_range4_start" placeholder="Min Price" name="photo_package_range4_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="photo_package_range4_end" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="photo_package_range4_end" placeholder="Max Price" name="photo_package_range4_end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="delivery_time" class="vendor-form-label">Delivery Time</label>
                                        <select name="delivery_time" class="form-control" id="delivery_time">
                                            <option value="15-30 Days">15-30 Days</option>
                                            <option value="30-45 days">30-45 days</option>
                                            <option value="45-60 days">45-60 days</option>
                                            <option value="More than 60 days">More than 60 days</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="travel_out" class="vendor-form-label">Travels Outstation</label>
                                        <select name="travel_out" class="form-control" id="travel_out">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>


                                    <div class="col-12 form-group">
                                        <label for="occations" class="vendor-form-label">Occassions Covered</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Pre-wedding"> Pre-wedding
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Engagement"> Engagement
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Wedding"> Wedding
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Haldi"> Haldi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Mehendi"> Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Sangeet"> Sangeet
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Reception"> Reception
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Cocktail"> Cocktail
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Home Functions"> Home Functions
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="occations[]" value="Others"> Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Multiple Payment Options Accepted">
                                                Multiple Payment Options Accepted
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Travels Outstation">
                                                Travels Outstation
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Does not Travel Outstation">
                                                Does not Travel Outstation
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Lightning Fast Delivery Time">
                                                Lightning Fast Delivery Time
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Quick Delivery Time">
                                                Quick Delivery Time
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="photo_feature[]" value="Standard Delivery Time">
                                                Standard Delivery Time
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Candid Photography Expertise"> Candid Photography Expertise
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Traditional Photography Know How"> Traditional Photography Know How
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Cinematic Editing Expertise"> Cinematic Editing Expertise
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Has Drone Shoot Capability"> Has Drone Shoot Capability
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Photobooth facilities Available"> Photobooth facilities Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Live Screening Feature available"> Live Screening Feature available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Same Day Edits provided"> Same Day Edits provided
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Professional Printing for Albums Available"> Professional Printing for Albums Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Inhouse Editing Services"> Inhouse Editing Services
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Outsourced Editing Services"> Outsourced Editing Services
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Inhouse and Outsourced Editing services Allowed"> Inhouse and Outsourced Editing services Allowed
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="photo_feature[]" value="Has Creative Photography Approaches"> Has Creative Photography Approaches
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Makeup  -->
                            <div class="makeup_sec vendor_cat_inputs" id="makeup_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="makeup_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="makeup_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label vendor-form-label">Bridal Make Up Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Bridal Make Up Starting Price" name="makeup_start_price">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="package1" class="form-label vendor-form-label">Package 1: party makeup for Bride</label>
                                        <input type="text" class="form-control" id="package1" placeholder="party makeup for Bride" name="makeup_package1">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="package2" class="form-label vendor-form-label">Package 2: Regular party makeup for bride's relatives/ friends</label>
                                        <input type="text" class="form-control" id="package2" placeholder="Regular party makeup for bride's relatives" name="makeup_package2">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="travel_out" class="vendor-form-label">Travels Outstation</label>
                                        <select name="travel_out" class="form-control" id="travel_out">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4"><label for="">Package 1: party makeup for Bride Range</label></div>
                                            <div class="col-4">
                                                <label for="start_price" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="start_price" placeholder="Min Price" name="makeup_price_start">
                                            </div>
                                            <div class="col-4">
                                                <label for="start_price" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="start_price" placeholder="Max Price" name="makeup_price_end">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="">Package 2: Regular party makeup for bride's relatives/ friends Range</label>
                                            </div>
                                            <div class="col-4">
                                                <label for="start_price" class="form-label vendor-form-label">Min Price</label>
                                                <input type="text" class="form-control" id="start_price" placeholder="Min Price" name="makeup_price_start2">
                                            </div>
                                            <div class="col-4">
                                                <label for="start_price" class="form-label vendor-form-label">Max Price</label>
                                                <input type="text" class="form-control" id="start_price" placeholder="Max Price" name="makeup_price_end2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="make_tech" class="vendor-form-label">Make Up Techniques Know How</label>
                                        <select name="make_techs" class="form-control" id="make_tech">
                                            <option value="">Select Technique</option>
                                            <option value="Regular">Regular</option>
                                            <option value="HD">HD</option>
                                            <option value="Airbrush">Airbrush</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tech_data" id="tech_data">
                                            <!-- data will come from selection of dropdown  -->
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <label class="col-md-4">
                                                <input type="checkbox" name="make_feature[]" value="Multiple Payment Options Accepted">
                                                Multiple Payment Options Accepted
                                            </label>

                                            <label class="col-md-4">
                                                <input type="checkbox" name="make_feature[]" value="Travels Outstation">
                                                Travels Outstation
                                            </label>

                                            <label class="col-md-4">
                                                <input type="checkbox" name="make_feature[]" value="Does not Travel Outstation">
                                                Does not Travel Outstation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="Services available at Venue Only"> Services available at Venue Only
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="Services available at Salon only"> Services available at Salon only
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="Services Available at Venue and Salon"> Services Available at Venue and Salon
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="HD Make Up Expertise"> HD Make Up Expertise
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="AirBrush Make Up Technique Available"> AirBrush Make Up Technique Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="make_feature[]" value="Friends and Family Package Available"> Friends and Family Package Available
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="groom_service" class="vendor-form-label">Grooming Services Available</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Provides Hairstyling Services"> Provides Hairstyling Services
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Hair extensions Available"> Hair extensions Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Provides Eyelashes"> Provides Eyelashes
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Provides Eyelenses"> Provides Eyelenses
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Nail Extension Services Available"> Nail Extension Services Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="groom_service[]" value="Garment Draping Services Available"> Garment Draping Services Available
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mahendi  -->
                            <div class="mahendi_sec vendor_cat_inputs" id="mahendi_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="meh_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="meh_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="start_price" class="form-label vendor-form-label">Bridal Mehendi Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Bridal Mehendi Starting Price" name="mahendi_start_price">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="price_hand" class="form-label">Price/ hand for family/ guests </label>
                                        <input type="text" class="form-control" id="price_hand" placeholder="Price/ hand for family/ guests " name="price_hand">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="max_people">Max. People that can be attended</label>
                                        <select name="max_people" class="form-control" id="max_people">
                                            <option value="0-9">0-9</option>
                                            <option value="10-19">10-19</option>
                                            <option value="20-29">20-29</option>
                                            <option value="30-39">30-39</option>
                                            <option value="40-49">40-49</option>
                                            <option value="50 and more">50 and more</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="style_know">Mehendi Styles Know How</label>
                                        <select name="style_knows" class="form-control" id="style_know">
                                            <option value="">Select Style</option>
                                            <option value="Moroccon">Moroccon</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Indo-Western">Indo-Western</option>
                                            <option value="Indo-Arabic">Indo-Arabic</option>
                                            <option value="Western">Western</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="tech_data" id="meh_Style">
                                            <!-- data will come from above selectuin  -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="meh_service_offer vendor-form-label">Bridal Mehendi Starting Price Range</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Meh_price_range_start" class="form-label">Start Price</label>
                                                <input type="text" class="form-control" id="Meh_price_range_start" placeholder="Price/ hand for family/ guests " name="Meh_price_range_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Meh_price_range_end" class="form-label">Start Price</label>
                                                <input type="text" class="form-control" id="Meh_price_range_end" placeholder="Price/ hand for family/ guests " name="Meh_price_range_end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="meh_service_offer vendor-form-label">Price/ hand for family/ guests Range</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="guest_price_range_start" class="form-label">Start Price</label>
                                                <input type="text" class="form-control" id="guest_price_range_start" placeholder="Price/ hand for family/ guests " name="guest_price_range_start">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Meh_price_range_end" class="form-label">Start Price</label>
                                                <input type="text" class="form-control" id="Meh_price_range_end" placeholder="Price/ hand for family/ guests " name="Meh_price_range_end">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="">Mehendi Styles</label>
                                        <div class="row">
                                            <!-- Radio buttons arranged in columns -->
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Arabic design"> Arabic design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Zardosi design"> Zardosi design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Bridal Mehendi"> Bridal Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Rajasthani design"> Rajasthani design
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Add more radio buttons here -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Dubai style mehendi"> Dubai style mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Gujarati designs"> Gujarati designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Bombay style design"> Bombay style design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Indo-Islamic Mehendi Style"> Indo-Islamic Mehendi Style
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Floral Mehendi"> Floral Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Indo-Arabic design"> Indo-Arabic design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Herbal designs"> Herbal designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Western designs"> Western designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Moroccan design"> Moroccan design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Marwadi design"> Marwadi design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Designer mehndi"> Designer mehndi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Paisley designs"> Paisley designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Indo-western designs"> Indo-western designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Pakistani design"> Pakistani design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Bandhani Design"> Bandhani Design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Colorful Mehendi Art"> Colorful Mehendi Art
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Jewellery design"> Jewellery design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Customised Mehendi Designs"> Customised Mehendi Designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Mandala design"> Mandala design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Maharashtrian designs"> Maharashtrian designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Mughal Mehendi"> Mughal Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Caricature designs"> Caricature designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Gods and Goddesses"> Gods and Goddesses
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Butta designs"> Butta designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Glitter Mehendi"> Glitter Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Minimal Mehendi"> Minimal Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Peacock design"> Peacock design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="3D Mehndi Designs"> 3D Mehndi Designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Mehndi tattoos"> Mehndi tattoos
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Leheriya designs"> Leheriya designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Jaipuri style design"> Jaipuri style design
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Fancy Mehendi"> Fancy Mehendi
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Hira-Moti designs"> Hira-Moti designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Radha Krishan designs"> Radha Krishan designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Kolkata mehendi"> Kolkata mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Kashmiri designs"> Kashmiri designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Bride-groom face designs"> Bride-groom face designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Theme Mehndi"> Theme Mehndi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Bengali designs"> Bengali designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Mohalai mehandi designs"> Mohalai mehandi designs
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Nail Paint Mehendi"> Nail Paint Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Hyderabadi Mehndi"> Hyderabadi Mehndi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Sona Chandi Mehendi"> Sona Chandi Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Pen mehendi"> Pen mehendi
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Fusion style mehendi"> Fusion style mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Mathick mehandi designs"> Mathick mehandi designs
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Stone or Diamond Mehendi"> Stone or Diamond Mehendi
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Kalamkaari Mehndi"> Kalamkaari Mehndi
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="mehendi_style[]" value="Box mehndi design"> Box mehndi design
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <label class="col-md-3">
                                                <input type="checkbox" name="mehendi_feature[]" value="Multiple Payment Options Accepted">
                                                Multiple Payment Options Accepted
                                            </label>

                                            <label class="col-md-3">
                                                <input type="checkbox" name="mehendi_feature[]" value="Expertise in 3+ Mehendi Styles">
                                                Expertise in 3+ Mehendi Styles
                                            </label>
                                            <label class="col-md-3">
                                                <input type="checkbox" name="mehendi_feature[]" value="Expertise in 5+ Mehendi Styles">
                                                Expertise in 5+ Mehendi Styles
                                            </label>
                                            <label class="col-md-3">
                                                <input type="checkbox" name="mehendi_feature[]" value="Expertise in 7+ Mehendi Styles">
                                                Expertise in 7+ Mehendi Styles
                                            </label>
                                            <label class="col-md-3">
                                                <input type="checkbox" name="mehendi_feature[]" value="Expertise in 10+ Mehendi Styles">
                                                Expertise in 10+ Mehendi Styles
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bridal Jewellery  -->
                            <div class="jewellery_sec vendor_cat_inputs" id="jewellery_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="jewel_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="jewel_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label">Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="jewel_start_price">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="exp_since" class="form-label">Experience Since</label>
                                        <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="">Jewellery Types</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="Custom made Gold Jewellery"> Custom made Gold Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="Diamond Jewellery"> Diamond Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="Precious and Semi Precious Stone Jewellery"> Precious and Semi Precious Stone Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="American Diamond Jewellery"> American Diamond Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="Kemp Jewellery"> Kemp Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="jew_type[]" value="Imitation Jewellery"> Imitation Jewellery
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="design_style">Design Styles</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Kundan Jewellery"> Kundan Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Navratna Jewellery"> Navratna Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Meenakari Jewellery"> Meenakari Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Antique Jewellery"> Antique Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Polki and Emerald Jewellery"> Polki and Emerald Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Floral Jewellery"> Floral Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Temple Jewellery"> Temple Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Kaasu Malai Jewellery"> Kaasu Malai Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="design_style[]" value="Rental Options Available"> Rental Options Available
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Categories Available</label>
                                        <div class="row">
                                            <!-- Radio buttons arranged in columns -->
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Bridal Jewellery"> Bridal Jewellery
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Necklaces"> Necklaces
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Earrings"> Earrings
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Wedding Rings"> Wedding Rings
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Nose Rings"> Nose Rings
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Pendant Sets"> Pendant Sets
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Solitaires"> Solitaires
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="MangalSutra"> MangalSutra
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Choker"> Choker
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Bracelets"> Bracelets
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Anklets"> Anklets
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="cat_avail[]" value="Kamarbandh"> Kamarbandh
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="payment_options">
                                                    <input type="checkbox" id="payment_options" name="jewl_feature[]" value="Multiple Payment Options Accepted">
                                                    Multiple Payment Options Accepted</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="design_styles">
                                                    <input type="checkbox" id="design_styles" name="jewl_feature[]" value="Multiple Design Styles Available">
                                                    Multiple Design Styles Available</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="jewellery_types">
                                                    <input type="checkbox" id="jewellery_types" name="jewl_feature[]" value="Multiple Jewellery Types Available">
                                                    Multiple Jewellery Types Available</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="jewellery_accessories">
                                                    <input type="checkbox" id="jewellery_accessories" name="jewl_feature[]" value="Multiple Jewellery Accessories Available">
                                                    Multiple Jewellery Accessories Available</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- decorator  -->
                            <div class="decorator_sec vendor_cat_inputs" id="decorator_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="decor_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="decor_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label">Venue Decor Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Venue Decor Starting Price" name="decorator_start_price">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="based_price" class="form-label">Flower based traditional decoration Price</label>
                                        <input type="text" class="form-control" id="based_price" placeholder="Flower based traditional decoration Price" name="based_price">
                                    </div>
                                    <!-- <div class="col-md-6 form-group">
                                    <label for="package1" class="form-label">Package 1: Price range for flower based traditional decoration</label>
                                    <input type="text" class="form-control" id="package1" placeholder="Price range for flower based traditional decoration" name="decorator_package1">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="package2" class="form-label">Package 2: price range for flower based traditional decoration </label>
                                    <input type="text" class="form-control" id="package2" placeholder="price range for flower based traditional decoration" name="decorator_package2">
                                </div> -->
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="price_range" class="form-label">price range of your fixed planning fee</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="price_range" placeholder="Min Price" name="decorator_price_range">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="price_range_max" placeholder="Max Price" name="price_range_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="price_range" class="form-label">minimum wedding budget range required</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="min_range" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="min_range" placeholder="Min Price" name="min_range">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="min_range_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="min_range_max" placeholder="Max Price" name="min_range_max">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="price_range" class="form-label">Package 1: Price range for flower based traditional decoration</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="package1_min_range" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="package1_min_range" placeholder="Min Price" name="package1_min_range">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="package1_range_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="package1_range_max" placeholder="Max Price" name="package1_range_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="price_range" class="form-label">Package 2: price range for flower based traditional decoration </label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="package2_min_range" class="form-label">Start Price</label>
                                                <input type="text" class="form-control" id="package2_min_range" placeholder="Start Price" name="package2_min_range">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="package2_range_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="package2_range_max" placeholder="Max Price" name="package2_range_max">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="">Traditional Decoration Styles</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="Floral Decoration"> Floral Decoration
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="Rajasthani Decoration"> Rajasthani Decoration
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="Punjabi Decoration"> Punjabi Decoration
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="South Indian Decoration"> South Indian Decoration
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="Royal Style Decoration"> Royal Style Decoration
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="deco_style[]" value="Bollywood Style Decoration"> Bollywood Style Decoration
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Modern Decoration Styles</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Vintage Decoration Style"> Vintage Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Bohemian Decoration Style"> Bohemian Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Greenhouse Decoration Style"> Greenhouse Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Moroccan Decoration Style"> Moroccan Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Metallic Decoration Style"> Metallic Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Theatrical Decoration Style"> Theatrical Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Rustic Decoration Style"> Rustic Decoration Style
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="modern_style[]" value="Sundowner Decoration Style"> Sundowner Decoration Style
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="payment_options">
                                                    <input type="checkbox" id="payment_options" name="deco_feature[]" value="Multiple Payment Options Accepted">
                                                    Multiple Payment Options Accepted</label>
                                            </div>

                                            <div class="col-4">
                                                <label for="design_styles">
                                                    <input type="checkbox" id="design_styles" name="deco_feature[]" value="Multiple Modern Decoration Styles Expertise">
                                                    Multiple Modern Decoration Styles Expertise</label>
                                            </div>

                                            <div class="col-4">
                                                <label for="decoration_types">
                                                    <input type="checkbox" id="decoration_types" name="deco_feature[]" value="Multiple Traditional Decoration Types Available">
                                                    Multiple Traditional Decoration Types Available</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- catering  -->
                            <div class="catering_sec vendor_cat_inputs" id="catering_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="cat_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="cat_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label">Starting Price per plate</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="catering_start_price">
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="veg_menu" class="form-label">Price range of veg menu</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="veg_menu_Start" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="veg_menu_Start" placeholder="Min Price" name="veg_menu_Start">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="veg_menu_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="veg_menu_max" placeholder="Max Price" name="veg_menu_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="non_veg_menu" class="form-label">Price range of non veg menu </label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="non_veg_menu_min" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="non_veg_menu_min" placeholder="Min Price" name="non_veg_menu_min">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="non_veg_menu_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="non_veg_menu_max" placeholder="Max Price" name="non_veg_menu_max">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="">Menu & Catering</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="North indian/ mughlai"> North indian/ mughlai
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="Italian/ european/ continental"> Italian/ european/ continental
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="Chinese/ thai/ oriental"> Chinese/ thai/ oriental
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="Seafood"> Seafood
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="Chaat & indian street food"> Chaat & indian street food
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="South indian"> South indian
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="menu_opt[]" value="Garlic Free/ Onion Free"> Garlic Free/ Onion Free
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Services Available</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Live food counters"> Live food counters
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Drinks (non-alcoholic)"> Drinks (non-alcoholic)
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Provides Bartender Services"> Provides Bartender Services
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Bar SetUp Available"> Bar SetUp Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Food Presentation Expertise"> Food Presentation Expertise
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Crockery/ Cutlery / Glassware Provided"> Crockery/ Cutlery / Glassware Provided
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Lighting Setup for Food Available"> Lighting Setup for Food Available
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Service Staff facilities"> Service Staff facilities
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Uniformed Service staff Facilities"> Uniformed Service staff Facilities
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Travels Outstation"> Travels Outstation
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" name="service_avail[]" value="Does not Travel Outstation"> Does not Travel Outstation
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="payment_options">
                                                    <input type="checkbox" id="payment_options" name="cater_feature[]" value="Multiple Payment Options Accepted">Multiple Payment Options Accepted</label>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="design_styles">
                                                    <input type="checkbox" id="design_styles" name="cater_feature[]" value="3+ Cusines Options Available">3+ Cusines Options Available</label>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="decoration_types">
                                                    <input type="checkbox" id="decoration_types" name="cater_feature[]" value="5+ Cuisine Options Available">5+ Cuisine Options Available</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Gift  -->
                            <div class="gift_sec vendor_cat_inputs" id="gift_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="gift_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="gift_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="start_price" class="form-label">Gifts Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="gift_start_price">
                                    </div>
                                    <!-- <div class="col-md-6 form-group">
                                    <label for="pack_start_price" class="form-label">starting price per gift/ pack for non-edible gifting or favors?</label>
                                    <input type="text" class="form-control" id="pack_start_price" placeholder="Starting Price" name="gift_pack_price">
                                </div> -->
                                    <div class="col-md-6 form-group">
                                        <label for="gift_type" class="form-label">Gift Type</label>
                                        <select name="gift_types" class="form-control" id="gift_type">
                                            <option value="Edible">Edible</option>
                                            <option value="Non- Edible">Non- Edible</option>
                                            <option value="Edible & Non Edible">Edible & Non Edible</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div id="gift_typs">
                                            <!-- data will come from js  -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="editable" class="form-label">MOQ for Edible gifts & favors</label>
                                        <input type="text" class="form-control" id="editable" placeholder="MOQ  for Edible gifts & favors" name="editable">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="non_editable" class="form-label">MOQ for Non-Edible gifts & favors</label>
                                        <input type="text" class="form-control" id="non_editable" placeholder="MOQ  for Non-Edible gifts & favors" name="non_editable">
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="design" class="form-label">Price range per kg for edible gifts or favors </label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_edit" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="price_range_edit" placeholder="Min Price" name="price_range_edit">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_edit_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="price_range_edit_max" placeholder="Max Price" name="price_range_edit_max">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="row">

                                            <div class="col-md-4 form-group">
                                                <label for="price_range_non_edit" class="form-label">Price range per gift/ pack for non-edible gifts or favors</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_non_edit" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="price_range_non_edit" placeholder="Min Price" name="price_range_non_edit">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_non_edit_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="price_range_non_edit_max" placeholder="Max Price" name="price_range_non_edit_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="range_editable" class="form-label">MOQ range for edible gifts or favors</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="range_editable" class="form-label">Min Quantity</label>
                                                <input type="text" class="form-control" id="range_editable" placeholder="Min Quantity" name="range_editable">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="range_editable_max" class="form-label">Max Quantity</label>
                                                <input type="text" class="form-control" id="range_editable_max" placeholder="Max Quantity" name="range_editable_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="range_non_editable" class="form-label">MOQ range for non-edible gifts or favors</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="range_non_editable" class="form-label">Min Quantity</label>
                                                <input type="text" class="form-control" id="range_non_editable" placeholder="Min Quantity" name="range_non_editable">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="range_non_editable_max" class="form-label">Max Quantity</label>
                                                <input type="text" class="form-control" id="range_non_editable_max" placeholder="Max Quantity" name="range_non_editable_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="payment_options">
                                                    <input type="checkbox" id="payment_options" name="gift_feature[]" value="Multiple Payment Options Accepted">
                                                    Multiple Payment Options Accepted</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="gift_feature[]" value="Edible Gifts & Favours Available"> Edible Gifts & Favours Available
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="gift_feature[]" value="Non-Edible Gifts & Favours Available"> Non-Edible Gifts & Favours Available
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="gift_feature[]" value="Edible and Non-Edible Gifts & Favours Available"> Edible and Non-Edible Gifts & Favours Available
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="gift_feature[]" value="No Minimum Order Quantity (MOQ) Requirement"> No Minimum Order Quantity (MOQ) Requirement
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="gift_feature[]" value="Minimal Minimum Order Quantity (MOQ) Requirement"> Minimal Minimum Order Quantity (MOQ) Requirement
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- invitation  -->
                            <div class="invi_sec vendor_cat_inputs" id="invi_sec">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="ini_service_offer vendor-form-label">Designs / Products / Service Offered</label>
                                        <textarea name="ini_service_offer" id="service_offer" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="start_price" class="form-label">Invites Starting Price</label>
                                        <input type="text" class="form-control" id="start_price" placeholder="Starting Price" name="invitation_start_price">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="price_box" class="form-label">Starting price for packaged (boxed) invitations</label>
                                        <input type="text" class="form-control" id="price_box" placeholder="Starting price for packaged (boxed) invitations" name="price_box">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="box_invite" class="form-label">MOQ (Boxed Invites)</label>
                                        <input type="text" class="form-control" id="box_invite" placeholder="MOQ (Boxed Invites)" name="box_invite">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="print_card" class="form-label">MOQ (printed Cards)</label>
                                        <input type="text" class="form-control" id="print_card" placeholder="MOQ (printed Cards)" name="print_card">
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="start_price_range" class="form-label">starting price range per invite for wedding cards</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="start_price_range" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="start_price_range" placeholder="Min Price" name="start_price_range">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="start_price_range_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="start_price_range_max" placeholder="Max Price" name="start_price_range_max">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_box" class="form-label">starting price range - packaged (boxed) invitations</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_box" class="form-label">Min Price</label>
                                                <input type="text" class="form-control" id="price_range_box" placeholder="Min Price" name="price_range_box">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="price_range_box_max" class="form-label">Max Price</label>
                                                <input type="text" class="form-control" id="price_range_box_max" placeholder="Max Price" name="price_range_box_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="printed_card" class="form-label">MOQ Range (Printed Cards)</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="printed_card" class="form-label">Start Quantity</label>
                                                <input type="text" class="form-control" id="printed_card" placeholder="Start Quantity" name="printed_card">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="printed_card_max" class="form-label">Max Quantity</label>
                                                <input type="text" class="form-control" id="printed_card_max" placeholder="Max Quantity" name="printed_card_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="box_card" class="form-label">MOQ Range (Boxed Cards)</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="box_card" class="form-label">Start Quantity</label>
                                                <input type="text" class="form-control" id="box_card" placeholder="Start Quantity" name="box_card">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="box_card_max" class="form-label">Max Quantity</label>
                                                <input type="text" class="form-control" id="box_card_max" placeholder="Max Quantity" name="box_card_max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label>
                                    <div class="row"> -->
                                        <div class="col-12 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Year when your business was established" name="vid_exp_since">
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-12 form-group" id="prod_div">
                                        <label for="">Product Types</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="type_avail[]" value="Cards"> Cards
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="type_avail[]" value="Boxed Gift Types"> Boxed Gift Types
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="type_avail[]" value="Novel Concepts"> Novel Concepts
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group" id="paper_div">
                                        <label for="">Paper Styles</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Matte Finish"> Matte Finish
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Glossy Finish"> Glossy Finish
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Recycled/ Ecofriendly Gifts"> Recycled/ Ecofriendly Gifts
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Mylar Style"> Mylar Style
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Parchment Style"> Parchment Style
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input type="checkbox" name="paper_style_avail[]" value="Handmade Gifts"> Handmade Gifts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-5">
                                        <div class="card-header">
                                            <h4 class="text-uppercase primary-form-heading">Select features applicable for you</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group exp">
                                        <!-- <label for="app_req" class="vendor-form-label">Experience</label> -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="1+ years of Experience">1 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="5+ years of Experience">5 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="10+ years of Experience">10 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="15+ years of Experience">15 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="20+ years of Experience">20 years+ of Experience</label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="30+ years of Experience">30 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="50+ years of Experience">50 years+ of Experience</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label>
                                                    <input type="radio" name="no_of_yrs" value="100+ years of Experience">100 years+ of Experience</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group pl-2">
                                        <div class="row">
                                            <label>
                                                <input type="checkbox" id="payment_options" name="invi_feature[]" value="Multiple Payment Options Accepted">
                                                Multiple Payment Options Accepted</label>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="checkbox" name="invi_feature[]" value="No Minimum Order Quantity (MOQ) Requirement"> No Minimum Order Quantity (MOQ) Requirement
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="checkbox" name="invi_feature[]" value="Minimal Minimum Order Quantity (MOQ) Requirement"> Minimal Minimum Order Quantity (MOQ) Requirement
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="checkbox" name="invi_feature[]" class="check_toggle" id="prod_toggles" value="Multiple Product Types Available"> Multiple Product Types Available
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="checkbox" name="invi_feature[]" class="check_toggle" id="paper_toggles" value="Multiple Paper Styles Available"> Multiple Paper Styles Available
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="images" class="vendor-form-image">Images</label>
                                        <input type="file" name="images[]" class="w-100" id="images" multiple accept="image/*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="comp_logo" class="vendor-form-image">Business Logo (Optional)</label>
                                        <input type="file" name="comp_logo" class="w-100" id="comp_logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center my-md-4 my-2">
                            <button class="btn vendor-btn-submit  btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('VendorPanel/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('VendorPanel/layout/script'); ?>
<script src="<?php echo base_url() ?>assets/front/js/vendor.js"></script>

<script>
    $(document).ready(function() {
        $('#category').change(function() {
            const cat_id = $(this).val();
            $.ajax({
                url: '<?php echo base_url() ?>Vendor/SubCat',
                type: 'post',
                data: {
                    cat_id: cat_id
                },
                dataType: 'json',
                success: function(res) {
                    $('#sub_category').empty();
                    $('#sub_category').append('<option value="">Please select sub category</option>');
                    $.each(res, function(key, value) {
                        $('#sub_category').append('<option value="' + value.sub_category_id + '">' + value.name + '</option>');
                    })
                }
            })
        })
    })
</script>
<script>
    function disableInputsInDiv(divId) {
        const div = document.getElementById(divId);
        const selectFields = div.querySelectorAll('select');
        const inputFields = div.getElementsByTagName('input');
        const textareaFields = div.querySelectorAll('textarea');

        // selectFields.disabled = true;
        for (let i = 0; i < selectFields.length; i++) {
            selectFields[i].disabled = true;
        }
        for (let i = 0; i < inputFields.length; i++) {
            inputFields[i].disabled = true;
            // selectFields[i].disabled = true;
        }

        for (let i = 0; i < textareaFields.length; i++) {
            textareaFields[i].disabled = true;
        }
    }
    disableInputsInDiv('form_cont');
</script>