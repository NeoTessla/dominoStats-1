$(document).ready(function() {
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
    /* $("#dominoStatsHead").hover(function() {
        $(this).style(""); //testing for hover, works!
    }); */
});