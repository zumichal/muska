<?php
class modul_h2 extends Modul
{
	public function popis()
    {
        return array("h2 - nadpis 2", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'text' => "nadpis h2"
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
    
		$html = "<h2  data-maindiv >".$prom['text']."</h2>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}