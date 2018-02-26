<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gate;
use App\Handrail;
use App\IronDoor;
use App\Fencerail;
use App\Staircase;
use App\WindowBurglary;

class AustmetalController extends Controller
{
    public function index() {
      $home = "moto-widget-menu-link-active";
      return view('pages.index', compact('home'));
    }
    public function company() {
      $company = "moto-widget-menu-link-active";
      return view('pages.company', compact('company'));
    }
    public function services() {
      $products = "moto-widget-menu-link-active";
      return view('pages.products-services', compact('products'));
    }
    public function contact() {
      $contact = "moto-widget-menu-link-active";
      return view('pages.contact', compact('contact'));
    }
    public function gallery() {
      $gallery = "moto-widget-menu-link-active";
      return view('pages.gallery', compact('gallery'));
    }
    public function fencerails() {

      $gallery = "moto-widget-menu-link-active";
      $fencerails = Fencerail::latest()->get();
      return view('pages.gallery.fencerails', compact('gallery', 'fencerails'));
    }
    public function gates() {
      $gallery = "moto-widget-menu-link-active";
      $gates = Gate::latest()->get();
      return view('pages.gallery.gates', compact('gallery', 'gates'));
    }
    public function handrails() {
      $gallery = "moto-widget-menu-link-active";
      $handrails = Handrail::latest()->get();
      return view('pages.gallery.handrails', compact('gallery', 'handrails'));
    }
    public function irondoor() {
      $gallery = "moto-widget-menu-link-active";
      $irondoors = IronDoor::latest()->get();
      return view('pages.gallery.irondoor', compact('gallery', 'irondoors'));
    }
    public function staircase() {
      $gallery = "moto-widget-menu-link-active";
      $staircases = Staircase::latest()->get();
      return view('pages.gallery.staircase', compact('gallery', 'staircases'));
    }
    public function window() {
      $gallery = "moto-widget-menu-link-active";
      $windows = WindowBurglary::latest()->get();
      return view('pages.gallery.window', compact('gallery', 'windows'));
    }
}
