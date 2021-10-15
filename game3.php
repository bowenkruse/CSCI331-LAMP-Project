<?php
require_once 'header.php';

if (!$loggedin)
    die("</div></body></html>");



echo <<<_END
<div class="center-screen">
<script src="https://cdn.htmlgames.com/embed.js?game=ConnectFour&amp;bgcolor=white"></script>
</div>
_END;


require_once 'footer.php';
