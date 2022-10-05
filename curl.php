<?php
/**
* Client URL
* Important functions
*/
// Create cURL resource
// curl_init();   Used to initialize curl

// Set cURL options
// curl_setopt(); Used to send data of curl

// Run cURL (Execute HTTP request)
// curl_exec();   Used to execute the Curl

// Close cURL resource
// curl_close();  Used to close curl




// Example: Hitting a simple domain to retrieve data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/todos/1");
curl_exec($ch);
curl_close($ch);



// Example: Hitting a simple domain to retrieve data & Save to variable
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/todos/1");
curl_setopt($ch, CURLOPT_RETURNTRANSAFER, true);
$result = curl_exec($ch);
print_r($result);
curl_close($ch);



// Pull and save Image from any domain
$url = "https://images.unsplash.com/photo-1664902276790-90624a60ff47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80";
$image = "image.jpg";
$fimage = fopen($image, 'w+');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fimage);
curl_setopt($ch, CURLOPT_TIMEOUT, 1000); // This is to set timeout
curl_exec($ch);
curl_close($ch);
fclose($fimage);



// Pass an array to another file by curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/php-practise/index.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$arr = array("name" => "Shovon")
curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
$result = curl_exec($ch);
print_r($result);
curl_close($ch);
/**
* In the file this have to be inserted for the above case -
*/
echo '<pre>';
print_r($_POST);



// Scrapping any website URL by curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://www.daraz.com.bd/catalog/?q=mouse+2022&_keyori=ss&from=input&spm=a2a0e.home.search.go.735212f7zdA3K9');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // This option is to load the secure urls with https
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result=curl_exec($curl);
//	echo $result;
	preg_match_all("!https://static-01.daraz.com.bd/p/[^\s]*?.jpg!",$result, $matches );
//	print_r($matches);
	$images = array_values(array_unique($matches[0]));
//	print_r($images);

	for($i=0; $i < count($images); $i++){
		echo "<div style='float: left; margin: 10 0 0 0 ;'>";
		echo "<img style='width: 100px; height: 100px; margin-left: 10px;' src='$images[$i]'><br />";
		echo "</div>";
	}
?>
