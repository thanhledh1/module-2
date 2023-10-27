<?php
class Country {
    public $name;
    public $totalGoldMedals;

    public function __construct($name, $totalGoldMedals) {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }
}

// Danh sách các quốc gia
$countries = array(
    new Country("USA", 39),
    new Country("China", 38),
    new Country("Japan", 27),
    new Country("Australia", 17),
    new Country("Germany", 10)
);

// $countries = [
//     ["name" => "USA", "totalGoldMedals" => 39],
//     ["name" => "China", "totalGoldMedals" =>38],
//     ["name" => "Japan", "totalGoldMedals" => 27],
//     ["name" => "Australia", "totalGoldMedals" =>17],
//     ["name" => "Germany", "totalGoldMedals " => 10]
// ];




    echo "<pre>";

print_r($countries);

// Hàm sắp xếp danh sách quốc gia theo huy chương vàng giảm dần
function sortCountriesByGoldMedals($countries) {
    usort($countries, function($a, $b) {
        return $b->totalGoldMedals - $a->totalGoldMedals;
    });
    return $countries;
}

// Sắp xếp danh sách quốc gia theo huy chương vàng giảm dần
$sortedCountries = sortCountriesByGoldMedals($countries);

// In danh sách quốc gia đã sắp xếp
foreach ($sortedCountries as $country) {
    echo $country->name . " - " . $country->totalGoldMedals . " gold medals" . PHP_EOL;
}