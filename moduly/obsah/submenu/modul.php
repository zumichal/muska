<?php
class modul_submenu extends Modul
{
	public function popis()
    {
        return array("submenu", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'text' => "<a href='#'>Česká Republika</a>"
    );

    public $popisProm = array(

        'text' => "submenu odkazy"
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
    
		$html = "<div class='submenu' data-maindiv >".$prom['text']."</div>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}