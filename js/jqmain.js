
 $( document).ready(function(){
            

    var see = 0;
    var t1 = $("#t1");
    var t2 = $("#t2");
    var t3  = $("#t3");
    var t4 = $("#t4");
    var t5 = $("#t5");
    
                
    $('#btn').click(function(){
    
       

             

                var num = (t1.css("box-shadow") == "rgb(88, 211, 247) 0px 0px 10px 0px") ? true : false;
                var min = (t2.css("box-shadow") == "rgb(88, 211, 247) 0px 0px 10px 0px") ? true : false;
                var mayus = (t3.css("box-shadow") == "rgb(88, 211, 247) 0px 0px 10px 0px") ? true : false;
                var simb = (t4.css("box-shadow") == "rgb(88, 211, 247) 0px 0px 10px 0px") ? true : false;
                var long = t5.val();


               
                if (long == "null") {
                    alert("Seleciona la longitud de la contraseña");
                    return false;
                }

             
                else if (!num && !min && !mayus && !simb)

                    {
                        alert("Selecciona almenos un check");
                        return false;

                    }

                 
                var formData = 'r1=' + num + '&r2=' + min + '&r3=' + mayus + '&r4=' + simb + '&r5=' + long;

               

        $.ajax({
    
            type: "POST",
            url: 'función.php',
            dataType : "json",
            data: formData,
            success: function(response){

                
               

              $('#gnc').val(response.clv);
              

              if (response.pds < 61){

                var ps = "la contraseña es  : " + response.pds + "% segura (debil)";
                   
                $('#bt2').val(ps)
              
               

              }


              else if (response.pds > 61 && response.pds < 71 ) {

                var ps = "la contraseña es  : " + response.pds + "% segura (media)";
                   
                $('#bt2').val(ps)
                  
                  

              }else{

                    

                    var ps = "la contraseña es  : " + response.pds + "% segura (robusta)";
                   
                    $('#bt2').val(ps)


              }
            }
            
            
    
    
    
        })
    
    });
    



t1.click(function(e)



{



if (see != 0)

{

t1.css("box-shadow", "0 0 10px white");


see = 0;

}

else

{

t1.css("box-shadow", "0 0 10px #58D3F7");



see += 1;

}



});

t2.click(function(e)



{



if (see != 0)

{

t2.css("box-shadow", "0 0 10px white");



see = 0;

}

else

{

t2.css("box-shadow", "0 0 10px #58D3F7");



see += 1;

}



});


t3.click(function(e)



{



if (see != 0)

{

t3.css("box-shadow", "0 0 10px white");



see = 0;

}

else

{

t3.css("box-shadow", "0 0 10px #58D3F7");



see += 1;

}



});


t4.click(function(e)



{



if (see != 0)

{

t4.css("box-shadow", "0 0 10px white");



see = 0;

}

else

{

t4.css("box-shadow", "0 0 10px #58D3F7");



see += 1;

}



});
    
    });


















