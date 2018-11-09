<?php

// TestDome Question
// https://www.testdome.com/questions/php/user-input/15404?visibility=1&skillId=5
/*
The user interface contains two types of user input controls: TextInput, which accepts all texts and NumericInput, which accepts only digits.

Implement the class TextInput that contains:

Public function add($text) - adds the given text to the current value.
Public function getValue() - returns the current value (string).
Implement the class NumericInput that:

Inherits from TextInput.
Overrides the add method so that each non-numeric text is ignored.
*/

// Solution

class TextInput
{
    protected $save = [];
        
    public function add($text)
    {
        return $text;
    }
    
    public function getValue()
    {
        return $this->save;
    }
    
}

class NumericInput extends TextInput
{
    public function add($value)
    {
        if (is_numeric($value)) {
            $this->save[] = $value;
        }
    }
    
    public function getValue() 
    {
        return implode('', $this->save);
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();

?>