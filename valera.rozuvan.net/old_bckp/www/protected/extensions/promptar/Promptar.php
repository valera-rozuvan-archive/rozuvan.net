<?

class Promptar extends CApplicationComponent {
    /* TMP DEBUG PROM-FUNCTION */

    public function eee($arr) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    public function eeeP() {
        echo '<br />[$_POST]: <br /><pre>';
        print_r($_POST);
        echo '</pre>';
    }

    public function eeeG() {
        echo '<br />[$_GET]: <br /><pre>';
        print_r($_GET);
        echo '</pre>';
    }

    public function eeeS() {
        echo '<br />[$_SESSION]: <br /><pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

    public function eeeR() {
        echo '<br />[$_REQUEST]: <br /><pre>';
        print_r($_REQUEST);
        echo '</pre>';
    }

    public function eeeF() {
        echo '<br />[$_FILES]: <br /><pre>';
        print_r($_FILES);
        echo '</pre>';
    }

    /* REM-CLASSIC-FUNCTION */

    public function onmouse($px_sprite) {
        echo 'onmouseover="bg_over(this,' . $px_sprite . ');" onmouseout="bg_out(this);"';
    }

    public function pt($px_top) {
        echo '<div style="padding-top:' . $px_top . 'px"></div>';
    }

    public function bor_rad($rad_px) {
        echo '-webkit-border-radius: ' . $rad_px . 'px;-moz-border-radius: ' . $rad_px . 'px;border-radius: ' . $rad_px . 'px;';
    }

    /* PROM-FUNCTIONAL */

    public function stdClassToArray($d) {
        if (is_object($d))
            $d = get_object_vars($d);
        if (is_array($d))
            return array_map(__FUNCTION__, $d);
        else
            return $d;
    }

    public function ArrayToStdClass($d) {
        if (is_array($d))
            return (object) array_map(__FUNCTION__, $d);
        else
            return $d;
    }

}

?>
