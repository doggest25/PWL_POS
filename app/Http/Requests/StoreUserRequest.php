<?php

namespace App\Http\Requests;

use App\Models\UserModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false; // Ubah menjadi true jika sudah ada kebijakan otentikasi tertentu
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'nama' => 'required',
            'level_id' => 'required',
            'password' => 'required',
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        // Validasi data user
        $validated = $request->validated();

        // Store the user data...
        // Pastikan password dienkripsi sebelum disimpan ke database
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'level_id' => $request->level_id,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/admin/user');
    }
}
