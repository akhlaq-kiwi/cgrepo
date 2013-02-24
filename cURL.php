<?php
class cURL { 

     var $headers;
    
     var $user_agent;
  
     var $compression;
   
     var $cookie_file;
    
     var $proxy;
	 var $proxy_ip;
	 var $loginpassw;
	 var $proxy_port;
   
     function cURL($cookies=TRUE,$cookie='cookies.txt',$compression='gzip',$proxy='') {
           $this->headers[] = "Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg,text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
           $this->headers[] = "Connection: Keep-Alive";
           $this->headers[] = "Charset: UTF-8";
		   $this->headers[] = "Content-type: application/x-www-form-urlencoded";
           $this->user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)";
           $this->compression=$compression;
           $this->proxy=$proxy;
           $this->cookies=$cookies;
           if ($this->cookies == TRUE) $this->cookie($cookie); 
     }
    
     function cookie($cookie_file) {
          if (file_exists($cookie_file)) {
                $this->cookie_file=$cookie_file;
          } else { 
                @fopen($cookie_file,'w') or $this->error("The cookie file could not be opened. Make sure this directory has the correct permissions");
                $this->cookie_file=$cookie_file;
                fclose($cookie_file);
          }
     }
    
     function get($url,$refer='') {

          $options = array(
        CURLOPT_RETURNTRANSFER => true,         		// return web page
        CURLOPT_HEADER         => $this->headers,       // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         		// follow redirects
        CURLOPT_REFERER => $refer,         				// follow redirects
      //  CURLOPT_ENCODING       => "",           		// handle all encodings
        CURLOPT_USERAGENT      => $this->user_agent,    // who am i
        CURLOPT_COOKIEFILE      => $this->cookie_file,  // who am i
        CURLOPT_COOKIEJAR      => $this->cookie_file,   // who am i
      //  CURLOPT_AUTOREFERER    => true,         		// set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          		// timeout on connect
        CURLOPT_TIMEOUT        => 240,          		// timeout on response
        CURLOPT_MAXREDIRS      => 30,           		// stop after 10 redirects
       # CURLOPT_POST            => 1,            		// i am sending post data
       # CURLOPT_POSTFIELDS     => $data,    			// this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            		// don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        		//
        CURLOPT_VERBOSE        => 1,  
		CURLOPT_PROXYPORT => $this->proxy_port,
		CURLOPT_PROXY => $this->proxy_ip,
		CURLOPT_PROXYUSERPWD =>$this->loginpassw
    );
		// echo $this->proxy_port;
		// echo $this->proxy_ip;
		// echo $this->loginpassw;

        $ch  = curl_init($url);
        curl_setopt_array($ch,$options);
        $content = curl_exec($ch);
 
    curl_close($ch);

    return $content; 
     }
   
     function post($url,$data,$refer) {
          $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => $this->headers,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_REFERER => $refer,         // follow redirects
      //  CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => $this->user_agent,     // who am i
        CURLOPT_COOKIEFILE      => $this->cookie_file,     // who am i
        CURLOPT_COOKIEJAR      => $this->cookie_file,     // who am i
      //  CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 240,          // timeout on response
        CURLOPT_MAXREDIRS      => 30,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
        CURLOPT_POSTFIELDS     => $data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1,    
		CURLOPT_PROXYPORT =>$this->proxy_port,
		CURLOPT_PROXY => $this->proxy_ip,
		CURLOPT_PROXYUSERPWD =>$this->loginpassw
    );
		//echo $this->proxy_port;
		//echo $this->proxy_ip;
		//echo $this->loginpassw;
		//exit;

    $ch  = curl_init($url);
    curl_setopt_array($ch,$options);
    $content = curl_exec($ch);
 
    curl_close($ch);

    return $content; 
     }
    
     function error($error) {
          echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>";
          die;
     }
}


?>