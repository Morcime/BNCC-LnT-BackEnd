<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Menampilkan daftar karyawan
    public function idx() {
        $employees = Employee::all();
        return view('employees.employees', compact('employees'));
    }

    // Menampilkan form tambah karyawan
    public function create() {
        return view('employees.create');
    }

    // Menyimpan karyawan baru ke database
    public function save(Request $request){
        $validated = $request->validate([
            'nama'   => 'required|string|min:5|max:20',
            'umur'   => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'phone'  => 'required|string|min:9|max:12|regex:/^08[0-9]+$/'
        ]);

        Employee::create($validated);
        return redirect('/employees')->with('message', 'Karyawan berhasil disimpan');
    }

    public function updateInput(Request $request) {
        $id = $request->input('id');
        $employee = Employee::find($id);
    
        if (!$employee) {
            return redirect('/employees/update-select')->with('error', 'Employee not found');
        }
    
        return view('employees.update', compact('employee'));
    }
    

    // Mengupdate data karyawan
    public function update(Request $request, $id){
        $employee = Employee::find($id);
        if (!$employee) {
            return redirect('/employees')->with('error', 'Employee not found');
        }

        $validated = $request->validate([
            'nama'   => 'required|string|min:5|max:20',
            'umur'   => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'phone' => 'required|string|min:9|max:12|regex:/^08[0-9]+$/'

        ]);

        $employee->update($validated);
        return redirect('/employees')->with('success', 'Employee updated');
    }

    // Menghapus karyawan berdasarkan ID yang diinput user
    public function del(Request $request){
        $id = $request->input('id');
        $employee = Employee::find($id);

        if (!$employee) {
            return redirect('/')->with('error', 'Employee not found');
        }

        $employee->delete();
        return redirect('/')->with('message', 'Employee deleted successfully!');
    }

    public function updateSelect() {
        $employees = Employee::all();
        return view('employees.update-select', compact('employees'));
    }
    
    public function deleteSelect() {
        $employees = Employee::all();
        return view('employees.delete-select', compact('employees'));
    }
    
}
