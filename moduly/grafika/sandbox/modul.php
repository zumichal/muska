<?php
class modul_sandbox extends Modul
{
	public function popis()
    {
        return array("piskoviste", "");
    }

    public $poleMist = array(0);

    public $jmenaMist = array("piskoviste");

    public $vychProm = array(
        
    );

    public $popisProm = array(
        
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
    
		$html = "<div id='content' data-maindiv >

    *loc0*

</div>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}
