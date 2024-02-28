<form method="post" class="mt-3">
    <?php
    $api_token_data =	get_option(Contact_FormSI_DB_SLUG.'api_token','');
    $sender_id_data =	get_option(Contact_FormSI_DB_SLUG.'sender_id','');
    $country_data =	get_option(Contact_FormSI_DB_SLUG.'country','');
    $country_code_data =	get_option(Contact_FormSI_DB_SLUG.'country_code','');
    $reg_phone_data =	get_option(Contact_FormSI_DB_SLUG.'reg_phone','');
    ?>
    <style>
    .row {
        margin-bottom: 15px;
    }
</style>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label><?php _e('USMS-GH API Token', Contact_FormSI_TXT); ?></label>
                <input type="text" class="form-control" name="api_token" value="<?php if (!empty($api_token_data)) _e($api_token_data)?>">
            </div>
        </div>
        <br>
        <div class="col-md-3">
    <div class="form-group">
        <label><?php _e('Choose Country', Contact_FormSI_TXT); ?></label>
        <select class="form-control" name="country" id="countries">
        <option value="Ghana" selected><?php _e('Ghana', Contact_FormSI_TXT); ?></option>
            <?php
            if (!empty($country_data)) {
                echo '<option value="' . esc_attr($country_data) . '" selected>' . esc_html($country_data) . '</option>';
            }
            ?>
        </select>
    </div>
</div>

        <br>
        <div class="col-md-3 sender_id">
            <div class="form-group">
                <label><?php _e('USMS-GH Approved Sender ID', Contact_FormSI_TXT); ?></label>
                <input type="text" class="form-control" maxlength="11" name="sender_id" value="<?php if (!empty($sender_id_data)) _e($sender_id_data)?>">
                <p class="text-danger text-center mt-2">Sender ID or Phone Number if you are in GHANA.</p>
            </div>
        </div>
        <br>
        <div class="col-md-3 reg_phone">
            <div class="form-group">
                <label><?php _e('USMS-GH Approved Phone Number', Contact_FormSI_TXT); ?></label>
                <input type="text" class="form-control" name="reg_phone" value="<?php if (!empty($reg_phone_data)) _e($reg_phone_data) ?>">

                <p class="text-danger text-center mt-2">Provide Sender ID or Phone Number only and not both.</p>
            </div>
        </div>
        <br>
        <input type="hidden" name="country_code" id="country_code" value="<?php if (!empty($country_code_data)) _e($country_code_data) ?>">
    </div>
    <div class="mt-2">
        <input type="submit" name="save_api_settings" value="Save Changes" class="btn btn-primary" />
    </div>
</form>