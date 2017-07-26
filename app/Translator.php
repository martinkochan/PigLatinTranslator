<?php

/**
 * Class translates input data to Pig Latin language
 */
class Translator extends PigLatin
{
      /* variable where prepared data for translation are stored */
      private $inputArray;

      /**
       * Function handles translation of all input data including preserving symbols that are not for translation (f.e. +!?,) 
       * @param string $input Data for translation
       * @return string Translated input data to Pig Latin
       */
      public function translateAll($input)
      {
            $result = '';

            return $result;
      }
}
