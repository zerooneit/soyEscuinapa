<?php

function parseRSS($xml){
$cnt = count($xml->channel->item);
for($i=0; $i<$cnt; $i++)
{
$url = $xml->channel->item[$i]->link;
$title = $xml->channel->item[$i]->title;
$desc = $xml->channel->item[$i]->description;

echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'<br>';
}
}

function parseAtom($xml){
$cnt = count($xml->entry);
for($i=0; $i<$cnt; $i++)
{
$urlAtt = $xml->entry->link[$i]->attributes();
$url = $urlAtt['href'];
$title = $xml->entry->title;
$desc = strip_tags($xml->entry->content);

echo '<a href="'.$url.'">'.$title.'</a>'.$desc;

}
}


$opts= array(
	'method' => 'GET',
	'user_agent'=>    $_SERVER['HTTP_USER_AGENT'] 
);

$context = stream_context_create($opts);

$data = file_get_contents($_GET['url'],false,$context);


echo $data;


$doc = new SimpleXmlElement($data, LIBXML_NOCDATA);

if(isset($doc->channel)) parseRSS($doc);
if(isset($doc->entry)) parseAtom($doc);
?>