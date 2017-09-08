<?php 
    if ($_POST['record_save'] != '')
        {
            //echo "Есть запрос POST: record_save<br>";
            //echo $_POST . '<br>';
            //echo '<pre>';
            //print_r($_POST);
            //print_r(array_keys($_POST));
            //echo '</pre>';
            if (file_put_contents('record.txt', $_POST))
                {
                    
                    echo 'Рекорд успешно перезапиан.';
                }
            else
                {
                    echo 'Ошибка записи в файл.';
                }
        }
    else if ($_POST['load_save'] == 'load')
        {
            //echo "Есть запрос POST: load_save <br>";
            if($f = fopen("record.txt", "r"))
                {
                    // Читать построчно до конца файла
                    while(!feof($f)) 
                        { 
                            $text = fgets($f);
                            echo $text;
                        }
                    fclose($f);
                }
            else
                {
                    echo 'Ошибка чтения из файл.';
                }
        }
?>