<?php

class GenerationCle
{
    private $CLE =  array();          
    private $CLE1 = array();
    private $CLE2 = array();
    private $CLE1_p = array();
    private $CLE2_p  = array(); 
    private $CLE_PERMUTE =  array();            
    private $F_PERMUTATION   =   array();          
    private $VALEURS_FONCTION_PERMUTATION = array();      
    private $VALEUR_PI = 0;

    public function __construct($cle, $fonction)
    {
        $this->F_PERMUTATION  = $cle;
        $this->CLE = $fonction;
        echo "La clé K vaut : ";
        
        foreach($this->CLE as $cle){
            echo $cle;
        }
        echo "\n";
        echo "\n";
        echo "La fonction de permutation : ";
        //print_r($this->F_PERMUTATION);

        foreach($this->F_PERMUTATION as $fp){
            echo $fp;
        }
    }

    public function indexer_cles()
    {
        $_cles_permutation = array( 
                                0 => 0, 
                                1 => 0, 
                                2 => 0, 
                                3 => 0, 
                                4 => 0, 
                                5 => 0, 
                                6 => 0, 
                                7 => 0  
                            );

        $i = 0;
        while ($i < count($this->CLE ))
        {
            $_cles_permutation[$i] = $this->CLE [$i];
            $i = $i + 1;        
        }

        return $_cles_permutation;    
    }

    public function faire_permutation()
    {

        $this->CLE_PERMUTE = $this->indexer_cles();
    
        foreach($this->CLE_PERMUTE as $cle => $valeur){
            echo "\n";
            echo $cle ." => ". $valeur;
        }
        
        foreach($this->F_PERMUTATION as $FN_P_KEY => $FN_P_VALUE)
        {
            foreach($this->CLE_PERMUTE as $CLE_P_KEY => $CLE_P_VALUE){
                
                if($FN_PERMUTATION == $CLE)
                {
                    array_push($this.$VALEURS_FONCTION_PERMUTATION, $this.$CLE_PERMUTE[$CLE]);
                }
            }
            echo "La permutation vaut : ".$this.$VALEURS_FONCTION_PERMUTATION;
        }    
    }

    public function diviserBloc()
    {
        $this.$CLE1_p = array_slice($this.$VALEURS_FONCTION_PERMUTATION, 0, 3);
        $this.$CLE2_p = array_slice($this.$VALEURS_FONCTION_PERMUTATION, 3, 7);
        
        echo "Les deux blocs de la clé sont :".$this.$CLE1_p." / ".$this.$CLE2_p;
    }

    public function operateur_binaire()
    {   
        $j = 0;
        $k = 0;

        while ($j < count($this.$CLE1_p))
        {
            while ($j < count($this.$CLE2_p))
            {
                $val = $this.$CLE1_p[$j] xor $this.$CLE2_p[$j];
                
                $this.$CLE1[$val];
                $j = $j + 1;
                $j = $j + 1;
                echo $this.$CLE1;
            }
        }
    }

    public function operateur_binaire_2()
    {
        $i = 0;
        $j = 0;

        while($i < count($this.$CLE2_p))
        {
            while (j < count($this.$CLE1_p))
             {
                array_push($this.$CLE2, $this.$CLE2_p[j] && $this.$CLE1_p[$j]);
                    $j = $j + 1;
            }
            $i = $i + 1;
        }
        echo $this.$CLE2;
    }

    public function decaler_gauche()
    {
        $valeur_cles = array_slice($this.$CLE1, 0, 2);
        $dernieres_valeurs = array_slice($this.$CLE1, 2, 4);

        $this.$CLE1 = $dernieres_valeurs + $valeur_cles;
        echo $this.$CLE1;


    }


}

?>