
var popupFormStyles = `
#popUpAddressForm{
    position: absolute;
    top: 270px;
    left: 601px;

}
#placeOrderButton{
    align-items: center;
    display: inline-flex;
    height: auto;
    justify-content: center;
    position: relative;
    text-align: center;
    transition: box-shadow .1s linear;
    background:red;
    color:#ffff;
    padding:15px 150px;
    border: 1px solid #0000;
    border-radius: 10px;    
}
.scroll-right-prompt-popUpform{
    border-radius: 20px;
    background: #FFF;
    text-align: center;
    max-width: 450px;
    margin: 0 auto;
}
.scroll-right-prompt-popUpform h5{
    color: #3B4A60;
    font-size: 20px;
    font-weight: 600;
}
.scroll-rshiping-adrs-bg{
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.12);
    padding: 32px;
    margin-top: 32px;
}
.sadr-accurate h2{
    color: #000;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 0;
    padding: 10px 0;
}
.sadr-accurate p{
    color: #222;
    font-size: 14px;
    font-weight: 400;
    max-width: 365px;
    margin: 0 auto;
}
.scroll-tanya-adrs, .tanya-open-adrs{
    border-radius: 8px;
    background: #F5F5F5;
    padding: 32px 0;
    margin-top: 10px;
    position: relative;
}
.scroll-tanya-adrs p, .tanya-open-adrs p{
    color: #222;
    font-size: 14px;
    font-weight: 400;
    max-width: 194px;
    margin: 0 auto;
}
.scroll-tanya-adrs p span, .tanya-open-adrs p span{
    color: #AAC22F;
}
.scroll-tanya-adrs .tanya-adr-btn{
    border-radius: 8px;
    background: #3168B9;
    outline: none;
    color: #FFF;
    font-size: 16px;
    font-weight: 500;
    border: none;
    padding: 15px 24px;
    width: 206px;
    margin-top: 24px;
    position: relative;
    padding-left: 44px;
}
.scroll-tanya-adrs .tanya-adr-btn::after{
    position: absolute;
    content: url( https://wordpress-1078893-4208184.cloudwaysapps.com/wp-content/plugins/address-validator/assets/images/tick.svg);
    left: 18px;
    top: 17px;

}
.scroll-tanya-adrs h4, .tanya-open-adrs h4{
    color: #000;
    font-size: 17px;
    font-weight: 600;
}
.scroll-rshiping-adrs .sadr-accurate{
    padding-bottom: 22px;
}
.scroll-rshiping-adrs-bg .tanya-close-btn{
    border-radius: 8px;
    border: 1px solid #97B1D7;
    background: #FFF;
    outline: none;
    padding: 15px 32px;
    color: #3168B9;
    font-size: 16px;
    font-weight: 500;
    margin-top: 32px;
    margin-left: 20px;  
}
.option-divider{
    display:none;
    height: 5px;
    margin: 10px 0 0 0;
    background: black;
}

.scroll-tanya-adrs .form-check,
.tanya-open-adrs .form-check{
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: none;
}
.scroll-tanya-adrs .form-check input,
.tanya-open-adrs .form-check input{
  box-shadow: none;
}

.valid-tanya-osd {
    padding: 60px 30px;
    top: 600px;
    position: absolute;
    left: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #E0E0E0;
}
.valid-tanya-osd h3 {
    color: #3B4A60;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 0;
    padding-bottom: 32px;
}
.valid-tanya-osd-update {
    border-radius: 10px;
    background: #FFF;
    box-shadow: 0px 4px 40px 0px rgba(0, 0, 0, 0.12);
    padding: 40px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.valid-tanya-osd-update p {
    color: #000;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 0;
}

`;


var styleElement = document.createElement('style');
styleElement.type = 'text/css';
if (styleElement.styleSheet) {
      // For IE
      styleElement.styleSheet.cssText = popupFormStyles;
} else {
      // For other browsers
      styleElement.appendChild(document.createTextNode(popupFormStyles));
}

// Append the style element to the document's head
 document.head.appendChild(styleElement);

  
document.addEventListener('DOMContentLoaded', function () {
    console.log("loader........");
    var abbreviationToState = {
        'AL' : 'Alabama',
        'AK' : 'Alaska',
        'AK' : 'Arizona',
        'AR' : 'Arkansas',
        'AA' : 'Armed Forces (AA)' ,
        'AE' : 'Armed Forces (AE)',
        'AP' : 'Armed Forces (AP)',
        'CA' : 'California',
        'CO' : 'Colorado',
        'CT' : 'Connecticut',
        'DE' : 'Delaware',
        'DC' : 'District Of Columbia',
        'FL' : 'Florida',
        'GA' : 'Georgia',
        'HI':  'Hawaii' ,
        'ID' : 'Idaho',
        'IL' : 'Illinois',
        'IN' : 'Indiana',
        'IA' :'Iowa',
        'KS': 'Kansas',
        'KY': 'Kentucky',
        'LA' : 'Louisiana' ,
        'ME': 'Maine' ,
        'MD': 'Maryland',
        'MA': 'Massachusetts',
        'MI' : 'Michigan',
        'MN' : 'Minnesota',
        'MS' : 'Mississippi',
        'MO' :'Missouri',
        'MT' : 'Montana' ,
        'NE' : 'Nebraska',
        'NV' :'Nevada',
        'NH' : 'New Hampshire',
        'NJ'   : 'New Jersey',
        'NM'  : 'New Mexico',
        'NY' : 'New York',
        'NC' : 'North Carolina',
        'ND': 'North Dakota' ,
        'OH': 'Ohio',
        'OK': 'Oklahoma',
        'OR' : 'Oregon',
        'PA' : 'Pennsylvania' ,
        'RI' : 'Rhode Island',
        'SC' : 'South Carolina',
        'SD': 'South Dakota',
        'TN': 'Tennessee',
        'TX' :'Texas',
        'UT' : 'Utah',
        'VT' : 'Vermont',
        'VA': 'Virginia',
        'WA': 'Washington',
        'WV': 'West Virginia' ,
        'WI': 'Wisconsin',
        'WY': 'Wyoming',
      };
    var  stateAbbreviations = {
        'Alabama': 'AL',
        'Alaska': 'AK',
        'Arizona': 'AZ',
        'Arkansas': 'AR',
        'Armed Forces (AA)': 'AA',
        'Armed Forces (AE)': 'AE',
        'Armed Forces (AP)': 'AP',
        'California': 'CA',
        'Colorado': 'CO',
        'Connecticut': 'CT',
        'Delaware': 'DE',
        'District Of Columbia': 'DC',
        'Florida': 'FL',
        'Georgia': 'GA',
        'Hawaii': 'HI',
        'Idaho': 'ID',
        'Illinois': 'IL',
        'Indiana': 'IN',
        'Iowa': 'IA',
        'Kansas':'KS',
        'Kentucky':'KY',
        'Louisiana': 'LA',
        'Maine': 'ME',
        'Maryland':'MD',
        'Massachusetts': 'MA',
        'Michigan': 'MI',
        'Minnesota':'MN',
        'Mississippi': 'MS',
        'Missouri': 'MO',
        'Montana': 'MT',
        'Nebraska':'NE',
        'Nevada':'NV',
        'New Hampshire': 'NH',
        'New Jersey': 'NJ',
        'New Mexico': 'NM',
        'New York': 'NY',
        'North Carolina': 'NC',
        'North Dakota': 'ND',
        'Ohio': 'OH',
        'Oklahoma': 'OK',
        'Oregon': 'OR',
        'Pennsylvania': 'PA' ,
        'Rhode Island': 'RI',
        'South Carolina': 'SC',
        'South Dakota':'SD',
        'Tennessee': 'TN',
        'Texas': 'TX',
        'Utah':'UT',
        'Vermont': 'VT',
        'Virginia':'VA',
        'Washington':'WA',
        'West Virginia': 'WV',
        'Wisconsin':'WI',
        'Wyoming':'WY',
    };
      
    setTimeout(function () {
        var originalPlaceOrderButton = document.querySelector('.wc-block-components-checkout-place-order-button');
        if (originalPlaceOrderButton) {
            originalPlaceOrderButton.style.display = 'none';
        }
        var customButton = document.createElement('button');
        customButton.id = 'placeOrderButton';
        customButton.type = 'button';
        customButton.className = 'wc-block-place-order-button';
        customButton.innerText = 'Place Order';

        // Insert the custom button in the same position
        var actionsRow = document.querySelector('.wc-block-checkout__actions_row');
        if (actionsRow) {
            actionsRow.appendChild(customButton);
            customButton.addEventListener('click', function (e) {
                e.preventDefault();
                var address1 = document.getElementById('shipping-address_1').value;
                var country = document.getElementById('components-form-token-input-0').value;
                var city = document.getElementById('shipping-city').value;
                var fullstateName = document.getElementById('components-form-token-input-1').value;
                var postcode = document.getElementById('shipping-postcode').value;
                var state =  stateAbbreviations[fullstateName];
               // console.log(state);
                var originalAddress = `${address1},${city}, ${fullstateName}, ${postcode}, ${country}`;

                $.ajax({
                    type: 'POST',
                    url: ajax_object.ajax_url,
                    data: {
                        action: 'get_shop_gen_customization',
                        staddress: address1,
                        country: country,
                        city: city,
                        state: state,
                        zipcode: postcode
                    },
                    dataType:'json',
                    success: function (response) {
                        var text_color_inForm = response.data.customization_data.text_color;
                        var border_color_inForm = response.data.customization_data.border_color;
                        var formatted_address_line = response.data.formatted_address_lines;
                        var formatted_city = response.data.formatted_city;
                        var formatted_zip = response.data.formatted_zip;
                        var formatted_procode = response.data.formatted_procode;
                        var formatted_regioncode = response.data.formatted_regioncode;
                        //  console.log(response.data.customization_data.border_color);
                        var trim_color_inForm = response.data.customization_data.trim_color;
                        var popUpAddressFormID = response.data.add_prompt_data.prompt_appear === "Modal" ? 'popUpAddressForm' : '';
                        
                         var popupForm = `<section id="${popUpAddressFormID}" style="border-color: ${response.data.customization_data.border_color}; background-color: ${trim_color_inForm}; border-width: ${response.data.customization_data.border_width}; border-style: solid; border-radius: ${response.data.customization_data.corner_style === 'Square' ? '0' : '10px'};"><div class="scroll-right-prompt-popUpform"  style="background-color: ${trim_color_inForm};" ><div class="scroll-rshiping-adrs-bg" style="background-color: ${trim_color_inForm};"> <h5 class="popup-title" style="color: ${response.data.customization_data.text_color};">Suggested corrected prompts</h5> <div class="scroll-rshiping-adrs" style="color: ${response.data.customization_data.text_color};">
                         <div class="sadr-accurate"><div></div><h2 class="popup-subtitle" style="color: ${text_color_inForm};">Please select accurate shipping address</h2><p style="color: ${text_color_inForm};">For swift and precise delivery, we recommend to    select the suggested shipping address.</p></div></div><div class="scroll-tanya-adrs-bg"><div class="scroll-tanya-adrs" style="background-color: ${response.data.customization_data.bg_color};"><div class="form-check"><input class="form-check-input" type="radio" name="ship-address" id="defaultCheck43" value=""><label class="form-check-label" for="defaultCheck43" style="border-color: ${border_color_inForm};"><h4 class="sugg-add-label" style="color: ${text_color_inForm};">Suggested address</h4><p style="color: ${text_color_inForm};"> ${response.data.formatted_address}   <span class="highlight-add"></span></p></div></label></div><div class="option-divider"></div>  <div class="tanya-open-adrs" style="background-color: ${response.data.customization_data.bg_color};"><div class="form-check"><input class="form-check-input" type="radio" name="ship-address" id="defaultCheck44" value=""><label class="form-check-label" for="defaultCheck44" style="border-color: ${response.data.customization_data.border_color};"><h4 class="org-add-label" style="color: ${response.data.customization_data.text_color};">Your typed address</h4><p class="entered-shipping-address" style="color: ${response.data.customization_data.text_color};">${originalAddress}</p></div></label></div></div><div class="adrs-buttons"><button type="button" class="tanya-close-btn tanya-exit-btn"  style="background-color: ${response.data.customization_data.btn_bg_color}; color: ${response.data.customization_data.btn_text_color}; border-color: ${response.data.customization_data.btn_border_color}; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='${response.data.customization_data.hover_color}'" onmouseout="this.style.backgroundColor='${response.data.customization_data.btn_bg_color}'">${response.data.customization_data.close_btn_prompts}</button><button type="button" class="tanya-close-btn tanya-save-changes"  style="background-color: ${response.data.customization_data.btn_bg_color};  color: ${response.data.customization_data.btn_text_color}; border-color: ${response.data.customization_data.btn_border_color}; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='${response.data.customization_data.hover_color}'" 
                         onmouseout="this.style.backgroundColor='${response.data.customization_data.btn_bg_color}'">save changes</button></div></div></div></section>`;
                        
                         var popupContainer = document.createElement('div');
                         popupContainer.innerHTML = popupForm;
        
                         var suggestedRadio = popupContainer.querySelector('#defaultCheck43');
                         var typedRadio = popupContainer.querySelector('#defaultCheck44');
                         typedRadio.checked = true;
                  

                        if (suggestedRadio) {
                            suggestedRadio.value =  `${formatted_address_line}, ${formatted_city},${formatted_procode}, ${formatted_zip} ,${formatted_regioncode}`;
                            console.log(suggestedRadio.value);
                         
                        }

                        if (typedRadio) {
                           typedRadio.value = `${address1}, ${city}, ${fullstateName}, ${postcode}, ${country}`; 
                           console.log(typedRadio.value);
                         }
                         
                         $.ajax({
                            type:'POST',
                            url: ajax_object.ajax_url,
                            data:{
                                action: 'get_shop_suggested_cor_prompts',
                            },
                            success: function(secondResponse){
                                if (response.data.add_prompt_data.prompt_appear === 'Embedded') {
                                    // Find the div with the specified class
                                    var checkoutTermsDiv = document.querySelector('.wc-block-checkout__terms.wp-block-woocommerce-checkout-terms-block');
                                     // Check if the div is found
                                    if (checkoutTermsDiv) {
                                         checkoutTermsDiv.parentNode.insertBefore(popupContainer.firstChild, checkoutTermsDiv.nextSibling);
                                    } else {
                                        console.error('Unable to find the div with class wc-block-checkout__terms.wp-block-woocommerce-checkout-terms-block');
                                    }
                                    function removePopupContainerEmbedded() {
                                        if (popupContainer) {
                                            console.log("inside remove popupiv");
                                            var nextSibling = checkoutTermsDiv.nextSibling;
                                            nextSibling.innerHTML = '';
                                            nextSibling.innerHTML  = `<div class="valid-tanya-osd">
                                            <h3>Original address option selected</h3>
                                            <div class="valid-tanya-osd-update">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                        <path d="M19.3368 22.9332L21.6901 25.2865L35.7992 11.1772L38.1564 13.5342L21.6901 30.0005L11.0834 19.3938L13.4404 17.0368L16.9817 20.5782L19.3368 22.9332ZM19.3396 18.2203L27.5939 9.96582L29.9444 12.3163L21.6901 20.5707L19.3396 18.2203ZM14.6284 27.6455L12.2733 30.0005L1.66675 19.3938L4.02376 17.0368L6.3788 19.392L6.37681 19.3938L14.6284 27.6455Z" fill="#C0D749"></path>
                                                    </svg>
                                                </div>
                                                <p>Thanks for confirming your shipping address!</p>
                                            </div>
                                        </div>`;
                                          //  nextSibling.remove();
                                        }
                                    }
                                    
                                }
                                else if(response.data.add_prompt_data.prompt_appear === 'Modal'){
                                    document.body.appendChild(popupContainer);
                                 }
                                var popupTitleElement = popupContainer.querySelector('.popup-title');
                                if (popupTitleElement) {
                                        popupTitleElement.innerText = secondResponse.data.title;
                                }
                                var popupTitleElement = popupContainer.querySelector('.popup-subtitle');
                                if (popupTitleElement) {
                                        popupTitleElement.innerText = secondResponse.data.subtitle;
                                }
                                var popupTitleElement = popupContainer.querySelector('.sugg-add-label');
                                if (popupTitleElement) {
                                        popupTitleElement.innerText = secondResponse.data.suggested_addr_label;
                                }
                                var popupTitleElement =  popupContainer.querySelector('.org-add-label');
                                if (popupTitleElement) {
                                        popupTitleElement.innerText = secondResponse.data.original_addr_label;
                                }
                                var popupTitleElement =  popupContainer.querySelector('.tanya-save-changes')
                                if (popupTitleElement) {
                                        popupTitleElement.innerText = secondResponse.data.acpt_changes_btn_label;
                                }
                             //   popupContainer.querySelector('.popup-title').innerText = secondResponse.data.title;
                               // popupContainer.querySelector('.popup-subtitle').innerText = secondResponse.data.subtitle;
                               // popupContainer.querySelector('.sugg-add-label').innerText = secondResponse.data.suggested_addr_label;
                               // popupContainer.querySelector('.org-add-label').innerText = secondResponse.data.original_addr_label;
                               // popupContainer.querySelector('.tanya-save-changes').innerText = secondResponse.data.acpt_changes_btn_label;
                              //  popupContainer.querySelector('.highlight-add').style.color = secondResponse.data.highlight_changes_color + ' !important';
                                if (secondResponse.data.show_devider === "1") {
                                   popupContainer.querySelector('.option-divider').style.display = 'block'; 
                                }

                                var saveChangesButton = document.querySelector('.tanya-save-changes');
                                saveChangesButton.addEventListener('click', saveChanges);
                                function saveChanges() {
                                    var selectedAddress = document.querySelector('input[name="ship-address"]:checked');
                                    if (selectedAddress) {
                                       console.log("Selected Address:", selectedAddress.value);
                                       var addressParts = selectedAddress.value.split(',');
                       
                                       document.getElementById('shipping-address_1').value = addressParts[0].trim();
                                      // console.log(document.getElementById('shipping-address_1').value);
                                       document.getElementById('shipping-city').value = addressParts[1].trim();
                                       //console.log(document.getElementById('shipping-city').value);
                                       document.getElementById('components-form-token-input-1').value = abbreviationToState[addressParts[2].trim()];
                                      // console.log( document.getElementById('components-form-token-input-1').value)
                                       document.getElementById('shipping-postcode').value = addressParts[3].trim();
                                      // console.log(document.getElementById('shipping-postcode').value);
                                       console.log("together address---------------");
                                       //document.getElementById('components-form-token-input-0').value = addressParts[4].trim();
                                       var addressSectionDiv = document.querySelectorAll('.wc-block-components-address-card__address-section')[1].children;
                                       if (addressSectionDiv) {
                                           // Get all spans within the addressSectionDiv
                                           console.log( "spans-length is"  , addressSectionDiv.length);
                                           console.log("address-part length is", addressParts.length);
                                           var spansArray = Array.from(addressSectionDiv);
       
                                           if (spansArray.length === addressParts.length) {
                                               spansArray.forEach(function (span, index) {
                                                    span.textContent = addressParts[index].trim();
                                                    console.log(span.textContent);
                                               });
                                           } else {
                                              console.error('Mismatch in the number of spans and addressParts.');
                                          }
                                       } else {
                                           console.error('Element with class "wc-block-components-address-card__address-section" not found.');
                                       }
       
                                       popupContainer.innerHTML = '';
                                       var msgSuggestedOpt  = `<div id="suggestedOpt" class="valid-tanya-osd">
                                           <h3>Suggested address option selected</h3>
                                           <div class="valid-tanya-osd-update">
                                               <div>
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                      <path d="M19.3368 22.9332L21.6901 25.2865L35.7992 11.1772L38.1564 13.5342L21.6901 30.0005L11.0834 19.3938L13.4404 17.0368L16.9817 20.5782L19.3368 22.9332ZM19.3396 18.2203L27.5939 9.96582L29.9444 12.3163L21.6901 20.5707L19.3396 18.2203ZM14.6284 27.6455L12.2733 30.0005L1.66675 19.3938L4.02376 17.0368L6.3788 19.392L6.37681 19.3938L14.6284 27.6455Z" fill="#C0D749"></path>
                                                   </svg>
                                               </div>
                                               <p>Your shipping address has been updated!</p>
                                           </div>
                                        </div>`;
                                      
                                       var msgOriginalOpt = `<div class="valid-tanya-osd">
                                           <h3>Original address option selected</h3>
                                           <div class="valid-tanya-osd-update">
                                               <div>
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                       <path d="M19.3368 22.9332L21.6901 25.2865L35.7992 11.1772L38.1564 13.5342L21.6901 30.0005L11.0834 19.3938L13.4404 17.0368L16.9817 20.5782L19.3368 22.9332ZM19.3396 18.2203L27.5939 9.96582L29.9444 12.3163L21.6901 20.5707L19.3396 18.2203ZM14.6284 27.6455L12.2733 30.0005L1.66675 19.3938L4.02376 17.0368L6.3788 19.392L6.37681 19.3938L14.6284 27.6455Z" fill="#C0D749"></path>
                                                   </svg>
                                               </div>
                                               <p>Thanks for confirming your shipping address!</p>
                                           </div>
                                       </div>`;
                                       function hidePopupContainer() {
                                           popupContainer.remove();
                                           customButton.style.display = 'none';
                                           originalPlaceOrderButton.style.display = 'block';
                                       }
                                       function removePopupContainer() {
                                           removePopupContainerEmbedded();
                                           customButton.style.display = 'none';
                                           originalPlaceOrderButton.style.display = 'block';
                                       }
                                       if (selectedAddress.id === 'defaultCheck43') {
                                        //    console.log(msgSuggestedOpt);
                                          
                                            if(response.data.add_prompt_data.prompt_appear === 'Modal'){
                                               popupContainer.innerHTML = msgSuggestedOpt;
                                               setTimeout(hidePopupContainer, 3000);
                                            }
                                            else if(response.data.add_prompt_data.prompt_appear === 'Embedded'){
                                                popupContainer.innerHTML = msgSuggestedOpt;
                                               setTimeout(removePopupContainer , 3000);
                                            }   
                                       } else if (selectedAddress.id === 'defaultCheck44') {
                                           
                                           // console.log(msgOriginalOpt);
                                            if(response.data.add_prompt_data.prompt_appear === 'Modal'){
                                                popupContainer.innerHTML =  msgOriginalOpt;
                                                setTimeout(hidePopupContainer, 3000);
                                            }
                                            else if(response.data.add_prompt_data.prompt_appear === 'Embedded'){
                                                popupContainer.innerHTML =  msgOriginalOpt;
                                                setTimeout(removePopupContainer , 3000);
                                            }
                                       }
                                       
                                       } else {
                                           console.log("No address selected");
                                       }
                                   }
                                    var closeButton = document.querySelector('.tanya-exit-btn') ;
                                    if(response.data.add_prompt_data.prompt_appear === 'Modal') {
                                        closeButton.addEventListener('click', closePopUpForm);
                                    }
                                    else if(response.data.add_prompt_data.prompt_appear === 'Embedded'){
                                        removePopupContainerEmbedded();
                                        customButton.style.display = 'none';
                                        originalPlaceOrderButton.style.display = 'block';
                                    }
                                   
                                    function closePopUpForm(){
                                       popupContainer.remove();
                                       customButton.style.display = 'none';
                                       originalPlaceOrderButton.style.display = 'block';
                                    }

                            },
                            error: function (error) {
                                console.error('AJAX Error for second ajax:', error);
                                alert("Something went wrong for second ajax");
                            },
                        });
                        
                    },
            
                    error: function (error) {
                        console.error('AJAX Error:', error);
                        alert("Something went wrong");
                    },
                });
              
                 
            });
        }
    }, 1000);
});




































