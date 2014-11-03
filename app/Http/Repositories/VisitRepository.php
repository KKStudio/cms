<?php namespace App\Http\Repositories;

class VisitRepository {

	public function count() {

		$query = \DB::table('kkstudio_visits')
                 ->select('abbr', \DB::raw('count(id) as total'))
                 ->groupBy('abbr')
                 ->get();

		return $query;

	}

}