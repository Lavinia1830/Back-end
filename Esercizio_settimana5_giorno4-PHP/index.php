<?php

require_once 'classes/Libri.php';

// Esempio di utilizzo delle classi
$libro1 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$libro2 = new Libro("Harry Potter", "J.K. Rowling", 1997);

$dvd1 = new DVD("Inception", "Christopher Nolan", 2010);
$dvd2 = new DVD("Interstellar", "Christopher Nolan", 2014);

echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
echo'<br>';
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "\n";
echo'<br>';

// Prestito e restituzione di alcuni materiali
$libro1->presta();
echo'<br>';
$dvd1->presta();
echo'<br>';

$libro2->presta();
echo '<br>';
$libro2->restituisci();
echo '<br>';

$dvd2->presta();
echo '<br>';
$dvd1->restituisci();
echo'<br>';

echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
echo'<br>';
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "\n";