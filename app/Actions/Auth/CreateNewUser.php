<?php

namespace App\Actions\Auth;

use App\Models\Team;
use App\Models\User;
use App\Models\InviteCode;
use App\Rules\ValidInviteCode;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateNewUser
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array<string, mixed>  $input
     * @return \App\Models\User
     */
    public function handle(array $input): User
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'invite_code' => ['required', 'string', new ValidInviteCode],
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'invite_code' => $input['invite_code'],
            ]), function (User $user) {

                $inviteCode = InviteCode::where('code', $user->invite_code)
                    ->first();

                if($inviteCode) {
                    $inviteCode->increment('uses');
                }

                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->first_name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));

        $user->teams()->attach($user->ownedTeams()->first());
    }


}