<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Display all customers
    public function home()
    {
        $customers = Customer::all();
        return view('home', compact('customers'));
    }

    // Filter customers by gender
    public function filterByGender($gender)
    {
        $customers = Customer::where('gender', $gender)->get();
        return view('home', compact('customers'));
    }

    // Filter customers born after the year 2000
    public function filterByBirthday()
    {
        $customers = Customer::whereYear('birthday', '>', 2000)->get();
        return view('home', compact('customers'));
    }
}
