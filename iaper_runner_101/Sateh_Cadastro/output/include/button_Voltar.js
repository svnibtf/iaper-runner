
Runner.buttonEvents["Voltar"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Voltar';if(!pageObj.buttonEventBefore['Voltar']){pageObj.buttonEventBefore['Voltar']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;window.history.back();}}
if(!pageObj.buttonEventAfter['Voltar']){pageObj.buttonEventAfter['Voltar']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="Voltar"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Voltar"+"_"+Runner.genId();var button_Voltar=new Runner.form.Button({id:this.id,btnName:"Voltar"});button_Voltar.init({args:[pageObj,proxy,pageid]});});};