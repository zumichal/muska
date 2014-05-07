<?php
class modul_czmain extends Modul
{
	public function popis()
    {
        return array("grafika cz uvodni", "");
    }

    public $poleMist = array(0,1,2);

    public $jmenaMist = array("menu","sandboxplace","hlavickadodatky");

    public $vychProm = array(
        'typstranky' => "normalni",
        'hlavickadodatky' => " "
    );

    public $popisProm = array(
        'typstranky' => "typ stranky (uvodni/normalni)",
        'hlavickadodatky' => "veci ktere by meli byt v hlavicce"
        );


    public function ajax($prom)
    {
        $promenne = json_decode($prom);
		$vratit = $promenne->nejakaProm;
		return $vratit;
    }


	public $gui = true;


	public function main($prom, $id, &$poleCSS, &$poleJS)
	{

        if($prom['typstranky'] == "uvodni") {
            $typstrankyjs = "frontpage.js";
            $menutrida = "";
        } else {
            $typstrankyjs = "page.js";
            $menutrida = "fixed small";
        }
    
		$html = "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>Mostecká uhelná společnost</title>
    <script src='http://storage.o-0.cz/gui/mus/js/jquery-1.10.2.min.js'></script> 
    <script src='http://storage.o-0.cz/gui/mus/js/".$typstrankyjs."'></script> 
    <link type='text/css' rel='stylesheet' media='all' href='http://storage.o-0.cz/gui/mus/css/style.css' />
    <meta name='robots' content='noindex,follow' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
		*loc2*

".$prom['hlavickadodatky']."
</head>
<body>



<div id='hlavicka'>
    <div id='csen'>cs/en/fr/de</div>
    <div id='menu_fixed' class='".$menutrida."'>
        
        <div id='logo'>M<span>OSTECKÁ </span>U<span>HELNÁ </span>S<span>POLEČNOST</span></div>
        <div id='claim'>MOSTECKÁ UHELNÁ SPOLEČNOST</div>
        <ul id='menu'>
            *loc0*
        </ul>

    </div>
    <div class='sipka_dolu'></div>
</div>



    *loc1*


<div id='paticka'>

</div>
</body>
</html>"	;

$vyhazovac = "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <link type='text/css' rel='stylesheet' media='all' href='http://storage.o-0.cz/gui/mus/css/style.css' />
    <title>Mostecká uhelná společnost</title>
</head>
<body style>

<div style='width:100%;height:1500px;background:url(\"http://storage.o-0.cz/gui/mus/img/greentekvyhazovac.jpg\") center center fixed; background-size:cover;'></div>

</body>
</html>";



if(isset($_SESSION['idUziv']) && !empty($_SESSION['idUziv']))
        {
          // return $html;
        }

        //nabidnout prihlaseni
        else
        {
            //login
            


            // return $vyhazovac;
        }



		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}
