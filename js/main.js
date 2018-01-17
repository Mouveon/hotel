$(document).ready(function(){



    $("#form").submit(function(){
        var datasend = { pp : parseFloat($("#poidprix").val()), pd : parseFloat($("#poidist").val()), pe : parseFloat($("#poidetoile").val())  };
        $.ajax({
            url: "./php/request.php",
            type : 'post',
            data : datasend
        }).done(function(data) {

            todo = JSON.parse(data);
            /* ~~~~~~~~~~~~~~~~~~~~~~ */
            var tabhtml="<tr><th><b>IDH</b></th><th><b>PRIX</b></th><th><b>DISTANCE</b></th><th><b>NBETOILES</b></th><th><b>SCORE</b></th></tr> \n";
            for (i=0 ; i < todo.length ; ++i) {
                tabhtml += "<tr><td><b>"+ todo[i]['IDH'] +"</b></td>"+"<td>"+todo[i]['PRIX']+"</td>"+"<td>"+todo[i]['DISTANCE']+"</td>"+"<td>"+todo[i]['NBETOILES']+"</td>"+"<td>"+todo[i]['SCORE']+"</td>"+"</tr>";
            }
            $("#tabres").html(tabhtml).fadeIn(500);
            $("#reztxt").fadeIn(500);
            $("#txt2").fadeIn(500);
            $("#txt").hide();
            /* ~~~~~~~~~~~~~~~~~~~~~~ */

        }).error(function() {
            console.log("Err Ajax");
        });

        return false;
    });

    $("#wr").click(function(){
        $("#tabres").hide();
        $("#reztxt").hide();
        $("#txt2").hide();
        $("#txt").show();
    });

});