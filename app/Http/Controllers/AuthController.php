<?php
namespace App\Http\Controllers;

use Invisnik\LaravelSteamAuth\SteamAuth;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * @var SteamAuth
     */
    private $steam;

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    public function login()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();
            if (!is_null($info)) {
                $user = User::where('steamid', $info->getSteamID64())->first();
                if (is_null($user)) {
                    // database acts as a whitelist of allowed users
                    // $user = User::create([
                    //     'name' => $info->getNick(),
                    //     'avatar'   => $info->getProfilePictureFull(),
                    //     'steamid'  => $info->getSteamID64()
                    // ]);
                    return abort(403, 'Unauthorized user.');
                }
                Auth::login($user, true);
                return redirect('/users'); // redirect to site
            }
        }
        return $this->steam->redirect(); // redirect to Steam login page
    }
}