<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Living Dex</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style Living Dex.css">
        <link rel="shortcut icon" href="Images/logo en haut à gauche.png" type="image/x-icon" /> 
    </head>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <body>
        <h1>
            Shiny Card
        </h1>
        <header>
            <br/>
            <nav class="wrapper">
                <ul>
                    <li>
                        <a href="index.html" title="Acceuil">Acceuil</a>
                    </li>
                    <li>
                        <a>Shiny Community's Challenge</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="Règles.html" title="Règles">Règles</a>
                                </li>
                                <li>
                                <a href="top.html" title="Top">Top Hunter</a>
                                </li>
                            </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <article>
                <br/>
                    <h2>Voici la shiny card du Shiny Community's Challenge !</h2><br/>
            </article>
            <div class="container">
                <h3>Living Dex Complété à :</h3><br/>
                    <div class="bar">
                        <div class="bar-stat" id="html">
                            <span class="bar-text">64,88% 706/1088</span>
                        </div>
                    </div>
            </div><br/><br/>
            <p> 
                <h3>Living Dex 1g :</h3>
                <center><table align=center valign="middle">
                    <tbody id="myTable">
                        <tr>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bulbizarre.png" WIDTH=70 border="0"><br/><B>Bulbizarre #001</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/herbizarre.png" WIDTH=90 border="0"><br/><B>Herbizarre #002</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/florizarre.png" WIDTH=90 border="0"><br/><B>Florizarre #003</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/salameche.png" WIDTH=80 border="0"><br/><B>Salamèche #004</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/reptincel.png" WIDTH=80 border="0"><br/><B>Reptincel #005</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dracaufeu.png" WIDTH=95 border="0"><br/><B>Dracaufeu #006</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carapuce.png" WIDTH=80 border="0"><br/><B>Carapuce #007</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carabaffe.png" WIDTH=80 border="0"><br/><B>Carabaffe #008</B></a></th>
                            <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tortank.png" WIDTH=90 border="0"><br/><B>Tortank #009</B></a></th>
                        </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Pokemaz</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                    <td>CRZ</td>
                    <td>Mr Lien</td>
                    <td>FT_NoNo</td>
                    <td>Spectra</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chenipan.png" WIDTH=70 border="0"><br/><B>Chenipan #010</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chrysacier.png" WIDTH=90 border="0"><br/><B>Chrysacier #011</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/papilusion.png" WIDTH=90 border="0"><br/><B>Papilusion #012</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/aspicot.png" WIDTH=80 border="0"><br/><B>Aspicot #013</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/coconfort.png" WIDTH=80 border="0"><br/><B>Coconfort #014</B></a></th>
                    <th class=Dardargnan style="width:150px; height:100px;"><img src="Images/shiny/dardargnan.png" WIDTH=95 border="0"><br/><B>dardargnan #015</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roucool.png" WIDTH=80 border="0"><br/><B>Roucool #016</B></a></th>
                    <th class=Roucoups style="width:150px; height:100px;"><img src="Images/shiny/roucoups.png" WIDTH=80 border="0"><br/><B>Roucoups #017</B></a></th>
                    <th class=Roucarnage style="width:150px; height:100px;"><img src="Images/shiny/roucarnage.png" WIDTH=90 border="0"><br/><B>Roucarnage #018</B></a></th>
                </tr>
                <tr>
                    <td>Nah.</td>
                    <td>Nah.</td>
                    <td>Nah.</td>
                    <td>CornetBoy</td>
                    <td>missmiki</td>
                    <td>???</td>
                    <td>Nah.</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                            <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rattata.png" WIDTH=70 border="0"><br/><B>Rattata #019</B></a></th>
                    <th class=trouve  style="width:150px; height:100px;"><img src="Images/shiny/rattatac.png" WIDTH=90 border="0"><br/><B>Rattatac #020</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/piafabec.png" WIDTH=90 border="0"><br/><B>Piafabec #021</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rapasdepic.png" WIDTH=80 border="0"><br/><B>Rapasdepic #022</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/abo.png" WIDTH=80 border="0"><br/><B>Abo #023</B></a></th>
                    <th class=Arbok style="width:150px; height:100px;"><img src="Images/shiny/arbok.png" WIDTH=95 border="0"><br/><B>Arbok #024</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pikachu.png" WIDTH=80 border="0"><br/><B>Pikachu #025</B></a></th>
                    <th class=Raichu style="width:150px; height:100px;"><img src="Images/shiny/raichu.png" WIDTH=80 border="0"><br/><B>Raichu #026</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sabelette.png" WIDTH=90 border="0"><br/><B>Sabelette #027</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Platinium Foxier</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=Sablaireau style="width:150px; height:100px;"><img src="Images/shiny/sablaireau.png" WIDTH=70 border="0"><br/><B>Sablaireau #028</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nidoran-f.png" WIDTH=90 border="0"><br/><B>Nidoran♀ #029</B></a></th>
                    <th class=Nidorina style="width:150px; height:100px;"><img src="Images/shiny/nidorina.png" WIDTH=90 border="0"><br/><B>Nidorina #030</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nidoqueen.png" WIDTH=80 border="0"><br/><B>Nidoqueen #031</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nidoran-m.png" WIDTH=80 border="0"><br/><B>Nidoran♂ #032</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nidorino.png" WIDTH=95 border="0"><br/><B>Nidorino #033</B></a></th>
                    <th class=Nidoking style="width:150px; height:100px;"><img src="Images/shiny/nidoking.png" WIDTH=80 border="0"><br/><B>Nidoking #034</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/melofee.png" WIDTH=80 border="0"><br/><B>Mélofée #035</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/melodelfe.png" WIDTH=90 border="0"><br/><B>Mélodelfe #036</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Max</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goupix.png" WIDTH=70 border="0"><br/><B>Goupix #037</B></a></th>
                    <th class=Feunard style="width:150px; height:100px;"><img src="Images/shiny/feunard.png" WIDTH=90 border="0"><br/><B>Feunard #038</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rondoudou.png" WIDTH=90 border="0"><br/><B>Rondoudou #039</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grodoudou.png" WIDTH=80 border="0"><br/><B>Grodoudou #040</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nosferapti.png" WIDTH=80 border="0"><br/><B>Nosferapti #041</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nosferalto.png" WIDTH=95 border="0"><br/><B>Nosferalto #042</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mystherbe.png" WIDTH=80 border="0"><br/><B>Mystherbe #043</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ortide.png" WIDTH=80 border="0"><br/><B>Ortide #044</B></a></th>
                    <th class=Rafflesia style="width:150px; height:100px;"><img src="Images/shiny/rafflesia.png" WIDTH=90 border="0"><br/><B>Rafflesia #045</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>TheGolden</td>
                    <td>Nah.</td>
                    <td>Nah.</td>
                    <td>Lilishi</td>
                    <td>Infinity_light</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/paras.png" WIDTH=70 border="0"><br/><B>Paras #046</B></a></th>
                    <th class=Parasect style="width:150px; height:100px;"><img src="Images/shiny/parasect.png" WIDTH=90 border="0"><br/><B>Parasect #047</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mimitoss.png" WIDTH=90 border="0"><br/><B>Mimitoss #048</B></a></th>
                    <th class=Aéromite style="width:150px; height:100px;"><img src="Images/shiny/aeromite.png" WIDTH=80 border="0"><br/><B>Aéromite #049</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/taupiqueur.png" WIDTH=80 border="0"><br/><B>Taupiqueur #050</B></a></th>
                    <th class=Triopikeur style="width:150px; height:100px;"><img src="Images/shiny/triopikeur.png" WIDTH=95 border="0"><br/><B>Triopikeur #051</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/miaouss.png" WIDTH=80 border="0"><br/><B>Miaouss #052</B></a></th>
                    <th class=Persian style="width:150px; height:100px;"><img src="Images/shiny/persian.png" WIDTH=80 border="0"><br/><B>Persian #053</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/psykokwak.png" WIDTH=90 border="0"><br/><B>Psykokwak #054</B></a></th>
                </tr>
                <tr>
                    <td>A le gameur</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/akwakwak.png" WIDTH=70 border="0"><br/><B> Akwakwak #055</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ferosinge.png" WIDTH=90 border="0"><br/><B>Férosinge #056</B></a></th>
                    <th class=Colossinge style="width:150px; height:100px;"><img src="Images/shiny/colossinge.png" WIDTH=90 border="0"><br/><B>Colossinge #057</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/caninos.png" WIDTH=80 border="0"><br/><B>Caninos #058</B></a></th>
                    <th class=Arcanin style="width:150px; height:100px;"><img src="Images/shiny/arcanin.png" WIDTH=80 border="0"><br/><B>Arcanin #059</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ptitard.png" WIDTH=95 border="0"><br/><B>Ptitard #060</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tetarte.png" WIDTH=80 border="0"><br/><B>Têtarte #061</B></a></th>
                    <th class=Tartard style="width:150px; height:100px;"><img src="Images/shiny/tartard.png" WIDTH=90 border="0"><br/><B>Tartard #062</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/abra.png" WIDTH=90 border="0"><br/><B>Abra #063</B></a></th>
                </tr>
                <tr>
                    <td>Infinity_Light</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>CRZ</td>
                    <td>???</td>
                    <td>A le gameur</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kadabra.png" WIDTH=70 border="0"><br/><B>Kadabra #064</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/alakazam.png" WIDTH=90 border="0"><br/><B>Alakazam #065</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/machoc.png" WIDTH=90 border="0"><br/><B>Machoc #066</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/machopeur.png" WIDTH=80 border="0"><br/><B>Machopeur #067</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mackogneur.png" WIDTH=80 border="0"><br/><B>Mackogneur #068</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chetiflor.png" WIDTH=95 border="0"><br/><B>Chétiflor #069</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/boustiflor.png" WIDTH=80 border="0"><br/><B>Boustiflor #070</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/empiflor.png" WIDTH=80 border="0"><br/><B>Empiflor #071</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tentacool.png" WIDTH=90 border="0"><br/><B>Tentacool #072</B></a></th>
                </tr>
                <tr>
                    <td>CRZ</td>
                    <td>CornetBoy</td>
                    <td>Satoshi</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>A le gameur</td>
                </tr>
                            <tr>
                    <th class=Tentacruel style="width:150px; height:100px;"><img src="Images/shiny/tentacruel.png" WIDTH=70 border="0"><br/><B>Tentacruel #073</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/racaillou.png" WIDTH=90 border="0"><br/><B>Racaillou #074</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gravalanch.png" WIDTH=90 border="0"><br/><B>Gravalanch #075</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grolem.png" WIDTH=80 border="0"><br/><B>Grolem #076</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ponyta.png" WIDTH=80 border="0"><br/><B>Ponyta #077</B></a></th>
                    <th class=Galopa style="width:150px; height:100px;"><img src="Images/shiny/galopa.png" WIDTH=95 border="0"><br/><B>Galopa #078</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ramoloss.png" WIDTH=80 border="0"><br/><B>Ramoloss #079</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flagadoss.png" WIDTH=80 border="0"><br/><B>Flagadoss #080</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magneti.png" WIDTH=90 border="0"><br/><B>Magnéti #081</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Max</td>
                    <td>Infinity_Light</td>
                    <td>Nah.</td>
                    <td>???</td>
                    <td>Maxime</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                </tr>
                            <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magneton.png" WIDTH=70 border="0"><br/><B>Magnéton #082</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/canarticho.png" WIDTH=90 border="0"><br/><B>Canarticho #083</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/doduo.png" WIDTH=90 border="0"><br/><B>Doduo #084</B></a></th>
                    <th class=Dodrio style="width:150px; height:100px;"><img src="Images/shiny/dodrio.png" WIDTH=80 border="0"><br/><B>Dodrio #085</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/otaria.png" WIDTH=80 border="0"><br/><B>Otaria #086</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lamantine.png" WIDTH=95 border="0"><br/><B>Lamantine #087</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tadmorv.png" WIDTH=100 border="0"><br/><B>Tadmorv #088</B></a></th>
                    <th class=Grotadmorv style="width:150px; height:100px;"><img src="Images/shiny/grotadmorv.png" WIDTH=100 border="0"><br/><B>Grotadmorv #089</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kokiyas.png" WIDTH=90 border="0"><br/><B>Kokiyas #090</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>FT_NoNo</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Spectra</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Yuki</td>
                </tr>
                            <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crustabri.png" WIDTH=70 border="0"><br/><B>Crustabri #091</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fantominus.png" WIDTH=90 border="0"><br/><B>Fantominus #092</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/spectrum.png" WIDTH=90 border="0"><br/><B>Spectrum #093</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ectoplasma.png" WIDTH=80 border="0"><br/><B>Ectoplasma #094</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/onix.png" WIDTH=80 border="0"><br/><B>Onix #095</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/soporifik.png" WIDTH=95 border="0"><br/><B>Soporifik #096</B></a></th>
                    <th class=Hypnomade style="width:150px; height:100px;"><img src="Images/shiny/hypnomade.png" WIDTH=80 border="0"><br/><B>Hypnomade #097</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/krabby.png" WIDTH=80 border="0"><br/><B>Krabby #098</B></a></th>
                    <th class=Krabboss style="width:150px; height:100px;"><img src="Images/shiny/krabboss.png" WIDTH=90 border="0"><br/><B>Krabboss #099</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Platinium Foxier</td>
                    <td>Ewox_</td>
                    <td>Infinity_Light</td>
                    <td>Benra_</td>
                    <td>Gaven</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
                            <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/voltorbe.png" WIDTH=70 border="0"><br/><B>Voltorbe #100</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/electrode.png" WIDTH=90 border="0"><br/><B>Électrode #101</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/noeunoeuf.png" WIDTH=90 border="0"><br/><B>Noeunoeuf #102</B></a></th>
                    <th class=Noadkoko style="width:150px; height:100px;"><img src="Images/shiny/noadkoko.png" WIDTH=80 border="0"><br/><B>Noadkoko #103</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/osselait.png" WIDTH=80 border="0"><br/><B>Osselait #104</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ossatueur.png" WIDTH=95 border="0"><br/><B>Ossatueur #105</B></a></th>
                    <th class=Kicklee style="width:150px; height:100px;"><img src="Images/shiny/kicklee.png" WIDTH=80 border="0"><br/><B>Kicklee #106</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tygnon.png" WIDTH=80 border="0"><br/><B>Tygnon #107</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/excelangue.png" WIDTH=90 border="0"><br/><B>Excelangue #108</B></a></th>
                </tr>
                <tr>
                    <td>Satoshi</td>
                    <td>Kenzo</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>MiloJoker</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>The Golden</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/smogo.png" WIDTH=70 border="0"><br/><B>Smogo #109</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/smogogo.png" WIDTH=90 border="0"><br/><B>Smogogo #110</B></a></th>
                    <th class=Rhinocorne style="width:150px; height:100px;"><img src="Images/shiny/rhinocorne.png" WIDTH=90 border="0"><br/><B>Rhinocorne #111</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rhinoferos.png" WIDTH=80 border="0"><br/><B>Rhinoféros #112</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/leveinard.png" WIDTH=80 border="0"><br/><B>Leveinard #113</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/saquedeneu.png" WIDTH=95 border="0"><br/><B>Saquedene #114</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kangourex.png" WIDTH=80 border="0"><br/><B>Kangourex #115</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hypotrempe.png" WIDTH=80 border="0"><br/><B>Hypotrempe #116</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hypocean.png" WIDTH=90 border="0"><br/><B>Hypocéan #117</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Maxime</td>
                    <td>???</td>
                    <td>maxime</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>Lilishi</td>
                    <td>maxime</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/poissirene.png" WIDTH=70 border="0"><br/><B>Poissirène #118</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/poissoroy.png" WIDTH=90 border="0"><br/><B>Poissoroy #119</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/stari.png" WIDTH=90 border="0"><br/><B>Stari #120</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/staross.png" WIDTH=80 border="0"><br/><B>Staross #121</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mmime.png" WIDTH=80 border="0"><br/><B>M. Mime #122</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/insecateur.png" WIDTH=95 border="0"><br/><B>Insécateur #123</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lippoutou.png" WIDTH=80 border="0"><br/><B>Lippoutou #124</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/elektek.png" WIDTH=80 border="0"><br/><B>Élektek #125</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magmar.png" WIDTH=90 border="0"><br/><B>Magmar #126</B></a></th>
                </tr>
                <tr>
                    <td>A le gameur</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>Infinity_Light</td>
                    <td>Maxime</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                </tr>
                            <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scarabrute.png" WIDTH=70 border="0"><br/><B>Scarabrute #127</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tauros.png" WIDTH=90 border="0"><br/><B>Tauros #128</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magicarpe.png" WIDTH=90 border="0"><br/><B>Magicarpe #129</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/leviator.png" WIDTH=80 border="0"><br/><B>Léviator #130</B></a></th>
                    <th class=Lokhlass style="width:150px; height:100px;"><img src="Images/shiny/lokhlass.png" WIDTH=80 border="0"><br/><B>Lokhlass #131</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/metamorph.png" WIDTH=95 border="0"><br/><B>Métamorph #132</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/evoli.png" WIDTH=80 border="0"><br/><B>Évoli #133</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/aquali.png" WIDTH=80 border="0"><br/><B>Aquali #134</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/voltali.png" WIDTH=90 border="0"><br/><B>Voltali #135</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Infinity_Light</td>
                    <td>CornetbBoy</td>
                </tr>
                            <tr>
                    <th class=Pyroli style="width:150px; height:100px;"><img src="Images/shiny/pyroli.png" WIDTH=70 border="0"><br/><B>Pyroli #136</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/porygon.png" WIDTH=90 border="0"><br/><B>Porygon #137</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/amonita.png" WIDTH=90 border="0"><br/><B>Amonita #138</B></a></th>
                    <th class=Amonistar style="width:150px; height:100px;"><img src="Images/shiny/amonistar.png" WIDTH=80 border="0"><br/><B>Amonistar #139</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kabuto.png" WIDTH=80 border="0"><br/><B>Kabuto #140</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kabutops.png" WIDTH=95 border="0"><br/><B>Kabutops #141</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ptera.png" WIDTH=80 border="0"><br/><B>Ptéra #142</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ronflex.png" WIDTH=80 border="0"><br/><B>Ronflex #143</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/artikodin.png" WIDTH=90 border="0"><br/><B>Artikodin #144</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Spectra</td>
                    <td>Platinium Foxier</td>
                </tr>
                            <tr>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/electhor.png" WIDTH=90 border="0"><br/><B>Électhor #145</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sulfura.png" WIDTH=90 border="0"><br/><B>Sulfura #146</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/minidraco.png" WIDTH=80 border="0"><br/><B>Minidraco #147</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/draco.png" WIDTH=80 border="0"><br/><B>Draco #148</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dracolosse.png" WIDTH=95 border="0"><br/><B>Dracolosse #149</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mewtwo.png" WIDTH=80 border="0"><br/><B>Mewtwo #150</B></a></th>
                    <th class=Mew style="width:150px; height:100px;"><img src="Images/shiny/mew.png" WIDTH=80 border="0"><br/><B>Mew #151</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>Platinium Foxier</td>
                    <td>Platinium Foxier</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Polps</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                </tr>
    </center></table><br/><br/><br/>
                <h3>Living Dex 2g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/germignon.png" WIDTH=70 border="0"><br/><B>Germinion #152</B></a></th>
                    <th class=Macronium style="width:150px; height:100px;"><img src="Images/shiny/macronium.png" WIDTH=90 border="0"><br/><B>Macronium #153</B></a></th>
                    <th class=Méganium style="width:150px; height:100px;"><img src="Images/shiny/meganium.png" WIDTH=90 border="0"><br/><B>Méganium #154</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hericendre.png" WIDTH=80 border="0"><br/><B>Héricendre #155</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/feurisson.png" WIDTH=80 border="0"><br/><B>Feurisson #156</B></a></th>
                    <th class=Typhlosion style="width:150px; height:100px;"><img src="Images/shiny/typhlosion.png" WIDTH=95 border="0"><br/><B>Typhlosion #157</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kaiminus.png" WIDTH=80 border="0"><br/><B>Kaiminus #158</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crocrodil.png" WIDTH=80 border="0"><br/><B>Crocodil #159</B></a></th>
                    <th class=Aligatueur style="width:150px; height:100px;"><img src="Images/shiny/aligatueur.png" WIDTH=90 border="0"><br/><B>Aligatueur #160</B></a></th>
                </tr>
                <tr>
                    <td>Maxime</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Akilénul</td>
                    <td>TheGolden</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fouinette.png" WIDTH=90 border="0"><br/><B>Fouinette #161</B></a></th>
                    <th class=Fouinar style="width:150px; height:100px;"><img src="Images/shiny/fouinar.png" WIDTH=90 border="0"><br/><B>Fouinar #162</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hoothoot.png" WIDTH=90 border="0"><br/><B>Hoothoot #163</B></a></th>
                    <th class=Noarfang style="width:150px; height:100px;"><img src="Images/shiny/noarfang.png" WIDTH=80 border="0"><br/><B>Noarfang #164</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/coxy.png" WIDTH=80 border="0"><br/><B>Coxy #165</B></a></th>
                    <th class=Coxyclaque style="width:150px; height:100px;"><img src="Images/shiny/coxyclaque.png" WIDTH=95 border="0"><br/><B>Coxyclaque #166</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mimigal.png" WIDTH=80 border="0"><br/><B>Mimigal #167</B></a></th>
                    <th class=Migalos style="width:150px; height:100px;"><img src="Images/shiny/migalos.png" WIDTH=80 border="0"><br/><B>Migalos #168</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nostenfer.png" WIDTH=90 border="0"><br/><B>Nostenfer #169</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/loupio.png" WIDTH=90 border="0"><br/><B>Loupio #170</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lanturn.png" WIDTH=90 border="0"><br/><B>Lanturn #171</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pichu.png" WIDTH=90 border="0"><br/><B>Pichu #172</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/melo.png" WIDTH=80 border="0"><br/><B>Mélo #173</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/toudoudou.png" WIDTH=80 border="0"><br/><B>Toudoudou #174</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/togepi.png" WIDTH=95 border="0"><br/><B>Togepi #175</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/togetic.png" WIDTH=80 border="0"><br/><B>Togetic #176</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/natu.png" WIDTH=80 border="0"><br/><B>Natu #177</B></a></th>
                    <th class=Xatu style="width:150px; height:100px;"><img src="Images/shiny/xatu.png" WIDTH=90 border="0"><br/><B>Xatu #178</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                    <td>A le gameur</td>
                    <td>A le gameur</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/wattouat.png" WIDTH=90 border="0"><br/><B>Wattouat #179</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lainergie.png" WIDTH=90 border="0"><br/><B>Lainergie #180</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pharamp.png" WIDTH=90 border="0"><br/><B>Pharamp #181</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/joliflor.png" WIDTH=80 border="0"><br/><B>Joliflor #182</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/marill.png" WIDTH=80 border="0"><br/><B>Marill #183</B></a></th>
                    <th class=Azumarill style="width:150px; height:100px;"><img src="Images/shiny/azumarill.png" WIDTH=95 border="0"><br/><B>Azumarill #184</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/simularbre.png" WIDTH=80 border="0"><br/><B>Simularbre #185</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tarpaud.png" WIDTH=80 border="0"><br/><B>Tarpaud #186</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/granivol.png" WIDTH=90 border="0"><br/><B>Granivol #187</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Lyut</td>
                    <td>Satoshi</td>
                    <td>Lyut</td>
                </tr>
                <tr>
                    <th class=Floravol style="width:150px; height:100px;"><img src="Images/shiny/floravol.png" WIDTH=90 border="0"><br/><B>Floravol #188</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cotovol.png" WIDTH=90 border="0"><br/><B>Cotovol #189</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/capumain.png" WIDTH=90 border="0"><br/><B>Capumain #190</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tournegrin.png" WIDTH=80 border="0"><br/><B>Tournegrin #191</B></a></th>
                    <th class=Héliatronc style="width:150px; height:100px;"><img src="Images/shiny/heliatronc.png" WIDTH=80 border="0"><br/><B>Héliatronc #192</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/yanma.png" WIDTH=95 border="0"><br/><B>Yanma #193</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/axoloto.png" WIDTH=80 border="0"><br/><B>Axoloto #194</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/maraiste.png" WIDTH=80 border="0"><br/><B>Maraiste #195</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mentali.png" WIDTH=90 border="0"><br/><B>Mentali #196</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Platinium Foxier</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>TheGolden</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/noctali.png" WIDTH=90 border="0"><br/><B>Noctali #197</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cornebre.png" WIDTH=90 border="0"><br/><B>Cornèbre #198</B></a></th>
                    <th class=Roigada style="width:150px; height:100px;"><img src="Images/shiny/roigada.png" WIDTH=90 border="0"><br/><B>Roigada #199</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/feuforeve.png" WIDTH=80 border="0"><br/><B>Feuforêve #200</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zarbi.png" WIDTH=80 border="0"><br/><B>Zarbi #201</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/qulbutoke.png" WIDTH=95 border="0"><br/><B>Qulbutoké #202</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/girafarig.png" WIDTH=80 border="0"><br/><B>Girafarig #203</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pomdepik.png" WIDTH=80 border="0"><br/><B>Pomdepik #204</B></a></th>
                    <th class=Foretress style="width:150px; height:100px;"><img src="Images/shiny/foretress.png" WIDTH=90 border="0"><br/><B>Foretress #205</B></a></th>
                </tr>
                <tr>
                    <td>Infinity_Light</td>
                    <td>TheGolden</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/insolourdo.png" WIDTH=90 border="0"><br/><B>Insolourdo #206</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scorplane.png" WIDTH=90 border="0"><br/><B>Scorplane #207</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/steelix.png" WIDTH=90 border="0"><br/><B>Steelix #208</B></a></th>
                    <th class=Snubbull style="width:150px; height:100px;"><img src="Images/shiny/snubbull.png" WIDTH=80 border="0"><br/><B>Snubbull #209</B></a></th>
                    <th class=Granbull style="width:150px; height:100px;"><img src="Images/shiny/granbull.png" WIDTH=80 border="0"><br/><B>Granbull #210</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/qwilfish.png" WIDTH=95 border="0"><br/><B>Qwilfish #211</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cizayox.png" WIDTH=80 border="0"><br/><B>Cizayox #212</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/caratroc.png" WIDTH=100 border="0"><br/><B>Caratroc #213</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scarhino.png" WIDTH=90 border="0"><br/><B>Scarhino #214</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/farfuret.png" WIDTH=90 border="0"><br/><B>Farfuret #215</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/teddiursa.png" WIDTH=90 border="0"><br/><B>Teddiursa #216</B></a></th>
                    <th class=Ursaring style="width:150px; height:100px;"><img src="Images/shiny/ursaring.png" WIDTH=90 border="0"><br/><B>Ursaring #217</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/limagma.png" WIDTH=80 border="0"><br/><B>Limagma #218</B></a></th>
                    <th class=Volcaropod style="width:150px; height:100px;"><img src="Images/shiny/volcaropod.png" WIDTH=80 border="0"><br/><B>Volcaropod #219</B></a></th>
                    <th class=Marcacrin style="width:150px; height:100px;"><img src="Images/shiny/marcacrin.png" WIDTH=95 border="0"><br/><B>Marcacrin #220</B></a></th>
                    <th class=Cochignon style="width:150px; height:100px;"><img src="Images/shiny/cochignon.png" WIDTH=80 border="0"><br/><B>Cochignon #221</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/corayon.png" WIDTH=100 border="0"><br/><B>Corayon #222</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/remoraid.png" WIDTH=90 border="0"><br/><B>Rémoraid #223</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/octillery.png" WIDTH=90 border="0"><br/><B>Octillery #224</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cadoizo.png" WIDTH=90 border="0"><br/><B>Cadoizo #225</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/demanta.png" WIDTH=90 border="0"><br/><B>Démanta #226</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/airmure.png" WIDTH=80 border="0"><br/><B>Airmure #227</B></a></th>
                    <th class=Malosse style="width:150px; height:100px;"><img src="Images/shiny/malosse.png" WIDTH=80 border="0"><br/><B>Malosse #228</B></a></th>
                    <th class=Démolosse style="width:150px; height:100px;"><img src="Images/shiny/demolosse.png" WIDTH=95 border="0"><br/><B>Démolosse #229</B></a></th>
                    <th class=Hyporoi style="width:150px; height:100px;"><img src="Images/shiny/hyporoi.png" WIDTH=80 border="0"><br/><B>Hyporoi #230</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/phanpy.png" WIDTH=100 border="0"><br/><B>Phanpy #231</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/donphan.png" WIDTH=90 border="0"><br/><B>Donphan #232</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>maxime</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>LeDragonDuSommeil</td>
                </tr>
                <tr>
                    <th class=Porygon2 style="width:150px; height:100px;"><img src="Images/shiny/porygon2.png" WIDTH=90 border="0"><br/><B>Porygon2 #233</B></a></th>
                    <th class=Cerfrousse style="width:150px; height:100px;"><img src="Images/shiny/cerfrousse.png" WIDTH=90 border="0"><br/><B>Cerfrousse #234</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/queulorior.png" WIDTH=90 border="0"><br/><B>Queulorior #235</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/debugant.png" WIDTH=80 border="0"><br/><B>Debugant #236</B></a></th>
                    <th class=Kapoera style="width:150px; height:100px;"><img src="Images/shiny/kapoera.png" WIDTH=80 border="0"><br/><B>Kapoera #237</B></a></th>
                    <th class=Lippouti style="width:150px; height:100px;"><img src="Images/shiny/lippouti.png" WIDTH=95 border="0"><br/><B>Lippouti #238</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/elekid.png" WIDTH=100 border="0"><br/><B>Elekid #239</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magby.png" WIDTH=100 border="0"><br/><B>Magby #240</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ecremeuh.png" WIDTH=90 border="0"><br/><B>Ecrémeuh #241</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Maxime</td>
                    <td>A le Gameur</td>
                    <td>Infinity_light</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/leuphorie.png" WIDTH=90 border="0"><br/><B>Leuphorie #242</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/raikou.png" WIDTH=90 border="0"><br/><B>Raikou #243</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/entei.png" WIDTH=90 border="0"><br/><B>Entei #244</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/suicune.png" WIDTH=80 border="0"><br/><B>Suicune #245</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/embrylex.png" WIDTH=80 border="0"><br/><B>Embrylex #246</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ymphect.png" WIDTH=95 border="0"><br/><B>Ymphect #247</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tyranocif.png" WIDTH=100 border="0"><br/><B>Tyranocif #248</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Infinity_light</td>
                    <td>Gaven</td>
                    <td>Platinium Foxier</td>
                    <td>Platinium Foxier</td>
                    <td>Platinium Foxier</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lugia.png" WIDTH=100 border="0"><br/><B>Lugia #249</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ho-oh.png" WIDTH=100 border="0"><br/><B>Ho-Oh #250</B></a></th>
                    <th class=Celebi style="width:150px; height:100px;"><img src="Images/shiny/celebi.png" WIDTH=90 border="0"><br/><B>Celebi #251</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>???</td>
                </tr>
        </center></table><br/><br/><br/>
                    <h3>Living Dex 3g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/arcko.png" WIDTH=70 border="0"><br/><B>Arcko #252</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/massko.png" WIDTH=90 border="0"><br/><B>Massko #253</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/jungko.png" WIDTH=90 border="0"><br/><B>Jungko #254</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/poussifeu.png" WIDTH=80 border="0"><br/><B>Poussifeu #255</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galifeu.png" WIDTH=80 border="0"><br/><B>Galifeu #256</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/brasegali.png" WIDTH=95 border="0"><br/><B>Braségali #257</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gobou.png" WIDTH=80 border="0"><br/><B>Gobou #258</B></a></th>
                    <th class=Flobio style="width:150px; height:100px;"><img src="Images/shiny/flobio.png" WIDTH=80 border="0"><br/><B>Flobio #259</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/laggron.png" WIDTH=90 border="0"><br/><B>Laggron #260</B></a></th>
                </tr>
                <tr>
                    <td>missmiki</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Spectra</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/medhyena.png" WIDTH=70 border="0"><br/><B>Medhyèna #261</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grahyena.png" WIDTH=90 border="0"><br/><B>Grahyèna #262</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zigzaton.png" WIDTH=90 border="0"><br/><B>Zigzaton #263</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lineon.png" WIDTH=80 border="0"><br/><B>Linéon #264</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chenipotte.png" WIDTH=80 border="0"><br/><B>Chenipotte #265</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/armulys.png" WIDTH=95 border="0"><br/><B>Armulys #266</B></a></th>
                    <th class=Charmillon style="width:150px; height:100px;"><img src="Images/shiny/charmillon.png" WIDTH=80 border="0"><br/><B>Charmillon #267</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/blindalys.png" WIDTH=80 border="0"><br/><B>Blindalys #268</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/papinox.png" WIDTH=90 border="0"><br/><B>Papinox #269</B></a></th>
                </tr>
                <tr>
                    <td>A le gameur</td>
                    <td>CRZ</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>matheo</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nenupiot.png" WIDTH=70 border="0"><br/><B>Nénupiot #270</B></a></th>
                    <th class=Lombre style="width:150px; height:100px;"><img src="Images/shiny/lombre.png" WIDTH=90 border="0"><br/><B>Lombre #271</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ludicolo.png" WIDTH=90 border="0"><br/><B>Ludicolo #272</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grainipiot.png" WIDTH=80 border="0"><br/><B>Grainipiot #273</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pifeuil.png" WIDTH=80 border="0"><br/><B>Pifeuil #274</B></a></th>
                    <th class=Tengalice style="width:150px; height:100px;"><img src="Images/shiny/tengalice.png" WIDTH=95 border="0"><br/><B>Tengalice #275</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nirondelle.png" WIDTH=80 border="0"><br/><B>Nirondelle #276</B></a></th>
                    <th class=Hélédelle style="width:150px; height:100px;"><img src="Images/shiny/heledelle.png" WIDTH=80 border="0"><br/><B>Hélédelle #277</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goelise.png" WIDTH=90 border="0"><br/><B>Goélise #278</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                    <td>???</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=Bekipan style="width:150px; height:100px;"><img src="Images/shiny/bekipan.png" WIDTH=70 border="0"><br/><B>Bekipan #279</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tarsal.png" WIDTH=90 border="0"><br/><B>Tarsal #280</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kirlia.png" WIDTH=90 border="0"><br/><B>Kirlia #281</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gardevoir.png" WIDTH=80 border="0"><br/><B>Gardevoir #282</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/arakdo.png" WIDTH=80 border="0"><br/><B>Arakdo #283</B></a></th>
                    <th class=Maskadra style="width:150px; height:100px;"><img src="Images/shiny/maskadra.png" WIDTH=95 border="0"><br/><B>Maskadra #284</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/balignon.png" WIDTH=80 border="0"><br/><B>Balignon #285</B></a></th>
                    <th class=Chapignon style="width:150px; height:100px;"><img src="Images/shiny/chapignon.png" WIDTH=80 border="0"><br/><B>Chapignon #286</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/parecool.png" WIDTH=90 border="0"><br/><B>Parecool #287</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Infinity_Light</td>
                    <td>Spectra</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=Vigoroth style="width:150px; height:100px;"><img src="Images/shiny/vigoroth.png" WIDTH=70 border="0"><br/><B>Vigoroth #288</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/monaflemit.png" WIDTH=90 border="0"><br/><B>Monaflèmit #289</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ningale.png" WIDTH=90 border="0"><br/><B>Ningale #290</B></a></th>
                    <th class=ninjask style="width:150px; height:100px;"><img src="Images/shiny/ninjask.png" WIDTH=80 border="0"><br/><B>Ninjask #291</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/munja.png" WIDTH=80 border="0"><br/><B>Munja #292</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chuchmur.png" WIDTH=95 border="0"><br/><B>Chuchmur #293</B></a></th>
                    <th class=Ramboum style="width:150px; height:100px;"><img src="Images/shiny/ramboum.png" WIDTH=80 border="0"><br/><B>Ramboum #294</B></a></th>
                    <th class=Brouhabam style="width:150px; height:100px;"><img src="Images/shiny/brouhabam.png" WIDTH=80 border="0"><br/><B>Brouhabam #295</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/makuhita.png" WIDTH=90 border="0"><br/><B>Makuhita #296</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Satoshi</td>
                </tr>
                <tr>
                    <th class=Hariyama style="width:150px; height:100px;"><img src="Images/shiny/hariyama.png" WIDTH=70 border="0"><br/><B>Hariyama #297</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/azurill.png" WIDTH=90 border="0"><br/><B>Azurill #298</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tarinor.png" WIDTH=90 border="0"><br/><B>Tarinor #299</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/skitty.png" WIDTH=80 border="0"><br/><B>Skitty #300</B></a></th>
                    <th class=Delcatty style="width:150px; height:100px;"><img src="Images/shiny/delcatty.png" WIDTH=80 border="0"><br/><B>Delcatty #301</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tenefix.png" WIDTH=95 border="0"><br/><B>Ténéfix #302</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mysdibule.png" WIDTH=80 border="0"><br/><B>Mysdibule #303</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galekid.png" WIDTH=80 border="0"><br/><B>Galekid #304</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galegon.png" WIDTH=90 border="0"><br/><B>Galegon #305</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galeking.png" WIDTH=70 border="0"><br/><B>Galeking #306</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/meditikka.png" WIDTH=90 border="0"><br/><B>Méditikka #307</B></a></th>
                    <th class=Charmina style="width:150px; height:100px;"><img src="Images/shiny/charmina.png" WIDTH=90 border="0"><br/><B>Charmina #308</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dynavolt.png" WIDTH=80 border="0"><br/><B>Dynavolt #309</B></a></th>
                    <th class=Elecsprint style="width:150px; height:100px;"><img src="Images/shiny/elecsprint.png" WIDTH=80 border="0"><br/><B>Elecsprint #310</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/posipi.png" WIDTH=95 border="0"><br/><B>Posipi #311</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/negapi.png" WIDTH=80 border="0"><br/><B>Négapi #312</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/muciole.png" WIDTH=80 border="0"><br/><B>Muciole #313</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lumivole.png" WIDTH=90 border="0"><br/><B>Lumivole #314</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>A le Gameur</td>
                    <td>Lilishi</td>
                    <td>FT_NoNo</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roselia.png" WIDTH=70 border="0"><br/><B>Rosélia #315</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gloupti.png" WIDTH=90 border="0"><br/><B>Gloupti #316</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/avaltout.png" WIDTH=90 border="0"><br/><B>Avaltout #317</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carvanha.png" WIDTH=80 border="0"><br/><B>Carvanha #318</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sharpedo.png" WIDTH=80 border="0"><br/><B>Sharpedo #319</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/wailmer.png" WIDTH=95 border="0"><br/><B>Wailmer #320</B></a></th>
                    <th class=Wailord style="width:150px; height:100px;"><img src="Images/shiny/wailord.png" WIDTH=80 border="0"><br/><B>Wailord #321</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chamallot.png" WIDTH=80 border="0"><br/><B>Chamallot #322</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/camerupt.png" WIDTH=90 border="0"><br/><B>Camérupt #323</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>A le gameur</td>
                    <td>CRZ</td>
                    <td>Lilishi</td>
                    <td>Infinity_light</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>A le gameur</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chartor.png" WIDTH=70 border="0"><br/><B>Chartor #324</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/spoink.png" WIDTH=90 border="0"><br/><B>Spoink #325</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/groret.png" WIDTH=90 border="0"><br/><B>Groret #326</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/spinda.png" WIDTH=80 border="0"><br/><B>Spinda #327</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kraknoix.png" WIDTH=80 border="0"><br/><B>Kraknoix #328</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/vibraninf.png" WIDTH=95 border="0"><br/><B>Vibraninf #329</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/libegon.png" WIDTH=80 border="0"><br/><B>Libégon #330</B></a></th>
                    <th class=Cacnea style="width:150px; height:100px;"><img src="Images/shiny/cacnea.png" WIDTH=80 border="0"><br/><B>Cacnea #331</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cacturne.png" WIDTH=90 border="0"><br/><B>Cacturne #332</B></a></th>
                </tr>
                <tr>
                    <td>kenzo</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>Benra_</td>
                    <td>kenzo</td>
                    <td>Lilishi</td>
                    <td>Twisko</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tylton.png" WIDTH=70 border="0"><br/><B>Tylton #333</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/altaria.png" WIDTH=90 border="0"><br/><B>Altaria #334</B></a></th>
                    <th class=Mangriff style="width:150px; height:100px;"><img src="Images/shiny/mangriff.png" WIDTH=90 border="0"><br/><B>Mangriff #335</B></a></th>
                    <th class=Séviper style="width:150px; height:100px;"><img src="Images/shiny/seviper.png" WIDTH=80 border="0"><br/><B>Séviper #336</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/seleroc.png" WIDTH=80 border="0"><br/><B>Séléroc #337</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/solaroc.png" WIDTH=80 border="0"><br/><B>Solaroc #338</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/barloche.png" WIDTH=95 border="0"><br/><B>Barloche #339</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/barbicha.png" WIDTH=80 border="0"><br/><B>Barbicha #340</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ecrapince.png" WIDTH=80 border="0"><br/><B>Ecrapince #341</B></a></th>
                </tr>
                <tr>
                    <td>Spectra</td>
                    <td>Spectra</td>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>kenzo</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/colhomard.png" WIDTH=90 border="0"><br/><B>Colhomard #342</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/balbuto.png" WIDTH=70 border="0"><br/><B>Balbuto #343</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kaorine.png" WIDTH=90 border="0"><br/><B>Kaorine #344</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lilia.png" WIDTH=90 border="0"><br/><B>Lilia #345</B></a></th>
                    <th class=Vacilys style="width:150px; height:100px;"><img src="Images/shiny/vacilys.png" WIDTH=90 border="0"><br/><B>Vacilys #346</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/anorith.png" WIDTH=80 border="0"><br/><B>Anorith #347</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/armaldo.png" WIDTH=80 border="0"><br/><B>Armaldo #348</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/barpau.png" WIDTH=95 border="0"><br/><B>Barpau #349</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/milobellus.png" WIDTH=80 border="0"><br/><B>Milobellus #350</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Benra_</td>
                    <td>CornetBoy</td>
                    <td>Pokemaz</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>Damien</td>
                    <td>Ewox_</td>
                    <td>Spectra</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/morpheo.png" WIDTH=80 border="0"><br/><B>Morphéo #351</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kecleon.png" WIDTH=90 border="0"><br/><B>Kecleon #352</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/polichombr.png" WIDTH=70 border="0"><br/><B>Polichombr #353</B></a></th>
                    <th class=Branette style="width:150px; height:100px;"><img src="Images/shiny/branette.png" WIDTH=90 border="0"><br/><B>Branette #354</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/skelenox.png" WIDTH=90 border="0"><br/><B>Skelénox #355</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/teraclope.png" WIDTH=80 border="0"><br/><B>Téraclope #356</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tropius.png" WIDTH=80 border="0"><br/><B>Tropius #357</B></a></th>
                    <th class=Eoko style="width:150px; height:100px;"><img src="Images/shiny/eoko.png" WIDTH=95 border="0"><br/><B>Eoko #358</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/absol.png" WIDTH=80 border="0"><br/><B>Absol #359</B></a></th>                    
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Infinity_Light</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>FT_NoNo</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Infinity_light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/okeoke.png" WIDTH=80 border="0"><br/><B>Okéoké #360</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/stalgamin.png" WIDTH=90 border="0"><br/><B>Stalgamin #361</B></a></th>
                    <th class=Oniglali style="width:150px; height:100px;"><img src="Images/shiny/oniglali.png" WIDTH=70 border="0"><br/><B>Oniglali #362</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/obalie.png" WIDTH=90 border="0"><br/><B>Obalie #363</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/phogleur.png" WIDTH=90 border="0"><br/><B>Phogleur #364</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kaimorse.png" WIDTH=80 border="0"><br/><B>Kaimorse #365</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/coquiperl.png" WIDTH=80 border="0"><br/><B>Coquiperl #366</B></a></th>
                    <th class=Serpang style="width:150px; height:100px;"><img src="Images/shiny/serpang.png" WIDTH=95 border="0"><br/><B>Serpang #367</B></a></th>
                    <th class=Rosabyss style="width:150px; height:100px;"><img src="Images/shiny/rosabyss.png" WIDTH=80 border="0"><br/><B>Rosabyss #368</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>   
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/relicanth.png" WIDTH=80 border="0"><br/><B>Relicanth #369</B></a></th>          
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lovdisc.png" WIDTH=90 border="0"><br/><B>Lovdisc #370</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/draby.png" WIDTH=70 border="0"><br/><B>Draby #371</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/drackhaus.png" WIDTH=90 border="0"><br/><B>Drackhaus #372</B></a></th>
                    <th class=Drattak style="width:150px; height:100px;"><img src="Images/shiny/drattak.png" WIDTH=90 border="0"><br/><B>Drattak #373</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/terhal.png" WIDTH=80 border="0"><br/><B>Terhal #374</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/metang.png" WIDTH=80 border="0"><br/><B>Métang #375</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/metalosse.png" WIDTH=95 border="0"><br/><B>Métaloss #376</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/regirock.png" WIDTH=80 border="0"><br/><B>Regirock #377</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Platinium Foxier</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/regice.png" WIDTH=80 border="0"><br/><B>Regice #378</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/registeel.png" WIDTH=90 border="0"><br/><B>Registeel #379</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/latias.png" WIDTH=70 border="0"><br/><B>Latias #380</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/latios.png" WIDTH=90 border="0"><br/><B>Latios #381</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kyogre.png" WIDTH=90 border="0"><br/><B>Kyogre #382</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>Lilishi</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/groudon.png" WIDTH=80 border="0"><br/><B>Groudon #383</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rayquaza.png" WIDTH=80 border="0"><br/><B>Rayquaza #384</B></a></th>
                    <th class=Deoxys style="width:150px; height:100px;"><img src="Images/shiny/deoxys.png" WIDTH=95 border="0"><br/><B>Deoxys #386</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>Nah.</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
        </center></table><br/><br/><br/>
                        <h3>Living Dex 4g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tortipouss.png" WIDTH=80 border="0"><br/><B>Tortipouss #387</B></a></th>
                    <th class=Boskara style="width:150px; height:100px;"><img src="Images/shiny/boskara.png" WIDTH=80 border="0"><br/><B>Boskara #388</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/torterra.png" WIDTH=80 border="0"><br/><B>Torterra #389</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ouisticram.png" WIDTH=80 border="0"><br/><B>Ouisticram #390</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chimpenfeu.png" WIDTH=80 border="0"><br/><B>Chimpenfeu #391</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/simiabraz.png" WIDTH=80 border="0"><br/><B>Simiabraz #392</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tiplouf.png" WIDTH=80 border="0"><br/><B>Tiplouf #393</B></a></th>
                    <th class=Prinplouf style="width:150px; height:100px;"><img src="Images/shiny/prinplouf.png" WIDTH=80 border="0"><br/><B>Prinplouf #394</B></a></th>
                    <th class=Pingoléon style="width:150px; height:100px;"><img src="Images/shiny/pingoleon.png" WIDTH=80 border="0"><br/><B>Pingoléon #395</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Mr Lien</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/etourmi.png" WIDTH=80 border="0"><br/><B>Étourmi #396</B></a></th>
                  <th class=Étourvol style="width:150px; height:100px;"><img src="Images/shiny/etourvol.png" WIDTH=80 border="0"><br/><B>Étourvol #397</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/etouraptor.png" WIDTH=80 border="0"><br/><B>Étouraptor #398</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/keunotor.png" WIDTH=80 border="0"><br/><B>Keunotor #399</B></a></th>
                  <th class=Castorno style="width:150px; height:100px;"><img src="Images/shiny/castorno.png" WIDTH=80 border="0"><br/><B>Castorno #400</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crikzik.png" WIDTH=80 border="0"><br/><B>Crikzik #401</B></a></th>
                  <th class=Mélokrik style="width:150px; height:100px;"><img src="Images/shiny/melokrik.png" WIDTH=80 border="0"><br/><B>Mélokrik #402</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lixy.png" WIDTH=80 border="0"><br/><B>Lixy #403</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/luxio.png" WIDTH=80 border="0"><br/><B>Luxio #404</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Infinity_light</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/luxray.png" WIDTH=80 border="0"><br/><B>Luxray #405</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rozbouton.png" WIDTH=80 border="0"><br/><B>Rozbouton #406</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roserade.png" WIDTH=80 border="0"><br/><B>Roserade #407</B></a></th>
                  <th class=Kranidos style="width:150px; height:100px;"><img src="Images/shiny/kranidos.png" WIDTH=80 border="0"><br/><B>Kranidos #408</B></a></th>
                  <th class=Charkos style="width:150px; height:100px;"><img src="Images/shiny/charkos.png" WIDTH=80 border="0"><br/><B>Charkos #409</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dinoclier.png" WIDTH=80 border="0"><br/><B>Dinoclier #410</B></a></th>
                  <th class=Bastiodon style="width:150px; height:100px;"><img src="Images/shiny/bastiodon.png" WIDTH=80 border="0"><br/><B>Bastiodon #411</B></a></th>
                  <th class=Cheniti style="width:150px; height:100px;"><img src="Images/shiny/cheniti.png" WIDTH=80 border="0"><br/><B>Cheniti #412</B></a></th>
                  <th class=Cheniti-j style="width:150px; height:100px;"><img src="Images/shiny/cheniti-j.png" WIDTH=100 border="0"><br/><B>Cheniti #412</B></a></th>
                </tr>
                <tr>
                    <td>TheGolden</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=Cheniti-r style="width:150px; height:100px;"><img src="Images/shiny/cheniti-r.png" WIDTH=100 border="0"><br/><B>Cheniti #412</B></a></th>
                    <th class=Cheniselle style="width:150px; height:100px;"><img src="Images/shiny/cheniselle.png" WIDTH=80 border="0"><br/><B>Cheniselle #413</B></a></th>
                    <th class=Cheniselle-j style="width:150px; height:100px;"><img src="Images/shiny/cheniselle-j.png" WIDTH=100 border="0"><br/><B>Cheniselle #413</B></a></th>
                    <th class=Cheniselle-r style="width:150px; height:100px;"><img src="Images/shiny/cheniselle-r.png" WIDTH=100 border="0"><br/><B>Cheniselle #413</B></a></th>
                    <th class=Papilord style="width:150px; height:100px;"><img src="Images/shiny/papilord.png" WIDTH=80 border="0"><br/><B>Papilord #414</B></a></th>
                    <th class=Apitrini style="width:150px; height:100px;"><img src="Images/shiny/apitrini.png" WIDTH=80 border="0"><br/><B>Apitrini #415</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/apireine.png" WIDTH=80 border="0"><br/><B>Apireine #416</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pachirisu.png" WIDTH=80 border="0"><br/><B>Pachirisu #417</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mustebouee.png" WIDTH=80 border="0"><br/><B>Mustébouée #418</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=Mustéflott style="width:150px; height:100px;"><img src="Images/shiny/musteflott.png" WIDTH=80 border="0"><br/><B>Mustéflott #419</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ceribou.png" WIDTH=80 border="0"><br/><B>Ceribou #420</B></a></th>
                    <th class=Ceriflor style="width:150px; height:100px;"><img src="Images/shiny/ceriflor.png" WIDTH=80 border="0"><br/><B>Ceriflor #421</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sancoki.png" WIDTH=80 border="0"><br/><B>Sancoki Mer Occident #422</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sancoki-m.png" WIDTH=80 border="0"><br/><B>Sancoki Mer Orient #422</B></a></th>
                    <th class=Tritosor-f style="width:150px; height:100px;"><img src="Images/shiny/tritosor.png" WIDTH=80 border="0"><br/><B>Tritosor Mer Occident #423</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tritosor-m.png" WIDTH=80 border="0"><br/><B>Tritosor Mer Orient #423</B></a></th>
                    <th class=Capidextre style="width:150px; height:100px;"><img src="Images/shiny/capidextre.png" WIDTH=80 border="0"><br/><B>Capidextre #424</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/baudrive.png" WIDTH=80 border="0"><br/><B>Baudrive #425</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grodrive.png" WIDTH=80 border="0"><br/><B>Grodrive #426</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/laporeille.png" WIDTH=80 border="0"><br/><B>Laporeille #427</B></a></th>
                    <th class=Lockpin style="width:150px; height:100px;"><img src="Images/shiny/lockpin.png" WIDTH=80 border="0"><br/><B>Lockpin #428</B></a></th>
                    <th class=Magirêve style="width:150px; height:100px;"><img src="Images/shiny/magireve.png" WIDTH=80 border="0"><br/><B>Magirêve #429</B></a></th>
                    <th class=Corboss style="width:150px; height:100px;"><img src="Images/shiny/corboss.png" WIDTH=80 border="0"><br/><B>Corboss #430</B></a></th>
                    <th class=Chaglam style="width:150px; height:100px;"><img src="Images/shiny/chaglam.png" WIDTH=80 border="0"><br/><B>Chaglam #431</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chaffreux.png" WIDTH=80 border="0"><br/><B>Chaffreux #432</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/korillon.png" WIDTH=80 border="0"><br/><B>Korillon #433</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moufouette.png" WIDTH=80 border="0"><br/><B>Moufouette #434</B></a></th>
                </tr>
                <tr>
                    <td>TheGolden</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Gaven</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moufflair.png" WIDTH=80 border="0"><br/><B>Moufflair #435</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/archeomire.png" WIDTH=80 border="0"><br/><B>Archéomire #436</B></a></th>
                    <th class=Archéodong style="width:150px; height:100px;"><img src="Images/shiny/archeodong.png" WIDTH=80 border="0"><br/><B>Archéodong #437</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/manzai.png" WIDTH=80 border="0"><br/><B>Manzaï #438</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mimejr.png" WIDTH=80 border="0"><br/><B>Mime Jr. #439</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ptiravi.png" WIDTH=80 border="0"><br/><B>Ptiravi #440</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pijako.png" WIDTH=80 border="0"><br/><B>Pijako #441</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/spiritomb.png" WIDTH=80 border="0"><br/><B>Spiritomb #442</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/griknot.png" WIDTH=80 border="0"><br/><B>Griknot #443</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>A le gameur</td>
                    <td>A le gameur</td>
                    <td>A le gameur</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carmache.png" WIDTH=80 border="0"><br/><B>Carmache #444</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carchacrok.png" WIDTH=80 border="0"><br/><B>Carchacrok #445</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goinfrex.png" WIDTH=80 border="0"><br/><B>Goinfrex #446</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/riolu.png" WIDTH=80 border="0"><br/><B>Riolu #447</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lucario.png" WIDTH=80 border="0"><br/><B>Lucario #448</B></a></th>
                    <th class=Hippopotas-f style="width:150px; height:100px;"><img src="Images/shiny/hippopotas-f.png" WIDTH=80 border="0"><br/><B>Hippopotas Femelle #449</B></a></th>
                    <th class=Hippopotas-m style="width:150px; height:100px;"><img src="Images/shiny/hippopotas-m.png" WIDTH=80 border="0"><br/><B>Hippopotas Male #449</B></a></th>
                    <th class=Hippodocus style="width:150px; height:100px;"><img src="Images/shiny/hippodocus.png" WIDTH=70 border="0"><br/><B>Hippodocus Femelle #450</B></a></th>
                    <th class=Hippodocus-m style="width:150px; height:100px;"><img src="Images/shiny/hippodocus-m.png" WIDTH=70 border="0"><br/><B>Hippodocus Male #451</B></a></th>
                </tr>
                <tr>
                    <td>Kenzo</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rapion.png" WIDTH=80 border="0"><br/><B>Rapion #452</B></a></th>
                    <th class=Drascore style="width:150px; height:100px;"><img src="Images/shiny/drascore.png" WIDTH=80 border="0"><br/><B>Drascore #452</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cradopaud.png" WIDTH=80 border="0"><br/><B>Cradopaud #453</B></a></th>
                    <th class=Coatox style="width:150px; height:100px;"><img src="Images/shiny/coatox.png" WIDTH=80 border="0"><br/><B>Coatox #454</B></a></th>
                    <th class=Vortente style="width:150px; height:100px;"><img src="Images/shiny/vortente.png" WIDTH=80 border="0"><br/><B>Vortente #455</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ecayon.png" WIDTH=80 border="0"><br/><B>Écayon #456</B></a></th>
                    <th class=Luminéon style="width:150px; height:100px;"><img src="Images/shiny/lumineon.png" WIDTH=80 border="0"><br/><B>Luminéon #457</B></a></th>
                    <th class=Babimanta style="width:150px; height:100px;"><img src="Images/shiny/babimanta.png" WIDTH=80 border="0"><br/><B>Babimanta #458</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/blizzi.png" WIDTH=80 border="0"><br/><B>Blizzi #459</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Gaven</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=Blizzaroi style="width:150px; height:100px;"><img src="Images/shiny/blizzaroi.png" WIDTH=80 border="0"><br/><B>Blizzaroi #460</B></a></th>
                    <th class=Dimoret style="width:150px; height:100px;"><img src="Images/shiny/dimoret.png" WIDTH=80 border="0"><br/><B>Dimoret #461</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/magnezone.png" WIDTH=80 border="0"><br/><B>Magnézone #462</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/coudlangue.png" WIDTH=80 border="0"><br/><B>Coudlangue #463</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rhinastoc.png" WIDTH=80 border="0"><br/><B>Rhinastoc #464</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bouldeneu.png" WIDTH=80 border="0"><br/><B>Bouldeneu #465</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/elekable.png" WIDTH=80 border="0"><br/><B>Élekable #466</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/maganon.png" WIDTH=80 border="0"><br/><B>Maganon #467</B></a></th>
                    <th class=Togekiss style="width:150px; height:100px;"><img src="Images/shiny/togekiss.png" WIDTH=80 border="0"><br/><B>Togekiss #468</B></a></th> 
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=Yanmega style="width:150px; height:100px;"><img src="Images/shiny/yanmega.png" WIDTH=80 border="0"><br/><B>Yanmega #469</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/phyllali.png" WIDTH=80 border="0"><br/><B>Phyllali #470</B></a></th>
                    <th class=Givrali style="width:150px; height:100px;"><img src="Images/shiny/givrali.png" WIDTH=80 border="0"><br/><B>Givrali #471</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scorvol.png" WIDTH=80 border="0"><br/><B>Scorvol #472</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mammochon.png" WIDTH=80 border="0"><br/><B>Mammochon #473</B></a></th>
                    <th class=Porygon-Z style="width:150px; height:100px;"><img src="Images/shiny/porygon-z.png" WIDTH=80 border="0"><br/><B>Porygon-Z #474</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gallame.png" WIDTH=80 border="0"><br/><B>Gallame #475</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tarinorme.png" WIDTH=80 border="0"><br/><B>Tarinorme #476</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/noctunoir.png" WIDTH=80 border="0"><br/><B>Noctunoir #477</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=Momartik style="width:150px; height:100px;"><img src="Images/shiny/momartik.png" WIDTH=80 border="0"><br/><B>Momartik #478</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma.png" WIDTH=80 border="0"><br/><B>Motisma #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma-four.png" WIDTH=80 border="0"><br/><B>Motisma Chaleur #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma-frigo.png" WIDTH=80 border="0"><br/><B>Motisma Froid #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma-lavage.png" WIDTH=80 border="0"><br/><B>Motisma Lavage #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma-tonte.png" WIDTH=80 border="0"><br/><B>Motisma Tonte #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/motisma-ventilo.png" WIDTH=80 border="0"><br/><B>Motisma Hélice #479</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crehelf.png" WIDTH=80 border="0"><br/><B>Créhelf #480</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crefollet.png" WIDTH=80 border="0"><br/><B>Créfollet #481</B></a></th>
                    
                </tr>
                <tr>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>Satoshi</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_light</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crefadet.png" WIDTH=80 border="0"><br/><B>Créfadet #482</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dialga.png" WIDTH=80 border="0"><br/><B>Dialga #483</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/palkia.png" WIDTH=80 border="0"><br/><B>Palkia #484</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/heatran.png" WIDTH=80 border="0"><br/><B>Heatran #485</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/regigigas.png" WIDTH=80 border="0"><br/><B>Regigigas #486</B></a></th>
                    
                    
                </tr>
                <tr>
                    <td class=invisible></td> 
                    <td class=invisible></td>     
                    <td>Infinity_light</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Kenzo</td>
                    <td>LeDragonDuSommeil</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/giratina.png" WIDTH=80 border="0"><br/><B>Giratina #487</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cresselia.png" WIDTH=80 border="0"><br/><B>Cresselia #488</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/phione.png" WIDTH=80 border="0"><br/><B>Phione #489</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/darkrai.png" WIDTH=80 border="0"><br/><B>Darkrai #491</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/shaymin.png" WIDTH=80 border="0"><br/><B>Shaymin #492</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/arceus.png" WIDTH=80 border="0"><br/><B>Arceus #493</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>CornetBoy</td>
                    <td>Infinity_Light</td>
                    <td>Damien</td>
                </tr>
        </center></table><br/><br/><br/>
                                                                <h3>Living Dex 5g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=Vipelierre style="width:150px; height:100px;"><img src="Images/shiny/vipelierre.png" WIDTH=80 border="0"><br/><B>Vipelierre #495</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lianaja.png" WIDTH=80 border="0"><br/><B>Lianaja #496</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/majaspic.png" WIDTH=80 border="0"><br/><B>Majaspic #497</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gruikui.png" WIDTH=80 border="0"><br/><B>Gruikui #498</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grotichon.png" WIDTH=80 border="0"><br/><B>Grotichon #499</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roitiflam.png" WIDTH=80 border="0"><br/><B>Roitiflam #500</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moustillon.png" WIDTH=80 border="0"><br/><B>Moustillon #501</B></a></th>
                    <th class=Mateloutre style="width:150px; height:100px;"><img src="Images/shiny/mateloutre.png" WIDTH=80 border="0"><br/><B>Mateloutre #502</B></a></th>
                    <th class=Clamiral style="width:150px; height:100px;"><img src="Images/shiny/clamiral.png" WIDTH=80 border="0"><br/><B>Clamiral #503</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Satoshi</td>
                    <td>Kenzo</td>
                    <td>Maxeuh</td>
                    <td>Maxeuh</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ratentif.png" WIDTH=80 border="0"><br/><B>Ratentif #504</B></a></th>
                    <th class=Miradar style="width:150px; height:100px;"><img src="Images/shiny/miradar.png" WIDTH=80 border="0"><br/><B>Miradar #505</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ponchiot.png" WIDTH=80 border="0"><br/><B>Ponchiot #506</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ponchien.png" WIDTH=80 border="0"><br/><B>Ponchien #507</B></a></th>
                    <th class=Mastouffe style="width:150px; height:100px;"><img src="Images/shiny/mastouffe.png" WIDTH=80 border="0"><br/><B>Mastouffe #508</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chacripan.png" WIDTH=80 border="0"><br/><B>Chacripan #509</B></a></th>
                    <th class=Leopardus style="width:150px; height:100px;"><img src="Images/shiny/leopardus.png" WIDTH=80 border="0"><br/><B>Leopardus #510</B></a></th>
                    <th class=Feuillajou style="width:150px; height:100px;"><img src="Images/shiny/feuillajou.png" WIDTH=80 border="0"><br/><B>Feuillajou #511</B></a></th>
                    <th class=Feuiloutan style="width:150px; height:100px;"><img src="Images/shiny/feuiloutan.png" WIDTH=80 border="0"><br/><B>Feuiloutan #512</B></a></th>
                </tr>
                <tr>
                    <td>Kenzo</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>rat ze mots</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flamajou.png" WIDTH=80 border="0"><br/><B>Flamajou #513</B></a></th>
                    <th class=Flamoutan style="width:150px; height:100px;"><img src="Images/shiny/flamoutan.png" WIDTH=80 border="0"><br/><B>Flamoutan #514</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flotajou.png" WIDTH=80 border="0"><br/><B>Flotajou #515</B></a></th>
                    <th class=Flotoutan style="width:150px; height:100px;"><img src="Images/shiny/flotoutan.png" WIDTH=80 border="0"><br/><B>Flotoutan #516</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/munna.png" WIDTH=80 border="0"><br/><B>Munna #517</B></a></th>
                    <th class=Mushana style="width:150px; height:100px;"><img src="Images/shiny/mushana.png" WIDTH=80 border="0"><br/><B>Mushana #518</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/poichigeon.png" WIDTH=80 border="0"><br/><B>Poichigeon #519</B></a></th>
                    <th class=Colombeau style="width:150px; height:100px;"><img src="Images/shiny/colombeau.png" WIDTH=80 border="0"><br/><B>Colombeau #520</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/deflaisan-f.png" WIDTH=80 border="0"><br/><B>Deflaisan Femelle #521</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Kenzo</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Kuiki</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/deflaisan-m.png" WIDTH=80 border="0"><br/><B>Deflaisan Male #521</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zebibron.png" WIDTH=80 border="0"><br/><B>Zebibron #522</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zeblitz.png" WIDTH=80 border="0"><br/><B>Zeblitz #523</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nodulithe.png" WIDTH=80 border="0"><br/><B>Nodulithe #524</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/geolithe.png" WIDTH=80 border="0"><br/><B>Geolithe #525</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gigalithe.png" WIDTH=80 border="0"><br/><B>Gigalithe #526</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chovsourir.png" WIDTH=80 border="0"><br/><B>Chovsourir #527</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rhinolove.png" WIDTH=80 border="0"><br/><B>Rinolove #528</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rototaupe.png" WIDTH=80 border="0"><br/><B>Rototaupe #529</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>acidity_kuno</td>
                    <td>acidity_kuno</td>
                    <td>Lilishi</td>
                    <td>Maxime</td>
                    <td>Yuki</td>
                    <td>CRZ</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=Minotaupe style="width:150px; height:100px;"><img src="Images/shiny/minotaupe.png" WIDTH=80 border="0"><br/><B>Minotaupe #530</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nanmeouie.png" WIDTH=80 border="0"><br/><B>Nanmeouie #531</B></a></th>
                    <th class=Charpenti style="width:150px; height:100px;"><img src="Images/shiny/charpenti.png" WIDTH=80 border="0"><br/><B>Charpenti #532</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ouvrifier.png" WIDTH=80 border="0"><br/><B>Ouvrifier #533</B></a></th>
                    <th class=Betochef style="width:150px; height:100px;"><img src="Images/shiny/betochef.png" WIDTH=80 border="0"><br/><B>Betochef #534</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tritonde.png" WIDTH=80 border="0"><br/><B>Tritonde #535</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/batracne.png" WIDTH=80 border="0"><br/><B>Batracne #536</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crapustule.png" WIDTH=80 border="0"><br/><B>Crapustule #537</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/judokrak.png" WIDTH=80 border="0"><br/><B>Judokrak #538</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Ewox_</td>
                    <td>Infinity_Light</td>
                    <td>acidity_kuno</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/karaclee.png" WIDTH=80 border="0"><br/><B>Karaclee #539</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/larveyette.png" WIDTH=80 border="0"><br/><B>Larveyette #540</B></a></th>
                    <th class=Couverdure style="width:150px; height:100px;"><img src="Images/shiny/couverdure.png" WIDTH=80 border="0"><br/><B>Couverdure #541</B></a></th>
                    <th class=Manternel style="width:150px; height:100px;"><img src="Images/shiny/manternel.png" WIDTH=80 border="0"><br/><B>Manternel #542</B></a></th>
                    <th class=Venipatte style="width:150px; height:100px;"><img src="Images/shiny/venipatte.png" WIDTH=80 border="0"><br/><B>Venipatte #543</B></a></th>
                    <th class=Scobolide style="width:150px; height:100px;"><img src="Images/shiny/scobolide.png" WIDTH=80 border="0"><br/><B>Scobolide #544</B></a></th>
                    <th class=Brutapode style="width:150px; height:100px;"><img src="Images/shiny/brutapode.png" WIDTH=80 border="0"><br/><B>Brutapode #545</B></a></th>
                    <th class=Doudouvet style="width:150px; height:100px;"><img src="Images/shiny/doudouvet.png" WIDTH=80 border="0"><br/><B>Doudouvet #546</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/farfaduvet.png" WIDTH=80 border="0"><br/><B>Farfaduvet #547</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>missmiki</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=Chlorobule style="width:150px; height:100px;"><img src="Images/shiny/chlorobule.png" WIDTH=80 border="0"><br/><B>Chlorobule #548</B></a></th>
                    <th class=Fragilady style="width:150px; height:100px;"><img src="Images/shiny/fragilady.png" WIDTH=80 border="0"><br/><B>Fragilady #549</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bargantua-b.png" WIDTH=80 border="0"><br/><B>Bargantua Bleu #550</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bargantua-r.png" WIDTH=80 border="0"><br/><B>Bargantua Rouge #550</B></a></th>
                    <th class=Mascaiman style="width:150px; height:100px;"><img src="Images/shiny/mascaiman.png" WIDTH=80 border="0"><br/><B>Mascaiman #551</B></a></th>
                    <th class=Escroco style="width:150px; height:100px;"><img src="Images/shiny/escroco.png" WIDTH=80 border="0"><br/><B>Escroco #552</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crocorible.png" WIDTH=80 border="0"><br/><B>Crocorible #553</B></a></th>
                    <th class=Darumarond style="width:150px; height:100px;"><img src="Images/shiny/darumarond.png" WIDTH=80 border="0"><br/><B>Darumarond #554</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/darumacho.png" WIDTH=80 border="0"><br/><B>Darumacho #555</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/maracachi.png" WIDTH=80 border="0"><br/><B>Maracachi #556</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crabicoque.png" WIDTH=80 border="0"><br/><B>Crabicoque #557</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crabaraque.png" WIDTH=80 border="0"><br/><B>Crabaraque #558</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/baggiguane.png" WIDTH=80 border="0"><br/><B>Baggiguane #559</B></a></th>
                    <th class=Baggaid style="width:150px; height:100px;"><img src="Images/shiny/baggaid.png" WIDTH=80 border="0"><br/><B>Baggaid #560</B></a></th>
                    <th class=Cryptero style="width:150px; height:100px;"><img src="Images/shiny/cryptero.png" WIDTH=80 border="0"><br/><B>Cryptero #561</B></a></th>
                    <th class=Tutafeh style="width:150px; height:100px;"><img src="Images/shiny/tutafeh.png" WIDTH=80 border="0"><br/><B>Tutafeh #562</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tutankafer.png" WIDTH=80 border="0"><br/><B>Tutankafer #563</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/carapagos.png" WIDTH=80 border="0"><br/><B>Carapagos #564</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>matheo</td>
                    <td>Nah.</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Infinity_light</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=Megapagos style="width:150px; height:100px;"><img src="Images/shiny/megapagos.png" WIDTH=80 border="0"><br/><B>Megapagos #565</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/arkeapti.png" WIDTH=80 border="0"><br/><B>Arkeapti #566</B></a></th>
                    <th class=Aeropteryx style="width:150px; height:100px;"><img src="Images/shiny/aeropteryx.png" WIDTH=80 border="0"><br/><B>Aeropteryx #567</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/miamiasme.png" WIDTH=80 border="0"><br/><B>Miasmiasme #568</B></a></th>
                    <th class=Miasmax style="width:150px; height:100px;"><img src="Images/shiny/miasmax.png" WIDTH=80 border="0"><br/><B>Miasmax #569</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zorua.png" WIDTH=80 border="0"><br/><B>Zorua #570</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zoroark.png" WIDTH=80 border="0"><br/><B>Zoroark #571</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chinchidou.png" WIDTH=80 border="0"><br/><B>Chinchidou #572</B></a></th>
                    <th class=Pashmilla style="width:150px; height:100px;"><img src="Images/shiny/pashmilla.png" WIDTH=80 border="0"><br/><B>Pashmilla #573</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>A le gameur</td>
                    <td>???</td>
                    <td>MiloJoker</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scrutella.png" WIDTH=80 border="0"><br/><B>Scrutella #574</B></a></th>
                    <th class=Mesmerella style="width:150px; height:100px;"><img src="Images/shiny/mesmerella.png" WIDTH=80 border="0"><br/><B>Mesmerella #575</B></a></th>
                    <th class=Siderella style="width:150px; height:100px;"><img src="Images/shiny/siderella.png" WIDTH=80 border="0"><br/><B>Siderella #576</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nucleos.png" WIDTH=80 border="0"><br/><B>Nucleos #577</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/meios.png" WIDTH=80 border="0"><br/><B>Meios #578</B></a></th>
                    <th class=Symbios style="width:150px; height:100px;"><img src="Images/shiny/symbios.png" WIDTH=80 border="0"><br/><B>Symbios #579</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/couaneton.png" WIDTH=80 border="0"><br/><B>Couaneton #580</B></a></th>
                    <th class=Lakmecygne style="width:150px; height:100px;"><img src="Images/shiny/lakmecygne.png" WIDTH=80 border="0"><br/><B>Lakmecygne #581</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sorbebe.png" WIDTH=80 border="0"><br/><B>Sorbebe #582</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>???</td>
                    <td>A le Gameur</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sorboul.png" WIDTH=80 border="0"><br/><B>Sorboule #583</B></a></th>
                    <th class=Sorbouboul style="width:150px; height:100px;"><img src="Images/shiny/sorbouboul.png" WIDTH=80 border="0"><br/><B>Sorbouboul #584</B></a></th>
                    <th class=Vivaldaim style="width:150px; height:100px;"><img src="Images/shiny/vivaldaim printemps.png" WIDTH=80 border="0"><br/><B>Vivaldaim #585</B></a></th>
                    <th class=Haydaim style="width:150px; height:100px;"><img src="Images/shiny/haydaim printemps.png" WIDTH=80 border="0"><br/><B>Haydaim #586</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/emolga.png" WIDTH=80 border="0"><br/><B>Emolga #587</B></a></th>
                    <th class=Carabing style="width:150px; height:100px;"><img src="Images/shiny/carabing.png" WIDTH=80 border="0"><br/><B>Carabing #588</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lancargot.png" WIDTH=80 border="0"><br/><B>Lancargot #589</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/trompignon.png" WIDTH=80 border="0"><br/><B>Trompignon #590</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gaulet.png" WIDTH=80 border="0"><br/><B>Gaulet #591</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Lyut</td>
                    <td>maxime</td>
                </tr>
                <tr>
                    <th class=Viskuse-m style="width:150px; height:100px;"><img src="Images/shiny/viskuse-m.png" WIDTH=80 border="0"><br/><B>Viskuse Male #592</B></a></th>
                    <th class=Viskuse-f style="width:150px; height:100px;"><img src="Images/shiny/viskuse-f.png" WIDTH=80 border="0"><br/><B>Viskuse Femelle #592</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moyade-m.png" WIDTH=80 border="0"><br/><B>Moyade Male #593</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moyade-f.png" WIDTH=80 border="0"><br/><B>Moyade Femelle #593</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mamanbo.png" WIDTH=80 border="0"><br/><B>Mamanbo #594</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/statitik.png" WIDTH=80 border="0"><br/><B>Statitik #595</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mygavolt.png" WIDTH=80 border="0"><br/><B>Mygavolt #596</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grindur.png" WIDTH=80 border="0"><br/><B>Grindur #597</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/noacier.png" WIDTH=80 border="0"><br/><B>Noacier #598</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>Infinity_Light</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=Tic style="width:150px; height:100px;"><img src="Images/shiny/tic.png" WIDTH=80 border="0"><br/><B>Tic #599</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/clic.png" WIDTH=80 border="0"><br/><B>Clic #600</B></a></th>
                    <th class=Cliticlic style="width:150px; height:100px;"><img src="Images/shiny/cliticlic.png" WIDTH=80 border="0"><br/><B>Cliticlic #601</B></a></th>
                    <th class=Anchwatt style="width:150px; height:100px;"><img src="Images/shiny/anchwatt.png" WIDTH=80 border="0"><br/><B>Anchwatt #602</B></a></th>
                    <th class=Lamperoie style="width:150px; height:100px;"><img src="Images/shiny/lamperoie.png" WIDTH=80 border="0"><br/><B>Lamperoie #603</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ohmassacre.png" WIDTH=80 border="0"><br/><B>Ohmassacre #604</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lewsor.png" WIDTH=80 border="0"><br/><B>Lewsor #605</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/neitram.png" WIDTH=80 border="0"><br/><B>Neitram #606</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/funecire.png" WIDTH=80 border="0"><br/><B>Funecire #607</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Infinity_light</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Satoshi</td>
                    <td>CornetBoy</td>
                    <td>Spectra</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/melancolux.png" WIDTH=80 border="0"><br/><B>Melancolux #608</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lugulabre.png" WIDTH=80 border="0"><br/><B>Lugulabre #609</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/coupenotte.png" WIDTH=80 border="0"><br/><B>Coupenotte #610</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/incisache.png" WIDTH=80 border="0"><br/><B>Incisache #611</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tranchodon.png" WIDTH=80 border="0"><br/><B>Tranchodon #612</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/polarhume.png" WIDTH=80 border="0"><br/><B>Polarhume #613</B></a></th>
                    <th class=Polagriffe style="width:150px; height:100px;"><img src="Images/shiny/polagriffe.png" WIDTH=80 border="0"><br/><B>Polagriffe #614</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hexagel.png" WIDTH=80 border="0"><br/><B>Hexagel #615</B></a></th>
                    <th class=Escargaume style="width:150px; height:100px;"><img src="Images/shiny/escargaume.png" WIDTH=80 border="0"><br/><B>Escargaume #616</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                    <td>Infinity_light</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/limaspeed.png" WIDTH=80 border="0"><br/><B>Limaspeed #617</B></a></th>
                    <th class=Limonde style="width:150px; height:100px;"><img src="Images/shiny/limonde.png" WIDTH=80 border="0"><br/><B>Limonde #618</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kungfouine.png" WIDTH=80 border="0"><br/><B>Kungfouine #619</B></a></th>
                    <th class=Shaofouine style="width:150px; height:100px;"><img src="Images/shiny/shaofouine.png" WIDTH=80 border="0"><br/><B>Shaofouine #620</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/drakkarmin.png" WIDTH=80 border="0"><br/><B>Drakkarmin #621</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gringolem.png" WIDTH=80 border="0"><br/><B>Gringolem #622</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/golemastoc.png" WIDTH=80 border="0"><br/><B>Golemastoc #623</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scalpion.png" WIDTH=80 border="0"><br/><B>Scalpion #624</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scalproie.png" WIDTH=80 border="0"><br/><B>Scalproie #625</B></a></th>
                </tr>
                <tr>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>Maxime</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                    <td>Kenzo</td>
                    <td>Infinity_light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/frison.png" WIDTH=80 border="0"><br/><B>Frison #626</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/furaiglon.png" WIDTH=80 border="0"><br/><B>Furaiglon #627</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gueriaigle.png" WIDTH=80 border="0"><br/><B>Gueriaigle #628</B></a></th>
                    <th class=Vostourno style="width:150px; height:100px;"><img src="Images/shiny/vostourno.png" WIDTH=80 border="0"><br/><B>Vostourno #629</B></a></th>
                    <th class=Vaututrice style="width:150px; height:100px;"><img src="Images/shiny/vaututrice.png" WIDTH=80 border="0"><br/><B>Vaututrice #630</B></a></th>
                    <th class=Aflamanoir style="width:150px; height:100px;"><img src="Images/shiny/aflamanoir.png" WIDTH=80 border="0"><br/><B>Aflamanoir #631</B></a></th>
                    <th class=Fermite style="width:150px; height:100px;"><img src="Images/shiny/fermite.png" WIDTH=80 border="0"><br/><B>Fermite #632</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/solochi.png" WIDTH=80 border="0"><br/><B>Solochi #633</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/diamat.png" WIDTH=80 border="0"><br/><B>Diamat #634</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Infinity_Light</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Gaven</td>
                    <td>Gaven</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=Trioxhydre style="width:150px; height:100px;"><img src="Images/shiny/trioxhydre.png" WIDTH=80 border="0"><br/><B>Trioxhydre #635</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pyronille.png" WIDTH=80 border="0"><br/><B>Pyronille #636</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pyrax.png" WIDTH=80 border="0"><br/><B>Pyrax #637</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cobaltium.png" WIDTH=80 border="0"><br/><B>Cobaltium #638</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/terrakium.png" WIDTH=80 border="0"><br/><B>Terrakium #639</B></a></th> 
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/viridium.png" WIDTH=80 border="0"><br/><B>Viridium #640</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/boreas.png" WIDTH=80 border="0"><br/><B>Boreas #641</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Infinity_Light</td>
                    <td>Lilishi</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fulguris.png" WIDTH=80 border="0"><br/><B>Fulguris #642</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/reshiram.png" WIDTH=80 border="0"><br/><B>Reshiram #643</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zekrom.png" WIDTH=80 border="0"><br/><B>Zekrom #644</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/demeteros.png" WIDTH=80 border="0"><br/><B>Demeteros #645</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kyurem.png" WIDTH=80 border="0"><br/><B>Kyurem #646</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>TheGolden</td>
                    <td>Spectra</td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                </tr>
        </center></table><br/><br/><br/>
                                <h3>Living Dex 6g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=Marisson style="width:150px; height:100px;"><img src="Images/shiny/marisson.png" WIDTH=80 border="0"><br/><B>Marisson #650</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/boguerisse.png" WIDTH=80 border="0"><br/><B>Boguérisse #651</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/blindepique.png" WIDTH=80 border="0"><br/><B>Blindépique #652</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/feunnec.png" WIDTH=80 border="0"><br/><B>Feunnec #653</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roussil.png" WIDTH=80 border="0"><br/><B>Roussil #654</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goupelin.png" WIDTH=80 border="0"><br/><B>Goupelin #655</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grenousse.png" WIDTH=80 border="0"><br/><B>Grenousse #656</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/croaporal.png" WIDTH=80 border="0"><br/><B>Croâporal #657</B></a></th>
                    <th class=Amphinobi style="width:150px; height:100px;"><img src="Images/shiny/amphinobi.png" WIDTH=80 border="0"><br/><B>Amphinobi #658</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>Pokemaz</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Spectra</td>
                    <td>matheo</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sapereau.png" WIDTH=80 border="0"><br/><B>Sapereau #659</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/excavarenne.png" WIDTH=80 border="0"><br/><B>Excavarenne #660</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/passerouge.png" WIDTH=80 border="0"><br/><B>Passerouge #661</B></a></th>
                    <th class=Braisillon style="width:150px; height:100px;"><img src="Images/shiny/braisillon.png" WIDTH=80 border="0"><br/><B>Braisillon #662</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flambusard.png" WIDTH=80 border="0"><br/><B>Flambusard #663</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lepidonille.png" WIDTH=80 border="0"><br/><B>Lépidonille #664</B></a></th>
                    <th class=Pérégrain style="width:150px; height:100px;"><img src="Images/shiny/peregrain.png" WIDTH=80 border="0"><br/><B>Pérégrain #665</B></a></th>
                    <th class=Prismillon style="width:150px; height:100px;"><img src="Images/shiny/prismillon.png" WIDTH=80 border="0"><br/><B>Prismillon #666</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/helionceau.png" WIDTH=80 border="0"><br/><B>Hélionceau #667</B></a></th>
                </tr>
                <tr>
                    <td>Spectra</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>VaaTaX</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nemelios.png" WIDTH=80 border="0"><br/><B>Némélios #668</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flabebe.png" WIDTH=80 border="0"><br/><B>Flabébé #669</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/floette.png" WIDTH=80 border="0"><br/><B>Floette #670</B></a></th>
                    <th class=Florges style="width:150px; height:100px;"><img src="Images/shiny/florges.png" WIDTH=80 border="0"><br/><B>Florges #671</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cabriolaine.png" WIDTH=80 border="0"><br/><B>Cabriolaine #672</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chevroum.png" WIDTH=80 border="0"><br/><B>Chevroum #673</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pandespiegle.png" WIDTH=80 border="0"><br/><B>Pandespiègle #674</B></a></th>
                    <th class=Pandarbare style="width:150px; height:100px;"><img src="Images/shiny/pandarbare.png" WIDTH=80 border="0"><br/><B>Pandarbare #675</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/couafarel.png" WIDTH=80 border="0"><br/><B>Couafarel #676</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Platinium Foxier</td>
                    <td>Ewox_</td>
                    <td>matheo</td>
                    <td>???</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/psystigri.png" WIDTH=80 border="0"><br/><B>Psystigri #677</B></a></th>
                    <th class=Mistigrix-m style="width:150px; height:100px;"><img src="Images/shiny/mistigrix-m.png" WIDTH=80 border="0"><br/><B>Mistigrix Male #678</B></a></th>
                    <th class=Mistigrix-f style="width:150px; height:100px;"><img src="Images/shiny/mistigrix-f.png" WIDTH=80 border="0"><br/><B>Mistigrix Femelle #678</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/monorpale.png" WIDTH=80 border="0"><br/><B>Monorpale #679</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dimocles.png" WIDTH=80 border="0"><br/><B>Dimoclès #680</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/exagide.png" WIDTH=80 border="0"><br/><B>Exagide #681</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fluvetin.png" WIDTH=80 border="0"><br/><B>Fluvetin #682</B></a></th>
                    <th class=Cocotine style="width:150px; height:100px;"><img src="Images/shiny/cocotine.png" WIDTH=80 border="0"><br/><B>Cocotine #683</B></a></th>
                    <th class=Sucroquin style="width:150px; height:100px;"><img src="Images/shiny/sucroquin.png" WIDTH=80 border="0"><br/><B>Sucroquin #684</B></a></th>
                </tr>
                <tr>
                    <td>kenzo</td>
                    <td>???</td>
                    <td>???</td>
                    <td>FT_NoNo</td>
                    <td>Infinity_Light</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cupcanaille.png" WIDTH=80 border="0"><br/><B>Cupcanaille #685</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sepiatop.png" WIDTH=80 border="0"><br/><B>Sepiatop #686</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sepiatroce.png" WIDTH=80 border="0"><br/><B>Sepiatroce #687</B></a></th>
                    <th class=Opermine style="width:150px; height:100px;"><img src="Images/shiny/opermine.png" WIDTH=80 border="0"><br/><B>Opermine #688</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/golgopathe.png" WIDTH=80 border="0"><br/><B>Golgopathe #689</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/venalgue.png" WIDTH=80 border="0"><br/><B>Venalgue #690</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/kravarech.png" WIDTH=80 border="0"><br/><B>Kravarech #691</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flingouste.png" WIDTH=80 border="0"><br/><B>Flingouste #692</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gamblast.png" WIDTH=80 border="0"><br/><B>Gamblast #693</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Mateo</td>
                    <td>Mateo</td>
                    <td>50 Rupees</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galvaran.png" WIDTH=80 border="0"><br/><B>Galvaran #694</B></a></th>
                    <th class=Iguolta style="width:150px; height:100px;"><img src="Images/shiny/iguolta.png" WIDTH=80 border="0"><br/><B>Iguolta #695</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ptyranidur.png" WIDTH=80 border="0"><br/><B>Ptyranidur #696</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rexillius.png" WIDTH=80 border="0"><br/><B>Rexillius #697</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/amagara.png" WIDTH=80 border="0"><br/><B>Amagara #698</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dragmara.png" WIDTH=80 border="0"><br/><B>Dragmara #699</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nymphali.png" WIDTH=80 border="0"><br/><B>Nymphali #700</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/brutalibre.png" WIDTH=80 border="0"><br/><B>Brutalibré #701</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dedenne.png" WIDTH=80 border="0"><br/><B>Dedenne #702</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Max</td>
                    <td>Infinity_light</td>
                    <td>Lilishi</td>
                    <td>Infinity_light</td>
                    <td>Yuki</td>
                    <td>Platinium Foxier</td>
                    <td>Maxime</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/strassie.png" WIDTH=80 border="0"><br/><B>Strassie #703</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mucuscule.png" WIDTH=80 border="0"><br/><B>Mucuscule #704</B></a></th>
                    <th class=Colimucus style="width:150px; height:100px;"><img src="Images/shiny/colimucus.png" WIDTH=80 border="0"><br/><B>Colimucus #705</B></a></th>
                    <th class=Muplodocus style="width:150px; height:100px;"><img src="Images/shiny/muplodocus.png" WIDTH=80 border="0"><br/><B>Muplodocus #706</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/trousselin.png" WIDTH=80 border="0"><br/><B>Trousselin #707</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/brocelome.png" WIDTH=80 border="0"><br/><B>Brocélôme #708</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/desseliande.png" WIDTH=80 border="0"><br/><B>Desséliande #709</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pitrouille.png" WIDTH=80 border="0"><br/><B>Pitrouille #710</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/banshitrouye.png" WIDTH=80 border="0"><br/><B>Banshitrouye #711</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>CRZ</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grelacon.png" WIDTH=80 border="0"><br/><B>Grelaçon #712</B></a></th>
                    <th class=Séracrawl style="width:150px; height:100px;"><img src="Images/shiny/seracrawl.png" WIDTH=80 border="0"><br/><B>Séracrawl #713</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sonistrelle.png" WIDTH=80 border="0"><br/><B>Sonistrelle #714</B></a></th>
                    <th class=Bruyverne style="width:150px; height:100px;"><img src="Images/shiny/bruyverne.png" WIDTH=80 border="0"><br/><B>Bruyverne #715</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/xerneas.png" WIDTH=80 border="0"><br/><B>Xerneas #716</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/yveltal.png" WIDTH=80 border="0"><br/><B>Yveltal #717</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zygarde.png" WIDTH=80 border="0"><br/><B>Zygarde #718</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>Sach</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Fayoum 2.0</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                </tr>
        </center></table><br/><br/><br/>
                  <h3>Living Dex 7g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/brindibou.png" WIDTH=80 border="0"><br/><B>Brindibou #722</B></a></th>
                    <th class=Efflèche style="width:150px; height:100px;"><img src="Images/shiny/effleche.png" WIDTH=80 border="0"><br/><B>Efflèche #723</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/archeduc.png" WIDTH=80 border="0"><br/><B>Archéduc #724</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flamiaou.png" WIDTH=80 border="0"><br/><B>Flamiaou #725</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/matoufeu.png" WIDTH=80 border="0"><br/><B>Matoufeu #726</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/felinferno.png" WIDTH=80 border="0"><br/><B>Félinferno #727</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/otaquin.png" WIDTH=80 border="0"><br/><B>Otaquin #727</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/otarlette.png" WIDTH=80 border="0"><br/><B>Otarlette #728</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/oratoria.png" WIDTH=80 border="0"><br/><B>Oratoria #729</B></a></th>
                </tr>
                <tr>
                    <td>Max</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>CornetBoy</td>
                    <td>Benra_</td>
                    <td>Ewox_</td>
                    <td>Spectra</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/picassaut.png" WIDTH=80 border="0"><br/><B>Picassaut #731</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/piclairon.png" WIDTH=80 border="0"><br/><B>Piclairon #732</B></a></th>
                    <th class=Bazoucan style="width:150px; height:100px;"><img src="Images/shiny/bazoucan.png" WIDTH=80 border="0"><br/><B>Bazoucan #733</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/manglouton.png" WIDTH=80 border="0"><br/><B>Manglouton #734</B></a></th>
                    <th class=Argouste style="width:150px; height:100px;"><img src="Images/shiny/argouste.png" WIDTH=80 border="0"><br/><B>Argouste #735</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/larvibule.png" WIDTH=80 border="0"><br/><B>Larvibule #736</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chrysapile.png" WIDTH=80 border="0"><br/><B>Chrysapile #737</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lucanon.png" WIDTH=80 border="0"><br/><B>Lucanon #738</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crabagarre.png" WIDTH=80 border="0"><br/><B>Crabagarre #739</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Kenzo</td>
                    <td>Spectra</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/crabominable.png" WIDTH=80 border="0"><br/><B>Crabominable #740</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/plumeline.png" WIDTH=80 border="0"><br/><B>Plumeline Flamenco #741</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/plumeline-buyo.png" WIDTH=80 border="0"><br/><B>Plumeline Buyo #741</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/plumeline-hula.png" WIDTH=80 border="0"><br/><B>Plumeline Hula #741</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/plumeline-pompom.png" WIDTH=80 border="0"><br/><B>Plumeline Pompom #741</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bombydou.png" WIDTH=80 border="0"><br/><B>Bombydou #742</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rubombelle.png" WIDTH=80 border="0"><br/><B>Rubombelle #743</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rocabot.png" WIDTH=80 border="0"><br/><B>Rocabot #744</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lougaroc.png" WIDTH=80 border="0"><br/><B>Lougaroc Diurne #745</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Spectra</td>
                    <td>Spectra</td>
                    <td>Spectra</td>
                    <td>A le gameur</td>
                    <td>Infinity_light</td>
                    <td>Yuki</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=Lougaroc-nocturne style="width:150px; height:100px;"><img src="Images/shiny/lougaroc-nocturne.png" WIDTH=80 border="0"><br/><B>Lougaroc Nocturne #745</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lougaroc-crepusculaire.png" WIDTH=90 border="0"><br/><B>Lougaroc Crepusculaire #745</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/froussardine.png" WIDTH=80 border="0"><br/><B>Froussardine #746</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/vorasterie.png" WIDTH=80 border="0"><br/><B>Vorastérie #747</B></a></th>
                    <th class=Prédastérie style="width:150px; height:100px;"><img src="Images/shiny/predasterie.png" WIDTH=80 border="0"><br/><B>Prédastérie #748</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tiboudet.png" WIDTH=80 border="0"><br/><B>Tiboudet #749</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bourrinos.png" WIDTH=80 border="0"><br/><B>Bourrinos #750</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/araqua.png" WIDTH=80 border="0"><br/><B>Araqua #751</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tarenbulle.png" WIDTH=80 border="0"><br/><B>Tarenbulle #752</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Ewox_</td>
                    <td>The_shinobi70</td>
                    <td>???</td>
                    <td>Maxime</td>
                    <td>Ewox_</td>
                    <td>Devils</td>
                    <td>Max</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mimantis.png" WIDTH=80 border="0"><br/><B>Mimantis #753</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/floramantis.png" WIDTH=80 border="0"><br/><B>Floramantis #754</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/spododo.png" WIDTH=80 border="0"><br/><B>Spododo #755</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lampignon.png" WIDTH=80 border="0"><br/><B>Lampignon #756</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tritox.png" WIDTH=80 border="0"><br/><B>Tritox #757</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/malamandre.png" WIDTH=80 border="0"><br/><B>Malamandre #758</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nounourson.png" WIDTH=80 border="0"><br/><B>Nounourson #759</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/chelours.png" WIDTH=80 border="0"><br/><B>Chelours #760</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/croquine.png" WIDTH=80 border="0"><br/><B>Croquine #761</B></a></th>
                </tr>
                <tr>
                    <td>Lilishi</td>
                    <td>Infinity_Light</td>
                    <td>Satoshi</td>
                    <td>CRZ</td>
                    <td>Lilishi</td>
                    <td>Infinity_Light</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/candine.png" WIDTH=80 border="0"><br/><B>Candine #762</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sucreine.png" WIDTH=80 border="0"><br/><B>Sucreine #763</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/guerilande.png" WIDTH=80 border="0"><br/><B>Guérilande #764</B></a></th>
                    <th class=Gouroutan style="width:150px; height:100px;"><img src="Images/shiny/gouroutan.png" WIDTH=80 border="0"><br/><B>Gouroutan #765</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/quartermac.png" WIDTH=80 border="0"><br/><B>Quartermac #766</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sovkipou.png" WIDTH=80 border="0"><br/><B>Sovkipou #767</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sarmurai.png" WIDTH=80 border="0"><br/><B>Sarmuraï #768</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bacabouh.png" WIDTH=80 border="0"><br/><B>Bacabouh #769</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/trepassable.png" WIDTH=80 border="0"><br/><B>Trépassable #770</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>MiloJoker</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>Yuki</td>
                    <td>Kenzo</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/concombaffe.png" WIDTH=80 border="0"><br/><B>Concombaffe #771</B></a></th>
                    <th class=Type:0 style="width:150px; height:100px;"><img src="Images/shiny/type0.png" WIDTH=80 border="0"><br/><B>Type:0 #772</B></a></th>
                    <th class=Silvallié style="width:150px; height:100px;"><img src="Images/shiny/silvallie.png" WIDTH=80 border="0"><br/><B>Silvallié #773</B></a></th>
                    <th class=Météno style="width:150px; height:100px;"><img src="Images/shiny/meteno.png" WIDTH=80 border="0"><br/><B>Météno #774</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dodoala.png" WIDTH=80 border="0"><br/><B>Dodoala #775</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/boumata.png" WIDTH=80 border="0"><br/><B>Boumata #776</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/togedemaru.png" WIDTH=80 border="0"><br/><B>Togedemaru #777</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mimiqui.png" WIDTH=80 border="0"><br/><B>Mimiqui #778</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/denticrisse.png" WIDTH=80 border="0"><br/><B>Denticrisse #779</B></a></th>
                </tr>
                <tr>
                    <td>Kenzo</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                    <td>Satoshi</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/draieul.png" WIDTH=80 border="0"><br/><B>Draïeul #780</B></a></th>
                    <th class=Sinistrail style="width:150px; height:100px;"><img src="Images/shiny/sinistrail.png" WIDTH=80 border="0"><br/><B>Sinistrail #781</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bebecaille.png" WIDTH=80 border="0"><br/><B>Bébécaille #782</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ecaid.png" WIDTH=80 border="0"><br/><B>Ecaïd #783</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ekaiser.png" WIDTH=80 border="0"><br/><B>Ékaïser #784</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tokorico.png" WIDTH=80 border="0"><br/><B>Tokorico #785</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tokopiyon.png" WIDTH=80 border="0"><br/><B>Tokopiyon #786</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tokotoro.png" WIDTH=80 border="0"><br/><B>Tokotoro #787</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tokopisco.png" WIDTH=80 border="0"><br/><B>Tokopisco #788</B></a></th>
                </tr>
                <tr>
                    <td>Satoshi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                    <td>Infinity_Light</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/solgaleo.png" WIDTH=80 border="0"><br/><B>Solgaleo #791</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lunala.png" WIDTH=80 border="0"><br/><B>Lunala #792</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zeroid.png" WIDTH=80 border="0"><br/><B>Zéroïd #793</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mouscoto.png" WIDTH=80 border="0"><br/><B>Mouscoto #794</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cancrelove.png" WIDTH=80 border="0"><br/><B>Cancrelove #795</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cablifere.png" WIDTH=80 border="0"><br/><B>Câblifère #796</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bamboiselle.png" WIDTH=80 border="0"><br/><B>Bamboiselle #797</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/katagami.png" WIDTH=80 border="0"><br/><B>Katagami #798</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/engloutyran.png" WIDTH=80 border="0"><br/><B>Engloutyran #799</B></a></th>
                </tr>
                <tr>
                    <td>Max</td>
                    <td>CornetBoy</td>
                    <td>Spectra</td>
                    <td>Platinium Foxier</td>
                    <td>Maxime</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Yuki</td>
                    <td>CornetBoy</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/necrozma.png" WIDTH=80 border="0"><br/><B>Necrozma #800</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/vemini.png" WIDTH=80 border="0"><br/><B>Vémini #803</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mandrillon.png" WIDTH=80 border="0"><br/><B>Mandrillon #804</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ama-ama.png" WIDTH=80 border="0"><br/><B>Ama-Ama #805</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pierroteknik.png" WIDTH=80 border="0"><br/><B>Pierroteknik #806</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>CornetBoy</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Platinium Foxier</td>
                </tr>
        </center></table><br/><br/><br/>
                              <h3>Living Dex 8g :</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ouistempo.png" WIDTH=80 border="0"><br/><B>Ouistempo #810</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/badabouin.png" WIDTH=80 border="0"><br/><B>Badabouin #811</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/gorythmic.png" WIDTH=80 border="0"><br/><B>Gorythmic #812</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/flambino.png" WIDTH=80 border="0"><br/><B>Flambino #813</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lapyro.png" WIDTH=80 border="0"><br/><B>Lapyro #814</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pyrobut.png" WIDTH=80 border="0"><br/><B>Pyrobut #815</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/larmeleon.png" WIDTH=80 border="0"><br/><B>Larméléon #816</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/arrozard.png" WIDTH=80 border="0"><br/><B>Arrozard #817</B></a></th>
                    <th class=Lézargus style="width:150px; height:100px;"><img src="Images/shiny/lezargus.png" WIDTH=80 border="0"><br/><B>Lézargus #818</B></a></th>
                </tr>
                <tr>
                    <td>CornetBoy</td>
                    <td>CornetbBoy</td>
                    <td>CornetBoy</td>
                    <td>Platinium Foxier</td>
                    <td>La mort 2.0</td>
                    <td>MiloJoker</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rongourmand.png" WIDTH=80 border="0"><br/><B>Rongourmand #819</B></a></th>
                    <th class=Rongrigou style="width:150px; height:100px;"><img src="Images/shiny/rongrigou.png" WIDTH=80 border="0"><br/><B>Rongrigou #820</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/minisange.png" WIDTH=80 border="0"><br/><B>Minisange #821</B></a></th>
                    <th class=Bleuseille style="width:150px; height:100px;"><img src="Images/shiny/bleuseille.png" WIDTH=80 border="0"><br/><B>Bleuseille #822</B></a></th>
                    <th class=Corvaillus style="width:150px; height:100px;"><img src="Images/shiny/corvaillus.png" WIDTH=80 border="0"><br/><B>Corvaillus #823</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/larvadar.png" WIDTH=80 border="0"><br/><B>Larvadar #824</B></a></th>
                    <th class=Coléodôme style="width:150px; height:100px;"><img src="Images/shiny/coleodome.png" WIDTH=80 border="0"><br/><B>Coléodôme #825</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/astronelle.png" WIDTH=80 border="0"><br/><B>Astronelle #826</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goupilou.png" WIDTH=80 border="0"><br/><B>Goupilou #827</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Lyut</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Ewox_</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/roublenard.png" WIDTH=80 border="0"><br/><B>Roublenard #828</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tournicoton.png" WIDTH=80 border="0"><br/><B>Tournicoton #829</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/blancoton.png" WIDTH=80 border="0"><br/><B>Blancoton #830</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moumouton.png" WIDTH=80 border="0"><br/><B>Moumouton #831</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/moumouflon.png" WIDTH=80 border="0"><br/><B>Moumouflon #832</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/khelocrok.png" WIDTH=80 border="0"><br/><B>Khélocrok #833</B></a></th>
                    <th class=Torgamord style="width:150px; height:100px;"><img src="Images/shiny/torgamord.png" WIDTH=80 border="0"><br/><B>Torgamord #834</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/voltoutou.png" WIDTH=80 border="0"><br/><B>Voltoutou #835</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fulgudog.png" WIDTH=80 border="0"><br/><B>Fulgudog #836</B></a></th>
                </tr>
                <tr>
                    <td>Kenzo</td>
                    <td>Guillaume | Wecast</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>CornetBoy</td>
                    <td>Platinium Foxier</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/charbi.png" WIDTH=80 border="0"><br/><B>Charbi #837</B></a></th>
                    <th class=Wagomine style="width:150px; height:100px;"><img src="Images/shiny/wagomine.png" WIDTH=80 border="0"><br/><B>Wagomine #838</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/monthracite.png" WIDTH=80 border="0"><br/><B>Monthracite #839</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/verpom.png" WIDTH=80 border="0"><br/><B>Verpom #840</B></a></th>
                    <th class=Pomdrapi style="width:150px; height:100px;"><img src="Images/shiny/pomdrapi.png" WIDTH=80 border="0"><br/><B>Pomdrapi #841</B></a></th>
                    <th class=Dratatin style="width:150px; height:100px;"><img src="Images/shiny/dratatin.png" WIDTH=80 border="0"><br/><B>Dratatin #842</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dunaja.png" WIDTH=80 border="0"><br/><B>Dunaja #843</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dunaconda.png" WIDTH=80 border="0"><br/><B>Dunaconda #844</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/nigosier.png" WIDTH=80 border="0"><br/><B>Nigosier #845</B></a></th>
                </tr>
                <tr>
                    <td>Kenzo</td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>Infinity_light</td>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>Maxime</td>
                    <td>maxime</td>
                </tr>
                <tr>
                    <th class=Embrochet style="width:150px; height:100px;"><img src="Images/shiny/embrochet.png" WIDTH=80 border="0"><br/><B>Embrochet #846</B></a></th>
                    <th class=Hastacuda style="width:150px; height:100px;"><img src="Images/shiny/hastacuda.png" WIDTH=80 border="0"><br/><B>Hastacuda #847</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/toxizap.png" WIDTH=80 border="0"><br/><B>Toxizap #848</B></a></th>
                    <th class=Salarsen-aigue style="width:150px; height:100px;"><img src="Images/shiny/salarsen.png" WIDTH=80 border="0"><br/><B>Salarsen Aigüe #849</B></a></th>
                    <th class=Salarsen-grave style="width:150px; height:100px;"><img src="Images/shiny/salarsen-grave.png" WIDTH=80 border="0"><br/><B>Salarsen Grave #849</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grillepattes.png" WIDTH=80 border="0"><br/><B>Grillepattes #850</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/scolocendre.png" WIDTH=80 border="0"><br/><B>Scolocendre #851</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/poulpaf.png" WIDTH=80 border="0"><br/><B>Poulpaf #852</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/krakos.png" WIDTH=80 border="0"><br/><B>Krakos #853</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Kenzo</td>
                    <td>Lilishi</td>
                    <td>Nah.</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/theffroi.png" WIDTH=80 border="0"><br/><B>Théffroi #854</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/polthegeist.png" WIDTH=80 border="0"><br/><B>Polthégeist #855</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bibichut.png" WIDTH=80 border="0"><br/><B>Bibichut #856</B></a></th>
                    <th class=Chapotus style="width:150px; height:100px;"><img src="Images/shiny/chapotus.png" WIDTH=80 border="0"><br/><B>Chapotus #857</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sorcilence.png" WIDTH=80 border="0"><br/><B>Sorcilence #858</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grimalin.png" WIDTH=80 border="0"><br/><B>Grimalin #859</B></a></th>
                    <th class=Fourbelin style="width:150px; height:100px;"><img src="Images/shiny/fourbelin.png" WIDTH=80 border="0"><br/><B>Fourbelin #860</B></a></th>
                    <th class=Angoliath style="width:150px; height:100px;"><img src="Images/shiny/angoliath.png" WIDTH=80 border="0"><br/><B>Angoliath #861</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ixon.png" WIDTH=80 border="0"><br/><B>Ixon #862</B></a></th>
                </tr>
                <tr>
                    <td>Satoshi</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Lilishi</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/berserkatt.png" WIDTH=80 border="0"><br/><B>Berserkatt #863</B></a></th>
                    <th class=Corayôme style="width:150px; height:100px;"><img src="Images/shiny/corayome.png" WIDTH=80 border="0"><br/><B>Corayôme #864</B></a></th>
                    <th class=Palarticho style="width:150px; height:100px;"><img src="Images/shiny/palarticho.png" WIDTH=80 border="0"><br/><B>Palarticho #865</B></a></th>
                    <th class=M.Glaquette style="width:150px; height:100px;"><img src="Images/shiny/m-glaquette.png" WIDTH=80 border="0"><br/><B>M.Glaquette #866</B></a></th>
                    <th class=Tutétékri style="width:150px; height:100px;"><img src="Images/shiny/tutetekri.png" WIDTH=80 border="0"><br/><B>Tutétékri #867</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/cremy.png" WIDTH=80 border="0"><br/><B>Crèmy #868</B></a></th>
                    <th class=Charmilly style="width:150px; height:100px;"><img src="Images/shiny/charmilly.png" WIDTH=80 border="0"><br/><B>Charmilly #869</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/hexadron.png" WIDTH=80 border="0"><br/><B>Hexadron #870</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/wattapik.png" WIDTH=80 border="0"><br/><B>Wattapik #871</B></a></th>
                </tr>
                <tr>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>???</td>
                    <td>CornetBoy</td>
                    <td>MiloJoker</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/frissonille.png" WIDTH=80 border="0"><br/><B>Frissonille #872</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/beldeneige.png" WIDTH=80 border="0"><br/><B>Beldeneige #873</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dolman.png" WIDTH=80 border="0"><br/><B>Dolman #874</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/bekaglacon.png" WIDTH=80 border="0"><br/><B>Bekaglaçon #875</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/wimessir.png" WIDTH=80 border="0"><br/><B>Wimessir Male #876</B></a></th>
                    <th class=Wimessir style="width:150px; height:100px;"><img src="Images/shiny/wimessir-f.png" WIDTH=80 border="0"><br/><B>Wimessir Femelle #876</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/morpeko.png" WIDTH=80 border="0"><br/><B>Morpeko #877</B></a></th>
                    <th class=Charibari style="width:150px; height:100px;"><img src="Images/shiny/charibari.png" WIDTH=80 border="0"><br/><B>Charibari #878</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/pachyradjah.png" WIDTH=80 border="0"><br/><B>Pachyradjah #879</B></a></th>
                </tr>
                <tr>
                    <td>Platinium Foxier</td>
                    <td>Kenzo</td>
                    <td>PokeStorm</td>
                    <td>MiloJoker</td>
                    <td>Satoshi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=Galvagon style="width:150px; height:100px;"><img src="Images/shiny/galvagon.png" WIDTH=80 border="0"><br/><B>Galvagon #880</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galvagla.png" WIDTH=80 border="0"><br/><B>Galvagla #881</B></a></th>
                    <th class=Hydragon style="width:150px; height:100px;"><img src="Images/shiny/hydragon.png" WIDTH=80 border="0"><br/><B>Hydragon #882</B></a></th>
                    <th class=Hydragla style="width:150px; height:100px;"><img src="Images/shiny/hydragla.png" WIDTH=80 border="0"><br/><B>Hydragla #883</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/duralugon.png" WIDTH=80 border="0"><br/><B>Duralugon #884</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/fantyrm.png" WIDTH=80 border="0"><br/><B>Fantyrm #885</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/dispareptil.png" WIDTH=80 border="0"><br/><B>Dispareptil #886</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>???</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>MiloJoker</td>
                    <td>Infinity_Light</td>
                </tr>
                <tr>
                  <th class=invisible></th>
                  <th class=invisible></th>
                  <th class=invisible></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lanssorien.png" WIDTH=80 border="0"><br/><B>Lanssorien #887</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/regieleki.png" WIDTH=80 border="0"><br/><B>Regieleki #894</B></a></th>
                  <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/regidrago.png" WIDTH=80 border="0"><br/><B>Regidrago #895</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>Yuki</td>
                    <td>SylvAronn</td>
                    <td>Lilishi</td>
                </tr>
        </center></table><br/><br/><br/>
                   <h3>Living Dex des formes:</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/rattata-a.png" WIDTH=80 border="0"><br/><B>Rattata.A #019</B></a></th>
                    <th class=RattatacA style="width:150px; height:100px;"><img src="Images/shiny/rattatac-a.png" WIDTH=80 border="0"><br/><B>Rattatac.A #020</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/raichu-a.png" WIDTH=80 border="0"><br/><B>Raichu.A #026</B></a></th>
                    <th class=SabeletteA style="width:150px; height:100px;"><img src="Images/shiny/sabelette-a.png" WIDTH=80 border="0"><br/><B>Sabelette.A #027</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/sablaireau-a.png" WIDTH=80 border="0"><br/><B>Sablaireau.A #028</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/goupix-a.png" WIDTH=80 border="0"><br/><B>Goupix.A #038</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/feunard-a.png" WIDTH=80 border="0"><br/><B>Feunard.A #039</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/taupiqueur-a.png" WIDTH=80 border="0"><br/><B>Taupiqueur.A #050</B></a></th>
                    <th class=TriopikeurA style="width:150px; height:100px;"><img src="Images/shiny/triopikeur-a.png" WIDTH=80 border="0"><br/><B>Triopikeur.A #051</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>???</td>
                    <td>Spectra</td>
                    <td>???</td>
                    <td>Ewox_</td>
                    <td>Lilishi</td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/miaouss-a.png" WIDTH=80 border="0"><br/><B>Miaouss.A #052</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/miaouss-g.png" WIDTH=80 border="0"><br/><B>Miaouss.G #052</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/persian-a.png" WIDTH=80 border="0"><br/><B>Persian.A #053</B></a></th>
                    <th class=RacaillouA style="width:150px; height:100px;"><img src="Images/shiny/racaillou-a.png" WIDTH=80 border="0"><br/><B>Racaillou.A #074</B></a></th>
                    <th class=GravalanchA style="width:150px; height:100px;"><img src="Images/shiny/gravalanch-a.png" WIDTH=80 border="0"><br/><B>Gravalanch.A #075</B></a></th>
                    <th class=GrolemA style="width:150px; height:100px;"><img src="Images/shiny/grolem-a.png" WIDTH=80 border="0"><br/><B>Grolem.A #076</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/ponyta-g.png" WIDTH=80 border="0"><br/><B>Ponyta.G #077</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/galopa-g.png" WIDTH=80 border="0"><br/><B>Galopa.G #078</B></a></th>
                    <th class=RamolossG style="width:150px; height:100px;"><img src="Images/shiny/ramoloss-g.png" WIDTH=80 border="0"><br/><B>Ramoloss.G #079</B></a></th>
                </tr>
                <tr>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Spectra</td>
                    <td>Yuki</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=FlagadossG style="width:150px; height:100px;"><img src="Images/shiny/flagadoss-g.png" WIDTH=80 border="0"><br/><B>Flagadoss.G #080</B></a></th>
                    <th class=CanartichoG style="width:150px; height:100px;"><img src="Images/shiny/canarticho-g.png" WIDTH=80 border="0"><br/><B>Canarticho.G #083</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tadmorv-a.png" WIDTH=80 border="0"><br/><B>Tadmorv.A #088</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/grotadmorv-a.png" WIDTH=80 border="0"><br/><B>Grotadmorv.A #089</B></a></th>
                    <th class=NoadkokoA style="width:150px; height:100px;"><img src="Images/shiny/noadkoko-a.png" WIDTH=80 border="0"><br/><B>Noadkoko.A #103</B></a></th>
                    <th class=OssatueurA style="width:150px; height:100px;"><img src="Images/shiny/ossatueur-a.png" WIDTH=80 border="0"><br/><B>Ossatueur.A #105</B></a></th>
                    <th class=SmogogoG style="width:150px; height:100px;"><img src="Images/shiny/smogogo-g.png" WIDTH=80 border="0"><br/><B>Smogogo.G #110</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/mmime-g.png" WIDTH=80 border="0"><br/><B>M.Mime.G #122</B></a></th>
                    <th class=RoigadaG style="width:150px; height:100px;"><img src="Images/shiny/roigada-g.png" WIDTH=80 border="0"><br/><B>Roigada.G #199</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Lilishi</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Kenzo</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/corayon-g.png" WIDTH=80 border="0"><br/><B>Corayon.G #222</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zigzaton-g.png" WIDTH=80 border="0"><br/><B>Zigzaton.G #263</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/lineon-g.png" WIDTH=80 border="0"><br/><B>Linéon.G #264</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/darumarond-g.png" WIDTH=80 border="0"><br/><B>Darumarond.G #554</B></a></th>
                    <th class=DarumachoG style="width:150px; height:100px;"><img src="Images/shiny/darumacho-g.png" WIDTH=80 border="0"><br/><B>Darumacho.G #555</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/tutafeh-g.png" WIDTH=80 border="0"><br/><B>Tutafeh.G #562</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/limonde-g.png" WIDTH=80 border="0"><br/><B>Limonde.G #618</B></a></th>
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>Lilishi</td>
                    <td>CornetBoy</td>
                    <td>Platinium Foxier</td>
                    <td>Satoshi</td>
                    <td>???</td>
                    <td>Yuki</td>
                    <td>Infinity_light</td>
                </tr>
        </center></table><br/><br/><br/>
    <h3>Living Dex Legend Arceus:</h3>
        <center><table align=center valign="middle">
            <tr>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/caninos-hisui.png" WIDTH=80 border="0"><br/><B>Caninos.H #058</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/arcanin-hisui.png" WIDTH=80 border="0"><br/><B>Arcanin.H #059</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/clamiral-hisui.png" WIDTH=80 border="0"><br/><B>Clamiral.H #503</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/archéduc-hisui.png" WIDTH=80 border="0"><br/><B>Archéduc.H #724</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/typhlosion-hisui.png" WIDTH=80 border="0"><br/><B>Typhlosion.H #157	</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/colimucus-hisui.png" WIDTH=80 border="0"><br/><B>Colimucus.H #705</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/muplodocus-hisui.png" WIDTH=80 border="0"><br/><B>Muplodocus.H #706</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/voltorbe-hisui.png" WIDTH=80 border="0"><br/><B>Voltorbe.H #100</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/electrode-hisui.png" WIDTH=80 border="0"><br/><B>Electrode.H #101</B></a></th>  
            </tr>
            <tr>
                <td>CornetBoy</td>
                <td>CornetBoy</td>
                <td>Ewox_</td>
                <td>Yuki</td>
                <td>Yuki</td>
                <td>Yuki</td>
                <td>Spectra</td>
                <td>CornetBoy</td>
                <td>Infinity_Light</td>
            </tr>
            <tr>
                <th class=invisible></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/farfuret-hisui.png" WIDTH=80 border="0"><br/><B>Farfuret.H #215</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/farfurex-hisui.png" WIDTH=80 border="0"><br/><B>Farfurex #903</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/fragilady-hisui.png" WIDTH=80 border="0"><br/><B>Fragilady.H #549</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/séracrawl-hisui.png" WIDTH=80 border="0"><br/><B>Séracrawl.H #713</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/gueriaigle-hisui.png" WIDTH=80 border="0"><br/><B>Gueriaigle.H #628</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/qwilfish-hisui.png" WIDTH=80 border="0"><br/><B>Qwilfish.H #211</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/qwilpik-hisui.png" WIDTH=80 border="0"><br/><B>Qwilpik #904</B></a></th>
            </tr>
            <tr>
                <td class=invisible></td>
                <td>Infinity_Light</td>
                <td>MiloJoker</td>
                <td>CornetBoy</td>
                <td>Yuki</td>
                <td>Infinity_Light</td>
                <td>CornetBoy</td>
                <td>Infinity_Light</td>
            </tr>
            <tr>
                <th class=invisible></th>
                <th class=invisible></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/zorua-hisui.png" WIDTH=80 border="0"><br/><B>Zorua.H #570</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/zoroark-hisui.png" WIDTH=80 border="0"><br/><B>Zoroark.H #571</B></a></th>  
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/Cerbyllin.png" WIDTH=80 border="0"><br/><B>Cerbyllin #899</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/Hachécateur.png" WIDTH=80 border="0"><br/><B>Hachécateur #900</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/Ursaking.png" WIDTH=80 border="0"><br/><B>Ursaking #901</B></a></th> 
            </tr>
            <tr>
                <td class=invisible></td>
                <td class=invisible></td>
                <td>Infinity_Light</td>
                <td>Stitchou</td>
                <td>Infinity_Light</td>
                <td>Yuki</td>
                <td>CornetBoy</td>
            </tr>
            <tr>
                <th class=invisible></th>
                <th class=invisible></th>
                <th class=invisible></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/barguantua-hisui.png" WIDTH=80 border="0"><br/><B>Barguantua.H #550</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/ParagruelM.png" WIDTH=80 border="0"><br/><B>Paragruel Male #902</B></a></th>
                <th class=trouve style="width:150px; height:100px;"><img src="Images/non-shiny/paragruelF.png" WIDTH=80 border="0"><br/><B>paragruel Femelle #902</B></a></th>
            </tr>
            <tr>
                <td class=invisible></td>
                <td class=invisible></td>
                <td class=invisible></td>
                <td>CornetBoy</td>
                <td>Infinity_Light</td>
                <td>Ewox_</td>
            </tr>
        </center></table><br/><br/><br/>
    <h3>Living Dex Bonus:</h3>
        <center><table align=center valign="middle">
                <tr>
                    <th class=Jirachi style="width:150px; height:100px;"><img src="Images/shiny/jirachi.png" WIDTH=80 border="0"><br/><B>Jirachi #385</B></a></th>
                    <th class=Manaphy style="width:150px; height:100px;"><img src="Images/shiny/manaphy.png" WIDTH=80 border="0"><br/><B>Manaphy #490</B></a></th>
                    <th class=Victini style="width:150px; height:100px;"><img src="Images/shiny/victini.png" WIDTH=80 border="0"><br/><B>Victini #494</B></a></th>
                    <th class=Keldeo style="width:150px; height:100px;"><img src="Images/shiny/keldeo.png" WIDTH=80 border="0"><br/><B>Keldeo #647</B></a></th>
                    <th class=Meloetta style="width:150px; height:100px;"><img src="Images/shiny/meloetta.png" WIDTH=80 border="0"><br/><B>Meloetta #648</B></a></th>
                    <th class=Genesect style="width:150px; height:100px;"><img src="Images/shiny/genesect.png" WIDTH=80 border="0"><br/><B>Genesect #649</B></a></th>
                   <th class=Diancie style="width:150px; height:100px;"><img src="Images/shiny/diancie.png" WIDTH=80 border="0"><br/><B>Diancie #719</B></a></th>
                    <th class=Hoopa style="width:150px; height:100px;"><img src="Images/shiny/hoopa.png" WIDTH=80 border="0"><br/><B>Hoopa #720</B></a></th>
                    <th class=Volcanion style="width:150px; height:100px;"><img src="Images/shiny/volcanion.png" WIDTH=80 border="0"><br/><B>Volcanion #721</B></a></th>
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=Cosmog style="width:150px; height:100px;"><img src="Images/shiny/cosmog.png" WIDTH=80 border="0"><br/><B>Cosmog #789</B></a></th>
                    <th class=Cosmovum style="width:150px; height:100px;"><img src="Images/shiny/cosmovum.png" WIDTH=80 border="0"><br/><B>Cosmovum #790</B></a></th>
                    <th class=Magearna style="width:150px; height:100px;"><img src="Images/shiny/magearna.png" WIDTH=80 border="0"><br/><B>Magearna #801</B></a></th>
                    <th class=Marshadow style="width:150px; height:100px;"><img src="Images/shiny/marshadow.png" WIDTH=80 border="0"><br/><B>Marshadow #802</B></a></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/zeraora.png" WIDTH=80 border="0"><br/><B>Zeraora #807</B></a></th>  
                    <th class=Zacian style="width:150px; height:100px;"><img src="Images/shiny/zacian.png" WIDTH=80 border="0"><br/><B>zacian #888</B></a></th>
                    <th class=Zamazenta style="width:150px; height:100px;"><img src="Images/shiny/zamazenta.png" WIDTH=80 border="0"><br/><B>zamazenta #889</B></a></th>       
                    <th class=Ethernatos style="width:150px; height:100px;"><img src="Images/shiny/ethernatos.png" WIDTH=80 border="0"><br/><B>Ethernatos #890</B></a></th>     
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/meltan.png" WIDTH=80 border="0"><br/><B>Meltan #808</B></a></th>       
                </tr>
                <tr>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Gaven</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>Yuki</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=trouve style="width:150px; height:100px;"><img src="Images/shiny/melmetal.png" WIDTH=80 border="0"><br/><B>Melmetal #809</B></a></th>
                    <th class=Artikodin-g style="width:150px; height:100px;"><img src="Images/shiny/artikodin-g.png" WIDTH=80 border="0"><br/><B>Artikodin de Galar #144</B></a></th>
                    <th class=Electhor-g style="width:150px; height:100px;"><img src="Images/shiny/electhor-g.png" WIDTH=80 border="0"><br/><B>Electhor de Galar #145</B></a></th>
                    <th class=Sulfura-g style="width:150px; height:100px;"><img src="Images/shiny/sulfura-g.png" WIDTH=80 border="0"><br/><B>Sulfura de Galar #146</B></a></th>
                    <th class=Wushours style="width:150px; height:100px;"><img src="Images/shiny/wushours.png" WIDTH=80 border="0"><br/><B>Wushours #891</B></a></th>
                    <th class=Shifours-p style="width:150px; height:100px;"><img src="Images/shiny/shifours-poings.png" WIDTH=80 border="0"><br/><B>Shifours P #892</B></a></th>
                    <th class=Shifours-s style="width:150px; height:100px;"><img src="Images/shiny/shifours-s.png" WIDTH=80 border="0"><br/><B>Shifours S #892</B></a></th>

                </tr>
                <tr>
                    <td class=invisible></td>
                    <td>CornetBoy</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=Blizzeval style="width:150px; height:100px;"><img src="Images/shiny/blizzeval.png" WIDTH=80 border="0"><br/><B>Blizzeval #896</B></a></th>
                    <th class=Spectreval style="width:150px; height:100px;"><img src="Images/shiny/spectreval.png" WIDTH=80 border="0"><br/><B>Spectreval #897</B></a></th>
                    <th class=Sylveroy style="width:150px; height:100px;"><img src="Images/shiny/sylveroy.png" WIDTH=80 border="0"><br/><B>Sylveroy #898</B></a></th> 
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>???</td>
                    <td>???</td>
                    <td>???</td>
                </tr>
                <tr>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=invisible></th>
                    <th class=Amovenus style="width:150px; height:100px;"><img src="Images/shiny/amovenus.png" WIDTH=80 border="0"><br/><B>Amovenus #905</B></a></th> 
                </tr>
                <tr>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td class=invisible></td>
                    <td>???</td>
                </tr>
        </center></table><br/><br/>
            </p>    
        </main>
        <aside>
                    <a href="https://discord.gg/JFPrVQV">
                        <img src="Images/1200px-Discord.svg.png" WIDTH=100 border="0">
                    <a href=https://www.youtube.com/channel/UCfYXuvKn8WUVhSS4Os8AJtg>
                        <img src="Images/logo youtube.png" WIDTH=100 border="0">
        </aside>
    </body>