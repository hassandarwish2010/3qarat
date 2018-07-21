<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;

class AdminController extends Controller
{
    public function index(){

        $book=DB::table('books')->count();
        $user=DB::table('users')->count();
        $unit=DB::table('units')->count();
        $project=DB::table('projects')->count();
        $building=DB::table('buildings')->count();
        $compound=DB::table('compounds')->count();
       // $contact=DB::table('contacts')->count();
        $contact=Contact::count();
        
        return view('admin.layouts.index',compact('book','user','unit','projects','building','compound','contact'));
    }
}
