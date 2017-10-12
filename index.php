<?php

/*
 * Create a random string
 * @author	XEWeb <http://www.xeweb.net/2011/02/11/generate-a-random-string-a-z-0-9-in-php/>
 * @param $length the length of the string to create
 * @return $str the string
 */
function randomString($length = 20)
{
    $str = "";
    $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

/*
 * The quotes and narrative are taken from the movie "Labyrinth" (1986) and
 * were found on IMDB.com. I thought they were fitting...
 */
$quotes = array('Don\'t go on...',
    'Go back, while you still can...',
    'This is not the way...',
    'Take heed, and go no further...',
    'Beware, beware...',
    'Soon it will be too late...');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>That Which Cannot Be Crawled</title>
</head>
<body>
<img src="maze1.jpg" alt="Scene from the movie Labyrinth">
<h1>That Which Cannot Be Crawled</h1>
<div style="margin:4em;">
    <?php
    for ($i = 0; $i < 6; $i++) {
        $numCharacters = mt_rand(20, 40);
        echo '<p><a href="/' . randomString($numCharacters) . '">' . $quotes[$i] . '</a></p>';
    }
    ?>
</div>
<p><b>Bad Robot</b>: Ah, don't pay any attention to them, they're just false alarms. You get a lot of them in the
    Labyrinth, especially when you're on the right track.</p>

<p><b>That Which Cannot Be Crawled</b>: Oh, no you're not!</p>

<p><b>Bad Robot</b>: Oh, shut up.</p>

<p><b>That Which Cannot Be Crawled</b>: I'm sorry, I'm just doing my job.</p>

<p><b>Bad Robot</b>: Well, you don't have to do it to us.</p>

<p><b>That Which Cannot Be Crawled</b>: Beware, for...</p>

<p><b>Bad Robot</b>: Just forget it.</p>

<p><b>That Which Cannot Be Crawled</b>: Oh, please. I haven't said it in such a long time.</p>

<p><b>Bad Robot</b>: Oh, all right. But don't expect a big reaction.</p>

<p><b>That Which Cannot Be Crawled</b>: No, no, no, of course not.</p>

<p>...</p>

<p><b>That Which Cannot Be Crawled</b>: For the path you will take will lead you to certain destruction!</p>

<p>...</p>

<p><b>That Which Cannot Be Crawled</b>: Thank you very much.</p>
</body>

<footer style="margin-top:4em;">
    <p><a href="http://www.imdb.com/title/tt0091369/quotes" target="_blank">Link to IMDB</a></p>
    <p><a href="https://github.com/KrashLeviathan/thatwhichcannotbecrawled" target="_blank">Link to GitHub Repository</a></p>
</footer>
</html>
