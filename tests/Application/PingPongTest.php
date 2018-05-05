<?php 
    declare(strict_types=1);

namespace Application\PingPong\Test;

use PHPUnit\Framework\TestCase;
use Application\PingPong\GameController;


/**
 * Unit test for PingPongController
 */
final class PingPongTest extends TestCase {

    /**
     * Test for score 0:0
     */
    public function test0X0ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("0:0"),
            "jogador a"
        );
    }

    /**
     * Test for score 3:2
     */
    public function test3X2ShouldBePlayerB() {
        $this->assertEquals(
            GameController::getNextPlayer("3:2"),
            "jogador b"
        );
    }

    /**
     * Test for score 7:3
     */
    public function test7X3ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("7:3"),
            "jogador a"
        );
    }

    /**
     * Test for score 3:7
     */
    public function test3X7ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("3:7"),
            "jogador a"
        );
    }

    /**
     * Test for score 15:7
     */
    public function test15x7ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("15:7"),
            "jogador a"
        );
    }

    /**
     * Test for score 7:15
     */
    public function test7x15ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("7:15"),
            "jogador a"
        );
    }

    /**
     * Test for score 21:20
     */
    public function test21X20ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("21:20"),
            "jogador a"
        );
    }

    /**
     * Test for score 21:22
     */
    public function test21X22ShouldBePlayerB() {
        $this->assertEquals(
            GameController::getNextPlayer("21:22"),
            "jogador b"
        );
    }

    /**
     * Test for score 25:26
     */
    public function test25X26ShouldBePlayerB() {
        $this->assertEquals(
            GameController::getNextPlayer("25:26"),
            "jogador b"
        );
    }

    /**
     * Test for score 27:25
     */
    public function test27X25ShouldBePlayerA() {
        $this->assertEquals(
            GameController::getNextPlayer("27:25"),
            "jogador a"
        );
    }    
}
