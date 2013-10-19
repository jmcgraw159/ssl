<?
$xmlStr = file_get_contents("http://api.feedzilla.com/v1/categories/8/articles.json?count=6");
$data = json_decode($xmlStr, true);

foreach($data['articles'] as $r){
	echo '<a href="'.$r['url'].'">'.$r['title'].'</a><br>';
}
?>