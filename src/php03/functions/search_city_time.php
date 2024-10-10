<?php
function searchCityTime($city_name) {

    require('config/cities.php');
    foreach($cities as $city) {
        if($city['name'] === $city_name) {
            $date_time = new DateTime('',new DateTimeZone($city["time_zone"]));
            $time = $date_time->format('H:i');
            //php限定で、代入元があれば以下の書き方で、勝手にプロパティが作られる
            $city['time'] = $time;
            return $city;
        }
    }
}