<?php

namespace Teachat\Http\Controllers\Admin;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Teachat\Http\Requests\ChangePasswordRequest;
use Teachat\Http\Requests\AccountRequest;
use Teachat\Http\Controllers\Controller;
use Teachat\Repositories\Interfaces\CountryInterface;
use Teachat\Repositories\Interfaces\StateUsInterface;
use Teachat\Repositories\Interfaces\UserInterface;

class SettingsController extends Controller
{
    /**
     * @var UserInterface
     */
    private $user;

    /**
     * @var CountryInterface
     */
    private $country;

    /**
     * @var SateUsInterface
     */
    private $stateUs;

    /**
     * MyAccount controller instance.
     *
     * @param TeacherInterface $appointments
     * @return void
     */
    public function __construct(UserInterface $user, CountryInterface $country, StateUsInterface $stateUs)
    {
        $this->user = $user;
        $this->country = $country;
        $this->stateUs = $stateUs;
    }

    /**
     * Display Settings page.
     *
     * @return view
     */
    public function index()
    {

        return view('admin.settings.settings');
    }

    /**
     * Update Admin Email.
     *
     * @return view
     */
    public function settings_update(Request $request)
    {
        $id = Auth::user()->id;

        if ($this->user->update($id, $request->all())) {
            return response()->json(['success' => true, 'message' => 'Successfully Updated!']);
        }

        return response()->json(['result' => false, 'message' => 'There is an error occured while saving. Please try again later.']);
    }

    /**
     * Change Admin Password.
     *
     * @return view
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $id = Auth::user()->id;
        if(Auth::validate(['id' => $id, 'password' => $request->current_pass])){
            $newPassword = bcrypt($request->password);
            if ($this->user->update($id, ['password' => $newPassword, 'password_reset' => 0])) {
                return response()->json(['success' => true, 'message' => 'Password changed successfully.']);
            }
        }

        else{
            return response()->json(['result' => false, 'message' => 'Current password does not match.']);
        }

    }
}
