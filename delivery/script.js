function checkpref(){
    var from=$('#frominp').val();
    var to=$('#toinp').val();
    if(from && to){
        $('#paymentbtn').removeAttr('disabled');

    }
    else{
        $('#paymentbtn').attr('disabled','disabled');
    }
    if($('#paymentbtn').attr('disabled')!='disabled'){
        $('#paymentbtn').addClass('activebtn');
    }
    else{
        $('#paymentbtn').removeClass('activebtn');
    }


}
$(document).ready(function(){
    $('#paymentbtn').attr('disabled','disabled');
    $('#paymentbtn').click(function(){
    $('.payment_choice>input[type=radio]')    
    })
})