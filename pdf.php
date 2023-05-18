<?php
require('./Etudiant.php'); 

session_start();


require('fpdf.php');
class PDF extends FPDF
{
function header()
{
    $this -> SetFont('Arial','B',15);
    $this -> Cell(100,10,'Nom :'.$_SESSION['students'][$_SESSION['index']]->getnom(),1,0,'C');
    $this -> Ln();
    $this -> Cell(100,10,'Note Maths :'.$_SESSION['students'][$_SESSION['index']]->getmath(),1,0,'C');
    $this -> Ln();
    $this -> Cell(100,10,'Note Info :'.$_SESSION['students'][$_SESSION['index']]->getinfo(),1,0,'C');
    $this -> Ln();
    $som =  $_SESSION['students'][$_SESSION['index']]->getmath() + $_SESSION['students'][$_SESSION['index']]->getinfo() ;
         $moy = $som/2 ;

               switch ($moy){
                  case $moy<10:
                      $mention = "NULL";
                      break;
                  case $moy<12:
                      $mention = "Passable";
                      break;
                  case $moy<15:
                      $mention = "Bien";
                      break;
                  case $moy<20:
                      $mention = "Trés Bien";
                      break;
                  case $moy=20:
                      $mention ="Excellent" ;
                      break;
              }
    $this -> Cell(100,10,'Moyenne :'.$moy,1,0,'C');
    $this -> Ln();
    $this -> Cell(100,10,'Mention :'.$mention,1,0,'C');
    $this -> Ln();
}

}

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf -> AddPage ();
$pdf -> Output ()
?>