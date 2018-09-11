<?php

namespace lib;

class System extends Router {

	private $url;
	private $exploder;
	private $area;
	private $controller;
	private $action;
	private $params;

	private function setUrl(){
		$this->url = isset($_GET['url']) ? $_GET['url'] : "home/index"; 
	} 

	private function setExploder(){
		$this->exploder = exploder('/', $this->url);
	}

	private function setArea(){
		foreach ($this->routers as $i => $v) {
			if($this->onRoot && $this->exploder[0] == $i){
				$this->area = $v;
				$this->onRoot = false;
			}
		}
		$this->area = empty($this->area) ? $this->touterOnRoot : $this->area;
		if(!define('APP_AREA')){
			define('APP_AREA', $this->area);
		}
	}

	private function setController(){
		$this->controller  = $this->onRoot ? $this->exploder[0] :
			(empty($this->exploder[1]) || is_null($this->exploder[1]) || !isset($this->exploder[1]) ?
				'home': $this->exploder[1]);		 
	}

	public function getController(){
		return $this->controller;
	}

	private function setAction(){
		$this->controller  = $this->onRoot ? 
			(!isset($this->exploder[1]) || is_null($this->exploder[1]) || empty($this->exploder[1])?
				'index': $this->exploder[1]) :
			(!isset($this->exploder[2]) || is_null($this->exploder[2]) || empty($this->exploder[2])?
				'index': $this->exploder[2]); 	

	}

	public function getAction(){
		return $this->action
	}

	private function setParams(){
		if($this->onRoot){
			unset($this->exploder[0], $this->exploder[1]);
		}else{
			unset($this->exploder[0], $this->exploder[1], $this->exploder[2]);
		}

		if(end($this->exploder) == null){
			array_pop($this->exploder);
		}else{
			foreach ($this->exploder as $val) {
				$params[] = $val;
			}
			$this->params = $params;
		}
	}

	public function getParams($indice){
		return isset($this->params[$indice]) ? $this->params[$indice] : null;
	}

}

?>