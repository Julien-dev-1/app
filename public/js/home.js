$(".slideToggleLeft").click(function(){
    $("._projet-home").animate({scrollLeft: '-=320'},1000);
});
$("#slideToggleRigth").click(function(){
    $("._projet-home").animate({scrollLeft: '+=320'},1000);
});
$(document).ready(function(){
    $("._heart").click(function(){
      var _hearth = $(this);
      var _token = $('input')[2].value;
      var user_id = _hearth.attr('id');let projet_id = _hearth.attr('real');
      var nb = $('.'+projet_id+'_class').html();
      $.ajax({
        url:"/suivie",
        method:"POST",
        data:{projet_id:projet_id,user_id:user_id,_token:_token},
        success:function(data){
          if (data == '1') {
            _hearth.removeClass('fa-heart-o'); _hearth.addClass('fa-heart');
            var som = parseInt(nb) + 1;
            if (som > 1) {
              $('.'+projet_id+'_suivie').html(' suivies ');
            }
            $('.'+projet_id+'_class').html(som);
          } else {
            _hearth.removeClass('fa-heart '); _hearth.addClass('fa-heart-o');
          }
        }
      });
    });
});
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
document.getElementById("defaultOpen").click();

$('.not').click(function(){
  console.log('ok');
});

function ElementAlert(){
  alert("vous devez vous connecter");
}

$(document).ready(function(){
  $('#_bSubmitR').click(function(){
    var value = $('._InputCom').val();
    if (value == '') {
      alert('votre commentraire ne contient aucun charactère');
    }
    else{
    var current_user = $('._bSubmitR').attr('real');
    var projet_id = $('._cButton').attr('id');
    var _token = $('input[name ="_token"]').val();
    console.log(_token);
    $.ajax({
      url:"/commentaires",
      method:"POST",
      data:{value:value,user_id:current_user,_token:_token,projet_id:projet_id},
      success:function(data){
        if (data) {
          $('#_InputArea').val('');
          $('#divCOmments').prepend('<div class="_containdiv"><div class="ImgUrlAide"><img src="/image/slide/3.jpg" alt="girls" class="image_urlComments"></div><div class="divContentComment"><div class="useComment"><strong class="ColorProfil">'+ data["firstname"]+ ' '+ data["name"] + '</strong> Il y a 1 s</div><div>'+ data["commentaires"] +'</div><div class = "flex-modify">                    <div class="btn-info edit-suppr componentFound" id ="{{ $commentaire -> commentaires }}" real ="{{ App\User::find($commentaire->user_id)->name }}" data-toggle="modal" data-target="#myModal">Repondre</div><div class = "edit-suppr btn-warning"> modifier </div><div class = "edit-suppr btn-danger"> supprimer</div></div></div></div>');
        }
      }
    });
    }
  });
});
$('.componentFound').click(function(){
  var user = $(this).attr('real');
  var title = $('#title-projet-1').html();
  $('.projet_modal').html(title);
  $('.com_id').html($(this).attr('name'));
  $('.user_modal').html(user);
  $('.commentaire_id').html($(this).attr('id'));
});

$('.deleteWithId').click(function(){
  $('.IdOnDelete').html($(this).attr('real'));
});

$(document).ready(function(){
  $('#repondre_indem').click(function(){
    var commentaires = $('.com_id').html();
    var user_reponse = $('._bSubmitR').attr('real');
    var projet_id = $('._cButton').attr('id');
    var _token = $('input')[2].value;
    var reponse = $('#_Ireponse').val();
    $.ajax({
      url:"/projet/commentaire/reponse",
      method:"POST",
      data:{com:commentaires,user_reponse:user_reponse,_token:_token,projet_id:projet_id,reponse:reponse},
      success:function(data){
        $('._lOgh').show();
        $('.ms_el').html('Votre reponse a bien été envoyer')
      }
    });
  });
});

$(document).ready(function(){
  $(window).scroll(function(){
    var VideoTop = $(window).scrollTop();
    console.log(VideoTop);
    if (VideoTop > 1780) {
      $('.el_01').addClass('comment_scroll');
    }
    else{
      $('.el_01').removeClass('comment_scroll');
    }
    if (VideoTop > 462) {
      $('.i-frame').addClass('pulse');
    }
  });
});

$(document).ready(function(){
  $('#delete_comment').click(function(){
    var id = $('.IdOnDelete').html();
    var _token = $('input[name ="_token"]').val();
    $.ajax({
      url:"/delete",
      method:"POST",
      data:{id:id,_token:_token},
      success:function(data){
        if (data) {
          $('.'+ data).hide(200);
          $('._lOgh').show();
          $('._lOgh').addClass('bag-color');
        }
      }
    });
  });
});
$("#closeMessage").click(function(){
  $('._lOgh').hide();
});
// $('.d-image-talls')
$(document).ready(function(){
  $(window).scroll(function(){
    var VideoTop = $(window).scrollTop();
    let getTop = 0;
    if (VideoTop > getTop) {
      $('.d-image-talls').addClass('rapide-float');
      $('.d-image-talls').removeClass('less-float');
      getTop = VideoTop;
      $('.d-image-talls').css('top','-20px');
    }
    else{
      $('.d-image-talls').removeClass('rapide-float');
      $('.d-image-talls').addClass('less-float');
      $('.d-image-talls').css('top','20px');
    }
  });
});