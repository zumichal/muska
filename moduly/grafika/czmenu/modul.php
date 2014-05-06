<?php
class modul_czmenu extends Modul
{
	public function popis()
    {
        return array("cz hlavni menu", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'menu' => "<a href='stranky/zpravy.php'>Zprávy</a>"
    );

    public $popisProm = array(
        'menu' => "obsah menu"
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
    
		$html = $prom['menu']	;

		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}
