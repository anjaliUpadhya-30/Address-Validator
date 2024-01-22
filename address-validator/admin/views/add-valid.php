<?php
define("AV_PLUGIN_URL_IMAGE", plugins_url());

$table = "shop_addr_gapikey";
$where_con  =   "WHERE scriptadded=1";
$results1 = retrieve_plugin_data($table,$where_con); 

$table2 = "shop_add_prompts";
$where_con2  =   "";
$results2 = retrieve_plugin_data($table2,$where_con2); 

$table3 = "shop_gen_customization";
$where_con3  =   "";
$results3 = retrieve_plugin_data($table3,$where_con3); 

$table4 = "shop_suggested_cor_prompts";
$where_con4  =   "";
$results4 = retrieve_plugin_data($table4,$where_con4); 

$table5 = "shop_unveri_addr_prompts";
$where_con5  =   "";
$results5 = retrieve_plugin_data($table5,$where_con5); 

$table6 = "shop_validation_addr";
$where_con6  =   "";
$results6 = retrieve_plugin_data($table6,$where_con6);

$table7 = "shop_validation_addr_msg";
$where_con7 =   "";
$results7 = retrieve_plugin_data($table7,$where_con7);


//echo "<pre>"; print_r($results2);
//echo "<pre>"; print_r($results3);
?>
 <style>

.success-message {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    text-align: center; /* Center text horizontally */
    z-index: 9999; /* Set a high z-index to make sure it\'s above other elements */
}
</style><section>
<div class="address-ninjaz-tag-bg">
    <div class="container-fluid">
        <div class="address-ninjaz-tag">
            <div class="address-ninjaz-tag-img">
                <h5> 
                    
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <rect width="36" height="36" rx="4" fill="#DCF366"/>
                            <path d="M8.9422 23.1428H6L11.925 7.71423H15.233L21.158 23.1428H18.6317L13.7353 10.6975H13.5099L8.9422 23.1428ZM9.15792 16.7142H17.8707V18.8085H9.15792V16.7142Z" fill="#111111"/>
                            <path d="M17.2216 12.8571H14.6011L20.5262 28.2856H24.0748L29.9999 12.8571H27.0577L22.4818 25.3024H21.9662L17.2216 12.8571ZM17.9998 18.6428H26.7126V16.5485H17.9998V18.6428Z" fill="#111111"/>
                          </svg>
                   
                    Address Validator
                </h5>
                <a href="#">Powered by Webninjaz</a>
            </div>
            <div class="address-ninjaz-tag-notify">
                <div class="address-notify">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.80015 17.4001H10.6196L11.1092 20.8274C11.1725 21.2708 11.5523 21.6001 12.0002 21.6001C12.448 21.6001 12.8278 21.2708 12.8911 20.8274L13.3807 17.4001H16.2001C17.5256 17.4001 18.6001 16.3256 18.6001 15.0001V14.4001C18.6001 13.097 17.5616 12.0364 16.267 12.001L15.5367 8.71446C16.2889 8.30928 16.8001 7.51439 16.8001 6.6001V6.0001C16.8001 4.67461 15.7256 3.6001 14.4001 3.6001H9.60015C8.27466 3.6001 7.20015 4.67461 7.20015 6.0001V6.6001C7.20015 7.51439 7.7114 8.30928 8.46362 8.71446L7.73328 12.001C6.43871 12.0364 5.40015 13.097 5.40015 14.4001V15.0001C5.40015 16.3256 6.47466 17.4001 7.80015 17.4001ZM9.57739 12.0001H11.1001C11.5972 12.0001 12.0001 12.403 12.0001 12.9001C12.0001 13.3972 11.5972 13.8001 11.1001 13.8001H8.10015V13.7916L7.7825 13.8003C7.45983 13.8092 7.20015 14.0746 7.20015 14.4001V15.0001C7.20015 15.3315 7.46878 15.6001 7.80015 15.6001H16.2001C16.5315 15.6001 16.8001 15.3315 16.8001 15.0001V14.4001C16.8001 14.0746 16.5405 13.8092 16.2178 13.8003L14.8144 13.7619L13.4841 7.77556L14.6831 7.12975C14.8757 7.02597 15.0001 6.82621 15.0001 6.6001V6.0001C15.0001 5.66873 14.7315 5.4001 14.4001 5.4001H9.60015C9.26878 5.4001 9.00015 5.66873 9.00015 6.0001V6.6001C9.00015 6.82621 9.12458 7.02597 9.31724 7.12974L10.5162 7.77556L9.57739 12.0001Z" fill="#4A4A4A"/>
                    </svg>
                </div>
                <div class="address-dots">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M7.20022 12.0001C7.20022 12.9942 6.39433 13.8001 5.40022 13.8001C4.40611 13.8001 3.60022 12.9942 3.60022 12.0001C3.60022 11.006 4.40611 10.2001 5.40022 10.2001C6.39433 10.2001 7.20022 11.006 7.20022 12.0001Z" fill="#4A4A4A"/>
                        <path d="M13.8002 12.0001C13.8002 12.9942 12.9943 13.8001 12.0002 13.8001C11.0061 13.8001 10.2002 12.9942 10.2002 12.0001C10.2002 11.006 11.0061 10.2001 12.0002 10.2001C12.9943 10.2001 13.8002 11.006 13.8002 12.0001Z" fill="#4A4A4A"/>
                        <path d="M20.4002 12.0001C20.4002 12.9942 19.5943 13.8001 18.6002 13.8001C17.6061 13.8001 16.8002 12.9942 16.8002 12.0001C16.8002 11.006 17.6061 10.2001 18.6002 10.2001C19.5943 10.2001 20.4002 11.006 20.4002 12.0001Z" fill="#4A4A4A"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="validator-ninja-tab-bg">
    <div class="container-fluid">
        <div class="validator-ninja-tab">
            <ul id="tabs">
                <li>Address prompts</li>
                <li>Validation rules</li>
                 <li>API Settings</li>
                <li>Help</li>
            </ul>

            <!-- =========address prompt start======= -->
            <div class="validator-tabs-content">
               <div class="validator-common-prompt">
                <div class="validator-prompt-img">
                    <img src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/address-1.svg' . '" alt="">
                </div>
                <div class="validator-prompt-content">
                    <h2>What are address prompts?</h2>
                    <p>This serves as the primary barrier against errors in shipping addresses. Address prompts can either: (a) provide recommended corrections, or (b) alert customers about invalid addresses when no alternatives are possible. For instance, suggesting a different address for "123 Test Street" would be unfeasible.</p>
                </div>
               </div>

                <!-- ========new tab========= -->

               <div class="validator-work-ninja-tab">
                <ul id="work-tabs">
                   <li>How does it work?</li>
                   <li>Advanced</li>
                   <li>Customization</li>
                </ul>

                <!-- ==========how does it work start=========== -->

                <form id="shop-add-prom" >
                    <div class="validator-work-tabs-content">
                        <div class="validator-work-modal">
                            <div class="validator-work-modal-content">
                                <div class="validator-modal-prompt">
                                    <h2>How does “address prompts” work?</h2>
                                    <p>The address prompts appear on the “Thank You” page after “checkout”.</p>
                                    <h5>How do you want the prompts to appear?</h5>
                                </div>
                                <div class="validator-modal-window">
                                    <ul id="btn-tabs">
                                        <li <?php if($results2[0]->prompt_appear=='Modal'){ echo 'class="active"';} ?>>
                                            <input type="radio" value="Modal" name="prompt_appear" id="modal" <?php if($results2[0]->prompt_appear=='Modal'){ echo 'checked';} ?> >
                                            <label for="modal">Modal window <span class="text-bold"> (recommended)</span></label>
                                        </li>
                                        <li <?php if($results2[0]->prompt_appear=='Embedded'){ echo 'class="active"';} ?>>
                                           <input type="radio" value="Embedded"  name="prompt_appear" id="map" <?php if($results2[0]->prompt_appear=='Embedded'){ echo 'checked';} ?>>
                                           <label for="map">Embedded below the map</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="validator-modal-paragraph">
                                    <p>Shipping addresses on the Shopify orders will be updated automatically when customers select the suggested address or make changes via the address form.</p>
                                    <p>You can see the app on the Thank You page by going through the entire checkout process, including the payment step.</p>
                                    <p>Please contact us at support@roboturk.co if you have Shopify Plus to incorporate the address prompts into the checkout. Otherwise, the app can only load after checkout due to Shopify limitations.</p>
                                </div>
                            </div>
                            <!-- =====3 tab==== -->
                            <div class="validator-work-modal-content-img">
                                <div class="tabs-btn-content">
                                   <img  src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/suggest-address.png' . '" alt="">
                                </div>
                                <div class="tabs-btn-content">
                                   <img  src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/suggest-address.png' . '"  alt="">
                                </div>
                            </div>
                            <!-- =====3 tab end==== -->
                        </div>
                    </div>
                    <!-- ==========how does it work end=========== -->

                    <!-- ===========advaned======== -->
                    <div class="validator-work-tabs-content">
                        <div class="advanced-address-validator">
                            <div class="advanced-address-validator-multiple">
                                <div class="advanced-address-validator-usps-content all-cb-div">
                                    <h2>US address validation options</h2>
                                    <div class="form-check">
                                        <input class="form-check-input" name="valid_opt_usps" type="checkbox" value="1" id="defaultCheck1" <?php if($results2[0]->valid_opt_usps==1){ echo "checked";}?>>
                                        <label class="form-check-label" for="defaultCheck1">
                                          <!-- Default checkbox -->
                                            <div class="advanced-address-validator-common-content">
                                                <h5>Do you only ship with USPS?</h5>
                                                <p>UPS/FedEx can ship to some addresses USPS cannot. This option determines the appropriate data sources to use for validation.</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="valid_opt_zipcode" value="1" id="defaultCheck2" <?php if($results2[0]->valid_opt_zipcode==1){ echo "checked";}?>>
                                        <label class="form-check-label" for="defaultCheck2">
                                            <div class="advanced-address-validator-common-content">
                                                <h5>Do you want to ignore ZIP+4 codes?</h5>
                                                <p>ZIP+4 codes are the last 4 digits of a 9-digit zipcode. While not required by USPS, these can help ensure the fastest and most accurate delivery possible.</p>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="valid_opt_sep_apt" value="1" id="defaultCheck3" <?php if($results2[0]->valid_opt_sep_apt==1){ echo "checked";}?>>
                                        <label class="form-check-label" for="defaultCheck3">
                                            <div class="advanced-address-validator-common-content">
                                               <h5>Do you need to separate the street address from the apt #?</h5>
                                               <p>USPS formatting dictates that the apartment # follow the street address on the same field. However, some 3PLs require the two components in separate fields (address_1 and address_2.</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="advanced-option-formate all-cb-div">
                                <h2>Advanced options</h2>
                                <div class="form-check">
                                    <input class="form-check-input" name="adv_opt_proper_format" type="checkbox" value="1" id="defaultCheck4" <?php if($results2[0]->adv_opt_proper_format==1){ echo "checked";}?>>
                                    <label class="form-check-label" for="defaultCheck4">
                                        <div class="advanced-address-validator-common-content">
                                            <h5>Do you want to ignore proper address formatting?</h5>
                                            <p>If enabled, no suggested changes will be shown if the only discrepancies are merely formatting, capitalizations or abbreviations. For example, “20 main st” would be equivalent to “20 Main Street” and no suggested changes will be shown. While proper formatting is not required for accurate delivery, it may be useful for other purposes.</p>
                                        </div>
                                    </label>
                                </div>
                                <div class="advanced-ad-ignore">
                                    <h5>Do you want to ignore proper address formatting?</h5>
                                    <p>If enabled, no suggested changes will be shown if the only discrepancies are merely formatting, capitalizations or abbreviations. For example, “20 main st” would be equivalent to “20 Main Street” and no suggested changes will be shown. While proper formatting is not required for accurate delivery, it may be useful for other purposes.</p>
                                    <div id="output"></div>
                                    <div class="advanced-ad-ignore-btn">
                                        <input type="text" class="form-input"  name="keyword_skip_add_valid" id="textInput" placeholder="Value">
                                        <button type="button" class="btn adi-btn"  onclick="addKeyword()">Add</button>
                                    </div>
                                </div>
                                <div class="advanced-ad-checkout">
                                    <h5>How much time does the customer have to update the order after the checkout is complete?</h5>
                                    <div class="ad-value-target">
                                    <select id="time_to_update_order" name="time_to_update_order">
                                        <option value="120" <?php if($results2[0]->time_to_update_order == 120){ echo "selected";} ?> >2 minutes</option>
                                        <option value="300" <?php if($results2[0]->time_to_update_order == 300){ echo "selected";} ?> >5 minutes</option>
                                        <option value="600" <?php if($results2[0]->time_to_update_order == 600){ echo "selected";} ?> >10 minutes</option>
                                        <option value="1800" <?php if($results2[0]->time_to_update_order == 1800){ echo "selected";} ?> >30 minutes</option>
                                        <option value="3600" <?php if($results2[0]->time_to_update_order == 3600){ echo "selected";} ?> >1 hour</option>
                                        <option value="7200" <?php if($results2[0]->time_to_update_order == 7200){ echo "selected";} ?> >2 hours</option>
                                        <option value="10800" <?php if($results2[0]->time_to_update_order == 10800){ echo "selected";} ?> >3 hours</option>
                                        <option value="21600" <?php if($results2[0]->time_to_update_order == 21600){ echo "selected";} ?> >6 hours</option>
                                        <option value="43200" <?php if($results2[0]->time_to_update_order == 43200){ echo "selected";} ?> >12 hours</option>
                                        <option value="86400" <?php if($results2[0]->time_to_update_order == 86400){ echo "selected";} ?> >1 day</option>
                                        <option value="172800" <?php if($results2[0]->time_to_update_order == 172800){ echo "selected";} ?> >2 days</option>
                                        <option value="259200" <?php if($results2[0]->time_to_update_order == 259200){ echo "selected";} ?> >3 days</option>
                                        <option value="604800" <?php if($results2[0]->time_to_update_order == 604800){ echo "selected";} ?> >1 week</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="advanced-ad-pause-app">
                                    <div class="apa-pause">
                                    <h5>Pause App</h5>
                                    <p> Active  </p>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                          <path d="M9.99998 14C9.58577 14 9.24999 13.6642 9.25 13.25L9.25006 9.74999C9.25007 9.33577 9.58586 8.99999 10.0001 9C10.4143 9.00001 10.7501 9.3358 10.7501 9.75001L10.75 13.25C10.75 13.6642 10.4142 14 9.99998 14Z" fill="#4A4A4A"/>
                                           <path d="M9 7C9 6.44772 9.44772 6 10 6C10.5523 6 11 6.44772 11 7C11 7.55228 10.5523 8 10 8C9.44772 8 9 7.55228 9 7Z" fill="#4A4A4A"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10ZM15.5 10C15.5 13.0376 13.0376 15.5 10 15.5C6.96243 15.5 4.5 13.0376 4.5 10C4.5 6.96243 6.96243 4.5 10 4.5C13.0376 4.5 15.5 6.96243 15.5 10Z" fill="#4A4A4A"/>
                                        </svg>
                                    </div>
                                </div>
                                <p>Need to pause the app while you configure the settings?</p>
                                <button type="button" class="btn pause-btn">Pause app</button>
                            </div>
                        </div>
                        <div id="success-message"></div>  
                        <div id="failure-message"></div>
                    </div>
                </form>
               </div>
               <!-- ===========advaned end======== -->
       

               <!-- =============Customization start========= -->
           
               <div class="validator-work-tabs-content">
                <div class="pst-gsu">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <nav class="scroll-navbar">
                                <ul>
                                   <li><a class="tab" href="#home">General</a></li>
                                   <li><a class="tab" href="#services">Suggested Corrections</a></li>
                                   <li><a class="tab" href="#about">Unverfiable Addresses</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="scroll-ctm-bg">
                    <form id="shop-gen-customization">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="all-left-sticky sticky-top">
                                <div class="scroll-sticky scroll-right-correct">
                                     <!-- <img src="./images/suggest-address-.svg" alt=""> -->
                                     <!-- one -->
                                    <div class="scroll-rc-content">
                                        <p>Message when a correct address is detected</p>
                                        <div class="rc-appreciate">
                                            <div>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                <g clip-path="url(#clip0_94_12972)">
                                                    <path d="M20 9.41406C14.1629 9.41406 9.41406 14.1629 9.41406 20C9.41406 25.8371 14.1629 30.5859 20 30.5859C25.8371 30.5859 30.5859 25.8371 30.5859 20C30.5859 14.1629 25.8371 9.41406 20 9.41406ZM23.7766 18.7281L19.9225 22.8687C19.7058 23.1016 19.4037 23.2363 19.0857 23.242C19.0787 23.2421 19.0717 23.2422 19.0647 23.2422C18.7542 23.2422 18.456 23.1189 18.2361 22.8989L16.2526 20.9154C15.7949 20.4578 15.7949 19.7158 16.2526 19.2581C16.7102 18.8005 17.4523 18.8005 17.9098 19.2581L19.0345 20.3828L22.0612 17.1312C22.5022 16.6575 23.2437 16.6309 23.7174 17.0719C24.191 17.5129 24.2176 18.2544 23.7766 18.7281Z" fill="#C0D749"/>
                                                    <path d="M38.8281 18.8281H37.2704C36.9926 14.6455 35.2319 10.7515 32.2402 7.75977C29.2485 4.76812 25.3545 3.00734 21.1719 2.72961V1.17188C21.1719 0.524687 20.6472 0 20 0C19.3528 0 18.8281 0.524687 18.8281 1.17188V2.72961C14.6455 3.00742 10.7515 4.7682 7.75977 7.75984C4.76812 10.7515 3.00734 14.6455 2.72961 18.8281H1.17188C0.524687 18.8281 0 19.3528 0 20C0 20.6472 0.524687 21.1719 1.17188 21.1719H2.72961C3.00742 25.3545 4.76812 29.2485 7.75984 32.2402C10.7516 35.2319 14.6456 36.9927 18.8282 37.2704V38.8281C18.8282 39.4753 19.3529 40 20.0001 40C20.6473 40 21.172 39.4753 21.172 38.8281V37.2704C25.3545 36.9926 29.2486 35.2318 32.2403 32.2402C35.232 29.2485 36.9927 25.3545 37.2705 21.1719H38.8281C39.4753 21.1719 40 20.6472 40 20C40 19.3528 39.4753 18.8281 38.8281 18.8281ZM21.1719 34.9208V33.4486C21.1719 32.8014 20.6472 32.2767 20 32.2767C19.3528 32.2767 18.8281 32.8014 18.8281 33.4486V34.9208C11.508 34.3512 5.64883 28.492 5.07922 21.1719H6.55133C7.19852 21.1719 7.7232 20.6472 7.7232 20C7.7232 19.3528 7.19852 18.8281 6.55133 18.8281H5.07922C5.64883 11.508 11.508 5.64883 18.8281 5.07922V6.55141C18.8281 7.19859 19.3528 7.72328 20 7.72328C20.6472 7.72328 21.1719 7.19859 21.1719 6.55141V5.07922C28.492 5.64883 34.3512 11.508 34.9208 18.8281H33.4487C32.8015 18.8281 32.2768 19.3528 32.2768 20C32.2768 20.6472 32.8015 21.1719 33.4487 21.1719H34.9208C34.3512 28.492 28.492 34.3512 21.1719 34.9208Z" fill="#C0D749"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_94_12972">
                                                        <rect width="40" height="40" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                              </svg>
                                            </div>
                                            <p>Appreciate your precision in providing a correct shipping address, thank you!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="scroll-left-inaccurate">
                                <div class="general-scroll">
                                    <div class="scroll-nav-page">
                                        <div id="home" class="page">
                                            <div class="scroll-page-general">
                                                <h2>General</h2>
                                                <p>Corner style</p>
                                                <div class="scroll-corner-style">
                                                    <div>
                                                       <input type="radio"  name="corner_style" value="Rounded" id="rounded" <?php if($results3[0]->corner_style=="Rounded"){ echo "checked";} ?> >
                                                       <label for="rounded" class="rounded-btn" onclick="toggleActive(this)">Rounded corners</label>
                                                    </div>
                                                    <div>
                                                       <input type="radio" name="corner_style" value="Square" id="square" <?php if($results3[0]->corner_style=="Square"){ echo "checked";} ?> >
                                                       <label for="square" class="square-btn" onclick="toggleActive(this)">Square corners</label>
                                                    </div>
                                                </div>
                                                <div class="scroll-border-width">
                                                    <h3>Border width</h3>
                                                    <select name="border_width" id="border_width">
                                                        <option value="0.0px" <?php if($results3[0]->border_width == '0.0px'){ echo "selected";} ?> >0.0px</option>
                                                        <option value="0.5px" <?php if($results3[0]->border_width == '0.5px'){ echo "selected";} ?> >0.5px</option>
                                                        <option value="1.0px" <?php if($results3[0]->border_width == '1.0px'){ echo "selected";} ?> >1.0px</option>
                                                        <option value="1.5px" <?php if($results3[0]->border_width == '1.5px'){ echo "selected";} ?> >1.5px</option>
                                                        <option value="2.0px" <?php if($results3[0]->border_width == '2.0px'){ echo "selected";} ?> >2.0px</option>
                                                        <option value="2.5px" <?php if($results3[0]->border_width == '2.5px'){ echo "selected";} ?> >2.5px</option>
                                                        <option value="3.0px" <?php if($results3[0]->border_width == '3.0px'){ echo "selected";} ?> >3.0px</option>
                                                        <option value="3.5px" <?php if($results3[0]->border_width == '3.5px'){ echo "selected";} ?> >3.5px</option>
                                                        <option value="4.0px" <?php if($results3[0]->border_width == '4.0px'){ echo "selected";} ?> >4.0px</option>
                                                        <option value="4.5px" <?php if($results3[0]->border_width == '4.5px'){ echo "selected";} ?> >4.5px</option>
                                                        <option value="5.0px" <?php if($results3[0]->border_width == '5.0px'){ echo "selected";} ?> >5.0px</option>
                                                    </select>
                                                </div>
                                                <div class="scroll-color-picker">
                                                    <div>
                                                        <label for="color1">Trim</label>
                                                        <span><input type="color" id="color1" name="trim_color" value="<?php echo $results3[0]->trim_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color2">Border</label>
                                                        <span><input type="color" id="color2" name="border_color" value="<?php echo $results3[0]->border_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color3">Background</label>
                                                        <span> <input type="color" id="color3" name="bg_color" value="<?php echo $results3[0]->bg_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color4">Text</label>
                                                        <span> <input type="color" id="color4" name="text_color" value="<?php echo $results3[0]->text_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color5">Hover</label>
                                                        <span><input type="color" id="color5" name="hover_color" value="<?php echo $results3[0]->hover_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color6">Button Background</label>
                                                        <span> <input type="color" id="color6" name="btn_bg_color" value="<?php echo $results3[0]->btn_bg_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color7">Button Border</label>
                                                        <span> <input type="color" id="color7" name="btn_border_color"  value="<?php echo $results3[0]->btn_border_color; ?>"></span>
                                                    </div>
                                                    <div>
                                                        <label for="color8">Button Text</label>
                                                        <span> <input type="color" id="color8" name="btn_text_color" value="<?php echo $results3[0]->btn_text_color; ?>"></span>
                                                    </div>
                                                </div>
                                                <div class="advanced-address-validator-usps-content all-cb-div">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="outline_focus_ele" value="1" id="defaultCheck41" <?php if($results3[0]->outline_focus_ele=="1"){ echo "checked";} ?>>
                                                        <label class="form-check-label" for="defaultCheck41">
                                                            <div class="advanced-address-validator-common-content">
                                                               <h5>Do you only ship with USPS?</h5>
                                                               <p>UPS/FedEx can ship to some addresses USPS cannot. This option determines the appropriate data sources to use for validation.</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="hide_msg" value="1" id="defaultCheck42" <?php if($results3[0]->hide_msg=="1"){ echo "checked";} ?>>
                                                        <label class="form-check-label" for="defaultCheck42">
                                                            <div class="advanced-address-validator-common-content">
                                                               <h5>Do you want to hide messages when a customer specifies a correct address?</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="scroll-border-width general-cpt">
                                                   <h3>Close button on prompts</h3>
                                                   <input name="close_btn_prompts" type="text" id="inputText" placeholder="Close" value="<?php echo $results3[0]->close_btn_prompts; ?>">
                                                </div>
                                                <div class="scroll-border-width general-cpt">
                                                    <h3>Message when a correct address is detected</h3>
                                                    <input type="text" id="inputText" name="msg_correct_addr" placeholder="Thanks for specifying an accurate shipping address!" value="<?php echo $results3[0]->msg_correct_addr; ?>">  
                                                </div>
                                                <div class="scroll-border-width general-cpt">
                                                   <h3>Input Custom CSS</h3>
                                                   <textarea id="projectDetails" name="input_custom_css" rows="4" placeholder="Enter message"><?php echo $results3[0]->input_custom_css; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="success-message"></div>  
                        <div id="failure-message"></div>
                    </div>
                    </form>
                    
                    
                    <!-- 2nd row -->
   
                    <div class="unverify-two-row">
                        <form id="shop-suggested-cor-prompts">
                        <div class="row">
                            <div class="col-lg-6">
                               <!-- two -->
                                <div class=" scroll-right-prompt-bg">
                                    <div class="scroll-right-prompt-1">
                                        <h5>Suggested corrected prompts</h5>
                                        <div class="scroll-rshiping-adrs-bg">
                                            <div class="scroll-rshiping-adrs">
                                                <div class="sadr-accurate"> 
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                            <path d="M3.33325 8.33331L14.9999 3.33331L24.9999 8.33331L35.5049 3.83115C35.9281 3.64985 36.4179 3.8458 36.5993 4.26883C36.6436 4.37256 36.6666 4.48425 36.6666 4.5971V31.6666L24.9999 36.6666L14.9999 31.6666L4.49485 36.1688C4.07182 36.3501 3.58194 36.1541 3.40064 35.7311C3.35617 35.6275 3.33325 35.5156 3.33325 35.4028V8.33331ZM24.9999 32.9398V11.9599L24.8919 12.0061L14.9999 7.0601V28.0401L15.1079 27.9938L24.9999 32.9398Z" fill="#C0D749"/>
                                                        </svg>
                                                    </div>
                                                    <h2>Please select accurate shipping address</h2>
                                                    <p>For swift and precise delivery, we recommend to select the suggested shipping address.</p>
                                                </div>
                                            </div>
                                            <div class="scroll-tanya-adrs-bg">
                                                <div class="scroll-tanya-adrs">
                                                    <h4>Suggested address</h4>
                                                    <p>Suite 336 784 <span>Tanya Ports, Friesenbury</span>, NC 51587-5771</p>
                                                    <button type="button" class="tanya-adr-btn">Selected address</button>
                                                </div>
                                                <div class="scroll-tanya-adrs">
                                                    <h4>Your typed address</h4>
                                                    <p>Suite 336 784 Tanya, Friesanbury, NC 51587-5771</p>
                                                    <button type="button" class="tanya-adr-btn">Selected address</button>
                                                </div>
                                            </div>
                                            <button type="button" class="tanya-close-btn">Close</button>
                                        </div>
                                        <div class="valid-tanya-osd">
                                            <h3>Suggested address option selected</h3>
                                            <div class="valid-tanya-osd-update">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                         <path d="M19.3368 22.9332L21.6901 25.2865L35.7992 11.1772L38.1564 13.5342L21.6901 30.0005L11.0834 19.3938L13.4404 17.0368L16.9817 20.5782L19.3368 22.9332ZM19.3396 18.2203L27.5939 9.96582L29.9444 12.3163L21.6901 20.5707L19.3396 18.2203ZM14.6284 27.6455L12.2733 30.0005L1.66675 19.3938L4.02376 17.0368L6.3788 19.392L6.37681 19.3938L14.6284 27.6455Z" fill="#C0D749"/>
                                                    </svg>
                                                </div>
                                                <p>Your shipping address has been updated!</p>
                                            </div>
                                        </div>
                                        <div class="valid-tanya-osd">
                                            <h3>Original address option selected</h3>
                                            <div class="valid-tanya-osd-update">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                          <path d="M19.3368 22.9332L21.6901 25.2865L35.7992 11.1772L38.1564 13.5342L21.6901 30.0005L11.0834 19.3938L13.4404 17.0368L16.9817 20.5782L19.3368 22.9332ZM19.3396 18.2203L27.5939 9.96582L29.9444 12.3163L21.6901 20.5707L19.3396 18.2203ZM14.6284 27.6455L12.2733 30.0005L1.66675 19.3938L4.02376 17.0368L6.3788 19.392L6.37681 19.3938L14.6284 27.6455Z" fill="#C0D749"/>
                                                    </svg>
                                                </div>
                                                <p>Thanks for confirming your shipping address!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div id="services" class="page">
                                    <div class="advanced-address-validator-usps-content all-cb-div scr-suggest">
                                        <h2>US address validation options</h2>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="show_exit_btn" id="defaultCheck25" value="1" <?php if($results4[0]->show_exit_btn=="1"){ echo "checked";} ?>>
                                            <label class="form-check-label" for="defaultCheck25">
                                                <!-- Default checkbox -->
                                                <div class="advanced-address-validator-common-content">
                                                    <h5>Show exit button?</h5>
                                                    <p>UPS/FedEx can ship to some addresses USPS cannot. This option determines the appropriate data sources to use for validation.</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="show_accept_btn" id="defaultCheck26" value="1" <?php if($results4[0]->show_accept_btn=="1"){ echo "checked";} ?>>
                                            <label class="form-check-label" for="defaultCheck26">
                                                <div class="advanced-address-validator-common-content">
                                                    <h5>Show accept button?</h5>
                                                    <p>ZIP+4 codes are the last 4 digits of a 9-digit zipcode. While not required by USPS, these can help ensure the fastest and most accurate delivery possible.</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="show_devider" type="checkbox" id="defaultCheck27" value="1" <?php if($results4[0]->show_devider=="1"){ echo "checked";} ?>>
                                            <label class="form-check-label" for="defaultCheck27">
                                                <div class="advanced-address-validator-common-content">
                                                    <h5>Show divider?</h5>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  name="show_opt_borders" id="defaultCheck28" value="1" <?php if($results4[0]->show_opt_borders=="1"){ echo "checked";} ?> >
                                            <label class="form-check-label" for="defaultCheck28">
                                                <div class="advanced-address-validator-common-content">
                                                    <h5>Show option borders?</h5>
                                                    <p>USPS formatting dictates that the apartment # follow the street address on the same field. However, some 3PLs require the two components in separate fields (address_1 and address_2).</p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="show_opt_btn" id="defaultCheck29" value="1" <?php if($results4[0]->show_opt_btn=="1"){ echo "checked";} ?>>
                                            <label class="form-check-label" for="defaultCheck29">
                                                <div class="advanced-address-validator-common-content">
                                                     <h5>Show option buttons?</h5>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="scroll-color-picker scp-width">
                                        <div>
                                           <label for="color9">Highlight Changes</label>
                                           <span><input type="color" id="color1" name="highlight_changes_color" value="<?php echo $results4[0]->highlight_changes_color;?>"></span>
                                        </div>
                                        <div>
                                           <label for="color10">Option Border</label>
                                           <span><input type="color" id="color2" name="opt_border_color" value="<?php echo $results4[0]->opt_border_color;?>"></span>
                                        </div>
                                    </div>
                                    <div class="scroll-sgc-title">
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Title</h3>
                                           <input type="text" id="inputText" name="title" placeholder="Please select shipping address" value="<?php echo $results4[0]->title;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Original address option button</h3>
                                           <input type="text" id="inputText" name="original_addr_opt_btn"  placeholder="Suggested address" value="<?php echo $results4[0]->original_addr_opt_btn;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Subtitle</h3>
                                           <input type="text" id="inputText" name="subtitle" placeholder="To ensure prompt and accurate delivery, we suggest a modified shipping address." value="<?php echo $results4[0]->subtitle;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Accept changes button label</h3>
                                            <input type="text" id="inputText" name="acpt_changes_btn_label" placeholder="Suggested address" value="<?php echo $results4[0]->acpt_changes_btn_label;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Suggested address label</h3>
                                           <input type="text" id="inputText" name="suggested_addr_label" placeholder="Suggested address" value="<?php echo $results4[0]->suggested_addr_label;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Suggested address option selected</h3>
                                           <input type="text" id="inputText" name="suggested_addr_opt_sel" placeholder="Suggested address" value="<?php echo $results4[0]->suggested_addr_opt_sel;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Original address label</h3>
                                            <input type="text" id="inputText" name="original_addr_label" placeholder="Suggested address" value="<?php echo $results4[0]->original_addr_label;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Original address option selected</h3>
                                           <input type="text" id="inputText" name="original_addr_opt_sel" placeholder="Suggested address"  value="<?php echo $results4[0]->original_addr_opt_sel;?>">
                                        </div>       
                                    </div>
                                </div>
                            </div>             
                        </div>
                        </form>
                    </div>

                    <!-- 3rd row -->
                    <form id="shop-unveri-addr-prompts">
                    <div class="unverify-third-row">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- three -->
                                <div class=" scroll-right-inacc">
                                    <div class="scroll-right-prompt">
                                        <h5>Prompt when an inaccurate address is detected</h5>
                                        <div class="scroll-rshiping-adrs-bg">
                                            <div class="scroll-rshiping-adrs">
                                                <div class="sadr-accurate">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                            <path d="M36.2666 26.5333L25.6 7.33331C24.1666 4.74998 22.1833 3.33331 20 3.33331C17.8166 3.33331 15.8333 4.74998 14.4 7.33331L3.7333 26.5333C2.3833 28.9833 2.2333 31.3333 3.31663 33.1833C4.39996 35.0333 6.5333 36.05 9.3333 36.05H30.6666C33.4666 36.05 35.6 35.0333 36.6833 33.1833C37.7666 31.3333 37.6166 28.9666 36.2666 26.5333ZM18.75 15C18.75 14.3166 19.3166 13.75 20 13.75C20.6833 13.75 21.25 14.3166 21.25 15V23.3333C21.25 24.0166 20.6833 24.5833 20 24.5833C19.3166 24.5833 18.75 24.0166 18.75 23.3333V15ZM21.1833 29.5166C21.1 29.5833 21.0166 29.65 20.9333 29.7166C20.8333 29.7833 20.7333 29.8333 20.6333 29.8666C20.5333 29.9166 20.4333 29.95 20.3166 29.9666C20.2166 29.9833 20.1 30 20 30C19.9 30 19.7833 29.9833 19.6666 29.9666C19.5666 29.95 19.4666 29.9166 19.3666 29.8666C19.2666 29.8333 19.1666 29.7833 19.0666 29.7166C18.9833 29.65 18.9 29.5833 18.8166 29.5166C18.5166 29.2 18.3333 28.7666 18.3333 28.3333C18.3333 27.9 18.5166 27.4666 18.8166 27.15C18.9 27.0833 18.9833 27.0166 19.0666 26.95C19.1666 26.8833 19.2666 26.8333 19.3666 26.8C19.4666 26.75 19.5666 26.7166 19.6666 26.7C19.8833 26.65 20.1166 26.65 20.3166 26.7C20.4333 26.7166 20.5333 26.75 20.6333 26.8C20.7333 26.8333 20.8333 26.8833 20.9333 26.95C21.0166 27.0166 21.1 27.0833 21.1833 27.15C21.4833 27.4666 21.6666 27.9 21.6666 28.3333C21.6666 28.7666 21.4833 29.2 21.1833 29.5166Z" fill="#CC4444"/>
                                                        </svg>
                                                    </div>
                                                    <h2>Is the shipping address correct?</h2>
                                                    <p>For swift and precise delivery, we recommend to select the suggested shipping address.</p>
                                                </div>
                                            </div>

                                            <div class="scroll-tanya-adrs-bg">
                                                <div class="scroll-tanya-adrs">
                                                    <h4>Non-existent address</h4>
                                                    <p>Friesanbury, NC 51587-5771</p>
                                                    <button type="button" class="tanya-adr-btn">Update or confirm address</button>
                                                </div>

                                            </div>

                                            <button type="button" class="tanya-close-btn">Close</button>
                                        </div>
                                    </div>
                                     <!-- 222 -->
                                    <div class="scroll-right-prompt">
                                        <h5>Prompt when an inaccurate address is detected</h5>
                                        <div class="scroll-rshiping-adrs-bg">
                                            <div class="scroll-rshiping-adrs">
                                                <div class="sadr-accurate">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                          <path d="M36.2666 26.5333L25.6 7.33331C24.1666 4.74998 22.1833 3.33331 20 3.33331C17.8166 3.33331 15.8333 4.74998 14.4 7.33331L3.7333 26.5333C2.3833 28.9833 2.2333 31.3333 3.31663 33.1833C4.39996 35.0333 6.5333 36.05 9.3333 36.05H30.6666C33.4666 36.05 35.6 35.0333 36.6833 33.1833C37.7666 31.3333 37.6166 28.9666 36.2666 26.5333ZM18.75 15C18.75 14.3166 19.3166 13.75 20 13.75C20.6833 13.75 21.25 14.3166 21.25 15V23.3333C21.25 24.0166 20.6833 24.5833 20 24.5833C19.3166 24.5833 18.75 24.0166 18.75 23.3333V15ZM21.1833 29.5166C21.1 29.5833 21.0166 29.65 20.9333 29.7166C20.8333 29.7833 20.7333 29.8333 20.6333 29.8666C20.5333 29.9166 20.4333 29.95 20.3166 29.9666C20.2166 29.9833 20.1 30 20 30C19.9 30 19.7833 29.9833 19.6666 29.9666C19.5666 29.95 19.4666 29.9166 19.3666 29.8666C19.2666 29.8333 19.1666 29.7833 19.0666 29.7166C18.9833 29.65 18.9 29.5833 18.8166 29.5166C18.5166 29.2 18.3333 28.7666 18.3333 28.3333C18.3333 27.9 18.5166 27.4666 18.8166 27.15C18.9 27.0833 18.9833 27.0166 19.0666 26.95C19.1666 26.8833 19.2666 26.8333 19.3666 26.8C19.4666 26.75 19.5666 26.7166 19.6666 26.7C19.8833 26.65 20.1166 26.65 20.3166 26.7C20.4333 26.7166 20.5333 26.75 20.6333 26.8C20.7333 26.8333 20.8333 26.8833 20.9333 26.95C21.0166 27.0166 21.1 27.0833 21.1833 27.15C21.4833 27.4666 21.6666 27.9 21.6666 28.3333C21.6666 28.7666 21.4833 29.2 21.1833 29.5166Z" fill="#CC4444"/>
                                                        </svg>
                                                    </div>
                                                    <h2>Is the shipping address correct?</h2>
                                                    <p>For swift and precise delivery, we recommend to select the suggested shipping address.</p>
                                                </div>
                                            </div>
                                            <div class="scroll-tanya-adrs-bg">
                                                <div class="scroll-tanya-adrs">
                                                   <h4>Non-existent address</h4>
                                                   <p>Friesanbury, NC 51587-5771</p>
                                                   <button type="button" class="tanya-adr-btn">Update or confirm address</button>
                                                </div>
                                            </div>
                                            <button type="button" class="tanya-close-btn">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div id="about" class="page">
                                    <div class="scroll-sgc-title">
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Prompt when an inaccurate address is detected</h3>
                                            <input type="text" name="prompts_inacc_addr" id="inputText" placeholder="Is the shipping address correct?" value="<?php echo $results5[0]->prompts_inacc_addr;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                           <h3>Prompt when the apt # is missing</h3>
                                           <input type="text" id="inputText" name="prompts_apt_miss" placeholder="Did you specify the correct apt/suite/unit?" value="<?php echo $results5[0]->prompts_apt_miss;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Update address button label</h3>
                                            <input type="text" name="addr_btn_label" id="inputText" placeholder="Update address" value="<?php echo $results5[0]->addr_btn_label;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Proceed button label</h3>
                                            <input type="text" name="proceed_btn_label" id="inputText" placeholder="Proceed" value="<?php echo $results5[0]->proceed_btn_label;?>">
                                        </div>
                                        <div class="scroll-border-width general-cpt">
                                            <h3>Button to open address correction from</h3>
                                            <input type="text" name="btn_open_addr" id="inputText" placeholder="Update or confirm address" value="<?php echo $results5[0]->btn_open_addr;?>">
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                 
                    </form>
                   
                </div>

               </div>

                <!-- =============Customization end========= -->

                <!-- =======2nd tab==== -->

                <!-- =======2nd tab end==== -->

            </div>
             <!-- ======end tab======== -->
        </div>


         <!-- =========address prompt end======= -->


         <!-- ===========validation rules start========== -->
    <div class="validator-tabs-content">

            <div class="validator-common-prompt">
                <div class="validator-prompt-img">
                    <img src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/validation-1.svg' . '" alt="">
                </div>

                <div class="validator-prompt-content">
                    <h2>What are these address rules?</h2>
                    <p>This allow you to prompt customers for alternative addresses when undeliverable ones are detected (ie PO Boxes or addresses with non-Latin characters)</p>
                </div>
            </div>

            <div class="validation-rules-heading">
               <h3>Rules</h3>
            </div>
        
        <form id = "validation-rules">
        <div class="validation-rules-option-tick">

                  <!-- 1st -->
            <div class="advanced-address-validator-usps-content all-cb-div add-msg">
                <h2>Select checkbox to add message</h2>
                <div class="form-check"> 
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_gen_msg" id="defaultCheck5" value="1" <?php if($results6[0]->en_gen_msg=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck5">
                        <!-- Default checkbox -->
                        <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option in display a general massage above the address form.</h5>
                        <p>You may want to add a message like “Please double check the shipping address to ensure prompt delivery”.</p>
                        <input class="add-msg-input validation-rules-input" name="cus_gen_msg" type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_gen_msg;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_po_boxes" id="defaultCheck6" value="1" <?php if($results6[0]->en_po_boxes=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck6">
                        <div class="advanced-address-validator-common-content cst-input">
                           <h5>Enable this option if you cannot ship to PO Boxes</h5>
                           <p>Couriers like FedEx and UPS cannot ship to PO Boxes.</p>
                           <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_po" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_po;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox"  name="en_usps_gopost" id="defaultCheck7" value="1" <?php if($results6[0]->en_usps_gopost=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck7">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to USPS gopost</h5>
                        <p>Couriers like FedEx and UPS cannot ship to USPS gopost.</p>
                        <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_usps" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_usps;?>"> 
                    </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox"  name="en_high_con_route" id="defaultCheck8" value="1" <?php if($results6[0]->en_high_con_route=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck8">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to Highway Contract Route</h5>
                        <p>Highway Contract Routes are used in rural locations and some  couriers cannot  deliver to them. </p>
                        <input class="add-msg-input validation-rules-input" type="text" id="inputText" name="cus_warn_msg_high" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_high;?>">
                    </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_pvt_mailbox" id="defaultCheck9" value="1" <?php if($results6[0]->en_high_con_route=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck9">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to Private Mailboxes</h5>
                        <p>We cannot deliver to a private mailbox . Please  provide  a valid street addresses.</p>
                        <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_pvt" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_pvt;?>">
                    </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_parcel_locker" id="defaultCheck10" value="1" <?php if($results6[0]->en_parcel_locker=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck10">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to Parcel Lockers or Parcel Collects</h5>
                        <p>This may be applicable if you ship to Austria and/or New Zealand</p>
                        <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_parcel" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_parcel;?>">
                    </div>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_dhl_pack" id="defaultCheck11" value="1" <?php if($results6[0]->en_dhl_pack=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck11">
                        <div class="advanced-address-validator-common-content cst-input">
                           <h5>Enable this option if you cannot ship to DHL Packstations</h5>
                           <p>This may be applicable if you ship to Austria and/or Germany</p>
                           <input class="add-msg-input validation-rules-input" name="cus_warn_msg_dhl" type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_dhl;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_dhl_pack_addr" id="defaultCheck12" value="1" <?php if($results6[0]->en_dhl_pack_addr=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck12">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to DHL Packstation addresses with the station # on the same line as the term “Packstation”</h5>
                        <p>Some 3PLs require the term  "Packstation"  to be on a different  line than the Packstation #</p>
                        <input class="add-msg-input validation-rules-input"  type="text" id="inputText"  name="cus_warn_msg_dhl_pack" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_dhl_pack;?>">
                     </div>
                   </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_addr_miss_house" id="defaultCheck13" value="1" <?php if($results6[0]->en_addr_miss_house=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck13">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to addresses with missing house #</h5>
                        <p>Please specify a street number.</p>
                        <input class="add-msg-input validation-rules-input" name="cus_warn_msg_addr_miss_house" type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_addr_miss_house;?>">
                    </div>
                   </label>
                </div>
               
            </div>
            <!-- 2nd -->
            <div class="advanced-address-validator-usps-content all-cb-div add-msg">
                <h2>Select checkbox to add message</h2>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_addr_miss_str" id="defaultCheck14" value="1" <?php if($results6[0]->en_addr_miss_str=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck14">
                        <div class="advanced-address-validator-common-content cst-input">
                            <h5>Enable this option if you cannot ship to addresses with missing street names</h5>
                            <p>This may be applicable if you ship to Austria and/or Germany</p>
                            <input class="add-msg-input validation-rules-input" name="cus_warn_msg_addr_miss_str" type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_addr_miss_str;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check"  type="checkbox" name="en_extra_long_addr" id="defaultCheck15" value="1" <?php if($results6[0]->en_extra_long_addr=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck15">
                      <!-- Default checkbox -->
                     <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to extra long addresses</h5>
                        <p>Some 3PLs and couriers have character limits on the address_1 ,  address_2, city and company fields.</p>
                        <input class="add-msg-input validation-rules-input"  name="cus_warn_msg_extra_long_addr"    type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_extra_long_addr;?>">
                     </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_addr_nlc_euro" id="defaultCheck16" value="1" <?php if($results6[0]->en_addr_nlc_euro=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck16">
                        <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to addresses with non-latin characters . Accented characters like a, e or o are not allowed . Do not use option if you ship to  European  addresses.</h5>
                       <p>Couriers like FedEx and UPS cannot ship to PO Boxes.</p>
                       <input class="add-msg-input validation-rules-input" type="text" id="inputText" name="cus_warn_msg_nlc_euro" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_nlc_euro;?>">
                       </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_addr_nlc_acc"  id="defaultCheck17" value="1" <?php if($results6[0]->en_addr_nlc_acc=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck17">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to addresses with non-latin characters . Accented characters like a, e or o are  allowed .</h5>
                        <p>Some 3PLs and couriers cannot parse non-latin  characters .This rule is applied  to the address_1, address_2, city  and company  fields.</p>
                        <input class="add-msg-input validation-rules-input" name="cus_warn_msg_nlc_acc" type="text" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_nlc_acc;?>">
                   </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" name="en_ship_cont_state" type="checkbox" id="defaultCheck18" value="1" <?php if($results6[0]->en_ship_cont_state=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck18">
                        <div class="advanced-address-validator-common-content cst-input">
                           <h5>Enable this option if you cannot ship to  Alaska, Guam, Hawaii or Puerto Rico.</h5>
                           <p>Some couriers  cannot be noncontiguous US states (Alaska,Guam,Hawaii or Puerto Rico).</p>
                           <input class="add-msg-input validation-rules-input" type="text"  name="cus_warn_msg_cont_state" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_cont_state;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" name="en_mili_addr" type="checkbox"  id="defaultCheck19" value="1" <?php if($results6[0]->en_mili_addr=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck19">
                        <div class="advanced-address-validator-common-content cst-input">
                          <h5>Enable this option if you cannot ship to Military addresses</h5>
                          <p>Some couriers  cannot be US military addresses (Armed Forces Americas , Armed  Forces Europe, Armed Forces Pacific)</p>
                          <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_mili_addr" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_mili_addr;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_non_numeric_postalcode" id="defaultCheck20" value="1" <?php if($results6[0]->en_non_numeric_postalcode=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck20">
                        <div class="advanced-address-validator-common-content cst-input">
                            <h5>Enable this option if you cannot ship to Parcel Lockers or Parcel Collects</h5>
                             <p>This may be applicable if you ship to Austria and/or New Zealand</p>
                             <input class="add-msg-input validation-rules-input" type="text" name="cus_warn_msg_non_numeric_postalcode" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_non_numeric_postalcode;?>">
                        </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" name="en_rural_addr" type="checkbox"  id="defaultCheck21" value="1" <?php if($results6[0]->en_rural_addr=="1"){echo "checked";}?>>
                     <label class="form-check-label" for="defaultCheck21">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to DHL Packstations</h5>
                       <p>This may be applicable if you ship to Austria and/or Germany</p>
                      <input class="add-msg-input validation-rules-input" type="text"  name="cus_warn_msg_rural_addr" id="inputText" placeholder="Customize message" value="<?php $results7[0]->cus_warn_msg_rural_addr;?>">
                    </div>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input validation-addr-check" type="checkbox" name="en_addr_emojis" id="defaultCheck22" value="1" <?php if($results6[0]->en_addr_emojis=="1"){echo "checked";}?>>
                    <label class="form-check-label" for="defaultCheck22">
                    <div class="advanced-address-validator-common-content cst-input">
                        <h5>Enable this option if you cannot ship to addresses with emojis</h5>
                        <p>Some 3PLs and couriers cannot parse emojis. This rule  is applied  to the address_1 , address_2, city and company fields.</p>
                        <input type="text" name="cus_warn_msg_addr_emojis" class="add-msg-input validation-rules-input" id="no-emoji" value="<?php $results7[0]->cus_warn_msg_addr_emojis;?>">
                    </div>
                   </label>
                </div>
               

            </div>
            <div id="success-message"></div>  
            <div id="failure-message"></div>
        </div>
        </form>
        
    </div>

<!-- ===========validation rules end========== -->




<!-- =========API settings start======= -->

<div class="validator-tabs-content">
<div class="validator-available-country-bg">
        <h4>Ninja Address Validator is available is the following countries as of now :</h4>
        <div class="vac-flag">
           <ul>
            <li>&#127465;&#127466;Argentina</li>
            <li>&#127468;&#127480; Australia</li>
            <li>&#127463;&#127468; Austria</li>
            <li>&#127463;&#127465; Belgium</li>
            <li>&#127463;&#127477; Brazil</li>
            <li>&#127464;&#127487; Canada</li>
            <li>&#127464;&#127473; Chile</li>
            <li>&#127464;&#127476; Colombia</li>
            <li>&#127469;&#127487; Croatia</li>
            <li>&#127464;&#127487; Czechia</li>
            <li>&#127465;&#127468; Denmark</li>
            <li>&#127466;&#127466; Estonia</li>
            <li>&#127467;&#127474; Finland</li>
            <li>&#127467;&#127479; France</li>
            <li>&#127465;&#127466; Germany</li>
            <li>&#127469;&#127482; Hungary</li>
            <li>&#127468;&#127469; Ireland</li>
            <li>&#127470;&#127479; Italy</li>
            <li>&#127474;&#127479; Latvia</li>
            <li>&#127474;&#127476; Lithuania</li>
            <li>&#127474;&#127482; Luxembourg</li>
            <li>&#127474;&#127473; Malaysia</li>
            <li>&#127474;&#127486; Mexico</li>
            <li>&#127475;&#127469; Netherlands</li>
            <li>&#127475;&#127476; Norway</li>
            <li>&#127475;&#127487; New Zealand</li>
            <li>&#127477;&#127473; Poland</li>
            <li>&#127477;&#127474; Portugal</li>
            <li>&#127477;&#127479; Puerto Rico</li>
            <li>&#127477;&#127468; Singapore</li>
            <li>&#127477;&#127480; Slovakia</li>
            <li>&#127477;&#127474; Slovenia</li>
            <li>&#127466;&#127480; Spain</li>
            <li>&#127480;&#127466; Sweden</li>
            <li>&#127464;&#127469; Switzerland</li>
            <li>&#127468;&#127463; United Kingdom</li>
            <li>&#127482;&#127480; United States</li>
           </ul>
        </div>
    </div>
    <div class="validator-common-prompt">
        <div class="validator-prompt-img">
            <img src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/api-1.svg' . '" alt="">
        </div>

        <div class="validator-prompt-content">
            <h2>What are these forms?</h2>
            <p>These forms allow customers to update the shipping address after checkout when they proceed with addresses that cannot be validated. They are accessible via the Thank You page after checkout or on the email notifications.</p>
        </div>
    </div>

    <div class="validation-rules-heading">
         <h3>Google Address Validator API Key</h3>
    </div>
    <form id="api-settings">
    <div class="api-classes <?php if($results1[0]->scriptadded==1){?> api-connected <?php } else { ?> api-not-connect <?php } ?>">
        <div class="api-google-key-bg">
            <div class="api-google-address">
                <div class="aga-color">
                    <h2>Put google api key to connect address validator</h2>
                    <p>This API allow us to integrate your website checkout with our advanced customization.</p>

                    <div class="api-adg-input">
                        <input type="text" id="gapikey" placeholder="Write google api key here..." value="<?php echo $results1[0]->gapikey;?>">
                    </div>

                    <div class="api-notice-bar">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99986 6C10.4141 6.00001 10.7499 6.3358 10.7498 6.75001L10.7498 10.25C10.7498 10.6642 10.414 11 9.99978 11C9.58556 11 9.24978 10.6642 9.24979 10.25L9.24985 6.74999C9.24985 6.33577 9.58565 5.99999 9.99986 6Z" fill="#EF4D2F"/>
                                <path d="M10.9998 13C10.9998 13.5523 10.5521 14 9.99985 14C9.44756 14 8.99985 13.5523 8.99985 13C8.99985 12.4477 9.44756 12 9.99985 12C10.5521 12 10.9998 12.4477 10.9998 13Z" fill="#EF4D2F"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2373 3.17663C10.5539 2.49321 9.44583 2.49321 8.76241 3.17663L3.17663 8.76241C2.49321 9.44583 2.49321 10.5539 3.17663 11.2373L8.76241 16.8231C9.44583 17.5065 10.5539 17.5065 11.2373 16.8231L16.8231 11.2373C17.5065 10.5539 17.5065 9.44583 16.8231 8.76241L11.2373 3.17663ZM9.82307 4.23729C9.9207 4.13965 10.079 4.13966 10.1766 4.23729L15.7624 9.82307C15.86 9.9207 15.86 10.079 15.7624 10.1766L10.1766 15.7624C10.079 15.86 9.9207 15.86 9.82307 15.7624L4.23729 10.1766C4.13965 10.079 4.13966 9.9207 4.23729 9.82307L9.82307 4.23729Z" fill="#EF4D2F"/>
                            </svg>
                            <?php if($results1[0]->scriptadded==1){?> API Connected <?php } else { ?> API Not Connected<?php } ?> <span> <a href="#"> See how it works?</a></span>
                        </p>
                        <div class="api-adg-cross" onclick="removeParentClass(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                 <path d="M12.7197 13.7803C13.0126 14.0732 13.4874 14.0732 13.7803 13.7803C14.0732 13.4874 14.0732 13.0126 13.7803 12.7197L11.0607 10L13.7803 7.28033C14.0732 6.98744 14.0732 6.51256 13.7803 6.21967C13.4874 5.92678 13.0126 5.92678 12.7197 6.21967L10 8.93934L7.28033 6.21967C6.98744 5.92678 6.51256 5.92678 6.21967 6.21967C5.92678 6.51256 5.92678 6.98744 6.21967 7.28033L8.93934 10L6.21967 12.7197C5.92678 13.0126 5.92678 13.4874 6.21967 13.7803C6.51256 14.0732 6.98744 14.0732 7.28033 13.7803L10 11.0607L12.7197 13.7803Z" fill="#8E1F0B"/>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="api-google-map <?php if($results1[0]->scriptadded==1){?> api-connected <?php } else { ?> api-not-connect <?php } ?>">
                <div class="agm-color">
                    <h2>API Status</h2>
                    <div class="api-map-btn">
                        <img class="map-img" src="<?php echo AV_PLUGIN_URL_IMAGE; ?>/address-validator/assets/images/map.png' . '" alt="map-img">
                        <button type="button" class="btn img-btn"><?php if($results1[0]->scriptadded==1){?> API Connected <?php } else { ?> API Not Connected<?php } ?></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </form>
    <div id="success-message"></div>  
    <div id="failure-message"></div>
</div>

<!-- =========API settings start end======= -->





   






<!-- =============HELP start=========== -->

<div class="validator-tabs-content">

<div class="validation-rules-heading help-vrh">
<h3>Support Ticket Form</h3>
</div>

<div class="help-form-fill-bg">

<form action="#" method="post">
    <div class="touch-form-fill-mail-phone">

    <div class="touch-form-rn">
    <label for="fullName" class="required">First name<span>*</span></label>
    <input type="text" id="fullName" name="fullName" placeholder="Enter name" required>
    </div>
   

        <div class="touch-form-rn">
    <label for="lastName" class="required">Last name<span>*</span></label>
    <input type="text" id="lastName" name="lastName" placeholder="Enter name" required>
</div>

<div class="touch-form-rn">
    <label for="email" class="required">Email address<span>*</span></label>
    <input type="email" id="email" name="email" placeholder="Enter email" required>
   </div>

   <div class="touch-form-rn">
    <label for="select" class="required">What can we help you with?</label>
    <select id="help-target-dropdown" name="help-target-dropdown">
        <option value="">Select</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
      </select>
</div>

<div class="touch-form-rn">
    <label for="url" class="required">Website URL</label>
    <input type="url" id="url" name="url" placeholder="Enter website">
   </div>

   <div class="touch-form-rn">
    <label for="issue" class="required">Any specific issues</label>
    <input type="text" id="issue" name="issue" placeholder="Write issues...">
   </div>

</div>

    <div class="help-msg">
    <label for="projectDetails">Message</label>
    <textarea id="projectDetails" name="projectDetails" rows="4" placeholder="Enter message"></textarea>
</div>

   <div class="valid-help-btn">
    <button type="submit" class="btn help-btn">Submit</button>
</div>
</form>

</div>

</div>

<!-- =============HELP end=========== -->















<!-- ====== 1st tab===== -->


         <!-- ====== 1st tab end===== -->
    </div>
    </div>
</div>
</section>
