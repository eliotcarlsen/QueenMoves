<?php
    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase {

        function testCanAttack_file () {
            $test_queen_attack = new Queen(5, 1);
            $input_file = 5;
            $input_rank = 8;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(true, $result);
        }
        function testCanAttack_rank () {
            $test_queen_attack = new Queen(8,8);
            $input_file = 1;
            $input_rank = 8;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(true, $result);
        }
        function testCanAttackOneRankDiagonal () {
            $test_queen_attack = new Queen(3,5);
            $input_file = 2;
            $input_rank = 4;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(true, $result);
        }
        function testCanAttackTwoRankDiagonal () {
            $test_queen_attack = new Queen(3,5);
            $input_file = 5;
            $input_rank = 7;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(true, $result);
        }
        function testCanAttackThreeRankDiagonal () {
            $test_queen_attack = new Queen(4,4);
            $input_file = 1;
            $input_rank = 7;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(true, $result);
        }
        function testCanNotAttackOneRankTwoRows () {
            $test_queen_attack = new Queen(4,4);
            $input_file = 5;
            $input_rank = 6;

            $result = $test_queen_attack->canAttack($input_file, $input_rank);

            $this->assertEquals(false, $result);
        }
    }
?>
