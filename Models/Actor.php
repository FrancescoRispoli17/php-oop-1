<?php 

class Actor{

    public function __construct(private string $name, private string $surname, private string $nationality)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->nationality=$nationality;
    }
    public function __destruct()
    {
        
    }
    public function getName() :string
    {
        return $this->name;
    }
    public function setName($text) :void
    {
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->name=$text;
    }
    public function getSurname() :string
    {
        return $this->surname;
    }
    public function setSurname($text) :void
    {
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->surname=$text;
    }
    public function getNationality() :string
    {
        return $this->nationality;
    }
    public function setNationality($text) :void
    {
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->nationality=$text;
    }
}

?>