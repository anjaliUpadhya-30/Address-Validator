<?php 

// Activation hook
register_activation_hook(__FILE__, 'address_validator_plugin_activation');

// Function to run on activation
function address_validator_plugin_activation() {
    global $wpdb;

    $table_names = array(
        'shop_add_prompts',
        'shop_gen_customization',
        'shop_suggested_cor_prompts',
        'shop_unveri_addr_prompts',
        'shop_validation_addr',
        'shop_validation_addr_msg',
       // 'shop_addr_keyword',
    );

    foreach ($table_names as $table_name) {
        $charset_collate = $wpdb->get_charset_collate();
        $sql = address_validator_get_schema($table_name, $charset_collate);
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
     
        if (address_validator_is_table_empty($table_name)) {
            address_validator_insert_default_values($table_name);
        }

    }
}

// Function to check if a table is empty
function address_validator_is_table_empty($table_name) {
    global $wpdb;
    $result = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}{$table_name}");
    return $result == 0;
}

// Function to get table schema
function address_validator_get_schema($table_name, $charset_collate) {
    global $wpdb;
    switch ($table_name) {
        // Add similar cases for other tables
        case 'shop_add_prompts':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                id bigint(11) NOT NULL AUTO_INCREMENT,
                store_url varchar(255) NOT NULL,
                prompt_appear varchar(255) NULL,
                valid_opt_usps int(2)  NULL,
                valid_opt_zipcode int(2)  NULL,
                valid_opt_sep_apt int(2)  NULL,
                adv_opt_proper_format int(2) NULL,
                keyword_skip_add_valid mediumtext NULL,
                time_to_update_order bigint(20)  NULL,
                PRIMARY KEY (id)
            ) ENGINE=InnoDB {$charset_collate};";
        case 'shop_gen_customization':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                `id` bigint(11)  NULL,
                `store_url` varchar(255) NOT NULL,
                `trim_color` varchar(255)  NULL,
                `border_color` varchar(255) NULL,
                `bg_color` varchar(255) NULL,
                `text_color` varchar(255) NULL,
                `hover_color` varchar(255) NULL,
                `btn_bg_color` varchar(255) NULL,
                `btn_text_color` varchar(255)  NULL,
                `corner_style` varchar(255) NULL,
                `border_width` varchar(255) NULL,
                `outline_focus_ele` int(2)  NULL,
                `hide_msg` int(2) NULL,
                `close_btn_prompts` varchar(255)  NULL,
                `msg_correct_addr` mediumtext  NULL,
                `input_custom_css` mediumtext  NULL
              ) ENGINE=InnoDB {$charset_collate};";
        
        case 'shop_suggested_cor_prompts':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                `id` bigint(20) NOT NULL ,
                `store_url` varchar(255) NOT NULL,
                `show_exit_btn` int(2)  NULL,
                `show_accept_btn` int(2)  NULL,
                `show_devider` int(2) NULL,
                `show_opt_borders` int(2) NULL,
                `show_opt_btn` int(2) NULL,
                `highlight_changes_color` varchar(255) NULL,
                `opt_border_color` varchar(255) NULL,
                `title` mediumtext NULL,
                `subtitle` mediumtext NULL,
                `suggested_addr_label` mediumtext NULL,
                `original_addr_label` mediumtext NULL,
                `original_addr_opt_btn` mediumtext NULL,
                `acpt_changes_btn_label` mediumtext NULL,
                `suggested_addr_opt_sel` mediumtext NULL,
                `original_addr_opt_sel` mediumtext NULL
              ) ENGINE=InnoDB {$charset_collate};";
        
        case 'shop_unveri_addr_prompts':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                `id` bigint(20) NOT NULL ,
                `store_url` varchar(255) NOT NULL,
                `prompts_inacc_addr` mediumtext NULL,
                `prompts_apt_miss` mediumtext NULL,
                `addr_btn_label` mediumtext NULL,
                `proceed_btn_label` mediumtext NULL,
                `btn_open_addr` mediumtext NULL
              ) ENGINE=InnoDB {$charset_collate};";
        case 'shop_validation_addr':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                `id` bigint(20) NOT NULL ,
                `store_url` varchar(255) NOT NULL,
                `en_gen_msg` int(2) NULL,
                `en_po_boxes` int(2) NULL,
                `en_usps_gopost` int(2) NULL,
                `en_high_con_route` int(2) NULL,
                `en_pvt_mailbox` int(2) NULL,
                `en_parcel_locker` int(2) NULL,
                `en_dhl_pack` int(2) NULL,
                `en_dhl_pack_addr` int(2) NULL,
                `en_addr_miss_house` int(2) NULL,
                `en_addr_miss_str` int(2) NULL,
                `en_extra_long_addr` int(2) NULL,
                `en_addr_emojis` int(2) NULL,
                `en_addr_nlc_euro` int(2) NULL,
                `en_addr_nlc_acc` int(2) NULL,
                `en_ship_cont_state` int(2) NULL,
                `en_mili_addr` int(2) NULL,
                `en_non_numeric_postalcode` int(2) NULL,
                `en_rural_addr` int(2) NULL
              ) ENGINE=InnoDB {$charset_collate};";
        case 'shop_validation_addr_msg':
            return "CREATE TABLE {$wpdb->prefix}{$table_name} (
                `id` bigint(20) NOT NULL ,
                `store_url` varchar(255) NOT NULL,
                `cus_gen_msg` mediumtext NULL,
                `cus_warn_msg_po` mediumtext  NULL,
                `cus_warn_msg_usps` mediumtext NULL,
                `cus_warn_msg_high` mediumtext NULL,
                `cus_warn_msg_pvt` mediumtext NULL,
                `cus_warn_msg_parcel` mediumtext NULL,
                `cus_warn_msg_dhl` mediumtext  NULL,
                `cus_warn_msg_dhl_pack` mediumtext  NULL,
                `cus_warn_msg_addr_miss_house` mediumtext NULL,
                `cus_warn_msg_addr_miss_str` mediumtext  NULL,
                `cus_warn_msg_extra_long_addr` mediumtext  NULL,
                `cus_warn_msg_addr_emojis` mediumtext  NULL,
                `cus_warn_msg_nlc_euro` mediumtext  NULL,
                `cus_warn_msg_nlc_acc` mediumtext  NULL,
                `cus_warn_msg_cont_state` mediumtext NULL,
                `cus_warn_msg_mili_addr` mediumtext NULL,
                `cus_warn_msg_non_numeric_postalcode` mediumtext  NULL,
                `cus_warn_msg_rural_addr` mediumtext  NULL
              ) ENGINE=InnoDB {$charset_collate};";
        // case 'shop_addr_keyword':
        //     return "CREATE TABLE {$wpdb->prefix}{$table_name}(
        //         `id` bigint(20)  NULL,
        //         `store_url` varchar(255) NOT NULL,
        //         `keyword` varchar(255) NULL,
        //     ) ENGINE=InnoDB {$charset_collate};";
        default:
            return '';
    }
}


// Function to insert default values into tables
function address_validator_insert_default_values($table_name) {
    global $wpdb;
    $home_url = home_url();
    $parsed_url = parse_url($home_url);
    $host_name = isset($parsed_url['host']) ? $parsed_url['host'] : '';

    switch ($table_name) {
        case 'shop_add_prompts':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name, // Use home_url() instead of $_SERVER['HTTP_HOST']
                    'prompt_appear' => 'Modal window',
                    'valid_opt_usps' => 0,
                    'valid_opt_zipcode' => 0,
                    'valid_opt_sep_apt' => 0,
                    'adv_opt_proper_format' => 0,
                    'keyword_skip_add_valid' => 'text-data',
                    'time_to_update_order' => null, // Assuming this is a nullable column
                    ),
                    array('%s', '%s', '%d', '%d', '%d', '%d', '%s', '%d') // Adjust data types for each column
                );
                break;

        case 'shop_gen_customization':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                    'trim_color' => '#ffffff',
                    'border_color' => '#ffffff',
                    'bg_color' => '#ffffff',
                    'text_color' => '#000000',
                    'hover_color' => '#84afff',
                    'btn_bg_color' => '#367eff',
                    'btn_text_color' => '#ffffff',
                    'corner_style' => 'Rounded corners',
                    'border_width' => null,
                    'outline_focus_ele' => 0,
                    'hide_msg' => 0,
                    'close_btn_prompts' => 'Close',
                    'msg_correct_addr' => 'Thanks for specifying  an accurate shipping address !',
                    'input_custom_css' => 'Example: 
                    #addressValidatoBox{
                    font-family:Arial, Helvetica , sans-serif;
                    color: #32CD32;
                    }',
                )
            );
            break;

        case 'shop_suggested_cor_prompts':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                    'show_exit_btn' => 0,
                    'show_accept_btn' => 0,
                    'show_devider' => 0,
                    'show_opt_borders' => 0 ,
                    'show_opt_btn' => 0 ,
                    'highlight_changes_color' => '#367eff',
                    'opt_border_color' => '#367eff',
                    'title' => 'Please select shipping address' ,
                    'subtitle' => 'To ensure prompt and accurate delivery, we suggest a modified shipping address.',
                    'suggested_addr_label' => 'Suggested address',
                    'original_addr_label' => 'Original address',
                    'original_addr_opt_btn' => 'Keep Original',
                    'acpt_changes_btn_label' => 'Accept changes',
                    'suggested_addr_opt_sel' => 'Your shipping address has been updated',
                    'original_addr_opt_sel' =>  'Thanks for confirming your shipping address',
                )
            );
            break;
        case 'shop_unveri_addr_prompts':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                    'prompts_inacc_addr' => 'Is the shipping address correct?' ,
                    'prompts_apt_miss' => 'Did you specify the correct apt/suite/unit?',
                    'addr_btn_label' => 'Update address',
                    'proceed_btn_label' => 'Proceed',
                    'btn_open_addr' => 'Update or confirm address',
                )
            );
            break;
        case 'shop_validation_addr':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                    'en_gen_msg' => 'your_default_value',
                    'en_po_boxes' => 0 ,
                    'en_usps_gopost' => 0,
                    'en_high_con_route' => 0 ,
                    'en_pvt_mailbox' => 0,
                    'en_parcel_locker' => 0,
                    'en_dhl_pack' => 0,
                    'en_dhl_pack_addr' => 0,
                    'en_addr_miss_house' => 0,
                    'en_addr_miss_str' => 0,
                    'en_extra_long_addr' => 0,
                    'en_addr_emojis' => 0,
                    'en_addr_nlc_euro' => 0 ,
                    'en_addr_nlc_acc' => 0,
                    'en_ship_cont_state' => 0,
                    'en_mili_addr' => 0,
                    'en_non_numeric_postalcode' => 0,
                    'en_rural_addr' => 0,
                )
            );
            break;
        case 'shop_validation_addr_msg':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                    'cus_gen_msg' => 'text-field',
                    'cus_warn_msg_po' => 'We cannot deliver to PO Box. Please provide a valid street address.',
                    'cus_warn_msg_usps' => 'We cannot deliver to USPS gopost addresses',
                    'cus_warn_msg_high' => 'We cannot deliver to  Highway Contract  Routes',
                    'cus_warn_msg_pvt' => 'We cannot deliver to a private mailbox . Please  provide  a valid street addresses.',
                    'cus_warn_msg_parcel' => 'We cannot deliver to a Parcel Locker . Please  provide  a valid street addresses.' ,
                    'cus_warn_msg_dhl' => 'We cannot deliver to a Packstations. Please  provide  a valid street addresses.',
                    'cus_warn_msg_dhl_pack' => 'Please specify the Packststaions # on the apt/suite line.',
                    'cus_warn_msg_addr_miss_house' => 'Please specify a street number.',
                    'cus_warn_msg_addr_miss_str' => 'Please specify a street name.' ,
                    'cus_warn_msg_extra_long_addr' => 'Address is too long - please limit to  40 characters' ,
                    'cus_warn_msg_addr_emojis' => 'No emojis allowed.' ,
                    'cus_warn_msg_nlc_euro' => 'Please specify address with Latin characters only.',
                    'cus_warn_msg_nlc_acc' => 'Please  specify  address with Latin characters only . Accented  characters allowed',
                    'cus_warn_msg_cont_state' => 'We only ship to contiguous states. ',
                    'cus_warn_msg_mili_addr' => 'We do not ship to military addresses',
                    'cus_warn_msg_non_numeric_postalcode' => 'Only numbers allowed in the post code field' ,
                    'cus_warn_msg_rural_addr' => 'We cannot deliver to rural  addresses. Please provide  an alternative  address.',
                )
            );
            break;
        case 'shop_addr_keyword':
            $wpdb->insert(
                $wpdb->prefix . $table_name,
                array(
                    'store_url' => $host_name,
                    'id' => 1,
                )
            );
        default:
            // Handle default case if needed
            break;
    }
    
}



?>