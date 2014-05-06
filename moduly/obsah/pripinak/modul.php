<?php
class modul_pripinak extends Modul
{
	public function popis()
    {
        return array("pripinak", "");
    }

    public $poleMist = array(0);

    public $jmenaMist = array("pripinak");

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


    
		$html = "<div data-maindiv >

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
