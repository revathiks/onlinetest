<?php

class Thesaurus
{
    private $thesaurus;

    function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string
    {
		$result=array();
		($this->thesaurus);
		$result['word']=$word;
		$result['synonyms']=[];
		if(array_key_exists($word,$this->thesaurus)){
		$result['synonyms']=$this->thesaurus[$word];
		}
		
        return json_encode($result);
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");