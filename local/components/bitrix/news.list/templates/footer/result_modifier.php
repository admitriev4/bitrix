<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>

<? foreach ($arResult["ITEMS"] as $arItem) {
    $arrDateActive = explode(" ", $arItem['ACTIVE_FROM']);
    $dateNow = date("d.m.Y");
    $timeAgo = null;
        $dateActive = explode(".", $arrDateActive[0]);
        $arrDateNow = explode(".", $dateNow);

        if ($arrDateNow[2] > $dateActive[2]) {
            $year = $arrDateNow[2] - $dateActive[2];
            $timeAgo = $year . " year(s) ago";
        } elseif ($arrDateNow[2] == $dateActive[2]) {
            if ($arrDateNow[1] > $dateActive[1]) {
                $month = $arrDateNow[1] - $dateActive[1];
                $timeAgo = $month . " month(s) ago";
            } elseif ($arrDateNow[1] == $dateActive[1]) {
                if ($arrDateNow[0] > $dateActive[0]) {
                    $day = $arrDateNow[0] - $dateActive[0];
                    $timeAgo = $day . " day(s) ago";
                }
            }
        }
     if ($timeAgo == null) {
        $timeNow = date("H:i:s");
        $timeActive = explode(":", $arrDateActive[1]);
        $arrTimeNow = explode(":", $timeNow);

        if ($arrTimeNow[0] > $timeActive[0]) {
            $hour = $arrTimeNow[0] - $timeActive[0];
            $timeAgo = $hour . " hour(s) ago";
        } elseif ($arrTimeNow[0] == $timeActive[0]) {
            if ($arrTimeNow[1] > $timeActive[1]) {
                $min = $arrTimeNow[1] - $timeActive[1];
                $timeAgo = $min . " min(s) ago";
            } elseif ($arrDateNow[1] == $dateActive[1]) {
                $timeAgo = "Now";
            }
        }
    }

    $arItem['PROPERTIES']['TIME']['VALUE'] = $timeAgo;
     $modArItems[] = $arItem;
}
if(!empty($modArItems)) {
    $arResult["ITEMS"] = $modArItems;
}

