  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
        
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  }); 

  $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });