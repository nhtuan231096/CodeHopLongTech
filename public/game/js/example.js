function IsNumeric(n){
    return !isNaN(n);
} 

$(function(){
	
    $("#getit").click(function() {
        $('#loading-message').fadeIn();
        $('#randomnumber').text('');
        var numLow = $("#lownumber").val();
        var numHigh = $("#highnumber").val();
        
        var adjustedHigh = (parseFloat(numHigh) - parseFloat(numLow)) + 1;
        
        var numRand = Math.floor(Math.random()*adjustedHigh) + parseFloat(numLow);
        
        setTimeout(function () {
            $('#loading-message').fadeOut(100);
            if ((IsNumeric(numLow)) && (IsNumeric(numHigh)) && (parseFloat(numLow) <= parseFloat(numHigh)) && (numLow != '') && (numHigh != '')) {
                $("#randomnumber").text(numRand);
            } else {
                $("#randomnumber").text("Careful now...");
            }

        },3000);
        
        return false;
    });
    
    $("input[type=text]").each(function(){
        $(this).data("first-click", true);
    });
    
    $("input[type=text]").focus(function(){
       
        if ($(this).data("first-click")) {
            $(this).val("");
            $(this).data("first-click", false);
            $(this).css("color", "black");
        }
        
    });
   
});
