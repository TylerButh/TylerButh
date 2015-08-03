<?php

$experience = array();
$contents = scandir('../portfolio');
for ($i=0;$i<count($contents);$i++) {
    if (is_dir('../portfolio/'. $contents[$i]) && !in_array($contents[$i], array('..','.'))) {
        require('../portfolio/'. $contents[$i] .'/index.php');
        $info['folder'] = $contents[$i];
        ksort($info['skills']);
        $experience[] = $info;
        unset($info);
    }
}
header('Content-Type: application/json');
echo ")]}',\n". json_encode($experience);

?>
