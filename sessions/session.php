<?php
	global sessionCourrante = new session();

	public class Session()
	{
		$estConnect = false;

		public function __construct()
		{
			session_start();

			if (isset($_SESSION['login'])) && !empty($_SESSION['login']))
			{
				$estConnect = true;
			}
		}

		public function estConnecte ()
		{
			return $estConnect;
		}

		public function enregistrer($login)
		{
			$_SESSION['login'] = $login;
		}
	}
?>