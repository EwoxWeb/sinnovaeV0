<style>
.nomPKM{
    font-family: 'Segoe UI Black', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    -webkit-text-stroke: 2px black;
    font-size: 50px;
}

    #body {
        background-color: #333333;
        color:black;
    }

    form {
        color: black;
    }

    .titreInscription {
        color: black;
    }

    .divProfil{
        background-color: #DAE0E7;
        margin-left: 25%;
        margin-right: 25%;
        border: solid black;
    }

    .editprofil{
        margin-left: 90%;
    }

    #pokedex{
        margin-left: 100px;
        margin-right: 100px;
    }

    .géné{
        border: solid black;
        padding: 10px;
    }

    #navGe{
        margin-bottom: 25px;
    }

    .tableGene{
        border-collapse: separate;
        border-spacing: 25px;
    }

    a{
        text-decoration: none;
        color: black;
    }

    .card{
        border: solid white;
    }

/*/----INFOPKM----/*/
.titrecelluleinfo{
    border: solid black;
    text-align: center;
    background-color: #001418;
    color: white;
    font-size: 20px;
    padding: 10px;
}
.infocellule{
    border: solid black;
    padding: 5px;
    text-align: center;
    background-color: #89C9C6;
    font-family: 'Segoe UI Black', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
}

#centreinfo{
    background-color: #CDFFFD;
    margin-left: 200px;
    margin-right: 200px;
    margin-top: -20px;
    padding-bottom: 30px;
}

/*/----NAV----/*/

nav{
    width: 100%;
    background-color: #465B59;
}

nav ul{
    list-style-type: none;
}

nav ul li{
    float: left;
    width: 20%;
    text-align: center;
    position: relative;
}

nav ul::after{
    content: "";
    display: table;
    clear: both;
}

nav a{
    display: block;
    text-decoration: none;
    border-bottom: 2px solid transparent;
    padding: 10px 0px;
}

nav a:hover{
    color: white;
    text-decoration: none;
}

.sous{
    display: none;
    box-shadow: 0px 1px 2px #CCC;
    background-color: #343938;
    position: absolute;
    width: 100%;
    z-index: 1000;
}
nav > ul li:hover .sous{
    display: block;
}
.sous li{
    float: none;
    width: 100%;
    text-align: left;
}
.sous a{
    border-bottom: none;
    color:white;
}
.sous a:hover{
    border-bottom: none;
    color:#A5A5A5;
}
.deroulant > a::after{
    content:"▼";
    font-size: 15px;
}

a{
    font-weight: bold;
}

.test{
    color: white;
    font-size: 20px;
}

.conteneur{
  margin: 50px 20px;
  height: 1500px;
}
/*/-----------/*/
</style>