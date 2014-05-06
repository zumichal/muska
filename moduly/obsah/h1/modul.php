<?php
class modul_h1 extends Modul
{
	public function popis()
    {
        return array("h1 - nadpis 1", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'text' => "nadpis h1"
    );

    public $popisProm = array(
        'text' => "text"
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
    
		$html = "<h1  data-maindiv  ><span>*loc0*</span>".$prom['text']."</h1>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}