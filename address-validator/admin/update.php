<?php 
// ---------------shop-add-prompts---------------------------------
add_action('wp_ajax_save_form_data', 'save_form_data');

function save_form_data() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_add_prompts';

    $form_data = $_POST['form_data'];

    $update_data = array();
    foreach ($form_data as $field) {
        $field_name = $field['name'];

        // Handle different form element types
        switch ($field_name) {
            case 'prompt_appear':
            case 'keyword_skip_add_valid':
            case 'time_to_update_order':
                // For radio buttons, text inputs, and select elements
                $update_data[$field_name] = $field['value'];
                break;

            default:
                // For checkboxes
                $update_data[$field_name] = $field['value'] === 'on' ? 1 : 0;
                $update_data[$field_name] = $field['value'] === 'off' ? 0 : 1;
                break;
        }
    }

    $where_condition = array('store_url' => get_existing_store_url_shop_add_prompts());  // Change to your logic to retrieve the existing store_url
    $result = $wpdb->update($table_name, $update_data, $where_condition);

    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    wp_die();
}

function get_existing_store_url_shop_add_prompts() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_add_prompts';
    $result = $wpdb->get_var("SELECT store_url FROM $table_name LIMIT 1");
    return $result;
}



// ------------------shop-gen-customization------------------------

add_action('wp_ajax_save_gen_custom', 'save_gen_custom');

function save_gen_custom() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_gen_customization';

    $form_data = $_POST['form_data'];

    $update_data_gen = array();
    foreach ($form_data as $field) {
        $field_name = $field['name'];

        switch ($field_name) {
            case 'trim_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'border_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'bg_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'text_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'hover_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'btn_bg_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'btn_text_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'btn_border_color':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'corner_style':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'border_width':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'close_btn_prompts':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'msg_correct_addr':
                $update_data_gen[$field_name] = $field['value'];
                break;
            case 'input_custom_css':
                $update_data_gen[$field_name] = $field['value'];
                break;
            default:
                // For checkboxes
                $update_data_gen[$field_name] = $field['value'];
                break;
        }
    }
    $where_condition = array('store_url' =>  get_existing_store_url_save_gen_custom());  
    $result = $wpdb->update($table_name, $update_data_gen , $where_condition);


    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
  
    // echo "<pre>";
    // print_r($_POST['form_data'][0]['value']);
    // print_r($_POST);
    //print_r($update_data_gen);
    wp_die();
}

function get_existing_store_url_save_gen_custom() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_gen_customization';
    $result = $wpdb->get_var("SELECT store_url FROM $table_name LIMIT 1");
    return $result;
}




// ----------------------- shop-suggested-cor-prompts -------------------

add_action('wp_ajax_save_suggested_cor_prompts_data', 'save_suggested_cor_prompts_data');

function save_suggested_cor_prompts_data(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_suggested_cor_prompts';
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_suggested_cor_prompts';

    $form_data = $_POST['form_data'];

    $update_data_sugg = array();
    foreach ($form_data as $field) {
        $field_name = $field['name'];

        switch ($field_name) {
            case 'highlight_changes_color':
            case 'opt_border_color':
            case 'title':
            case 'subtitle':
            case 'suggested_addr_label':
            case 'original_addr_label':
            case 'original_addr_opt_btn':
            case 'acpt_changes_btn_label':
            case 'suggested_addr_opt_sel':
            case 'original_addr_opt_sel':
                // For radio buttons, text inputs, and select elements
                $update_data_sugg[$field_name] = $field['value'];
                break;

            default:
                // For checkboxes
               // $update_data_sugg[$field_name] = $field['value'] === 'on' ? 1 : 0;
                $update_data_sugg[$field_name] = $field['value'];
                break;
        }
    }

    $where_condition = array('store_url' => get_existing_store_url_save_suggested_cor_prompts());  // retrieve the existing store_url
    $result = $wpdb->update($table_name,  $update_data_sugg , $where_condition);

    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    // echo "<pre>";
  //  print_r($_POST);
    wp_die();
}

function get_existing_store_url_save_suggested_cor_prompts() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_suggested_cor_prompts';

    $result = $wpdb->get_var("SELECT store_url FROM $table_name LIMIT 1");

    return $result;
}


// --------------------- shop-unveri-add-prompts---------------------
add_action('wp_ajax_save_unveri_add_prompts', 'save_unveri_add_prompts');

function save_unveri_add_prompts(){
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_unveri_addr_prompts';

    $form_data = $_POST['form_data'];

    $update_data_add = array();
    foreach ($form_data as $field) {
        $field_name = $field['name'];

        switch ($field_name) {
            case 'prompts_inacc_addr':
            case 'prompts_apt_miss':
            case 'addr_btn_label':
            case 'proceed_btn_label':
            case 'btn_open_addr':
                // For radio buttons, text inputs, and select elements
                $update_data_add[$field_name] = $field['value'];
                break;

            default:
                // For checkboxes
                $update_data_add[$field_name] = $field['value'] === 'on' ? 1 : 0;
                break;
        }
    }

    $where_condition = array('store_url' => get_existing_store_url_save_unveri_addr_prompts());  // retrieve the existing store_url
    $result = $wpdb->update($table_name,  $update_data_add , $where_condition);

    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    // echo "<pre>";
  //  print_r($_POST);
    wp_die();
}

function get_existing_store_url_save_unveri_addr_prompts() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_unveri_addr_prompts';

    $result = $wpdb->get_var("SELECT store_url FROM $table_name LIMIT 1");

    return $result;
}

//----------------------- shop-valid-addr------------------------------

add_action('wp_ajax_save_checkbox_changes', 'save_checkbox_changes');

function save_checkbox_changes() {
    global $wpdb;

    $checkbox_name = $_POST['checkbox_name'];
    $is_checked = $_POST['is_checked'];


    $table_name = $wpdb->prefix . 'shop_validation_addr';

    $result = $wpdb->update(
        $table_name,
        array($checkbox_name => $is_checked),
        array('id' => 1) 
    );
    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    wp_die(); 
}


//----------------------- shop-valid-addr-msg----------------------------

add_action('wp_ajax_save_input_changes', 'save_input_changes');

function save_input_changes() {
    global $wpdb;

    $input_name = $_POST['input_name'];
    $input_value = $_POST['input_value'];

    $table_name = $wpdb->prefix . 'shop_validation_addr_msg';

    $result = $wpdb->update(
        $table_name,
        array($input_name => $input_value),
        array('id' => 1) 
    );

  
    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    wp_die();
}

//----------------------- shop-valid-addr-keywords----------------------------
add_action('wp_ajax_save_addr_keyword', 'save_addr_keyword');
function save_addr_keyword() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_addr_keyword';

    $input_val = $_POST['data_key'];

    $home_url = home_url();
    $parsed_url = wp_parse_url($home_url);
    $store_url = isset($parsed_url['host']) ? $parsed_url['host'] : ''; // Get the host name

    $result = $wpdb->insert(
        $table_name,
        array(
            'store_url' => $store_url,
            'valid_keyword' => $input_val,
        ),
       array('%s', '%s')
    );

  
    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    wp_die();

}


add_action('wp_ajax_get_keywords', 'get_keywords');

function get_keywords() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'shop_addr_keyword'; // Replace with your actual table name

    $keywords = $wpdb->get_col("SELECT valid_keyword FROM $table_name ORDER BY id DESC LIMIT 3");

    if (!empty($keywords)) {
        wp_send_json_success(array('keywords' => $keywords));
    } else {
        wp_send_json_error('No keywords found');
    }
}



add_action('wp_ajax_delete_keyword', 'delete_keyword');

function delete_keyword() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'shop_addr_keyword'; // Replace with your actual table name

    $keyword = $_POST['keyword'];

    // Perform the deletion
    $result = $wpdb->delete($table_name, array('valid_keyword' => $keyword));
    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    wp_die();
}

add_action('wp_ajax_save_api_key', 'save_api_key');

function save_api_key(){
    global $wpdb;

    $api_key = $_POST['api_key'];
    $table_name = $wpdb->prefix . 'shop_addr_gapikey';


    // Set scriptadded to 0 for existing records
    $wpdb->query(
        $wpdb->prepare(
            "UPDATE {$table_name} SET scriptadded = 0 WHERE scriptadded = 1"
        )
    );


    $result = $wpdb->insert(
        $table_name,
        array(
            'gapikey' => $api_key,
            'scriptadded' =>  1,
        ),
       array('%s', '%d')
    );

  
    if ($result !== false) {
        wp_send_json_success('success');
    } else {
        wp_send_json_error('failed.');
    }
    // wp_send_json("success");
    wp_die();

}

function retrieve_plugin_data($table,$where_con) {
    global $wpdb;
    $table_name = $wpdb->prefix . $table;
    // Example values for the query
    $sql = "SELECT * FROM $table_name $where_con";
   
    // Execute the prepared query
    $results = $wpdb->get_results($sql);
    // Display the data
    if ($results) {
        return $results;
    } else {
        return false;
    }
}



// Hook to handle AJAX request for fetching customization data
// add_action('wp_ajax_get_shop_gen_customization', 'get_shop_gen_customization');
// add_action('wp_ajax_nopriv_get_shop_gen_customization', 'get_shop_gen_customization'); // For non-logged-in users

// function get_shop_gen_customization() {
   
//     global $wpdb;

//     $table_name = $wpdb->prefix . 'shop_gen_customization'; // Replace 'your_table_name' with the actual table name


//     // Query to fetch customization data based on store URL
//     $query = $wpdb->prepare(
//         "SELECT * FROM $table_name",
//     );

//     $customization_data = $wpdb->get_row($query, ARRAY_A);

//     // -------------------------------------------VALIDATION-----------------------------------------------------
//     $google_api_key = 'AIzaSyBu0KZAnKgamqumi35xS4ANmjx3bVMN20Q'; // Replace with your actual API key
//     $url = "https://addressvalidation.googleapis.com/v1:validateAddress?key={$google_api_key}";

//     $addressLines = $_POST['staddress'].','.$_POST['city'].','.$_POST['state'].' '.$_POST['zipcode'];
//     $regionCode   = $_POST['country'];

//     $data = [
//         'address' => [
//             'addressLines' => "['".$addressLines."']",
//             'regionCode' => $regionCode
//         ]
//     ];
    
//     $options = [
//         'http' => [
//             'header' => "Content-Type: application/json\r\n",
//             'method' => 'POST',
//             'content' => json_encode($data),
//         ],
//     ];
    
//     $context = stream_context_create($options);
//     $response = file_get_contents($url, false, $context);
    
//     if ($response === false) {
//         die('Error occurred while fetching data from the API');
//     }
    
//     $result = json_decode($response, true);
    
//     echo "<pre>";
//     print_r($result); die();
//     if (isset($result['result']['address']['formattedAddress'])) {
//        // echo $result['result']['address']['formattedAddress'];
//     } else {
//         echo 'Error: Unable to retrieve formatted address';
//     }
//     $latitude = $result['result']['geocode']['location']['latitude'];
//     $longitude = $result['result']['geocode']['location']['longitude'];
//     // -------------------------------------------------------------------------------------------------------------

//     ///////////////////////VALIDATION --------CODE ADD-------------

//     // Check if data is found
//     if ($customization_data) {
//         wp_send_json_success($customization_data);
//     } else {
//         wp_send_json_error(array('message' => 'Data not found'));
//     }
// }


// Hook to handle AJAX request for fetching customization data
// add_action('wp_ajax_get_shop_gen_customization', 'get_shop_gen_customization');
// add_action('wp_ajax_nopriv_get_shop_gen_customization', 'get_shop_gen_customization'); // For non-logged-in users

// function get_shop_gen_customization() {
//     global $wpdb;

//     $table_name = $wpdb->prefix . 'shop_gen_customization'; 

//     // Query to fetch customization data based on store URL
//     $query = $wpdb->prepare("SELECT * FROM $table_name");
//     $customization_data = $wpdb->get_row($query, ARRAY_A);

//     // Check if data is found
//     if (!$customization_data) {
//         wp_send_json_error(array('message' => 'Data not found'));
//     }

//     // Address validation
//     $google_api_key = 'AIzaSyBu0KZAnKgamqumi35xS4ANmjx3bVMN20Q'; // Replace with your actual API key
//     $url = "https://addressvalidation.googleapis.com/v1:validateAddress?key={$google_api_key}";

//     $addressLines = $_POST['staddress'].','.$_POST['city'].','.$_POST['state'].' '.$_POST['zipcode'];
//     $regionCode   = $_POST['country'];


//     $data = [
//         'address' => [
//             'addressLines' => "['" . $addressLines . "']",
//             'regionCode' => "US"
//         ]
//     ];

//     $options = [
//         'http' => [
//             'header' => "Content-Type: application/json\r\n",
//             'method' => 'POST',
//             'content' => json_encode($data),
//         ],
//     ];
    
//     $context = stream_context_create($options);
//     $response = file_get_contents($url, false, $context);
//   //  echo "<pre>"; print_r($response);

//     if ($response === false) {
//         wp_send_json_error(array('message' => 'Error occurred while fetching data from the API'));
//     }
    
//     $result = json_decode($response, true);
//     $formattedAddress           =   $result['result']['address']['formattedAddress'];
//     $latitude                   =   $result['result']['geocode']['location']['latitude'];
//     $longitude                  =   $result['result']['geocode']['location']['longitude'];
//     $formated_addressLines      =   $result['result']['address']['postalAddress']['addressLines'][0];
//     $formated_City              =   $result['result']['address']['postalAddress']['locality'];
//     $formated_Zip               =   $result['result']['address']['postalAddress']['postalCode'];
//     $formated_ProCode           =   $result['result']['address']['postalAddress']['administrativeArea'];
//     $formated_RegionCode        =   $result['result']['address']['postalAddress']['regionCode'];

//     $combinedData = array(
//         'customization_data' => $customization_data,
//         'formatted_address'   =>  $formattedAddress,
//         'formatted_address_lines' => $formated_addressLines,
//         'formatted_city' => $formated_City,
//         'formatted_zip' => $formated_Zip,
//         'formatted_procode' => $formated_ProCode,
//         'formatted_regioncode' => $formated_RegionCode,
//         'latitude' => $latitude,
//         'longitude' => $longitude,
//     );
//     if ($customization_data) {
//         //wp_send_json_success($customization_data);
//         wp_send_json_success($combinedData);
//     } else {
//         wp_send_json_error(array('message' => 'Data not found'));
//     }
// }


add_action('wp_ajax_get_shop_gen_customization', 'get_shop_gen_customization');
add_action('wp_ajax_nopriv_get_shop_gen_customization', 'get_shop_gen_customization'); // For non-logged-in users

function get_shop_gen_customization() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'shop_gen_customization'; 
    $table_name2 =  $wpdb->prefix . 'shop_add_prompts';
    // Query to fetch customization data based on store URL
    $query = $wpdb->prepare("SELECT * FROM $table_name");
    $query2 = $wpdb->prepare("SELECT * FROM $table_name2");
    $customization_data = $wpdb->get_row($query, ARRAY_A);
    $add_prompt_data = $wpdb->get_row($query2, ARRAY_A);

    // Check if data is found
    if (!$customization_data) {
        wp_send_json_error(array('message' => 'Data not found'));
    }

    // Address validation
    $google_api_key = 'AIzaSyBu0KZAnKgamqumi35xS4ANmjx3bVMN20Q'; // Replace with your actual API key
    $url = "https://addressvalidation.googleapis.com/v1:validateAddress?key={$google_api_key}";

    $addressLines = $_POST['staddress'].','.$_POST['city'].','.$_POST['state'].' '.$_POST['zipcode'];
    $regionCode   = $_POST['country'];


    $data = [
        'address' => [
            'addressLines' => "['" . $addressLines . "']",
            'regionCode' => "US"
        ]
    ];

    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ],
    ];
    
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
  //  echo "<pre>"; print_r($response);

    if ($response === false) {
        wp_send_json_error(array('message' => 'Error occurred while fetching data from the API'));
    }
    
    $result = json_decode($response, true);
    $formattedAddress           =   $result['result']['address']['formattedAddress'];
    $latitude                   =   $result['result']['geocode']['location']['latitude'];
    $longitude                  =   $result['result']['geocode']['location']['longitude'];
    $formated_addressLines      =   $result['result']['address']['postalAddress']['addressLines'][0];
    $formated_City              =   $result['result']['address']['postalAddress']['locality'];
    $formated_Zip               =   $result['result']['address']['postalAddress']['postalCode'];
    $formated_ProCode           =   $result['result']['address']['postalAddress']['administrativeArea'];
    $formated_RegionCode        =   $result['result']['address']['postalAddress']['regionCode'];

    $combinedData = array(
        'customization_data' => $customization_data,
        'formatted_address'   =>  $formattedAddress,
        'formatted_address_lines' => $formated_addressLines,
        'formatted_city' => $formated_City,
        'formatted_zip' => $formated_Zip,
        'formatted_procode' => $formated_ProCode,
        'formatted_regioncode' => $formated_RegionCode,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'add_prompt_data' => $add_prompt_data,
    );
    if ($customization_data) {
        //wp_send_json_success($customization_data);
        wp_send_json_success($combinedData);
    } else {
        wp_send_json_error(array('message' => 'Data not found'));
    }
}



































// Hook to handle AJAX request for fetching customization data
add_action('wp_ajax_get_shop_suggested_cor_prompts', 'get_shop_suggested_cor_prompts');
add_action('wp_ajax_nopriv_get_shop_suggested_cor_prompts', 'get_shop_suggested_cor_prompts'); // For non-logged-in users

function get_shop_suggested_cor_prompts() {
   
    global $wpdb;

    $table_name = $wpdb->prefix . 'shop_suggested_cor_prompts';

    // Query to fetch customization data based on store URL
    $query = $wpdb->prepare(
        "SELECT * FROM $table_name",
    );

    $customization_data = $wpdb->get_row($query, ARRAY_A);

    // Check if data is found
    if ($customization_data) {
        wp_send_json_success($customization_data);
    } else {
        wp_send_json_error(array('message' => 'Data not found'));
    }
}
?>