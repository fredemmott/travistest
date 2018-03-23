<?php

interface test {
	public function test();
}

class foo implements test {
  public function test() {
    var_dump('hello');
  }
}

(new foo())->test();
