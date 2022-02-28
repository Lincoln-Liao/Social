<?php
/**
 * Created by MissionCenter.
 * User: Sphinx Kuo
 * Date: 2/21/17
 * Time: 4:46 PM
 */

namespace App\General;


use Carbon\Carbon;

trait EntityOperations {

	/**
	 * @var \Eloquent $Entity
	 */
	protected $Entity;

	public function valid_period(){
		$now = Carbon::now()->timestamp;
		$this->Entity = $this->Entity
			->where('start_time','<=',$now)
			->where('end_time','>',$now);
		return $this;
	}

	public function take($num){
		$this->Entity =  $this->Entity->take($num);
		return $this;
	}

	public function skip($offset){
		$this->Entity = $this->Entity->skip($offset);
		return $this;
	}

	public function get(){
		return $this->Entity->get();
	}

	public function first(){
		return $this->Entity->first();
	}

    public function firstOrFail(){
        return $this->Entity->firstOrFail();
    }

	public function all(){
		return $this->Entity->all();
	}

	public function groupBy($field){
		$this->Entity = $this->Entity->groupBy([$field]);
		return $this;
	}

	public function search($field, $term){
		$this->Entity = $this->Entity->orWhere($field,'like','%'.$term.'%');
		return $this;
	}

	public function strict_search($field, $term){
		$this->Entity = $this->Entity->where($field,$term);
		return $this;
	}
}
