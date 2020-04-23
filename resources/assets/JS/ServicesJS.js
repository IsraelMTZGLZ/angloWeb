function _principalURL(){
  //local api
  //return "http://localhost/angloApi/";
  //api web
  return "https://api.anglo.anglolatinoedu.com/";
}
    
function clearForm(_id){
  $(document).find('#'+_id).find('input,select,textarea').each(function(e){
    $(this).removeClass('is-invalid');
    $(this).next('div').remove();
  });
}

function clearFormIcons(_id){
  $(document).find('#'+_id).find('input,select,textarea').each(function(e){
    $(this).removeClass('is-invalid');
    $(this).closest('div').next('div').remove();
  });
}

function tostada(_typo,_message){
  if (_typo=="error") {
    _titulo="Alerta revisa el mensaje";
    toastr.error(_message,_titulo,{
      "progressBar": true,
      "newestOnTop": true,
      "closeButton": true
    });
  }else if (_typo=="success"){
    _titulo="Correcto Revisa El Mensaje";
    toastr.success(_message,_titulo,{
      "progressBar": true,
      "newestOnTop": true,
      "closeButton": true
    });
  }else if (_typo=="info"){
    _titulo="Correcto Revisa El Mensaje";
    toastr.info(_message,{
      "progressBar": true,
      "newestOnTop": true,
      "closeButton": true
    });
  }
}