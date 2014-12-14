<?php

class Timbroder_Stack_Helper_Callstack extends Mage_Core_Helper_Abstract
{
	private function get_callstack($delim="\n") {
		$dt = debug_backtrace();
		$cs = '';
		$count = count($dt);
		foreach ($dt as $t) {
			$cs .= '['. $count . '] ' . $t['file'] . ' line ' . $t['line'] . ' calls ' . $t['function'] . "()" . PHP_EOL;
			$count -= 1;
		}
		return $cs;
	}    
	
	public function toLog() {
		Mage::log($this->get_callstack());
	}
	
	public function toFirePhp() {
		$stack = $this->get_callstack();
		foreach (explode("\n", $stack) as $line) {
			Mage::helper('firephp')->send($line);
		}
	}
}