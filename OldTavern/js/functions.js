/**
 * Created by Andy on 11/4/2016.
 */
$('#mare').click(function(){
    $(this).css("background", "ccac5f");
    $('#year').css("background", "003617");
    $('#fold').css("background", "003617");
});

$('#year').click(function(){
    $('#mare').css("background", "003617");
    $(this).css("background", "ccac5f");
    $('#fold').css("background", "003617");
});

$('#fold').click(function(){
    $('#mare').css("background", "003617");
    $('#year').css("background", "003617");
    $(this).css("background", "ccac5f");
});