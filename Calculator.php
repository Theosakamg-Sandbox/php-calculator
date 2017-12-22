<?php
include_once 'php-add-lib/AddCommand.php';
include_once 'php-multi-lib/MultiCommand.php';

class Calculator
{
    public function run() : void {
        $line = 0;

        while($line != "3") {

            echo "Command available :\n1:\tAdd\n2:\tMulti\n3:\tQuit\n";
            $line = readline("> ");

            switch ($line) {
                case "1":
                    $a = readline("> a: ");
                    $b = readline("> b: ");
                    $com = new AddCommand();
                    $c = $com->add($a, $b);
                    echo "c: $c\n";
                    break;
                case "2":
                    $a = readline("> a: ");
                    $b = readline("> b: ");
                    $com = new MultiCommand();
                    $c = $com->multi($a, $b);
                    echo "c: $c\n";
                    break;
                case 3:
                    break;
                default:
                    echo "Command not found ! Try again...\n";
            }
            echo "\n";

        }
    }
}

$cal = new Calculator();
$cal->run();
