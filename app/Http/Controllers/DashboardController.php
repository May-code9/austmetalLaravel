<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Fencerail;
use App\Gate;
use App\Handrail;
use App\IronDoor;
use App\Staircase;
use App\WindowBurglary;

class DashboardController extends Controller
{
    public function index() {
      $activeDashboard = "active";
      $countAdmin = User::where('role', '>', 2)->count();
      $countFencerails = Fencerail::count();
      $countGates = Gate::count();
      $countHandrails = Handrail::count();
      $countIronDoors = IronDoor::count();
      $countStaircases = Staircase::count();
      $countWindows = WindowBurglary::count();
      return view('admin.layouts.index', compact('activeDashboard', 'countAdmin', 'countFencerails', 'countGates', 'countHandrails', 'countIronDoors', 'countStaircases', 'countWindows'));
    }
}
