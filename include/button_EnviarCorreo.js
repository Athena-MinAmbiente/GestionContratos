Runner.buttonEvents["EnviarCorreo"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'EnviarCorreo';
	
	if ( !pageObj.buttonEventBefore['EnviarCorreo'] ) {
		pageObj.buttonEventBefore['EnviarCorreo'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// how many emails to send per step
var recCount = pageObj.proxy["recCount"], mail_per_step = 10;

// basic HTML code for the progress popup window
var html = "<div class><b>Enviando correos: <span class='sent'>0</span> de <span>" + recCount + "</span></b></div>" + "<br><div>Enviados: <span class='mailed'>0</span>, Errores: <span class='errors'>0</span></div>";

// showing the progress in a popup
var popup = Runner.displayPopup({
html: html,
header: 'Enviando...',
afterCreate: function (win) {
// starting sending emails, ajaxStep is a secursive function
ajaxStep(0, mail_per_step);
}
});

function ajaxStep(step, mail_per_step) {
$.get("", { ajaxMail: true, ajaxstep: step, mail_per_step: mail_per_step }, function (response) {
var json = JSON.parse(response);

// using the response data to update the progress popup

$(".sent").html(parseInt($(".sent").html()) + json["totalSent"]);
$(".mailed").html(parseInt($(".mailed").html()) + json["mailed"]);
$(".errors").html(parseInt($(".errors").html()) + json["errors"])

if (parseInt(json["totalSent"]) < mail_per_step) {
// time to exit the recursion. The number of processed records is less than
// number of records per step which means we ran out of data to process
swal("Proceso terminado");
} else {
// otherwise proceed to the next step
step++;
ajaxStep(step, mail_per_step);
};
});
}
return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['EnviarCorreo'] ) {
		pageObj.buttonEventAfter['EnviarCorreo'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="EnviarCorreo"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "EnviarCorreo" + "_" + Runner.genId();
		
		// create object
		var button_EnviarCorreo = new Runner.form.Button({
			id: this.id ,
			btnName: "EnviarCorreo"
		});
		
		// init
		button_EnviarCorreo.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

