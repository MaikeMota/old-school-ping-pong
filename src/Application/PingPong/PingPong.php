<?php
    declare(strict_types=1);

namespace Application\PingPong;

/**
 *  Controlls a Ping Pong old school game
 */
final class GameController  {

    /**
     * Calculates who is the next player based on the score
     * @param string $score the current score of the players separated by a ':'
     * @return string "jogador a" or "jogador b" 
     */
    public static function getNextPlayer(string $score): string {
        $scores = explode(':', $score);
        $scorePlayerA =  intval($scores[0]);
        $scorePlayerB =  intval($scores[1]);

        $totalScore = $scorePlayerA + $scorePlayerB;
        $isPlayerA = true;
        while($totalScore) {
            if($totalScore > 40){
                if($totalScore % 2 == 0)
                    $isPlayerA = !$isPlayerA;
            }else {                
                if ($totalScore % 5 == 0) 
                    $isPlayerA = !$isPlayerA;
            }
            $totalScore--;
        }
        return $isPlayerA ? "jogador a": "jogador b";      
    }

}