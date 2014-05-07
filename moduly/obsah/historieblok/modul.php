<?php
class modul_historieblok extends Modul
{
	public function popis()
    {
        return array("historieblok", "");
    }

    public $poleMist = array(0);

    public $jmenaMist = array("pripinak");

    public $vychProm = array(
        'left' => "50%",
        'obrazek' => "",
        'connect' => ""
    );

    public $popisProm = array(
        'left' => "left [%]",
        'obrazek' => "styl obrazku",
        'connect' => "data-maindiv prvků na ktere se ma připojit čára"
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


    
		$html = "<div class='pribehblok'>
<div data-maindiv class='pribehbox' conectedto='".$prom['connect']."' style='left:".$prom['left']."%'>

<div class='obrazek' style='".$prom['obrazek']."'></div>    
   *loc0*
</div>
</div>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}
