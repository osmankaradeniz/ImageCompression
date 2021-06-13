<?php


class FilesLibrary{

    function deleteOlderFiles($path,$minut) {
        if ($handle = opendir($path)) {
            while (false !== ($file = readdir($handle))) {
                $filelastmodified = filemtime($path . $file);
                if((time() - $filelastmodified) > $minut*60)
                {
                    if(is_file($path . $file)) {
                        unlink($path . $file);
                    }
                }
            }
            closedir($handle);
        }
    }





}
