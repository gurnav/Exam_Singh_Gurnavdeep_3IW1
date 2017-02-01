<?php

  namespace tests\Lib;

  use Lib\StringFormatter;

  class StringFormatterTest extends \PHPUnit_Framework_TestCase {

    public function testPrefix() {

      // on déclare la classe
      $string = new StringFormatter();

      // Exécution de la méthode à tester
      $result = $string->prefix("prefix", "gurnav");

      // Verification du resultat de notre exécution
      $this->assertEquals($result, "prefixgurnav");

      // Effectuer un second test avec des parametres differents (ici le CamelCase à true)
      $result2 = $string->prefix("prefix", "gurnav2", true);

      // Verification du resultat
      $this->assertEquals($result2, "prefixGurnav2");
    }

    public function testSuffix() {

        // on déclare la classe
        $string = new StringFormatter();

      // Exécution de la méthode a tester
      $result = $string->suffix("suffix", "gurnav");

      // Verification du resultat
      $this->assertEquals($result, "gurnavsuffix");

      // Effectuer un second test avec des parametres differents (ici le CamelCase à true)
      $result2 = $string->prefix("gurnavdeep", "singh", true);

      // Verification du resultat
      $this->assertEquals($result2, "gurnavdeepsingh");

    }

    public function testToCamelCase() {

      // Déclaration de la classe
      $string = new StringFormatter();

      // Execution de la méthode que l'on veut tester
      $result = $string->toCamelCase("gurnav", "singh");

      //verifier le resultat
        $this-> assertEquals($result, "gurnavdeepSingh");
    }
      public function testConcatString()
      {
          //mettre en place un contexte
          $string = new StringFormatter();
          //lancer un programme
          $response = $string->concatString("ceci est un", "test");
          //vérifier le resultat
          $this-> assertEquals($response, "ceciest untest");
      }

  }
