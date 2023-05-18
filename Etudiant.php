<?php


class Etudiant{

  private $nom;
  private $math;
  private $info;


        function __construct($Nom=" " ,$Math = 0 ,$Info = 0)
        {
            $this->nom=$Nom;
            $this->math=$Math;
            $this->info=$Info;
        }

        function __destruct()
        {
            
        }

        public function getnom(){ return $this->nom;}

        public function getmath(){ return $this->math;}

        public function getinfo(){ return $this->info;}

        public function setnom($Nom){$this->nom=$Nom;}

        public function setmath($Math){$this->math=$Math;}

        public function setinfo($Info){$this->info=$Info;}

        public function moy( ){
            return($this->info+$this->math)/2;
        }

        public function mention(){

            switch ($this->moy()){
                case $this->moy()<10:
                    $mention = "NULL";
                    break;
                case $this->moy()<12:
                    $mention = "Passable";
                    break;
                case $this->moy()<15:
                    $mention = "Bien";
                    break;
                case $this->moy()<20:
                    $mention = "Trés Bien";
                    break;
                case $this->moy()==20:
                    $mention ="Excellent" ;
                    break;
            }
            return $mention ;
        }



        function affichage (){
   


            echo '<tr>
            <td>'.$this->getnom().'</td>
            <td>'.$this->getmath().'</td>
            <td>'.$this->getinfo().'</td>
            <td>'.$this->moy().'</td>
            <td>'.$this->mention().'</td>

         </tr>';

        }
        
}




?>