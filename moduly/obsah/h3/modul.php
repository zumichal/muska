<?php
class modul_h3 extends Modul
{
	public function popis()
    {
        return array("h3 - nadpis 3", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'text' => "nadpis h3"
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
    
		$html = "<h3  data-maindiv >".$prom['text']."</h3>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}