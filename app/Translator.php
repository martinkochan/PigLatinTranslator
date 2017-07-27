<?php

/**
 * Class translates input data to Pig Latin language
 */
class Translator extends PigLatin
{
      /* variable where prepared data for translation are stored */

      private $inputArray;
      private $validator;
      public $error = '';

      public function __construct()
      {
            $this->validator = new Validator();
      }

      /**
       * Function handles translation of all input data including preserving symbols that are not for translation (f.e. +!?,) 
       * @param string $input Data for translation
       * @return string Translated input data to Pig Latin
       */
      public function translateAll($input)
      {
            $result = '';
            /*try-catch block if there is error during validation of users input */ 
            try
            {
                  /* Validation and preparation of data, transformation to array of words and other symbols */
                  $this->inputArray = $this->prepare($input);
            } 
            catch (UserError $error)
            {
                  $this->error = $error->getMessage();
            }
            /* if data are succesfully validated, proceed to translation */
            if (empty($this->error))
            {
                  foreach ($this->inputArray as $word)
                  {
                        /* if $word is not actually word or number, add it directly to output result.If it is, translate word and add it to output result */
                        if ($this->recognizeWord('/^' . self::SYMBOL . '/', $word))
                        {
                              $result .= $word;
                        } else
                        {
                              $result .= $this->translateWord($word);
                        }
                  }
            }
            return $result;
      }

      /**
       * Function transforms input string to array of words and other symbols
       * @param string $input
       * @return array Array ready to be processed and translated
       */
      public function prepare($input)
      {
            /* Run validation function only if there are no letters/words in input string, to see what user entered wrong. */
            if (!preg_match('/([a-zA-Z]+)/', $input))
            {
            $this->validator->validate($input);
            }
            /* 
             * NOTE: As there are no strict rules for uppercase/lowercase letters in Pig Latin, all letters will be set to lowercase. It is more practical,easier and esthetic choice.
             * Of course to preserve or switch shifting letters so that first letter in translated word is uppercased and the orignal lowercased, is more challenging solution not implemented in this translator,
             * so it could be considered as a little shortcoming. 
             */
            $input = strtolower($input);

            $exploded = preg_split('/' . self::SYMBOL . '/m', $input, null, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
            return $exploded;
      }

      /**
       * 
       * @param string $word String to be translated
       * @return string
       */
      public function translateWord($word)
      {
            /* checks if word is number or starts with number. If yes, return as it is */
            if ($this->recognizeWord(self::NUMBER, $word))
                  return $word;
            /* checks if word belongs to array of words starting with silent consonants. If yes return word in format "word-vowel_suffix" */
            elseif ($this->isSilent($word))
                  return ($word . '-' . self::VOWELS_SUFFIX);
            /* checks if word starts with vowel. If yes, return in format $1$2-vowel_suffix */
            elseif ($this->recognizeWord(self::VOWEL_WORD, $word))
                  return preg_replace(self::VOWEL_WORD, '$1$2-' . self::VOWELS_SUFFIX, $word);
            /* checks if words starts with an exception. If yes, return in format $2-$1ay */
            elseif ($this->recognizeWord(self::EXCEPTION_WORDS, $word))
                  return preg_replace(self::EXCEPTION_WORDS, '$2-$1ay', $word);
            /* checks if word starts with consonant. if yes, return in format $2-$1ay */
            elseif ($this->recognizeWord(self::CONSONANT_WORD, $word))
                  return preg_replace(self::CONSONANT_WORD, '$2-$1ay', $word);
      }

}
