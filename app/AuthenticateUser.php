<?php namespace App;
use App\Repositories\UserRepository;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthenticateUser {
	/**
	 * @var UserRepository
	 */
	private $users;
	/**
	 * @var Socialite
	 */
	private $socialite;
	/**
	 * @param UserRepository $users
	 * @param Socialite $socialite
	 */
	public function __construct(UserRepository $users, Socialite $socialite) {
		$this->users = $users;
		$this->socialite = $socialite;
	}
	/**
	 * @param boolean $hasCode
	 * @param AuthenticateUserListener $listener
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function execute($hasCode, AuthenticateUserListener $listener, $provider) {
		if (!$hasCode) {
			return $this->getAuthorizationFirst($provider);
		}

		$user = $this->users->findByEmailOrCreate($this->getSocialUser($provider));
		\Auth::login($user, true);
		return $listener->userHasLoggedIn($user);
	}
	/**
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	private function getAuthorizationFirst($provider = 'google') {
		return $this->socialite->driver($provider)->redirect();
	}
	/**
	 * @return \Laravel\Socialite\Contracts\User
	 */
	private function getSocialUser($provider = 'google') {
		return $this->socialite->driver($provider)->user();
	}
}