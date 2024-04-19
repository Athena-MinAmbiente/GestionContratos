Runner.buttonEvents["BtnHome"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnHome';
	
	if ( !pageObj.buttonEventBefore['BtnHome'] ) {
		pageObj.buttonEventBefore['BtnHome'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
  title: '¡Información!',
  text: 'Direccionar a la página principal',
  icon: 'success'
}).then(function() {
  // Redirecciona a la página deseada
  window.location.href = '../_Athena/index.html';
});
		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnHome'] ) {
		pageObj.buttonEventAfter['BtnHome'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="BtnHome"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnHome" + "_" + Runner.genId();
		
		// create object
		var button_BtnHome = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnHome"
		});
		
		// init
		button_BtnHome.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

