<?php
class modul_historiesandbox extends Modul
{
    public function popis()
    {
        return array("historicke piskoviste", "");
    }

    public $poleMist = array(0);

    public $jmenaMist = array("historicke piskoviste");

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

        $html = "<div id='content' data-maindiv >
            <div id='historie'>
                    <svg id='kresliciplatno'>

                         
                    </svg>
    *loc0*
            </div>
        </div>" ;
        return $html;
    }


    public function admin($prom, $id, &$poleCSS, &$poleJS)
    {
        $html = "<div data-admindiv>admin cast modulu</div>";
        return $html;
    }
}
