<?php
include_once 'php-add-lib/AddCommand.php';
include_once 'php-multi-lib/MultiCommand.php';

class Calculator
{
    public function run() {
        $line = 0;

        while($line != "3") {

            echo "Command available :\n1:\tAdd\n2:\tMulti\n3:\tQuit\n";
            $line = readline("> ");

            if ($line == "1" || $line == "2") {
                $a = readline("> a: ");
                $b = readline("> b: ");

                switch ($line) {
                    case "1":
                        $com = new AddCommand($a);
                        break;
                    case "2":
                        $com = new MultiCommand($a);
                        break;
                    default:
                }
                $c = $com->do($b);
                echo "c: $c\n";

            } else if ($line != "3") {
                echo "Command not found ! Try again...\n";
            }

            echo "\n";

        }
    }
}

$cal = new Calculator();
$cal->run();
