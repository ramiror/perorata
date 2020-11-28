<?php

class Person {}
class Judge extends Person {}

class You {
    public function followAdvise() {
        $this->makeFriends(new Judge());
    }

    private function makeFriends(Person $someone) {
        // ...
    }
}
