<?php
namespace wujingquan\helper;
class Test
{ 
    public function xml($data = array())
    { 
        header("Content-type:application/json");
        echo '<?xml version="1.0" encoding="utf-8"?>';
        echo '<data>';
        foreach($data as $k => $v){ 
           echo "<{ $k}>$v</$k>";
        }
        echo '</data>';
        exit;
    }
    public function json($data = array())
    { 
        header("Content-type:application/json");
        echo json_encode($data);
        exit;
    }
}