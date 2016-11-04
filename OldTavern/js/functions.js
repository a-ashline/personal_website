/**
 * Created by Andy on 11/4/2016.
 */
var mare=false;
var year=false;
var fold=false;


$(document).ready(function(){
    $('#mare').css("background-color", "003617");
    $('#year').css("background-color", "003617");
    $('#fold').css("background-color", "003617");
    if(mare)
    {
        $('#mare').css("background-color", "ccac5f");
        $('#year').css("background-color", "003617");
        $('#fold').css("background-color", "003617");
    }
    else if(year)
    {
        $('#mare').css("background-color", "003617");
        $('#year').css("background-color", "ccac5f");
        $('#fold').css("background-color", "003617");
    }
    else if(fold)
    {
        $('#mare').css("background-color", "003617");
        $('#year').css("background-color", "003617");
        $('#fold').css("background-color", "ccac5f");
    }
});

$('#mare').click(function(){
    mare=true;
    year=false;
    fold=false;
});

$('#year').click(function(){
    mare=false;
    year=true;
    fold=false;
});

$('#fold').click(function(){
    mare=false;
    year=false;
    fold=true;
});