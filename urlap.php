<!doctype html>
<!-- Egyszerű HTML5-kód
Az elején néhány külső fájlra hivatkozunk, egy CSS és két Javascript fájlra
A Javascript melyeket betöltünk a jQuery egy tartalomszolgáltató hálózatróll(Content Deliver Network,CDN), másrészt pedig saját Javascript-fájl.
Űrlap elhelyezése a <form>-ban.
A kóddal egy olyan űrlapot hozunk létre, mely a HTTP POST-metódust fogja használni, és egy urlapot-feldolgoz.php nevű fájlt hív meg.
Közvetlenül ezalatt egy üres <div> elemet látsz, ennek segítségével adunk visszajelzést a fh-nak, ha hiba következett be.
Ezután 4 elemet helyezünk el. Az oldalon elhelyezkedő különböző űrlapelemek ua az általános mintát követik, mindegyikben egy <label> elemet láthatsz, melyet egy <input> elem követ, majd a hibákkal kapcsolatos visszajelzéshez egy <span> elem. A <span> elemeket elrejtjük a CSS segítségével.
-->
<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<html>
    
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        
        <script type="text/javascript" src="urlap.js"></script>
        <link rel="stylesheet" type="text/css" href="urlap.css">
        <title>Egy űrlap</title>
    </head>
<body>
    <form id="felhasznaloiUrlap" method="POST" action="urlapot-feldolgoz.php">
        <div>
            <fieldset>
                <legend>Felhasználói információk</legend>
                <div id="hibaDiv"></div>
                <!----------------------------------->
                <label for="nev">Név:*</label>
                <input type="text" id="nev" name="nev">
                <span class="hibaVisszajelzes hibaSzakasz" id="nevHiba">Név megadása kötelező</span><br />
                <!----------------------------------->
                <label for="varos">Város:</label>
                <input type="text" id="varos" name="varos"><br />
                
                <label for="megye">Megye:</label>
                
             <select name="megye" id="megye">
                 <option></option>
                 <option>Bács-Kiskun</option>
                 <option>Baranya</option>
                 <option>Békés</option>
                 <option>Borsod-Abaúj-Zemplén</option>
                 <option>Csongrád</option>
                 <option>Fejér</option>
                 <option>Győr-Moson-Sopron</option>
                 <option>Szabolcs-Szatmár-Bereg</option>       
             </select>
                    <br />
                <!----------------------------------->
                 <label for="iranyitoszam">Irányítószám:</label>
                 <input type="text" id="iranyitoszam" name="iranyitoszam">
                 <br />
                <!----------------------------------->
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
                <span class="hibaVisszajelzes hibaSzakasz" id="emailHiba">Email cím megadása kötelező</span>
                 <br />
                
                <!------------------------------------>
                <label for="telefon">Telefonszám:</label>
                <input type="text" id="telefon" name="telefon">
                <span class="hibaVisszajelzes hibaSzakasz" id="telefonHiba">Formátum:xx-xxx-xxx vagy x-xxx-xxxx</span>
                <br />
                <!----------------------------------->           
                <label for="munka">Telefonszám típusa:</label>
                <input class="radioButton" type="radio" name="telefontipus" id="munka" value="munka">
                <!----------------------------------->  
                <label class="radioButton" for="munka">Munkahelyi</label>
                <input class="radioButton" type="radio" name="telefontipus" id="otthoni" value="otthoni">
                <!----------------------------------->
                <label class="radioButton" for="otthoni">Otthoni</label>
                <span class="hibaVisszajelzes telefontipusHiba">Kérjük válasszon ki egy opciót</span>
                     <br />
                <!----------------------------------->
                <label for="jelszo1">Jelszó:*</label>
                <input type="password" id="jelszo1" name="jelszo1">
                <span class="hibaVisszajelzes hibaSzakasz" id="jelszo1Hiba">Jelszó megadása kötelező</span>
                     <br />
                <!----------------------------------->
                <label for="jelszo2">Jelszó megerősítése:*</label>
                <input type="password" id="jelszo2" name="jelszo2">
                <span class="hibaVisszajelzes hibaSzakasz" id="jelszo2Hiba">A két jelszó nem egyezik</span>
                    <br />
                <input type="submit" id="elkuld" name="elkuld">                  
             
            </fieldset>
        </div>
    </form>
    </body>
</html>