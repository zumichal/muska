<?php
class modul_empty extends Modul
{
	public function popis()
    {
        return array("empty - zadne omezeni", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'obsah' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis elit sed leo mollis ullamcorper. Nunc sem sem, congue nec velit non, adipiscing venenatis elit."
    );

    public $popisProm = array(
        'obsah' => "obsah"
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
    
		$html = $prom['obsah']	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}