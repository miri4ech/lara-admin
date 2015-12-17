<?php namespace App\Repositories;
use App\User;

class UserRepository {
	/**
	 * @param $userData
	 * @return static
	 */
	public function findByEmailOrCreate($userData) {
		return User::firstOrCreate([
			'email' => $userData->email,
		]);
	}
}