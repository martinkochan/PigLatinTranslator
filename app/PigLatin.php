<?php

/**
 * Class defines basic rules and functions for Pig Latin
 */
class PigLatin
{
      /* Pig latin rules for all types of words. Defined with regular expressions*/
      const
              VOWEL_WORD = '/^([aeiou]+)(.*)/',
              CONSONANT_WORD = '/^([^aeiou\W\d_]+)(.*)/',
              EXCEPTION_WORDS = '/^(qu){1}(.*)/',
              SYMBOL = '([\W_]+)',
              NUMBER = '/^([0-9])(.*)/',
              VOWELS_SUFFIX = 'way',
              SILENT_CONSONANT = array('honest', 'hour', 'heir', 'honor', 'homage', 'herb');

      /**
       * Function decides if tested word fulfills condition
       * @param string $controlType Condition that word has to match
       * @param string $word Tested word
       * @return boolean True if word matches condition, false otherwise
       */
      public function recognizeWord($controlType, $word)
      {
            if (preg_match($controlType, $word))
                    return true;
            else
                  return false;
      }
      
      /**
       * Compares tested word with array of words that starts with silent consonant
       * @param string $word Tested word
       * @return boolean True if word is found in array, false otherwise
       */
      public function isSilent ($word)
      {
            if (in_array($word, self::SILENT_CONSONANT))
                    return true;
            else 
                  return false;
      }

}
