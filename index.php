<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/*$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');*/

/*$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load("demo.xlsx");

$data = $spreadsheet->getActiveSheet()->toArray();*/
$text = $_POST['text'];
$data = explode("\n", str_replace("\r", '', $text));

foreach($data as $key => $item) {
    if($key>0) {
        if ($item[0] != NULL) {
            $new_item = explode(' ', $item[0]);

            foreach($new_item as $new) {
                $words[$new][] = $new;
            }
        }
    }
}
array_multisort($words, SORT_DESC);
//$words = array_reverse($words);

//foreach -> arr[count(items)]= ...

var_dump($words);
exit();
$aa = array_multisort(array_map('count', $words), SORT_DESC, $words);

var_dump($aa);