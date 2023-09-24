<?php                               // 東京の時間とそれ以外の国時間を表示できるようにする
function searchCityTime($city_name)
{
    require('config/cities.php');        // 各国のデータのファイルを読み込む（何度でも）
    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
            // 指定された国の現在時刻を取得。DateTime で現在時刻を指定した時に同時に DateTimeZoneでタイムゾーンの指定をしている。
            $time = $date_time -> format('H:i');   // 出力形式の変換
            $city['time'] = $time;                 
            // 配列の追加。cities.phpの配列に$time、すなわち$date_time(指定された国の現在時刻)を表している

            return $city;
        }
    }
}