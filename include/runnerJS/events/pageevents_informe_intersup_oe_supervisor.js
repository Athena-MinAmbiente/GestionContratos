
Runner.pages.PageSettings.addPageEvent('informe_intersup_oe_supervisor',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.hideField('sup_obs');var ctrl=Runner.getControl(pageid,"sup_aprueba");ctrl.on('change',function(){if(ctrl.getValue()==3){pageObj.showField('sup_obs');pageObj.hideField('evidencia');Swal.fire({position:'center',icon:'info',title:'¡Devolución de obligación!',html:'Al seleccionar esta opción, por favor indique el motivo de devolución en el campo correspondiente denominado "Motivo de devolución".',background:'#F7F7F7',iconColor:'#000000',timerProgressBar:true,showConfirmButton:false,timer:5000});}else{pageObj.hideField('sup_obs');pageObj.hideField('evidencia');}});});