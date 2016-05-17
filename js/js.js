$(document).ready(function(e) {
	$('[data-toggle="tooltip"]').tooltip();
    $('#bootstrapSelectForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
			username: 
			{
				validators: {
					threshold: 5,
					notEmpty: {
                    message: 'The username is required'
					},
					stringLength: {
						min: 6,
						max: 30,
						message: 'The username must be more than 6 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\.]+$/,
						message: 'The username can only consist of alphabetical, number, dot and underscore'
					},
					remote: {
						message: 'The username is not available',
						url: 'login/get_username',
						type: 'POST',
						data: {
                            username:  $('input[name=username]').val()
                        },
						delay: 2000     // Send Ajax request every 2 seconds
					}
				}
			},
			f_name: 
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
			l_name: 
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
			email: 
			{
				validators: {
					notEmpty: {
                    message: 'The Email is required'
					},
					emailAddress: {
                        message: 'The Email is not a valid email address'
                    },
					remote: {
						message: 'The Email is not available',
						url: 'login/get_email',
						type: 'POST',
						data: {
                            email:  $('input[name=email]').val()
                        },
						delay: 2000     // Send Ajax request every 2 seconds
					},
					identical: {
                    field: 'remail',
                    message: 'The Email and its confirm are not the same'
                }
				}
			},
			remail: 
			{
				validators: {
					notEmpty: {
                    message: 'The Confirm Email is required'
					},
					emailAddress: {
                        message: 'The Confirm Email is not a valid email address'
                    },
					validators: {
						identical: {
							field: 'email',
							message: 'The Email and its confirm are not the same'
						}
					}
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
							field: 'email',
							message: 'The Password and its confirm are not the same'
						}
					}
				}
			},
			gamertagx: 
			{
				validators: {
					notEmpty: {
                    message: 'The Gamertag Password is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'The Gamertag must be more than 2 and less than 30 characters long'
					},
					
				}
			},
			gamertag: {
                selector: '.gamertagx',
                validators: {
                    callback: {
                        message: 'You must enter at least one gamertag',
                        callback: function(value, validator, $field) {
                            var isEmpty = true,
                                $fields = validator.getFieldElements('gamertag');
                            for (var i = 0; i < $fields.length; i++) {
                                if ($fields.eq(i).val() !== '') {
                                    isEmpty = false;
                                    break;
                                }
                            }

                            if (!isEmpty) {
                                // Update the status of callback validator for all fields
                                validator.updateStatus('gamertag', validator.STATUS_VALID, 'callback');
                                return true;
                            }

                            return false;
                        }
                    },
                    /*emailAddress: {
                        message: 'The value is not a valid gamertag address'
                    }*/
                }
			},
			iban: 
			{
				validators: {
					
					stringLength: {
						min: 0,
						max: 30,
						message: 'The IBAN must be more than 2 and less than 30 characters long'
					},
					
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
			'18plus': 
			{
				validators: {
					notEmpty: {
                    message: 'Not old enough?'
					},
					
				}
			},
        }
    });
	$('#bootstraploginForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            
			username: 
			{
				validators: {
					threshold: 5,
					notEmpty: {
                    message: 'The username is required'
					},
					stringLength: {
						min: 6,
						max: 30,
						message: 'The username must be more than 6 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\.]+$/,
						message: 'The username can only consist of alphabetical, number, dot and underscore'
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
					validators: {
						identical: {
							field: 'rpassword',
							message: 'The password and its confirm are not the same'
						}
					}
				}
			},
			
        }
    });
});