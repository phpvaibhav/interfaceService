runAllForms();
  var Success = $('body').data('success-msg'); // Base url
  var Alert = $('body').data('alert-msg'); // Base url
  function injectTrim(handler) {
  return function (element, event) {
    if (element.tagName === "TEXTAREA" || (element.tagName === "INPUT" 
                                       && element.type !== "password")) {
      element.value = $.trim(element.value);
    }
    return handler.call(this, element, event);
  };
 }

//loader manage
function preLoadshow(e){
  if(e){
      $('.pace').addClass('pace-active').removeClass('pace-inactive');
  }else{
     $('.pace').addClass('pace-inactive').removeClass('pace-active');
  }
}//end function
//loader manage
$(function(){

  $('.number-only').keypress(function(e) {
  if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
  })
  .on("cut copy paste",function(e){
  e.preventDefault();
  });
   $(".floatNumeric").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
});
$(".alfaNumeric").on("keypress keyup blur",function (event) {
       
            if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
                    this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
                }
});

   //date 
   $( "#purchaseDate" ).datepicker({  
      dateFormat: 'mm/dd/yyyy'
    });
   
   //date 


});
 //rember me
 $(function() {
  if (localStorage.chkbx && localStorage.chkbx != '') {
    $('#remember_me').attr('checked', 'checked');
    $('#username').val(localStorage.usrname);
    $('#password').val(localStorage.pass);
    
  } else {
    $('#remember_me').removeAttr('checked');
    $('#username').val('');
    $('#password').val('');
  }
  $('#remember_me').click(function() {
    if ($('#remember_me').is(':checked')) {
        // save username and password
        localStorage.usrname = $('#username').val();
        localStorage.pass = $('#password').val();
        localStorage.chkbx = $('#remember_me').val();
      } else {
        localStorage.usrname = '';
        localStorage.pass = '';
        localStorage.chkbx = '';
      }
    });
  });
 //rember me
  var base_url = $('body').data('base-url'); // Base url
  var authToken = $('body').data('auth-url'); // Base url
      $(function() {
        // Validation
        $("#login-form").validate({
          // Rules for form validation
          rules : {
            email : {
              required : true,
              email : true
            },
            password : {
              required : true,
              minlength : 3,
              maxlength : 20
            }
          },

          // Messages for form validation
          messages : {
            email : {
              required : email_req,
              email : valid_email_req
            },
            password : {
              required : password_req,
                   minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
              
            }
          },
           onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
          // ajax 
            submitHandler: function (form) {
              toastr.clear();
              $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: base_url+'api/'+$(form).attr('action'),
                 data: $(form).serialize(),
                  cache: false,
           beforeSend: function() {
                   preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                    preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message, Success, {timeOut: 3000});
                    setTimeout(function(){ window.location = base_url+'service'; },4000);
                  /*  if(res.users.userType==1){
						 window.location = base_url+'service';
                     // window.location = base_url+'admin/dashboard';
                    }else{
                      window.location = base_url+'service';
                    }
*/
                   
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 3000});
                  }
                  
                    
                 }
             });
             return false; // required to block normal submit since you used ajax
         }
    

        });    // Validation
        $("#forgot-form").validate({
          // Rules for form validation
          rules : {
            email : {
              required : true,
              email : true
            }
         
          },

          // Messages for form validation
          messages : {
            email : {
              required : email_req,
              email : valid_email_req
            },
          },
           onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
          // ajax 
            submitHandler: function (form) {
              toastr.clear();
              $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: base_url+'api/'+$(form).attr('action'),
                 data: $(form).serialize(),
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                   preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message, Success, {timeOut: 3000});
                    setTimeout(function(){ window.location = base_url; },4000);
                  // window.location = base_url;
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 4000});

                  }
                  
                   // $('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
         }
    

        });
      });

                  
      // Validation
      $(function() {
        // Validation
        $("#smart-form-register").validate({

          // Rules for form validation
          rules : {
            fullName : {
              required : true
            },
            email : {
              required : true,
              email : true
            },
            contact : {
              required : true,
            
            }, shippingAddress : {
              required : true,
            
            },vatNumber : {
              required : true,
            
            },
            password : {
              required : true,
              minlength : 3,
              maxlength : 20
            },
            passwordConfirm : {
              required : true,
              minlength : 3,
              maxlength : 20,
              equalTo : '#password'
            },
          
          },

          // Messages for form validation
          messages : {
            fullName : {
              required : please_enter_your_full_name
            },
            email : {
              required : please_enter_your_email_address,
              email : please_enter_a_valid_email_address
            },
            contact : {
              required : please_enter_your_contact_number
            },shippingAddress : {
              required : please_enter_your_shipping_address
            },vatNumber : {
              required : please_enter_your_vat_number
            },
            password : {
              required : please_enter_password,
                   minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
            },
            passwordConfirm : {
              required : please_re_enter_your_password,
              equalTo : please_re_enter_wrong_password,
                   minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
            }
          /*  ,firstname : {
              required : 'Please select your first name'
            },
            lastname : {
              required : 'Please select your last name'
            },
            gender : {
              required : 'Please select your gender'
            },
            terms : {
              required : 'You must agree with Terms and Conditions'
            }*/
          },
           onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Ajax form submition
          submitHandler : function(form) {
            toastr.clear();
               $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: base_url+'api/'+$(form).attr('action'),
                 data: $(form).serialize(),
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                   preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                    setTimeout(function(){ window.location = base_url+'service'; },4000);
              /*      if(res.users.userType==1){
						 window.location = base_url+'service';
                      //window.location = base_url+'admin/dashboard';
                    }else{
                      window.location = base_url+'service';
                    }*/
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 4000});

                  }
                  
                    //$('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
          },

          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          }
        });
        // Validation
        // Change Password
          // Validation
        $("#smart-form-changepass").validate({

          // Rules for form validation
          rules : {
          
            password : {
              required : true,
              minlength : 3,
              maxlength : 20
            }, 
            npassword : {
              required : true,
              minlength : 3,
              maxlength : 20
            },
            rnpassword : {
              required : true,
              minlength : 3,
              maxlength : 20,
              equalTo : '#npassword'
            },
          
          },

          // Messages for form validation
          messages : {
            
            password : {
              required : please_enter_your_current_password,
              minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
            },
            npassword : {
              required : please_enter_your_new_password,
                 minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
            },
            rnpassword : {
              required : please_re_enter_your_password,
              equalTo : please_re_enter_wrong_password,
                 minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
            }
         
          },

          // Ajax form submition
          submitHandler : function(form) {
                toastr.clear();
               $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: base_url+'api/users/'+$(form).attr('action'),
                  "headers": { 'authToken':authToken},
                 data: $(form).serialize(),
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                   preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                   setTimeout(function(){ window.location = base_url+'service'; },4000);
                    
                      //window.location = base_url+'admin/dashboard';
                
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 4000});
                  }
                  
                    //$('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
          },
           onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          }
        });
        // Change Password
        // update profile
         $("#smart-form-updateuser").validate({

          // Rules for form validation
          rules : {
            fullName : {
              required : true
            },
            email : {
              required : true,
              email : true
            },
            contact : {
              required : true,
            
            },
          
          
          },

          // Messages for form validation
          messages : {
            fullName : {
              required : please_enter_your_full_name
            },
            email : {
              required : please_enter_your_email_address,
              email : please_enter_a_valid_email_address
            },
           contact : {
              required : please_enter_your_contact_number,
            
            },
           
          
          },

          // Ajax form submition
         /* submitHandler : function(form) {
           
             return false; // required to block normal submit since you used ajax
          },
*/
 onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          }
        });
        // update profile
       
        $("#smart-form-service").validate({

          // Rules for form validation
          rules : {
            productName : {
              required : true
            },
            vendor : {
              required : true,
             
            }, 
            modelName : {
              required : true,
             
            },
            serialNumber : {
              required : true,
            
            },
            purchaseDate : {
              required : true,
             
            }, 
            contactNumber : {
              required : true,
             
            },
            faultDescription : {
              required : true,
             
            },
           
          
          },

          // Messages for form validation
          messages : {
       
            productName : {
              required : Please_enter_your_product_name
            },
            vendor : {
              required : Please_enter_your_manufacture
            }, 
            modelName : {
              required : Please_enter_your_model_name
            },
            serialNumber : {
              required : Please_enter_your_product_series_number,
           
            },
            purchaseDate : {
              required : Please_select_your_product_date_of_purchase
            },
            contactNumber : {
              required : Please_enter_your_contact_number
            },
            faultDescription : {
              required : Please_enter_your_fault_description
            },
           
          },

          // Ajax form submition
        //  submitHandler : function(form) {
              // $('#submit').prop('disabled', true);
               //~ var form_data = $(form).serialize();
 
            //~ $.ajax({
                 //~ type: "POST",
                 //~ url: base_url+'api/service/'+$(form).attr('action'),
                 //~ headers: { 'authToken': authToken },
                 //~ data: form_data,
                  //~ cache: false,
         //~ //          processData: false,
       //~ // contentType: false,
           //~ beforeSend: function() {
          
                    //~ $('#submit').prop('disabled', true);  
                  //~ },     
                 //~ success: function (res) {
                   //~ $('#submit').prop('disabled', false); 
                  //~ if(res.status=='success'){
                   //~ toastr.success(res.message, 'Success', {timeOut: 5000});
                   //~ window.location = base_url+'service';
                  //~ }else{
                    //~ toastr.error(res.message, 'Alert!', {timeOut: 5000});
                  //~ }
                  
                    
                 //~ }
             //~ });
            // return false; // required to block normal submit since you used ajax
         // },
 onfocusout: injectTrim($.validator.defaults.onfocusout),
          // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          }
        });
        //fromsubmit
        $(document).on('submit', "#smart-form-service", function (event) {
            toastr.clear();
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: base_url+'api/service/'+$(this).attr('action'),
        headers: { 'authToken': authToken },
        data: formData, //only input
        processData: false,
        contentType: false,
        cache: false,
            beforeSend: function () {
               preLoadshow(true);
            $('#submit').prop('disabled', true);
            },
          success: function (res) {
             preLoadshow(false);
                   setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                   setTimeout(function(){ window.location = base_url+'service'; },4000);
                  // window.location = base_url+'service';
                  }else{
                    toastr.error(res.message, 'Alert!', {timeOut: 4000});
                  }
                  
                    
                 }
    });

});      
$(document).on('submit', "#smart-form-updateuser", function (event) {
    toastr.clear();
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: base_url+'api/users/'+$(this).attr('action'),
        headers: { 'authToken': authToken },
        data: formData, //only input
        processData: false,
        contentType: false,
        cache: false,
            beforeSend: function () {
               preLoadshow(true);
            $('#submit').prop('disabled', true);
            },
          success: function (res) {
             preLoadshow(false);
                   setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                   setTimeout(function(){ window.location = base_url+'users/userDetail/'+res.url; },4000);
                   
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 4000});
                  }
                  
                    
                 }
    });

});
        //fromsubmit

      });

 $("#addFormAjax").validate({
         rules: {
        password: {
          required: true,
          minlength: 3,
          maxlength: 20,
        },
        cpassword: {
           required: true,  
         minlength: 3,
          maxlength: 20,
         equalTo: "#password",
       }
      },
      messages: {
        password:{
               required: please_enter_your_password,
     minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters
        }, 
        cpassword:{ 
          required: please_re_enter_your_password,
     minlength : Please_enter_at_least_3_characters,
              maxlength : Please_enter_no_more_than_20_characters,
          equalTo: please_re_enter_wrong_password,

        }
      },
       onfocusout: injectTrim($.validator.defaults.onfocusout),
      // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
          // ajax 
            submitHandler: function (form) {
              toastr.clear();
              $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: $(form).attr('action'),
                 data: $(form).serialize(),
                 dataType:'json',
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                   preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                    setTimeout(function(){ window.location = base_url; },4000);
                  
                  }else{
                    toastr.error(res.message, Alert, {timeOut: 4000});
                  }
                  
                  //  $('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
         }

   });
// comment service
$("#commentForm").validate({
         rules: {
        comment: {
          required: true,
        } 
      },
      messages: {
        comment:{
               required: Please_enter_comment,
        }
      },
       onfocusout: injectTrim($.validator.defaults.onfocusout),
      // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
          // ajax 
            submitHandler: function (form) {
              toastr.clear();
              $('#submit').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: $(form).attr('action'),
                  headers: { 'authToken': authToken },
                 data: $(form).serialize(),
                 dataType:'json',
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit').prop('disabled', true);  
                  },     
                 success: function (res) {
                    preLoadshow(false);
                    setTimeout(function(){  $('#submit').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                      setTimeout(function(){ location.reload(); },3000);
                  
                  }else{
                    toastr.error(res.message,Alert, {timeOut: 4000});
                  }
                  
                  //  $('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
         }

   });
$("#internalcommentForm").validate({
         rules: {
        notes: {
          required: true,
        } 
      },
      messages: {
        notes:{
               required: Please_enter_internal_comment,
        }
      },
      onfocusout: injectTrim($.validator.defaults.onfocusout),
      // Do not change code below
          errorPlacement : function(error, element) {
            error.insertAfter(element.parent());
          },
          // ajax 
            submitHandler: function (form) {
              toastr.clear();
              $('#submit1').prop('disabled', true);
            $.ajax({
                 type: "POST",
                 url: $(form).attr('action'),
                  headers: { 'authToken': authToken },
                 data: $(form).serialize(),
                 dataType:'json',
                  cache: false,
           beforeSend: function() {
                     preLoadshow(true);
                    $('#submit1').prop('disabled', true);  
                  },     
                 success: function (res) {
                    preLoadshow(false);
                    setTimeout(function(){  $('#submit1').prop('disabled', false); },4000);
                  if(res.status=='success'){
                   toastr.success(res.message,Success, {timeOut: 3000});
                      setTimeout(function(){ location.reload(); },3000);
                  
                  }else{
                    toastr.error(res.message, Alert, {timeOut: 4000});
                  }
                  
                  //  $('#submit').prop('disabled', false);  
                 }
             });
             return false; // required to block normal submit since you used ajax
         }

   });
