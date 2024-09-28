<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Exibir perfil do usuário
    public function show()
    {
        $user = Auth::user(); // Obtendo o usuário autenticado
        return view('profile.show', compact('user'));
    }

    // Exibir formulário de edição do perfil
    public function edit()
    {
        $user = Auth::user(); // Obtendo o usuário autenticado
        return view('profile.edit', compact('user'));
    }

    // Atualizar perfil do usuário
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Atualizando as informações do usuário
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Perfil atualizado com sucesso!');
    }
    public function password()
        {
            return view('profile.password');
        }

        public function updatePassword(Request $request)
        {
            // Validação da senha
            $request->validate([
                'current_password' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            // Verificar se a senha atual está correta
            if (!Hash::check($request->current_password, Auth::user()->password)) {
                return back()->withErrors(['current_password' => 'A senha atual está incorreta.']);
            }

            // Atualizar a senha
            Auth::user()->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('profile.show')->with('success', 'Senha atualizada com sucesso!');
        }
}

