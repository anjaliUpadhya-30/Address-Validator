

document.addEventListener('DOMContentLoaded', function () {

  setTimeout(function () {
    var placeOrderButton = document.querySelector('.pause-btn');
    console.log(placeOrderButton);
    console.log("button got clicked");
    if (placeOrderButton) {
      placeOrderButton.addEventListener('click', function (e) {
        e.preventDefault();

        // Display the popup form
        var popupContainer = document.createElement('div');
        popupContainer.innerHTML = popupForm;
        document.body.appendChild(popupContainer);

        // Close the popup when the "Close" button is clicked
        popupContainer.querySelector('.tanya-close-btn').addEventListener('click', function () {
          popupContainer.remove();
        });

        // Handle "Save Changes" button logic (replace with your actual logic)
        popupContainer.querySelector('.tanya-close-btn.save-changes').addEventListener('click', function () {
          // Process form data and perform necessary actions
          console.log("Save changes button clicked");
          // ... (your form handling logic here)
          popupContainer.remove();
        });
        setTimeout(function () {
          console.log("place order");
        }, 2000);
      }, 5000);
    }
  }, 5000);

});






















// // script.js

jQuery(document).ready(function($) {



/*
     * Section Name - Address-prompts
     * Function Name - saveFormData
     * Description - save data form the changes on address-form  :- how does it work ? , advanced section .
     * DB Table Used - shop_add_prompts
     * Varaibles used - formData, checkboxName, checkboxValue
     *
     * @param   string  $cat_slug       category slug to get related stories of that category
     *
*/
  






  function saveFormData() {
    var formData = $('#shop-add-prom').serializeArray();

    $('#shop-add-prom input[type=checkbox]').each(function() {
      var checkboxName = $(this).attr('name');
      var checkboxValue = $(this).prop('checked') ? 'on' : 'off';

      // Check if the checkbox is not already included in formData
      if (!formData.some(item => item.name === checkboxName)) {
          formData.push({
              name: checkboxName,
              value: checkboxValue
          });
      }
    });

    $.ajax({
          type: 'POST',
          url: ajaxurl,
          data: {
              action: 'save_form_data', 
              form_data: formData,
          },
          success: function(response) {
              console.log(response);
              if (response.data === 'success') {
                showSuccessMessage('Changes saved successfully!');
              }
          },
          error: function(error) {
              console.error('AJAX Error:', error);
          },
    });
  }
 
  $('#shop-add-prom').on('change', 'input, select, textarea', function() {
    saveFormData();
  });
  $('#shop-add-prom').on('click', '.form-btn', function() {
    var keywordValue = $('#keyword_skip_add_valid').val();
    console.log('Keyword Value:', keywordValue);
  });
  $('#shop-add-prom').on('submit', function(e) {
    e.preventDefault();
    saveFormData();
  });


  // updating-save-gen-custom-form-data
  
  function saveGenCustom(){
    var formData = $('#shop-gen-customization').serializeArray();
    
    $('#shop-gen-customization input[type=checkbox]').each(function() {
      var checkboxName = $(this).attr('name');
      var checkboxValue = $(this).prop('checked') ? 1 : 0;

      if (!formData.some(item => item.name === checkboxName)) {
          formData.push({
              name: checkboxName,
              value: checkboxValue
          });
      }
    });

    $.ajax({
          type: 'POST',
          url: ajaxurl,
          data: {
              action: 'save_gen_custom', 
              form_data: formData,
          },
          success: function(response) {
              console.log(response);
              if (response.data === 'success') {
                showSuccessMessage('Changes saved successfully!');
              }
          },
          error: function(error) {
              console.error('AJAX Error:', error);
          },
    });
  }
  $('#shop-gen-customization').on('change', 'input, select, textarea', function() {
    saveGenCustom();
  });
  $('#shop-gen-customization').on('submit', function(e) {
    e.preventDefault();
    saveGenCustom();
  });

 // updating-save-suggested-cor-prompts-form-data
  function saveSuggestedCorPromptsData() {
    var formData = $('#shop-suggested-cor-prompts').serializeArray();

    $('#shop-suggested-cor-prompts input[type=checkbox]').each(function() {
      var checkboxName = $(this).attr('name');
      var checkboxValue = $(this).prop('checked') ? 1 : 0;

      if (!formData.some(item => item.name === checkboxName)) {
          formData.push({
              name: checkboxName,
              value: checkboxValue
          });
      }
    });

    $.ajax({
          type: 'POST',
          url: ajaxurl,
          data: {
              action: 'save_suggested_cor_prompts_data', 
              form_data: formData,
          },
          success: function(response) {
            console.log(response);
            if (response.data === 'success') {
              showSuccessMessage('Changes saved successfully!');
            }
          },
          error: function(error) {
              console.error('AJAX Error:', error);
          },
    });
  }
  $('#shop-suggested-cor-prompts').on('change', 'input, select', function() {
    saveSuggestedCorPromptsData();
  });
  $('#shop-suggested-cor-prompts').on('submit', function(e) {
    e.preventDefault();
    saveSuggestedCorPromptsData();
  });
  

   //updating-save-unveri-addr-prompts
  function saveUnveriAddrPrompts(){
    var formData = $('#shop-unveri-addr-prompts').serializeArray();

    $.ajax({
          type: 'POST',
          url: ajaxurl,
          data: {
              action: 'save_unveri_add_prompts', 
              form_data: formData,
          },
          // dataType:'json',
          success: function(response) {
              console.log(response);
              if (response.data === 'success') {
                showSuccessMessage('Changes saved successfully!');
              }
          },
          error: function(error) {
              console.error('AJAX Error:', error);
          },
    });
  }
  $('#shop-unveri-addr-prompts').on('change', 'input, select', function() {
    saveUnveriAddrPrompts();
  });
  $('#shop-unveri-addr-prompts').on('submit', function(e) {
    e.preventDefault();
    saveUnveriAddrPrompts();
  });


//     // updating-validation-add
  $('.validation-addr-check').on('change', function () {
        var checkboxName = $(this).attr('name');
        var isChecked = $(this).is(':checked');

        saveCheckboxChanges(checkboxName, isChecked);
  });
    
  function saveCheckboxChanges(checkboxName, isChecked) {
      var data = {
          action: 'save_checkbox_changes',
          checkbox_name: checkboxName,
          is_checked: isChecked ? 1 : 0,
      };

      $.ajax({
          url: ajaxurl,
          type: 'POST',
          data: data,
          success: function (response) {
              console.log(response); 
              if (response.data === 'success') {
                showSuccessMessage('Changes saved successfully!');
              }
          },
      });
  }

    //updating-validation-add-msg
  var inputDelay;
  $('.validation-rules-input').on('input', function () {
        clearTimeout(inputDelay);
        var inputName = $(this).attr('name');
        var inputValue = $(this).val();
         
        inputDelay = setTimeout(function () {
            saveInputChanges(inputName, inputValue);
        }, 500); 
  });

  function saveInputChanges(inputName, inputValue) {
        var data = {
            action: 'save_input_changes',
            input_name: inputName,
            input_value: inputValue,
        };

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: data,
            success: function (response) {
              console.log(response); 
              if (response.data === 'success') {
                showSuccessMessage('Changes saved successfully!');
              }
            },
        });
  }
  
   // Variable to store the timer ID
  var timer;
  function saveApiKey(apiKey) {
    clearTimeout(timer);
    timer = setTimeout(function () {
      var data = {
         action: 'save_api_key',
         api_key: apiKey,
      };

      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: data,
         success: function (response) {
            console.log(response);
            if (response.data === 'success') {
              //alert('hi....');
              showSuccessMessage('API key saved successfully!');
            }
         },
         error: function (error) {
            console.error('AJAX error:', error);
         }
      });
   }, 200);
 }

  document.getElementById('gapikey').addEventListener('change', function (event) {
    var apiKey = event.target.value;
    console.log(apiKey);
    saveApiKey(apiKey);

  });

});
   


function addKeyword() {
  var inputText = document.getElementById('textInput').value;
  console.log(inputText);
  var outputDiv = document.getElementById('output');
    if (outputDiv.childElementCount < 3) {
      sendDataToServer(inputText);
      document.getElementById('textInput').value = '';
  } else {
      showFailureMessage('You can only add up to 3 keywords.');
   }
}

function sendDataToServer(keyword){
  $.ajax({
    url: ajaxurl,
    type: 'POST',
    data: {
      action: 'save_addr_keyword', 
      data_key: keyword,
    },
    success: function (response) {
     // console.log(response); 
      if (response.data === 'success') {
        fetchAndDisplayKeywords();
        showSuccessMessage('Changes saved successfully!');
      }
    },
    error: function (error) {
      console.error('AJAX Error:', error);
   },
  });
}

function fetchAndDisplayKeywords() {
  $.ajax({
      type: 'POST',
      url: ajaxurl, 
      data: {
          action: 'get_keywords',
      },
      success: function (response) {
         // console.log(response);
          if (response.success) {
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            for (var i = 0; i < response.data.keywords.length; i++) {
                var newParagraph = document.createElement('p');
                newParagraph.textContent = response.data.keywords[i];
                var asteriskIcon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                asteriskIcon.setAttribute('width', '10');
                asteriskIcon.setAttribute('height', '10');
                asteriskIcon.setAttribute('fill', 'currentColor');
                asteriskIcon.setAttribute('class', 'bi bi-asterisk');
                asteriskIcon.setAttribute('viewBox', '0 0 16 16');

                 // Set the onclick attribute to call the deleteKeyword function
                asteriskIcon.setAttribute('onclick', 'deleteKeyword("' +  response.data.keywords[i] + '")');


                var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                path.setAttribute('d', 'M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1');
               asteriskIcon.appendChild(path);
               newParagraph.appendChild(document.createTextNode(' '));
               newParagraph.appendChild(asteriskIcon);
               outputDiv.appendChild(newParagraph);
            }
          } else {
            console.error('Failed to insert keyword.');
          }
      },
      error: function (error) {
          console.error('AJAX Error:', error);
      },
  });
}

// Function to delete a keyword
function deleteKeyword(keyword) {
  $.ajax({
      type: 'POST',
      url: ajaxurl,
      data: {
          action: 'delete_keyword',
          keyword: keyword,
      },
      success: function (response) {
          console.log(response);
          if (response.data === 'success') {
            fetchAndDisplayKeywords();
            showSuccessMessage('Changes saved successfully!');
          }else {
              console.error('Failed to delete keyword.');
          }
      },
      error: function (error) {
          console.error('AJAX Error:', error);
      },
  });
} 

function showSuccessMessage(message) {
  // Create a new element for the success message
  var successMessage = $('<div>').addClass('success-message').text(message);

  // Calculate the current scroll position
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

  // Set the position of the success message fixed at the top with the current scroll position
  // successMessage.css('top', scrollPosition + 'px');

  // Append the element to the body
  $('body').append(successMessage);

  // Hide the success message after a certain duration (e.g., 5 seconds)
  setTimeout(function() {
      successMessage.fadeOut('fast', function() {
          $(this).remove();
      });
  }, 5000);
}
function showFailureMessage(message){
  var failureMessage = $('#failure-message'); // Corrected the syntax to select the element

  failureMessage.text(message);
  failureMessage.addClass('show');

  setTimeout(function() {
    failureMessage.removeClass('show');
  }, 2000);
}
// Initial data fetch and display when the page loads
document.addEventListener('DOMContentLoaded', function () {
  // Your script here
  fetchAndDisplayKeywords();
});

// function removeParentClass(element) {
//   // Get the parent element of the clicked div
//   var parentElement = element.parentElement;

//   // Check if the parent element is currently visible
//   if (window.getComputedStyle(parentElement).display !== 'none') {
//       // If visible, set display to none
//       parentElement.style.display = 'none';
//   } else {
//       // If hidden, set display to the original value (e.g., block or inline)
//       parentElement.style.display = '';
//   }
// }
// ---------------------------------------------------------------------------------------------------------------------------



// validator tab
$(document).ready(function () {
  // 1st tab
  $(".validator-tabs-content").eq(0).show();
  $("#tabs li").eq(0).addClass("active");
  $("#tabs li").click(function () {
      var number = $(this).index();
      $("#tabs li").removeClass("active");
      $(".validator-tabs-content").hide().eq(number).fadeIn("slow");
      $("#tabs li").eq(number).addClass("active");
  });

  // 2nd new tab
  $(".validator-work-tabs-content").eq(0).show();
  $("#work-tabs li").eq(0).addClass("active");
  $("#work-tabs li").click(function () {
      var number = $(this).index();
      $("#work-tabs li").removeClass("active");
      $(".validator-work-tabs-content").hide().eq(number).fadeIn("slow");
      $("#work-tabs li").eq(number).addClass("active");
  });

  // 3rd new tab
  $(".tabs-btn-content").eq(0).show();
  $("#btn-tabs li").eq(0).addClass("active");
  $("#btn-tabs li").click(function () {
      var number = $(this).index();
      $("#btn-tabs li").removeClass("active");
      $(".tabs-btn-content").hide().eq(number).fadeIn("slow");
      $("#btn-tabs li").eq(number).addClass("active");
  });

  //========= multiple checked=======
$('.all-cb-div .form-check-input').on('click',function(){
  console.log('checkbox clicked');
  $(this).parents('.form-check').toggleClass('fc-checked');
})

});



// =======add advanced text=======
function addText() {
  var inputValue = document.getElementById("inputText").value;
  alert("Input Text: " + inputValue);
}

// ============api cross============

function removeParentClass(e) {
  document.querySelector('.api-notice-bar').style.display = "none";
}

// ==============scroll customization===========

const tabs = document.querySelectorAll(".tab")
const scroll_stickys = document.querySelectorAll(".scroll-sticky")
const pages = document.querySelectorAll(".page")
const scrollToTop = document.querySelector(".scrollToTop")

const observer = new IntersectionObserver((entries, observer) => {
entries.forEach(entry => {
  if (entry.isIntersecting) {
    console.log(entry.target);
    const index = Array.from(pages).indexOf(entry.target)

    tabs.forEach(tab => {
      tab.classList.remove("activeTab")
    })
    tabs[index].classList.add("activeTab")

    scroll_stickys.forEach(scroll_sticky => {
      scroll_sticky.classList.remove("active-sl-tab")
    })
    scroll_stickys[index].classList.add("active-sl-tab")

  }
})
}, {
threshold: 0.25,
})


pages.forEach(page => {
observer.observe(page)
})


// ==========customize button=========

function toggleActive(button) {
// Remove 'active-btn' class from all buttons
var buttons = document.querySelectorAll('.rounded-btn, .square-btn');
buttons.forEach(function(btn) {
    btn.classList.remove('active-btnn');
});

// Add 'active-btn' class to the clicked button
button.classList.add('active-btnn');
}










