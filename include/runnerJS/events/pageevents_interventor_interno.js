
Runner.pages.PageSettings.addPageEvent('interventor_interno',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var tabs=pageObj.getTabs();tabs.hide(1);tabs.hide(2);tabs.hide(3);var ctrlCountry=Runner.getControl(pageid,'num_sup');ctrlCountry.on('change',function(e){var selectedValue=this.getValue();tabs.hide(1);tabs.hide(2);tabs.hide(3);if(selectedValue==1){tabs.show(1);}else if(selectedValue==2){tabs.show(1);tabs.show(2);}else if(selectedValue==3){tabs.show(1);tabs.show(2);tabs.show(3);}});});Runner.pages.PageSettings.addPageEvent('interventor_interno',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var tabs=pageObj.getTabs();tabs.hide(2);tabs.hide(3);var ctrlCountry=Runner.getControl(pageid,'num_sup');ctrlCountry.on('change',function(e){var selectedValue=this.getValue();tabs.hide(2);tabs.hide(3);if(selectedValue==1){}else if(selectedValue==2){tabs.show(1);tabs.show(2);}else if(selectedValue==3){tabs.show(1);tabs.show(2);tabs.show(3);}});pageObj.hideField('');var ctrl=Runner.getControl(pageid,"sup_status");ctrl.on('change',function(){if(ctrl.getValue()==2){Swal.fire({position:'center',icon:'info',title:'¡Revocación a supervisión de contrato!',html:'Al confirmar esta opción revocará el acceso a la supervisión del contrato',background:'#F7F7F7',iconColor:'#000000',timerProgressBar:true,showConfirmButton:false,timer:8000});}});});