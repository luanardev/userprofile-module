<?php

namespace Lumis\Userprofile\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Lumis\StaffManagement\Entities\Staff;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class RegisterController extends Controller
{


    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function profile(): Renderable
    {
        return view('userprofile::register.profile');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function employment(): Renderable
    {
        return view('userprofile::register.employment');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function supervisor(): Renderable
    {
        return view('userprofile::register.supervisor');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function spouse(): Renderable
    {
        return view('userprofile::register.spouse');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function kinsman(): Renderable
    {
        return view('userprofile::register.kinsman');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function dependants(): Renderable
    {
        return view('userprofile::register.dependants');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function experience(): Renderable
    {
        return view('userprofile::register.experience');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function qualifications(): Renderable
    {
        return view('userprofile::register.qualifications');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function awards(): Renderable
    {
        return view('userprofile::register.awards');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function referees(): Renderable
    {
        return view('userprofile::register.referees');
    }

    /**
     * Show the specified resource.
     * @return Renderable
     */
    public function documents(): Renderable
    {
        return view('userprofile::register.documents');
    }

    /**
     * @return View|Factory|Application|RedirectResponse
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function finish(): View|Factory|Application|RedirectResponse
    {
        if (session()->exists('staff')) {
            $employeeId = session()->get('staff');

            $staff = Staff::find($employeeId);

            session()->forget('staff');
            return redirect()->route('user.profile');

        } else {
            return redirect()->route('user.create.profile');
        }

    }

    /**
     * @return RedirectResponse
     */
    public function cancel(): RedirectResponse
    {
        if (session()->exists('staff')) {
            session()->forget('staff');
        }

        return redirect()->route('user.profile')->with('error', 'Operation Cancelled');
    }


}
