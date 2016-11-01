<?php
/* The following code will output a list of pagination links. You may want to change the class given to the <ul> – that will be in the second argument of preg_replace(); */

$links = paginate_links( [ 'type' => 'list' ] );
$links = str_replace( [ '<ul class=\'page-numbers\'', 'current', 'span' ], [ '<ul class="nav nav-pills"', 'active', 'a'], $links );
echo $links;
