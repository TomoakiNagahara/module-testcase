<?php
/**
 * module-testcase:/i18n/index.php
 *
 * @creation  2017-09-03
 * @version   1.0
 * @package   app-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$url = 'http://local.uqunie.com/api/i18n/translate/';
$data = [
	'test' => 1,
	'source' => 'en',
	'target' => 'ja',
	'string' => 'test',
];

//	...
$result = Curl::Post($url, $data);
D($result);

?>
<p data-i18n="true" data-lang="en">This is test of i18n.</p>
<div id="language-list-area"></div>
<script>
setTimeout(function(){
	var area = document.getElementById('language-list-area');
	var list = document.createElement('ol');
	var lang = localStorage.getItem('lang');
	var url  = '/api/i18n/language/';
	var post = {};
		post.lang = lang;
	this.xhr = $OP.Ajax(url, post, function(json){
		//	...
		if(!json.result || !json.result.language ){
			return;
		}

		//	...
		for(var i=0; i<json.result.language.length; i++){
			var code = json.result.language[i].code;
			var name = json.result.language[i].name;
			var item = document.createElement('li');
			var atag = document.createElement('a');
				atag.innerText = name;
				atag.setAttribute('href', '?lang=' + code);
			//	...
			item.appendChild(atag);
			list.appendChild(item);
		}
	});

	//	...
	area.appendChild(list);
}, 0);
</script>
<style>
#language-list-area {
	border: 1px solid black;
	margin:  1em;
	padding: 1em;
}

#language-list-area ol {
	word-wrap: break-word;
}

#language-list-area li {
	width: 12em;
	display: inline-block;
}
</style>
