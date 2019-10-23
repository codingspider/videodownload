<?php


	if(@$_COOKIE["_lang_shareplus"]!='') {
		$tipo = @$_COOKIE["_lang_shareplus"];
	}else{
		$tipo = $config['lang'];
	}

	switch ($tipo) {
		case 'chinese':
			$text_media 	= '下載Facebook視頻';
			$text_media_two = 'Facebook視頻下載器是一個免費的工具，可以在線下載任何Facebook視頻。';
		break;
		case 'english':
			$text_media 	= 'Download Facebook videos';
			$text_media_two = 'The Facebook video downloader is a free tool to download any Facebook video online.';
		break;
		case 'French':
			$text_media 	= 'Téléchargez les vidéos Facebook';
			$text_media_two = 'Description des vidéos Facebook es una herramienta gratuitement pour télécharger des vidéos cualquier de Facebook en ligne.';
		break;
		case 'german':
			$text_media 	= 'Laden Sie Facebook-Videos herunter';
			$text_media_two = 'Die Video-Facebook ist ein kostenloses Video-Facebook für die Installation.';
		break;
		case 'Italian':
			$text_media 	= 'Scarica i video di Facebook';
			$text_media_two = 'L&#39Facebook video downloader è uno strumento gratuito per scaricare qualsiasi video Facebook online.';
		break;
		case 'portuguese':
			$text_media 	= 'Download de vídeos do Facebook...';
			$text_media_two = 'O Facebook video downloader é uma ferramenta gratuita para baixar qualquer vídeo online do Facebook';
		break;
		case 'russian':
			$text_media 	= 'Скачать видео в Facebook';
			$text_media_two = 'Загрузчик видео Facebook - это бесплатный инструмент для загрузки любого онлайн видео Facebook.';
		break;
		case 'spanish':
			$text_media 	= 'Descargar videos de Facebook';
			$text_media_two = 'El descargador de videos de Facebook es una herramienta gratuita para descargar cualquier video de Facebook en línea.';
		break;
		case 'turkish':
			$text_media 	= 'Facebook videoları indir';
			$text_media_two = 'Facebook video downloader, herhangi bir Facebook videosunu çevrimiçi olarak indirmek için ücretsiz bir araçtır.';
		break;
		default: 
			$text_media 	= $lang->Text_1;
			$text_media_two = '';
		break;
	}

?>