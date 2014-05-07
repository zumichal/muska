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

        $aktStranka = FW::StrankaSPrvkem($id);

        $submenu = "";
        $pole2D = FW::Podstranky($aktStranka );
        foreach($pole2D as $id => $detaily)
        {
            $submenu .= '<a href="/'.$detaily['url'].'"">'.$detaily['uzivJmenoStr'].'</a>';
        }
    
		$html = "<div class='submenu' data-maindiv >".$submenu."</div>"	;
		return $html;
	}


	public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
		return $html;
    }
}