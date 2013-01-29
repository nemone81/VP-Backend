<?php

class CI_tipologia
{
    public function getData()
    {
        return array(
        	'S' => 'Standard',
        	'U' => 'Universitario',
        	'B' => 'Bambino'
        );
    }

    public function getItalyRegions()
    {
        $return = $this->getData();
        return $return['Italy'];
    }

    public function getDataFromRegion($country, $region)
    {
    }

    public function getDataFromCountry($country)
    {
    }
}