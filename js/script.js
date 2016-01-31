/*Back to top*/
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span><br>Top</div>');
  $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  }); 

  $('#toTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});

/*Hidding side nav*/
$(window).resize(function(){
  var path = $(this);
  var contW = path.width();
  /*if(contW >= 751){
    document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
  }else{
    document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
  }*/
});

$(document).ready(function() {
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
  });
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    var elem = document.getElementById("sidebar-wrapper");
    left = window.getComputedStyle(elem,null).getPropertyValue("left");
    if(left == "200px"){
      document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
    }
    else if(left == "-200px"){
      document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
    }
  });
});


/*Review*/
$(document).ready(function(){
  $('#subrev').click(function(){
    var rename = $('#review-name').val();
    var reemail = $('#review-email').val();
    var review = $('#review').val();
  
    //Validation
    $.ajax({
      type: 'POST',
      url: '../review.php',
      data: {rename:rename,reemail:reemail,review:review},
      success: function(data){
        $('#result').html(data);
      }
    });
  });
});