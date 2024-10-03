<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Menampilkan form pendaftaran
    public function create()
    {
        return view('students.create');
    }

    // Menyimpan data pendaftaran siswa
    public function store(Request $request)
    {
        // Validasi data yang diinput
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:students',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'school_origin' => 'required|string|max:255',
            'unit' => 'required',
            'registration_type' => 'required',
        ]);

        // Menyimpan data siswa ke database
        Student::create($validatedData);

        // Redirect ke halaman daftar siswa yang sudah terdaftar
        return redirect()->route('students.index')->with('success', 'Siswa berhasil didaftarkan!');
    }

    // Menampilkan daftar siswa yang sudah terdaftar dengan pencarian dan filter
    public function index(Request $request)
    {
        // Inisialisasi query untuk model Student
        $query = Student::query();

        // Pencarian berdasarkan nama
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan jenis kelamin
        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        // Filter berdasarkan jenis pendaftaran
        if ($request->filled('registration_type')) {
            $query->where('registration_type', $request->registration_type);
        }

        // Mengambil hasil dengan pagination, misalnya 10 per halaman
        $students = $query->paginate(10)->withQueryString();

        // Mengembalikan view dengan data siswa yang sudah difilter
        return view('students.index', compact('students'));
    }

    public function destroy(Student $student)
    {
        // Hapus data siswa
        $student->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('students.index')->with('success', 'Siswa berhasil dihapus');
    }
}
