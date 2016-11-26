<?php
use \Model\Authenticate;
class Controller_Authenticate extends Controller
{
    public function action_forgot() {

    }

    public function action_register() {
		// was the registration form posted?
	    if (Input::post()) {
        try {
            // call Auth to create this user
            $created = \Auth::create_user(
                Input::post('username'),
                Input::post('password'),
                Input::post('email'),
                1
            );

            // if a user was created succesfully
            if ($created)
            {
                Auth::force_login($created);
                Authenticate::process_login();
                \Response::redirect_back();
            }
            else
            {
                \Messages::error("We've encountered an unknow error. Please contact us immediately if you feel this is a mistake. The error has been recorded and our team of hackers will take a look ASAP.");
            }
        }

        // catch exceptions from the create_user() call
        catch (\SimpleUserUpdateException $e)
        {
            // duplicate email address
            if ($e->getCode() == 2)
            {
                \Messages::error("We've already got a citizen with this email address. Any chance you <a href='" . Uri::create('authenticate/forgot') . "'>forgot your authentication</a> details?");
            }

            // duplicate username
            elseif ($e->getCode() == 3)
            {
                \Messages::error("We've already got a citizen with this name. Any chance you <a href='" . Uri::create('authenticate/forgot') . "'>Forgot your authentication</a> details?");
            }

            // this can't happen, but you'll never know...
            else
            {
                \Messages::error($e->getMessage());
            }
        }
    }
		return View::forge('authenticate/register');
	}

	public function action_logout()
	{
	    // remove the remember-me cookie, we logged-out on purpose
	    \Auth::dont_remember_me();

	    // logout
	    \Auth::logout();

        if (\Auth::get('emergency_logout')) {
            return Response::redirect(\Auth::get('emergency_logout'));
        }
	    \Response::redirect_back();
	}
}
