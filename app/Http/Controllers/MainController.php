<?php
namespace App\Http\Controllers;
use App\Models\PhoneBook;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function index()
    {
        // $users = PhoneBook::all();
        // dd($users);
        $users = PhoneBook::orderBy('id')->paginate(10);
        return view('home', compact('users'));
    } 
    public function search(Request $request)
    {
        $s= $request->s;
        $users = PhoneBook::where('first','LIKE','%{$s}%')->get();
        return view('home', compact('users'));
    }   
}
