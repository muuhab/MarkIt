

$(document).ready(function(){
    $(".click").click(function () {

      //  $(this).next(".list-content").toggle();
//        $(this).next(".list-content").toggle("fast");
        $(this).next(".list-content").slideToggle(280);
    //    var arrow = document.getElementById("toggled-icon");
    //     this.arrow.classList.add("rotate-reset");


        const $arrow = $(this).find(".arrow");
    //        $arrow.addClass('rotate-reset');
            $arrow.toggleClass('rotate');
            $arrow.toggleClass('rotate-reset');


/*
        if ($arrow.hasClass('rotate-reset')) {
            $arrow.removeClass('rotate-reset');
        }
        else {
            $arrow.addClass('rotate-reset');
            $arrow.toggleClass('rotate');
            $arrow.toggleClass('rotate-reset');
        }
*/


    });
  });


/*

(function(document){
var container = document.getElementById('container');
var icon = document.getElementById('toggled-icon');
var open = false;

container.addEventListener('click', function(){
    if(open){
        icon.className = 'fas fa-chevron-down rotate-reset';
    }
    else {
        icon.className = 'fas fa-chevron-down rotate-reset rotate';
    }

    // toggle the case
    open = !open;
});
})(document);

*/
