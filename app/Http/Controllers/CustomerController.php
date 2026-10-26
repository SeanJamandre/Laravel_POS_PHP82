<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class CustomerController extends Controller
{
    public function index(): View
    {
        // Fictional static records are the temporary data source required by TFA5.
        $customers = [
            ['id' => '1', 'name' => 'Ana Reyes', 'email' => 'ana@example.com', 'phone' => '09170000001', 'address' => 'Las Pinas'],
            ['id' => '2', 'name' => 'Marco Santos', 'email' => 'marco@example.com', 'phone' => '09170000002', 'address' => 'Alabang'],
            ['id' => '3', 'name' => 'Jessa Cruz', 'email' => 'jessa@example.com', 'phone' => '09170000003', 'address' => 'Makati'],
            ['id' => '4', 'name' => 'Paolo Garcia', 'email' => 'paolo@example.com', 'phone' => '09170000004', 'address' => 'Paranaque'],
            ['id' => '5', 'name' => 'Mia Ramos', 'email' => 'mia@example.com', 'phone' => '09170000005', 'address' => 'Taguig'],
        ];
        return view('customers.index', compact('customers'));
    }
}
