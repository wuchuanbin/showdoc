<?php


/**
 * 获得当前的域名
 *
 * @return  string
 */
function get_domain()
{
    /* 协议 */
    $protocol = (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off')) ? 'https://' : 'http://';

    /* 域名或IP地址 */
    if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
    {
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    }
    elseif (isset($_SERVER['HTTP_HOST']))
    {
        $host = $_SERVER['HTTP_HOST'];
    }
    else
    {
        /* 端口 */
        if (isset($_SERVER['SERVER_PORT']))
        {
            $port = ':' . $_SERVER['SERVER_PORT'];

            if ((':80' == $port && 'http://' == $protocol) || (':443' == $port && 'https://' == $protocol))
            {
                $port = '';
            }
        }
        else
        {
            $port = '';
        }

        if (isset($_SERVER['SERVER_NAME']))
        {
            $host = $_SERVER['SERVER_NAME'] . $port;
        }
        elseif (isset($_SERVER['SERVER_ADDR']))
        {
            $host = $_SERVER['SERVER_ADDR'] . $port;
        }
    }

    return $protocol . $host;
}

/**
 * 获得网站的URL地址
 *
 * @return  string
 */
function site_url()
{
    return get_domain() . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
}


//导出称word
function output_word($html,$fileName=''){

    if(empty($html)) return '';

    $data = '
        <html xmlns:v="urn:schemas-microsoft-com:vml"
        xmlns:o="urn:schemas-microsoft-com:office:office"
        xmlns:w="urn:schemas-microsoft-com:office:word"
        xmlns="http://www.w3.org/TR/REC-html40">
        <head><meta http-equiv=Content-Type content="text/html;  
        charset=utf-8">
        <meta name=ProgId content=Word.Document>
        <meta name=Generator content="Microsoft Word 11">
        <meta name=Originator content="Microsoft Word 11">
        <xml><w:WordDocument><w:View>Print</w:View></xml></head>
        <body>'.$html.'</body></html>';
    
    $filepath = tmpfile();
    $len = strlen($data);
    // echo $len;die;
    //生成到文档保存区 跳转http下载
    file_put_contents('/home/wwwroot/apidoc/export/'.$fileName.'.doc', $data);
    $filename=realpath('/home/wwwroot/apidoc/export/'.$fileName.'.doc'); //文件名
    // echo '/home/wwwroot/apidoc/export/'.$fileName.'.doc';


    // echo $filename;die;
     $date=date("Ymd-H:i:m");
     Header( "Content-type:  application/octet-stream "); 
     Header( "Accept-Ranges:  bytes "); 
    Header( "Accept-Length: " .filesize($filename));
     header( "Content-Disposition:  attachment;  filename= {$fileName}.doc"); 
     echo file_get_contents($filename);
     readfile($filename);
    // fwrite($filepath, $data);
    // header("Content-type: application/octet-stream");
    // header("Content-Disposition: attachment; filename={$fileName}.doc");
    // header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    // header('Content-Disposition: attachment; filename='.$fileName.'.doc');
    // header('Content-Transfer-Encoding: binary');
    // header('Expires: 0');
    // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    // header('Pragma: public');
    // header('Content-Length: ' . $len);
    // rewind($filepath);
    // echo fread($filepath,$len);
}