$(document).ready(function () {
  $('#load').click(function(){
    alert("Testing success!!");
  });
  $('#edit_jamkes').click(function(){
    var id=data.val('id');
    $('.form-control #id').val(id);
  });
});
