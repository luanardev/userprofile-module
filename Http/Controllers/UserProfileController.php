<?php

namespace Lumis\Userprofile\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Lumis\StaffManagement\Entities\StaffProfile;


class UserProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return RedirectResponse|Renderable
     */
    public function index(): RedirectResponse|Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return redirect()->route('user.profile');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function profile(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.profile')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function employment(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.employment')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function supervisor(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.supervisor')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function spouse(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.spouse')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function kinsman(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.kinsman')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function dependants(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.dependants')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function experience(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.experience')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function qualifications(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.qualifications')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function awards(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.awards')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function referees(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.referees')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function documents(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }
        return view('userprofile::profile.documents')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function progress(): Renderable
    {
        $staff = StaffProfile::get();

        if (empty($staff)) {
            return view('userprofile::profile.missing');
        }

        return view('userprofile::profile.progress')->with([
            'staff' => $staff
        ]);
    }


}
