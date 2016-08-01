<?php

namespace Log;

class LogWrapper {
  public function __construct($name) {
		$this->wrapped = \Logger::getLogger($name);
	}

  public function trace($message, $throwable = null) {
		try { @($this->wrapped->trace($message, $throwable)); } catch (\Exception $e) { }
	}

	public function debug($message, $throwable = null) {
		try { @($this->wrapped->debug($message, $throwable)); } catch (\Exception $e) { }
	}

	public function info($message, $throwable = null) {
		try { @($this->wrapped->info($message, $throwable)); } catch (\Exception $e) { }
	}

	public function warn($message, $throwable = null) {
		try { @($this->wrapped->warn($message, $throwable)); } catch (\Exception $e) { }
	}

	public function error($message, $throwable = null) {
		try { @($this->wrapped->error($message, $throwable)); } catch (\Exception $e) { }
	}

	public function fatal($message, $throwable = null) {
		try { @($this->wrapped->fatal($message, $throwable)); } catch (\Exception $e) { }
	}
}
