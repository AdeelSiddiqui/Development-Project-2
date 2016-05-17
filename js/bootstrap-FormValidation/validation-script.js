$(document).ready(function(e) {
    $('#signup').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			firstname: 
			{
				validators: {
					notEmpty: {
                    message: 'The First Name is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The First Name must be more than 2 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\-_ .]+$/,
						message: 'The First Name can only consist of alphabetical, number, dot and underscore'
					},
				}
			},
			lastname: 
			{
				validators: {
					notEmpty: {
                    message: 'The Last Name is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Last Name must be more than 2 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\-_ .]+$/,
						message: 'The Last Name can only consist of alphabetical, number, dot and underscore'
					},
				}
			},
			company: 
			{
				validators: {
					notEmpty: {
                    message: 'The company is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The company be more than 2 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\-_ .]+$/,
						message: 'The company can only consist of alphabetical, number, dot and underscore'
					},
				}
			},
			website: 
			{
				validators: {
					notEmpty: {
                    message: 'The Website is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Website must be more than 2 and less than 30 characters long'
					},
					uri: {
						message: 'The Website can only consist of alphabetical, number, dot and underscore'
					},
				}
			},
			email: 
			{
				validators: {
					notEmpty: {
                    message: 'The Email is required'
					},
					emailAddress: {
                        message: 'The Email is not a valid email address'
                    },
					regexp: {
      regexp: /^[0-9]+$/,
      message: 'The Name can only consist of number'
     },
					/*remote: {
						message: 'The Email is not available',
						url: 'login/get_email',
						type: 'POST',
						data: {
                            email:  $('input[name=email]').val()
                        },
						delay: 2000     // Send Ajax request every 2 seconds
					},*/
					
				}
			},
			
			password: 
			{
				validators: {
					notEmpty: {
                    message: 'The password is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Password must be more than 2 and less than 30 characters long'
					},
					validators: {
						identical: {
							field: 'rpassword',
							message: 'The password and its confirm are not the same'
						}
					}
				}
			},
			rpassword: 
			{
				validators: {
					notEmpty: {
                    message: 'The Confirm Password is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Cofirm pasword must be more than 2 and less than 30 characters long'
					},
					validators: {
						identical: {
							field: 'rpassword',
							message: 'The Cofirm Password and its confirm are not the same'
						}
					}
				}
			},
			tnc: 
			{
				validators: {
					notEmpty: {
                    message: 'The TERMS and Conditions is required'
					},
					
				}
			},
			
        }
    });
	
	
	
	
	
	
	
	$('#signin').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
			email: 
			{
				validators: {
					notEmpty: {
                    message: 'The Email is required'
					},
					emailAddress: {
                        message: 'The Email is not a valid email address'
                    },
					
				}
			},
			
			password: 
			{
				validators: {
					notEmpty: {
                    message: 'The password is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Password must be more than 2 and less than 30 characters long'
					},
					
				}
			},
        }
    });
	
	$('#contact_us').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
			name: 
			{
				validators: {
					notEmpty: {
                    message: 'The Name is required'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\-_ .]+$/,
						message: 'The Name can only consist of alphabetical, number, dot and underscore'
					},
				},
				
			},
			email: 
			{
				validators: {
					notEmpty: {
                    message: 'The Email is required'
					},
					emailAddress: {
                        message: 'The Email is not a valid email address'
                    },
					
				}
			},
			phone: 
			{
				validators: {
					notEmpty: {
                    message: 'The phone is required'
					},
					stringLength: {
						min: 10,
						max: 10,
						message: 'The phone must be 10 characters long'
					},
					
				}
			},
			
			message: 
			{
				validators: {
					notEmpty: {
                    message: 'The phmessageone is required'
					},
					stringLength: {
						min: 10,
						max: 500,
						message: 'The message must be 10 to 500 characters long'
					},
					
				}
			},
        }
    });
});