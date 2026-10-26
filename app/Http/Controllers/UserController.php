<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class UserController extends Controller
{
    public function index(): View
    {
        // Fictional static records are the temporary data source required by TFA5.
        $users = [
            ['id' => '1', 'name' => 'Alex Rivera', 'username' => 'alex.rivera', 'email' => 'alex@example.com', 'role' => 'Administrator'],
            ['id' => '2', 'name' => 'Bea Lopez', 'username' => 'bea.lopez', 'email' => 'bea@example.com', 'role' => 'Manager'],
            ['id' => '3', 'name' => 'Carlo Mendoza', 'username' => 'carlo.mendoza', 'email' => 'carlo@example.com', 'role' => 'Cashier'],
            ['id' => '4', 'name' => 'Dani Torres', 'username' => 'dani.torres', 'email' => 'dani@example.com', 'role' => 'Cashier'],
            ['id' => '5', 'name' => 'Eli Flores', 'username' => 'eli.flores', 'email' => 'eli@example.com', 'role' => 'Inventory Staff'],
        ];
        return view('users.index', compact('users'));
    }
}
