<?php
// nactu rozhrani kontroleru
require_once(DIRECTORY_CONTROLLERS."/IController.interface.php");

/**
<<<<<<< HEAD
 * Ovladac zajistujici vypsani uvodni stranky.
=======
 * Ovladac zajistujici vypsani stranky se spravou osobnich udaju
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861
 */
class SpravaOsobnichUdajuController implements IController {

    /** @var DatabaseModel $db  Sprava databaze. */
    private $db;

    /**
     * Inicializace pripojeni k databazi.
     */
    public function __construct() {
        require_once (DIRECTORY_MODELS ."/DatabaseModel.class.php");
        $this->db = new DatabaseModel();
    }

<<<<<<< HEAD
=======
    /**
     * metoda co zajistuje meneni osobnich udaju uzivatele pokud uzivatel zmeni sve udaje
     */
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861
    public function zmenaUdaju() {
        global $login;
        if (isset($_POST["zmenaJmena"])) {
            $this->db->zmenJmenoUzivatele($_POST["jmeno"], $login->getID());
            header(header("Location:index.php?page=spravavlastnichudaju"));
        }
        else if (isset($_POST["zmenaPrijmeni"])) {
            $this->db->zmenPrijmeniUzivatele($_POST["prijmeni"], $login->getID());
            header(header("Location:index.php?page=spravavlastnichudaju"));
        }
        else if (isset($_POST["zmenaPrezdivky"])) {
            $this->db->zmenPrezdivkuUzivatele($_POST["prezdivka"], $login->getID());
            $login->obnoveniLoginu($_POST["prezdivka"]);
<<<<<<< HEAD
            var_dump($login->getUserInfo());
            header(header("Location:index.php?page=spravavlastnichudaju"));
            var_dump($login->getUserInfo());
=======
            header(header("Location:index.php?page=spravavlastnichudaju"));
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861
        }
        else if (isset($_POST["zmenaEmailu"])) {
            $this->db->zmenEmailUzivatele($_POST["email"], $login->getID());
            header(("Location:index.php?page=spravavlastnichudaju"));
        }
    }

    /**
<<<<<<< HEAD
     * Vrati obsah uvodni stranky.
=======
     * Vrati obsah stranky se spravou osobnich udaju
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861
     * @param string $pageTitle     Nazev stranky.
     * @return string               Vypis v sablone.
     */
    public function show():string {
        global $tplData;
        global $login;

<<<<<<< HEAD
        $tplData = $this->db->getUzivatele($login->getID());
=======
        if ($login->isUserLogged()) {
            $tplData = $this->db->getUzivatele($login->getID());

            foreach ($tplData as $prvek) {
                $prvek = htmlspecialchars($prvek);
            }
        }
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861

        $this->zmenaUdaju();

        ob_start();
<<<<<<< HEAD
        // pripojim sablonu, cimz ji i vykonam
        require(DIRECTORY_VIEWS ."/SpravaOsobnichUdaju.php");
        // ziskam obsah output bufferu, tj. vypsanou sablonu
=======
        require(DIRECTORY_VIEWS ."/SpravaOsobnichUdaju.php");
>>>>>>> c8485ecf6bc2452e08424ecac3d3da8c4d7ae861
        $obsah = ob_get_clean();

        // vratim sablonu naplnenou daty
        return $obsah;
    }

}

?>