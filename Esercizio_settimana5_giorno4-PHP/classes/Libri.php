<?php

// Definizione dell'interfaccia Prestito
interface Prestito {
    public function presta();
    public function restituisci();
}

// Classe astratta MaterialeBibliotecario che implementa l'interfaccia Prestito
abstract class MaterialeBibliotecario implements Prestito {
    protected static $contatoreLibri = 0; // STATIC proprietà di classe
    protected static $contatoreDVD = 0; // STATIC proprietà di classe
    protected $titolo;
    protected $annoPubblicazione;

    public function __construct($titolo, $annoPubblicazione){ //questo si fa quando ci sono 2 variabili che si ripetono un tutte e due le classi (class Libri e class DVD)
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;

    }
}

// Sottoclasse Libro di MaterialeBibliotecario
class Libro extends MaterialeBibliotecario {
    private $autore;
    
    public function __construct($titolo, $autore, $annoPubblicazione) {
        self::$contatoreLibri++;
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
    }

    public static function contaLibri() {
        return self::$contatoreLibri; // leggo una proprietà di classe static
    }

    public function presta() {
        if (self::$contatoreLibri > 0) {
            self::$contatoreLibri--;
            echo "Libro prestato: {$this->titolo}\n";
        } else {
            echo "Non ci sono libri disponibili.\n";
        }
    }

    public function restituisci() {
        self::$contatoreLibri++;
        echo "Libro restituito: {$this->titolo}\n";
    }
}

// Sottoclasse DVD di MaterialeBibliotecario
class DVD extends MaterialeBibliotecario {
    private $regista;

    public function __construct($titolo, $regista, $annoPubblicazione) {
        self::$contatoreDVD++;
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
    }

    public static function contaDVD() {
        return self::$contatoreDVD;
    }

    public function presta() {
        if (self::$contatoreDVD > 0) {
            self::$contatoreDVD--;
            echo "DVD prestato: {$this->titolo}\n";
        } else {
            echo "Non ci sono DVD disponibili.\n";
        }
    }

    public function restituisci() {
        self::$contatoreDVD++;
        echo "DVD restituito: {$this->titolo}\n";
    }
}


?>