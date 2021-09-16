<?php

if ($content)
{
    return $this->load->view($content);
}
else
{
    echo "Failed To Load Content";
}

?>