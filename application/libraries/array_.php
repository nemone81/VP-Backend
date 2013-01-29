<?php

class CI_tipologia
{
    public function getData()
    {
        return array(
        	1 => 'Standard',
        	2 => 'Universitario',
        	3 => 'Bambino'
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