<?php
ob_start(); /* template body */ ?><a name="bottom"></a>
</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>