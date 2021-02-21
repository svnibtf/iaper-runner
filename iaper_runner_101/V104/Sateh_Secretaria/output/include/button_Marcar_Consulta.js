
Runner.buttonEvents["Marcar_Consulta"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Marcar_Consulta';if(!pageObj.buttonEventBefore['Marcar_Consulta']){pageObj.buttonEventBefore['Marcar_Consulta']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['Marcar_Consulta']){pageObj.buttonEventAfter['Marcar_Consulta']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="Marcar_Consulta"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Marcar_Consulta"+"_"+Runner.genId();var button_Marcar_Consulta=new Runner.form.Button({id:this.id,btnName:"Marcar_Consulta"});button_Marcar_Consulta.init({args:[pageObj,proxy,pageid]});});};