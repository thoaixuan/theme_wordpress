<?php
// Add custom Theme Functions here
//Keyword In đậm nội dung 
function thoaixuan_content_filter( $content ) {
	$find = array("", "", "");
	$arrlength = count($find);

	for($x = 0; $x < $arrlength; $x++) {
		//echo $cars[$x];
	$replacement = "<strong>".$find[$x]."</strong>";
    $content = str_replace( $find[$x], $replacement, $content );
    
	}

	return $content;
}
add_filter( 'the_content', 'thoaixuan_content_filter' );

function your_function() {
	//Only add script js 
  }
add_action('get_footer', 'your_function');

//Change name footer
function thoaixuan_change_copyright( $output ) {
    $output = 'Design by WordPress';
    return $output;
}
add_filter( 'thoaixuan_copyright', 'thoaixuan_change_copyright' );
//----------------------------------------------------------------
