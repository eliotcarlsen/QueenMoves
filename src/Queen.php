<?php
    class Queen
    {
        public $file;
        public $rank;

        function __construct ($file, $rank) {
            $this->file = $file;
            $this->rank = $rank;
        }

        function canAttack($x_coor_file, $y_coor_rank) {
            if (($this->file == $x_coor_file) || ($this->rank == $y_coor_rank)) {
                return true;
            } elseif (abs($this->file - $x_coor_file) == abs($this->rank - $y_coor_rank)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
