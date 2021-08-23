<?php

if ($content)
{
    $this->load->view($content);
}
else
{
    echo "Invalid Content";
}

?>