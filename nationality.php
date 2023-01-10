<?php
class Nationality
{
    private string $nationalityName;
    
    
    public function __Construct(string $name)
    {
        $this->nationalityName = $name;
        
    }
    
    public function getNationalityName(): string
    {
        return $this->nationalityName;
    }
    
    public function setNationalityName(string $nationalityName): self
    {
        $this->nationalityName = $nationalityName;
        
        return $this;
    }  
    
    public function __toString()
    {
        return $this->nationalityName;
    }
    
    
}