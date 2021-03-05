<?php
namespace EmployeesApp;
class Render{
    static public function printData($data){
        foreach ($data as $value){
            echo "<td>$value<?td>";
        }
    }
}
