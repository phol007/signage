<?php

move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'], 
       "images/{$_FILES['uploadFile'] ['name']}")


?>