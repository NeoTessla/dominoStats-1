$(document).ready(function() {
    //sorts the tree by draw time/game average
    var totAvg = $("#totAvg").text(); //works?
    $("#totAvg").hide();
    var avgArr = [];
    
    for (var i = 0; i < parseInt(totAvg); i++) {
        $("#avg" + i).hide();
        avgArr.push(parseFloat($("#avg"+i).text()));
    }
    for (var j = 0; j < parseInt(totAvg); j++) {
        $("#player"+j).append("<p><strong>Draw Time Per Game Average: </strong>" + avgArr[j] + "</p>");
    }
    
    //stores html for divs in array
    var drawHTML = [];
    for (var a = 0; a < avgArr.length; a++) {
        drawHTML.push($("#player"+a).html());
    }
    $("#tree").html(drawHTML[1]); //for whatever reason this is hiding the other divs when this line goes off. stopping here for now, have to sort the draw time averages from lowest to highest now and put them in tree form.
    
    
    /* $("#dominoStatsHead").hover(function() {
        $(this).style(""); //testing for hover, works!
    }); */
});