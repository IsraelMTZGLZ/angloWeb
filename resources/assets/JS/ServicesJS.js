function _principalURL(){
  return "http://localhost/angloApi/";
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
    _titulo="Alert Check Message";
    toastr.error(_message,_titulo,{
      "progressBar": true,
      "newestOnTop": true,
      "closeButton": true
    });
  }else if (_typo=="success"){
    _titulo="Correcto Check Message";
    toastr.success(_message,_titulo,{
      "progressBar": true,
      "newestOnTop": true,
      "closeButton": true
    });
  }
}