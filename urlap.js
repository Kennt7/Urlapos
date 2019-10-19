
    $(document).ready(function() {
   $("#felhasznaloiUrlap").submit(function(e){
       visszajelzestEltavolit();
       var hibak=urlapotEllenoriz();
       if(hibak=="")
           {
               return true;
           }
       else{
           visszajelzestAd(hibak);
           e.preventDefault();
           return false;
       }
   });
        
   function urlapotEllenoriz(){
       var hibasMezok=new Array();
//Ellenőrizzük, h van-e vmi a kötelezően megadandó mezőkben
       
       if($('#nev').val()=="")
           {
               hibasMezok.push('nev');
           }
       
       
       
       
       if($('#email').val()=="")
           {
               hibasMezok.push('email');
           }
       
       
       
       
       if($('#jelszo1').val()=="")
           {
               hibasMezok.push('jelszo1');
           }
       
       
       
//Jelszavak egyezésének ellenőrzése
       
       if($('#jelszo2').val()!= $('#jelszo1').val())
           {
               hibasMezok.push('jelszo2');
           }
       
       
       
//nagyon alapvető email ellenőrzés, csak @-jelet keres
       if(!(($('#email').val().indexOf(".")>2) &&
           ($('#email').val().indexOf("@"))))
           {
               hibasMezok.push('email');
           }
       
       
       if($('#telefon'.val()!="")
       {
          var telSzam=$('#telefon').val();
       telSzam.replace(/[^0-9]/g,"");
       if(telSzam.length !=8)
       {
           hibasMezok.push("telefon");
       }
       if(!$('input[name=telefontipus]:checked').val())
           {
               hibasMezok.push("telefontipus");
           }
      }
       
       return hibasMezok;
   }//Az urlapotEllenoriz függvény vége
        
    function visszajelzestAd(bejovoHibak)
        {
            for(var i=0; i<bejovoHibak.length;i++)
                {
                    $("#"+bejovoHibak[i])
                    .addClass("hibaOsztaly");
                    $("#"+bejovoHibak[i]+"Hiba")
                    .removeClass("hibaVisszajelzes");
                }
            $("#hibaDiv").html("Hibák történtek");
        }
    
    function visszajelzestEltavolit(){
        $("#hibaDiv").html("");
        $('input').each(function(){
            $(this).removeClass("hibaOsztaly");
        });
        
        $('.hibaSzakasz').each(function(){
            $(this).addClass("hibaVisszajelzes");
        });
    }
});

