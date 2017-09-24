// JavaScript Document



$("document").ready(function()
{
    $(window).scroll(function () 
	{
        if ($(this).scrollTop() > 700) 
		{
            $('#scroller').addClass("fixed");
			$('#imgcntr').addClass("loading");
			$('#imagedis').hide(500);
			
        } else 
			{
             $('#scroller').removeClass("fixed");
			 $('#imgcntr').removeClass("loading");
			 $('#about').removeClass("aboutp");
			 $('#imagedis').show(500);
       		 }
        if ($(this).scrollTop() > 500) 
        {
           
            $('.displaybtn').addClass("fixed");
            $('#display').addClass("displaytop");
            $('#display').removeClass("display");
            
        } else 
            {
             $('.displaybtn').removeClass("fixed");
             $('#display').addClass("display");
             $('#display').removeClass("displaytop");
             }


    });


	
	    $(document).ready(function () {
    
        $("#datepicker").datepicker({
            dateFormat: "dd-M-yy",
            minDate: 0,
            onSelect: function (date) {
                var date2 = $('#datepicker').datepicker('getDate');
                date2.setDate(date2.getDate() + 1);
                $('#datepicker2').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#datepicker2').datepicker('option', 'minDate', date2);
            }
        });
        $('#datepicker2').datepicker({
            dateFormat: "dd-M-yy",
            onClose: function () {
                var dt1 = $('#datepicker').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#datepicker2').datepicker('getDate');
                if (dt2 <= dt1) {
                    var minDate = $('#datepicker2').datepicker('option', 'minDate');
                    $('#datepicker2').datepicker('setDate', minDate);
                }
            }
        });
    });

});


	
	window.document.onkeydown = function (e)
{
    if (!e){
        e = event;
    }
    if (e.keyCode == 27){
        lightbox_close();
    }
}
function info_open(){
    var dp1 = $('#datepicker');
    var dp2 = $('#datepicker2');
    var rt = $('#roomType');
    var ad = $('#adult');
    if(dp1.val() == ''){
        dp1.addClass('error');
    }else if(dp2.val() == ''){
       dp2.addClass('error');
    }else if(rt.val() == ''){
       rt.addClass('error');
    }else if(ad.val() == ''){
       ad.addClass('error');
    }else{
        dp1.removeClass('error');
        dp2.removeClass('error');
        rt.removeClass('error');
        ad.removeClass('error');
        window.scrollTo(0,0);
        document.getElementById('light').style.display='block';
        document.getElementById('fade').style.display='block';  
    }
}
function info_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
}
	
