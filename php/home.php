<?php

function echoCheckboxN($string, $id, $name)
{
    // echo "<div class=\"form-check m-3\">
    //                     <input class=\"form-check-input \" type=\"checkbox\" value=\"\" id=\"" . $id . "\">
    //                     <label class=\"form-check-label text-white\" for=\"" . $id . "\">
    //                         " . $string . "
    //                     </label>
    //                 </div>";

    echo "<input name=\"" . $name . "\" type=\"checkbox\" class=\"btn-check\" id=\"" . $id . "\" autocomplete=\"off\">
          <label class=\"btn text-white\" for=\"" . $id . "\"> ● " . $string . "</label><br>";

}

function echoCheckbox($string, $id)
{
    // echo "<div class=\"form-check m-3\">
    //                     <input class=\"form-check-input \" type=\"checkbox\" value=\"\" id=\"" . $id . "\">
    //                     <label class=\"form-check-label text-white\" for=\"" . $id . "\">
    //                         " . $string . "
    //                     </label>
    //                 </div>";

    echo "<input type=\"checkbox\" class=\"btn-check\" id=\"" . $id . "\" autocomplete=\"off\">
          <label class=\"btn text-white\" style=\"text-align:left;\" for=\"" . $id . "\"> ● " . $string . "</label><br>";

}

function echoRadio($string, $id, $name)
{
    echo "<div class=\"form-check m-3\">
                        <input name=\"" . $name . "\" class=\"form-check-input \" type=\"radio\" value=\"\" id=\"" . $id . "\">
                        <label class=\"form-check-label text-white\" for=\"" . $id . "\">
                            " . $string . "
                        </label>
                    </div>";

}

function echoImgRadio($url, $id, $name)
{
    echo "<input type=\"radio\" class=\"btn-check pics-select\" name=\"".$name."\" id=\"".$id."\" autocomplete=\"off\">
<label class=\"m-2 rounded-1 col-4 picL\" style=' height: 30vw; max-height:200px; background: url(\"images/".$url."\") no-repeat center center; background-size: cover; font-size:0;' for=\"".$id."\">p</label>";
}




?>