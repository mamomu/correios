<?php
/**
 * @author Lucas Rosa <root@lucasrosa.com.br>
 * Require Zend Framework Library
 */
set_time_limit( 0 );
mysql_connect("HOST", "USERNAME", "PASSWORD");
mysql_select_db("DATABASE");

require_once 'Zend/Mail.php';

$result = mysql_query("SELECT * FROM packages WHERE delivered = 0;");
while( $register = mysql_fetch_object($result) )
{
	$md5 = md5_file( $register->file );
	if( !empty($md5) && preg_match('/^[a-f0-9]{32}$/', $md5) && $register->md5 != $md5 )
	{
		echo "[", date("Y-m-d H:i:s"), "] ";
		echo $register->md5, " => ", $md5;
		$content = file_get_contents( $register->file );
		$content = str_replace('../correios/Img/correios.gif', 'http://websro.correios.com.br/correios/Img/correios.gif', $content);
		mysql_query("UPDATE packages SET
						md5 = '{$md5}',
						content = '" . mysql_real_escape_string($content) . "',
						modified = '" . date('Y-m-d H:i:s') . "'
					WHERE id = {$register->id}");

		$mail = new Zend_Mail();
		$mail->setBodyHtml( $content );
		$mail->setFrom('host@lucasrosa.com.br', 'Tracker | Lucas Rosa');
		$mail->addTo( $register->emails );
		$mail->setSubject( $register->title );
		$mail->send();
        echo "| E-mail OK\n";

    }
}
mysql_close();