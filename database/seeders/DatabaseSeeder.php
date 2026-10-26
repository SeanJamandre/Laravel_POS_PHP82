<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder {
 public function run(): void {
  DB::table('customers')->updateOrInsert(['id' => 1], ['name' => 'Ana Reyes', 'email' => 'ana@example.com', 'phone' => '09170000001', 'address' => 'Las Pinas']);
  DB::table('customers')->updateOrInsert(['id' => 2], ['name' => 'Marco Santos', 'email' => 'marco@example.com', 'phone' => '09170000002', 'address' => 'Alabang']);
  DB::table('customers')->updateOrInsert(['id' => 3], ['name' => 'Jessa Cruz', 'email' => 'jessa@example.com', 'phone' => '09170000003', 'address' => 'Makati']);
  DB::table('customers')->updateOrInsert(['id' => 4], ['name' => 'Paolo Garcia', 'email' => 'paolo@example.com', 'phone' => '09170000004', 'address' => 'Paranaque']);
  DB::table('customers')->updateOrInsert(['id' => 5], ['name' => 'Mia Ramos', 'email' => 'mia@example.com', 'phone' => '09170000005', 'address' => 'Taguig']);
  DB::table('users')->updateOrInsert(['id' => 1], ['name' => 'Alex Rivera', 'username' => 'alex.rivera', 'email' => 'alex@example.com', 'role' => 'Administrator']);
  DB::table('users')->updateOrInsert(['id' => 2], ['name' => 'Bea Lopez', 'username' => 'bea.lopez', 'email' => 'bea@example.com', 'role' => 'Manager']);
  DB::table('users')->updateOrInsert(['id' => 3], ['name' => 'Carlo Mendoza', 'username' => 'carlo.mendoza', 'email' => 'carlo@example.com', 'role' => 'Cashier']);
  DB::table('users')->updateOrInsert(['id' => 4], ['name' => 'Dani Torres', 'username' => 'dani.torres', 'email' => 'dani@example.com', 'role' => 'Cashier']);
  DB::table('users')->updateOrInsert(['id' => 5], ['name' => 'Eli Flores', 'username' => 'eli.flores', 'email' => 'eli@example.com', 'role' => 'Inventory Staff']);
 }
}
