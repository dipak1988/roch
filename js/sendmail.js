function verify() {
	
	//form data
    var naam = $('#naam').val();
	var email = $('#email').val();
	var tel = $('#tel').val();
	var bericht = $('#bericht').val();
	
	//form data to send to php file
	var vardata = 'naam=' + naam + '&email=' + email + '&tel=' + tel + '&bericht=' + bericht;
	
	// check if characters are present in email data
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	
	if(!(naam == "" || email == "" || tel == "" || bericht == ""))
	{	
		if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length)
		{		
			swal
			(
			
			   'Onjuist email adres.',
			   'Vul een geldig email adres in',
			   'warning'
			   
			)
			
		}
		else if(isNaN(tel))
		{
			swal
			(
			
			   'Onjuist telefoonnummer.',
			   'Vul alleen cijfers in.',
			   'warning'
			  
			)
		}	
		else
		{
			$.ajax({

				type: "POST",
				url: '../sendmail.php',
				data: vardata

			});
				
			swal({
				
				title: 'Email verzonden',
				text: 'Wij nemen zo snel mogelijk contact met je op.',
				type: 'success',
				timer: 3000
			  
			})			
		}				
	}
	else
	{		
		
		swal
		(
		
		   'Je mist een veld..',
		   'Vul alle velden correct in.',
		   'warning'
		  
		)	
		
		
	}
}
