$(document).ready(function(){
    $('.custom-radio input[type="radio"]').click(function() {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".hidden-box").not(targetBox).hide();
        $(targetBox).show();
    });
	$('a[id^=link]').click(function(){
        $('a[id^=link]').removeClass('active');
        $(this).addClass('active');
        
            $('#infocontent>div').slideUp();

            var tmp = this.id;
        $('#'+tmp+'content').slideDown();
    }); //end a.click

    $('.application-nav.with-sub-title a').click(function() {
        if ($('.application-nav.with-sub-title a').hasClass('active')){
            $(this).parents().addClass("active");
        }
    });
});
