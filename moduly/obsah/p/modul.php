<?php
class modul_p extends Modul
{
	public function popis()
    {
        return array("p - odstavec", "");
    }

    public $poleMist = array();

    public $jmenaMist = array();

    public $vychProm = array(
        'class' => " ",
        'style' => " ",
        'text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mollis elit sed leo mollis ullamcorper. Nunc sem sem, congue nec velit non, adipiscing venenatis elit."
    );

    public $popisProm = array(
        'class' => "class",
        'style' => "style",
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
    
		$html = "<p  data-maindiv  class='".$prom['class']."' style='".$prom['style']."'>".$prom['text']."</p>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}