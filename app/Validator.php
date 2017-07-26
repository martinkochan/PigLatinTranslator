<?php

class Validator
{
      /**
       * Function checks users input data if they are valid for translation
       * @param string $input Users input data
       * @throws UserError When incorrect data for translation are inserted by user
       */
      public function validate($input)
      {     
            if (preg_match('/^[\s]+$/', $input))
                  throw new UserError('You did not enter anything. Please enter some words.');
            
            if (preg_match('/^[0-9\s]+$/', $input))
                  throw new UserError('You entered only number(s). Please enter some word.');
            
            if (preg_match('/^[\W]+$/', $input))
                  throw new UserError('You entered only some symbols. Please enter some words.');
            
            if (empty($input))
                  throw new UserError('You did not enter anything. Please enter some words.');
            
            if(!preg_match('/([a-zA-Z]+)/', $input))
                  throw new UserError('You did not enter any word. Please enter some words.');
      }
}
